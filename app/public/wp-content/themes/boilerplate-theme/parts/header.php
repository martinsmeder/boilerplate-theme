<header>
    <div class="logo">
        <?php
        if (function_exists('the_custom_logo')) {
            the_custom_logo();
        } else {
            echo '<h1>' . get_bloginfo('name') . '</h1>';
        }
        ?>
    </div>

    <nav class="desktop">
        <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    </nav>

    <nav class="mobile">
        <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    </nav>

    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/hamburger-menu-black.png" class="menu-icon" alt="Menu">
</header>