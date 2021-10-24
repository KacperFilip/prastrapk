    </div> <!--content-->
    <footer>
        <div class="footer-nav">
            <?php
                wp_nav_menu( array( 
                'theme_location' => 'footer-menu', 
                'container_class' => 'custom-menu-class' ) );
            ?> 
        </div>  
    </footer>
</div><!--site-->
<?= wp_footer();?>
</body>
</html>