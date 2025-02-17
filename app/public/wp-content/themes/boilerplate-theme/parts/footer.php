<footer>
    <div class="top">
        <div class="contact">
            Contact Us
        </div>

        <div class="navigation">
            <h3>Navigation</h3>
            <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
        </div>
    </div>

    <div class="bottom">
        <div class="copyright">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
        </div>
        
        <div class="socials">
                Socials
        </div>
    </div>
    
</footer>