

<!DOCTYPE HTML>
<html lang="en">
<head>
        <title>Luigi's</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">

        <!-- Font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">

       <?php wp_head();?>

</head>
<body>

<header>
        <div class="container">
                <a class="logo" href="#"><img src="<?php echo get_template_directory_uri().'/assets/images/logo-white.png '?>" alt="Logo"></a>

                <div class="right-area">
                        <h6><a class="plr-20 color-white btn-fill-primary" href="#">ORDER: +34 685 778 8892</a></h6>
                </div><!-- right-area -->

                <a class="menu-nav-icon" data-menu="#main-menu" href="#"><i class="ion-navicon"></i></a>

         <?php

         wp_nav_menu(

            array(

                'theme_location' => 'top_menu',
                'menu' =>'main-menu',
                'container' => 'ul',
                'menu_class' => 'main-menu font-mountainsre',
            )


            );?>


             <!--    <ul class="main-menu font-mountainsre" id="main-menu">
                        <li><a href="index.html">HOME</a></li>
                        <li><a href="02_about_us.html">ABOUT US</a></li>
                        <li><a href="03_menu.html">SERVICES</a></li>
                        <li><a href="04_blog.html">NEWS</a></li>
                        <li><a href="05_contact.html">CONTACT</a></li>
                </ul> -->

                <div class="clearfix"></div>
        </div><!-- container -->
</header>


