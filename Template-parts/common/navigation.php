<a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>

<nav class="header__nav-wrap">

    <h2 class="header__nav-heading h6">Site Navigation</h2>

    <?php 
   $navigation = wp_nav_menu(array(
        'theme_location' => 'top_menu',
        'menu_class' => 'header__nav',
        'menu_id'=> 'top_menu',
        'echo' => false
   ));
   $navigation = str_replace('menu-item-has-children','menu-item-has-children has-children',$navigation);
   echo wp_kses_post($navigation);
    
    ?>

    <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

</nav> <!-- end header__nav-wrap -->
