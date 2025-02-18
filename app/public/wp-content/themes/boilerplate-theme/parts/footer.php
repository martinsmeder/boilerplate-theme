<footer>
    <div class="top">
        <div class="contact">
            <h3>Contact Us</h3>
               <p><i class="fa-solid fa-phone"></i> +123456789</p>  
               <p><i class="fa-solid fa-envelope"></i> <a href="mailto:info@examplecompany.com">info@examplecompany.com</a></p>
        </div>

        <div class="navigation">
            <h3>Navigation</h3>
            <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
        </div>
    </div>

    <div class="bottom">
        <div class="copyright">
            <p>&copy; <?php echo date('Y'); ?> Example Company</p>
        </div>
        
        <div class="socials">
            <a href="https://facebook.com" target="_blank"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://x.com" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
            <a href="https://linkedin.com" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
            <a href="https://tiktok.com" target="_blank"><i class="fa-brands fa-tiktok"></i></a> 
        </div>
    </div>
    
</footer>