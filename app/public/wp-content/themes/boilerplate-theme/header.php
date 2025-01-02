<header>
    <div class="logo">
        <?php
        if (function_exists('the_custom_logo') && has_custom_logo()) {
            the_custom_logo(); // Display custom logo if set
        } else {
            // Display site name as a fallback if no logo is uploaded
            echo '<h1>' . get_bloginfo('name') . '</h1>';
        }
        ?>
    </div>

    <nav>
        <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    </nav>
</header>