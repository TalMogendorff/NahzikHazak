<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />


    <?php
    wp_head();
    ?>
</head>

<body>

    <header>

        <!-- NavBar -->

        <nav class="navbar navbar-expand-xl navbar-light bg-white">
            <div class="container-fluid d-flex">
                <a class="navbar-brand" href="#"><img src=<?=get_template_directory_uri().'/assets/images/logo.png'?>
                        alt="Main Logo" width=150></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="nav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">

                    <?php           
                     wp_nav_menu(array(
                        'theme_location' => 'main-menu',
                        'container' => false,
                        'menu_class' => '',
                        'fallback_cb' => '__return_false',
                        'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                        'depth' => 2,
                        'walker' => new bootstrap_5_wp_nav_menu_walker()
                     ));
                ?>

                </div>

            </div>
            <div class="navEn">
                <p> <i class="fas fa-globe-europe"></i>EN</p>
            </div>
            <div class="h4 text-center pb-0" style="background-color:#aad471">
                <p><i class="fab fa-envira" style="color:#49893f"></i>
                    <br>
                    רוצה להתנדב
                </p>
            </div>
            <div class="h4 text-center pb-0" style="background-color:#8c369e">
                <p><i class="fas fa-heart" style="color:#bf75bf"></i></i>
                    <br>
                    תרמו לנו
                </p>
            </div>
        </nav>



        <!-- NavBarEnd -->

        <!-- Main Header Section -->
        <div class="container-fluid contNoBorder">
            <div class="row g-0">
                <div class="col-md-4 purpleBGC text-center text-white">
                    <br>
                    <br>
                    <span class="h2 ">תיקוני בית<br>
                        לאלמנות,<br>
                        נזקקים,<br>
                        חד הוריות,<br>
                        קשישים<br>
                        ונפגעי טרור</span>
                    <br>
                    <br>

                    <div><i class=" fas fa-pause-circle fa-2x "></i></div>

                </div>
                <div class="col-md-8"><img width="100%"
                        src=<?=get_template_directory_uri().'/assets/images/slider_image_temrary.jpeg'?>
                        alt="header Img"></div>

            </div>
        </div>
        <!-- Main Header Section End -->
    </header>