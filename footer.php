<div class="container">
    <div class="row">
    <div class="col-6">
        <?php
            if(is_active_sidebar( "footer_left_widget" )){
                dynamic_sidebar( "footer_left_widget" );
            }
        ?>
    </div>
    <div class="col-6">
    <?php
            if(is_active_sidebar( "footer_right_widget" )){
                dynamic_sidebar( "footer_right_widget" );
            }
        ?>
    </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>

</html>