<div class="bx-form-input-location-<?php echo $a['name'];?> bx-form-input-location-cont bx-clearfix">
    <?php echo $a['inputs'];?>
    <div class="bx-form-input-location-status-cont bx-def-font-small bx-def-font-grayed bx-def-margin-thd-top bx-clearfix">
        <div class="bx-form-input-location-status ok"><i class="sys-icon sys-colored col-green1-dark check-circle"></i> Address found</div>
        <div class="bx-form-input-location-status fail"><i class="sys-icon sys-colored col-red1-dark times-circle"></i> Address not found</div>
        <div class="bx-form-input-location-status undef"><i class="sys-icon sys-colored question-circle"></i> Address is undefined</div>
        <div class="bx-form-input-location-status loading"><i class="sys-icon sys-colored sync-alt"></i> Loading...</div>
        <div class="bx-form-input-location-copyright"></div>
    </div>
</div>

<script>
(function () {
    var getLocationString = function () {
        var sCountry = $('select[name="<?php echo $a['name'];?>_country"]').val();
        var sZip = $('input[name="<?php echo $a['name'];?>_zip"]').val();
        var sState = $('input[name="<?php echo $a['name'];?>_state"]').val();
        var sCity = $('input[name="<?php echo $a['name'];?>_city"]').val();
        var sStreet = $('input[name="<?php echo $a['name'];?>_street"]').val();
        var sNum = $('input[name="<?php echo $a['name'];?>_street_number"]').val();

        if (!sCountry || !sCountry.length)
            return '';

        sRet = (sZip.length ? sZip + ', ' : '') + sCountry;

        sRet = (sCity.length ? sCity + ', ': '') + (sState.length ? sState + ', ': '') + sRet;
        
        if (sCity.length)
            sRet = (sStreet.length && sNum.length ? sNum + ' ' : '') + (sStreet.length ? sStreet + ', ' : '') + sRet;

        return sRet;
    }

    var setLocationStatus = function (s) {
        $('.bx-form-input-location-<?php echo $a['name'];?> .bx-form-input-location-status').hide();
        $('.bx-form-input-location-<?php echo $a['name'];?> .bx-form-input-location-status.' + s).show();
    }

    setLocationStatus('undef');

    $(document).ready(function () {
        $('input[name^="<?php echo $a['name'];?>"],select[name^="<?php echo $a['name'];?>"]').on('change', function () {
            if ('undefined' !== typeof(glBxLocationFieldPlainGeocodingRequest) && glBxLocationFieldPlainGeocodingRequest) { // cancel previous request
                clearTimeout(glBxLocationFieldPlainGeocodingRequest);
                glBxLocationFieldPlainGeocodingRequest = null;
            }

            if ('hidden' == this.type)
                return;
            
            var s = getLocationString();
            if (!s) {
                setLocationStatus('undef');
                return;
            }

            glBxLocationFieldPlainGeocodingRequest = setTimeout(function () {
                setLocationStatus('loading');
                $.getJSON('<?php echo $a['nominatim_server'];?>/search/' + encodeURIComponent(s) + '?format=json&limit=1&email=<?php echo $a['nominatim_email'];?>', function (oResult) {
                    glBxLocationFieldPlainGeocodingRequest = false;
                    if (('object' === typeof oResult) && oResult.length && ('undefined' !== typeof oResult[0].lat) && ('undefined' !== typeof oResult[0].lon)) {
                        $('input[name="<?php echo $a['name'];?>_lat"]').val(oResult[0].lat);
                        $('input[name="<?php echo $a['name'];?>_lng"]').val(oResult[0].lon);
                        if ('undefined' !== typeof(oResult[0].licence))
                            $('.bx-form-input-location-<?php echo $a['name'];?> .bx-form-input-location-copyright').html(oResult[0].licence);
                        setLocationStatus('ok');
                    } else {
                        $('input[name="<?php echo $a['name'];?>_lat"]').val(0);
                        $('input[name="<?php echo $a['name'];?>_lng"]').val(0);
                        setLocationStatus('fail');
                    }
                });
            }, 1500);
        });

        if (getLocationString()) {
            if (parseFloat($('input[name="<?php echo $a['name'];?>_lat"]').val()) && parseFloat($('input[name="<?php echo $a['name'];?>_lng"]').val()))
                setLocationStatus('ok');
            else
                setLocationStatus('fail');
        } 
        else {
            setLocationStatus('undef');
        }
    });
})();
</script>