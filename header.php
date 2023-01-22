<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favecon.png" type="image/x-icon">
    <title><?php bloginfo('name'); wp_title('&raquo;'); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <div class="header-area">
       <header class="top-header-area clearfix">
            <div class="logo">
               <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt=""></a>
            </div>
           
          
           <?php if( has_nav_menu( 'main_menu' ) ): ?>
            <nav class="menu">
                <?php wp_nav_menu( array(
    'theme_location' => 'main_menu',
    'menu_class' => 'menu_nav',
    'container' => 'false'

) ); ?>
            </nav>
           
           <?php endif; ?>
       </header>
        <div class="container">
            <div class="banner-text">
                <h1>RESERVE A BOAT NOW!</h1>
                <p>and set your sails into paradise!</p>
            </div>
            <form class="dest-form clearfix" action="">
                <input type="search" placeholder="What is your DESTINATION, SAILOR?">
                <input type="submit" value="Find a boat">
                <span class="fa fa-ship"></span>
            </form>
        </div>
    </div>