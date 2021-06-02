<?php
get_header();
?>



<!-- ProjectStart -->
<div class="container text-center">
    <div class="row row-cols-1 row-cols-md-4 g-5 mt-5 ">

        <?php
		get_template_part( 'template-parts/content','donationProject' );
	    ?>

    </div>
    <br>
    <h2>פרוייקטים שהסתיימו</h2>
    <br>

    <div class="row row-cols-1 row-cols-md-4 g-5 ">

        <?php
		get_template_part( 'template-parts/content','donationProjectDone' );
	    ?>

    </div>

    <br>
    <br>
    <a href="#" class=" pageDirection fw-bolder">לכל הפרוייקטים</a>
    <br>
    <br>

</div>
<!-- ProjectEnd -->

<!-- StoryStart -->

<div class="container-fluid projectCard">
    <div class="container mt-5">
        <br>
        <h2 class="text-center mt-3 mb-3">חדשות וסיפורים</h2>
        <br>
        <div class="row row-cols-1 row-cols-md-3 g-5">



            <?php
	    	get_template_part( 'template-parts/content','story' );
	        ?>

        </div>
        <br>
        <br>
        <div class="text-center">
            <a href="#" class=" pageDirection fw-bolder mb-3">לכל הסיפורים</a>
        </div>
        <br>
        <br>
    </div>
</div>

<!-- StoryEnd -->

<a href="#" class="text-decoration-none ">
    <div class="container mt-5 mb-5">
        <div class="row row-cols-1 row-cols-md-4 g-3 mt-3">
            <div class="col">
                <div class="card border-white text-center">
                    <div class="text-center">
                        <img style="width:60px"
                            src=<?=get_template_directory_uri() . "/assets/images/numbers_icon.jpeg"?>
                            class="card-img-top " alt="...">
                    </div>
                    <div class="card-body fw-bolder">
                        <h2 class="card-text  justPurple">170</h2>
                        <p class="card-text text-dark">תיקוני בתים</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card border-white text-center">
                    <div class="text-center">
                        <img style="width:60px"
                            src=<?=get_template_directory_uri() . "/assets/images/numbers_icon.jpeg"?>
                            class="card-img-top " alt="...">
                    </div>
                    <div class="card-body fw-bolder">
                        <h2 class="card-text  justPurple">2500</h2>
                        <p class="card-text text-dark">חבילות נתרמו</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card border-white text-center">
                    <div class="text-center">
                        <img style="width:60px"
                            src=<?=get_template_directory_uri() . "/assets/images/numbers_icon.jpeg"?>
                            class="card-img-top " alt="...">
                    </div>
                    <div class="card-body fw-bolder">
                        <h2 class="card-text  justPurple">22</h2>
                        <p class="card-text text-dark">תכניות סיוע בשנה</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card border-white text-center">
                    <div class="text-center">
                        <img style="width:60px"
                            src=<?=get_template_directory_uri() . "/assets/images/numbers_icon.jpeg"?>
                            class="card-img-top " alt="...">
                    </div>
                    <div class="card-body fw-bolder">
                        <h2 class="card-text  justPurple">5000</h2>
                        <p class="card-text text-dark">יתומים נתמכים בשנה</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</a>

<br>
<br>
<br>
<div class="container-fluid contNoBorder">
    <div class="swiperJSCont">
        <div class="swiper-container mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img
                        src=<?=get_template_directory_uri() . "/assets/images/galery_footer_example.jpeg"?> alt="">
                </div>
                <div class="swiper-slide"><img
                        src=<?=get_template_directory_uri() . "/assets/images/galery_footer_example.jpeg"?> alt="">
                </div>
                <div class="swiper-slide"><img
                        src=<?=get_template_directory_uri() . "/assets/images/galery_footer_example.jpeg"?> alt="">
                </div>
                <div class="swiper-slide"><img
                        src=<?=get_template_directory_uri() . "/assets/images/galery_footer_example.jpeg"?> alt="">
                </div>
                <div class="swiper-slide"><img
                        src=<?=get_template_directory_uri() . "/assets/images/galery_footer_example.jpeg"?> alt="">
                </div>
                <div class="swiper-slide"><img
                        src=<?=get_template_directory_uri() . "/assets/images/galery_footer_example.jpeg"?> alt="">
                </div>
                <div class="swiper-slide"><img
                        src=<?=get_template_directory_uri() . "/assets/images/galery_footer_example.jpeg"?> alt="">
                </div>
            </div>


            <div class="swiper-button-next swipeyArrow text-white"></div>
            <div class="swiper-button-prev swipeyArrow text-white"></div>
        </div>



        <?php
get_footer();
?>