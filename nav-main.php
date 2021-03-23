<header style = "background-image: url(<?php echo header_image();?>)">
    <div class = "opacity">
        <!-- Para conseguir el logo -->
        <?php
            if(function_exists('the_custom_logo')){
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
            }
        ?>
        <a href = "http://localhost/rheasy-develop">
            <img alt="logo" src="<?php echo $logo[0] ?>">
        </a>
        <!-- Para conseguir el menu -->
        <?php wp_nav_menu(
			array(
				'theme_location' => 'main',
			)
		);?>
    </div>
</header>