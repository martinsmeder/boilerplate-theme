<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php get_header(); ?>

    <div class="content">
        <h1>Welcome to <?php bloginfo( 'name' ); ?></h1>

        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                the_title('<h2>', '</h2>');
                the_content();
            endwhile;
        else :
            echo '<p>No content found</p>';
        endif;
        ?>
    </div>

    <?php get_footer(); ?>
</body>
</html>