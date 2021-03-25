<!-- layout top & bottom areas bar right [ start ] -->
<div id="<?php echo $a['page_id'];?>" class="bx-layout-wrapper bx-layout-topbottom-area-bar-right">
    <div class="bx-layout-row bx-clearfix">
        <div class="bx-layout-col bx-layout-1-column-column1 bx-layout-column-fullwidth">
            <div class="bx-layout-cell" id="bx-layout-cell-1">
                <?php echo $a['cell_1'];?>
            </div>
        </div>
    </div>
    <div class="bx-layout-row bx-clearfix">
        <div class="bx-layout-col bx-layout-bar-right-content bx-layout-column-wide">
            <div class="bx-layout-cell bx-def-padding-sec-right" id="bx-layout-cell-2">
                <?php echo $a['cell_2'];?>
            </div>
        </div>
        <div class="bx-layout-col bx-layout-bar-right-bar bx-layout-column-thin">
            <div class="bx-layout-cell bx-def-padding-sec-left" id="bx-layout-cell-3">
                <?php echo $a['cell_3'];?>
            </div>
        </div>
    </div>
    <div class="bx-layout-row bx-clearfix">
        <div class="bx-layout-col bx-layout-1-column-column1 bx-layout-column-fullwidth">
            <div class="bx-layout-cell" id="bx-layout-cell-4">
                <?php echo $a['cell_4'];?>
            </div>
        </div>
    </div>
    <?php if($a['bx_if:show_layout_row_dump']['condition']){ ?>
    <div class="bx-layout-row bx-lr-dump bx-clearfix">
        <div class="bx-layout-col bx-layout-1-column-column1 bx-layout-column-fullwidth">
            <div class="bx-layout-cell bx-def-margin-topbottom" id="bx-layout-cell-0">
                <div class="bx-layout-cell-title bx-def-margin-thd-bottom">Inactive Blocks</div>
                <?php echo $a['bx_if:show_layout_row_dump']['content']['cell_0'];?>
            </div>
        </div>
    </div>
<?php } ?>
</div>
<script>
    $(document).ready(function () {
        resizeLayoutBlocks();

        $(window).on('resize', function() {
            resizeLayoutBlocks();
        })
    });

    function resizeLayoutBlocks()
    {
        if ($(window).width() <= 720)
            return;

        var iTimeout = 500;
        var oLevelCells = function(iCellSmall, iCellLarge) {
            $('#bx-layout-cell-' + iCellSmall + ' .bx-db-container').css('min-height', $('#bx-layout-cell-' + iCellLarge + ' .bx-db-container').height());
        }

        if (1 == $('#bx-layout-cell-3 > div').length && 1 == $('#bx-layout-cell-2 > div').length) {
            var oCell2 = $('#bx-layout-cell-2 .bx-db-container');
            var oCell3 = $('#bx-layout-cell-3 .bx-db-container');

            if (oCell2.height() > oCell3.height()) {
                if(oCell2.find('form .bx-form-input-files-uploaders').length > 0)
                        setTimeout(function() {
                                oLevelCells(3, 2);
                        }, iTimeout);
                else
                        oLevelCells(3, 2);
            }
            else {
                if(oCell3.find('form .bx-form-input-files-uploaders').length > 0)
                        setTimeout(function() {
                                oLevelCells(2, 3);
                    }, iTimeout);
                else
                    oLevelCells(2, 3);
            }
        }
    }
</script>
<!-- layout top area 2 columns [  end  ] -->