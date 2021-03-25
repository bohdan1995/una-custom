<!DOCTYPE html>
<html lang="<?php echo $this->parseSystemKey('lang', $mixedKeyWrapperHtml);?>">
<head>
    <?php echo $this->processInjection($this->aPage['name_index'], 'injection_head_begin'); ?>
    
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->parseSystemKey('page_charset', $mixedKeyWrapperHtml);?>" />
    <title><?php echo $this->parseSystemKey('page_header', $mixedKeyWrapperHtml);?></title>
    <base href="http://localhost/una-test/" />

    <bx_include_css_system />
    <bx_include_css />

    <bx_include_js_system />
    <bx_include_js />

    <script language="javascript">
    var sUrlRoot = 'http://localhost/una-test/';

    $(document).ready(function () {
        bx_time('<?php echo $this->parseSystemKey('lang_country', $mixedKeyWrapperHtml);?>');
    });

    (function(w) {
        var dpr = (w.devicePixelRatio === undefined ? 1 : Math.round(w.devicePixelRatio));
        if ($.cookie('devicePixelRatio') == dpr || dpr < 2)
            return;
        $.cookie('devicePixelRatio', dpr, {expires: 365, path: '/'});
        window.location.reload();
    })(window);

    var oMediaPhone = window.matchMedia('(max-width:720px)');
    var oMediaPhone2 = window.matchMedia('(min-width:533px) and (max-width:720px)');
    var oMediaTablet = window.matchMedia('(min-width:720px) and (max-width:<?php echo $this->parseSystemKey('page_width', $mixedKeyWrapperHtml);?>)');
    var oMediaTablet2 = window.matchMedia('(min-width:533px) and (max-width:<?php echo $this->parseSystemKey('page_width', $mixedKeyWrapperHtml);?>)');
    var oMediaDesktop = window.matchMedia('(min-width:<?php echo $this->parseSystemKey('page_width', $mixedKeyWrapperHtml);?>)');

    function fMediaCallback(e) {
        if (oMediaPhone.matches)
            $('html').addClass('bx-media-phone');
        else
            $('html').removeClass('bx-media-phone');
        
        if (oMediaPhone2.matches)
            $('html').addClass('bx-media-phone2');
        else
            $('html').removeClass('bx-media-phone2');
        
        if (oMediaTablet.matches)
            $('html').addClass('bx-media-tablet');
        else
            $('html').removeClass('bx-media-tablet');
        
        if (oMediaTablet2.matches)
            $('html').addClass('bx-media-tablet2');
        else
            $('html').removeClass('bx-media-tablet2');

        if (oMediaDesktop.matches)
            $('html').addClass('bx-media-desktop');
        else
            $('html').removeClass('bx-media-desktop');
    }

    oMediaPhone.addListener(fMediaCallback);
    oMediaPhone2.addListener(fMediaCallback);
    oMediaTablet.addListener(fMediaCallback);
    oMediaTablet2.addListener(fMediaCallback);
    oMediaDesktop.addListener(fMediaCallback);

    fMediaCallback(null);

    var aIncludedCss = <?php echo $this->parseSystemKey('included_css', $mixedKeyWrapperHtml);?>;
    var aIncludedJs = <?php echo $this->parseSystemKey('included_js', $mixedKeyWrapperHtml);?>;
</script>

    <?php echo $this->parseSystemKey('extra_js', $mixedKeyWrapperHtml);?>

    <?php echo $this->parseSystemKey('dol_images', $mixedKeyWrapperHtml);?>
	<?php echo $this->parseSystemKey('dol_lang', $mixedKeyWrapperHtml);?>
	<?php echo $this->parseSystemKey('dol_options', $mixedKeyWrapperHtml);?>

    <?php echo $this->processInjection($this->aPage['name_index'], 'injection_head'); ?>
</head>
<body class="bx-def-font bx-def-color-bg-page" <?php echo $this->processInjection($this->aPage['name_index'], 'injection_body'); ?> >
    <div class="bx-std-page-bg"></div>
	<div class="bx-std-page-real">
        <div class="bx-std-page-wide">
            <div class="bx-std-page-wrp">
                <div class="bx-std-page bx-def-page-margin">
					<?php echo $a['page_main_code'];?>
				</div>
            </div>
            <div class="bx-std-cb"></div>
        </div>
    </div>
</body>
</html>