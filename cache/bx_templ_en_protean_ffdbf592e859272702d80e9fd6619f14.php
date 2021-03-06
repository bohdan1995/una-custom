<script language="javascript">
    $(document).ready(function () {
        // hide toolbar on scrolldown, show - on scroll up
        new Headroom($('#bx-toolbar').get(0), {
            tolerance: {
                down: 10,
                up: 20
            },
            offset: 200,
            classes: {
                initial: "bx-toolbar-anim",
                pinned: "bx-toolbar-reset",
                unpinned: "bx-toolbar-up"
            },
            onUnpin: function() {
                bx_menu_slide_close_all_opened();
            }
        }).init();
    });
</script>