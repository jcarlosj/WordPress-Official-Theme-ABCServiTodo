<div class="container">
    <nav>
        <?php
            wp_nav_menu( array(
                'theme_location' => 'menu-secondary',
                'menu_id'        => 'menu-secondary',
            ) );
            wp_nav_menu( array(
                'theme_location' => 'menu-social',
                'menu_id'        => 'menu-social',
            ) );
        ?>
    </nav>
</div>       