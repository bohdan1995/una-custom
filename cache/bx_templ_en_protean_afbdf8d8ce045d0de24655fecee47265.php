<div class="sys-cpf-form sys-cpf-default">
    <div class="sys-cpf-user">
        <div class="bx-base-pofile-unit-thumb bx-def-thumb bx-def-thumb-size bx-def-box-sizing bx-cont-ph"></div>
    </div>
    <div class="sys-cpf-content bx-def-thumb-size-min-height bx-def-thumb-size-left-indent bx-def-font-grayed">
        <div class="bx-def-thumb-size"><span class="bx-cont-ph" style="width:11rem;">&nbsp;</span></div>
    </div>
</div>

<script>
    var iBlockID = '<?php echo $a['id'];?>';
    $(document).ready(function () {
        getHtmlData($('#bx-page-block-' + iBlockID), bx_append_url_params(document.location.href, 'dynamic=tab&pageBlock=' + iBlockID), undefined, 'post', false, {includedCss: JSON.stringify(aIncludedCss), includedJs: JSON.stringify(aIncludedJs)}, false);
    });
</script>