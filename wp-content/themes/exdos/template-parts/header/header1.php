<?php

$phone_number = get_theme_mod('phone_number', '948 8 3 388484');
$offcanvas_title = get_theme_mod('offcanvas_title', 'Hello There!');
$offcanvas_description = get_theme_mod('offcanvas_description' ,'Lorem ipsum dolor sit amet, consect etur adipiscing elit.');
?>






<!-- header start -->
<header>
        <div id="tp-header-sticky" class="tp-header-area tp-transparent-header pl-100 tp-header-border tp-sticky-black">
            <div class="container-fluid p-0">
                <div class="row gx-0 align-items-center">
                    <div class="col-xl-2 col-lg-5 col-md-4 col-6">
                        <div class="tp-logo">
                            <a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-white.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-7 col-md-8 col-6">
                        <div class="tp-header-box d-flex justify-content-xl-between justify-content-end">
                            <div class="tp-main-menu pl-45 d-none d-xl-block">
                                <nav class="tp-mobile-menu-active">
                                    <ul>
                                        <li class="has-dropdown"><a href="index.html">Home</a>
                                            <div class="tp-mega-menu">
                                                <div class="tp-home-menu">
                                                    <div class="row gx-4 row-cols-2 row-cols-md-2 row-cols-xl-5">
                                                        <div class="col mb-25">
                                                            <a href="index.html">
                                                                <div class="tp-home-thumb">
                                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/demo/home-1.jpg" alt="">
                                                                    <h3 class="tp-home-title">Home 01</h3>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col mb-25">
                                                            <a href="index-2.html">
                                                                <div class="tp-home-thumb">
                                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/demo/home-2.jpg" alt="">
                                                                    <h3 class="tp-home-title">Home 02</h3>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col mb-25">
                                                            <a href="index-3.html">
                                                                <div class="tp-home-thumb">
                                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/demo/home-3.jpg" alt="">
                                                                    <h3 class="tp-home-title">Home 03</h3>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col mb-25">
                                                            <a href="index-4.html">
                                                                <div class="tp-home-thumb">
                                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/demo/home-4.jpg" alt="">
                                                                    <h3 class="tp-home-title">Home 04</h3>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col mb-25">
                                                            <a href="index-5.html">
                                                                <div class="tp-home-thumb">
                                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/demo/home-5.jpg" alt="">
                                                                    <h3 class="tp-home-title">Home 05</h3>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="services.html">Service</a>
                                            <ul class="sub-menu">
                                                <li><a href="services.html">Services</a></li>
                                                <li><a href="services-details.html">Services Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown"><a href="portfolio.html">Portfolio</a>
                                            <ul class="sub-menu">
                                                <li><a href="portfolio.html">Portfolio</a></li>
                                                <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="about.html">About</a></li>
                                                <li><a href="portfolio.html">Portfolio</a></li>
                                                <li><a href="services.html">Services</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="pricing.html">Pricing</a></li>
                                                <li><a href="faq.html">Faq</a></li>
                                                <li><a href="team.html">Team</a></li>
                                                <li><a href="team-details.html">Team Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="blog.html">Blog</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="tp-header-right d-flex justify-content-end flex-wrap align-items-center">
                                <div class="tp-header-search d-none d-md-flex">
                                    <button class="d-flex align-items-center tp-search-toggle"><i class="flaticon-search"></i></button>
                                </div>

                                <?php if(!empty($phone_number)):?>
                                <div class="tp-header-cta d-none d-md-flex">
                                    <div class="tp-header-cta-icon d-flex align-items-center">
                                        <i class="flaticon-phone-book"></i>
                                    </div>
                                    <div class="tp-header-cta-text">
                                        <span><?php echo esc_html__('Free Call','Exdos'); ?></span>
                                        <h4><?php echo esc_html($phone_number); ?></h4>
                                    </div>
                                </div>
                               <?php endif; ?>


                                <div class="tp-header-bar">
                                    <button class="tp-offcanvas-toogle"><i class="flaticon-menu"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="tp-header-search-bar d-flex align-items-center">
        <button class="tp-search-close">×</button>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="tp-search-bar text-center">
                        <h2 class="tp-search-bar-title mb-30">What are you looking for?</h2>
                        <div class="contact-form-box contact-search-form-box">
                            <form action="#">
                                <input type="email" placeholder="Email Here*">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="tp-offcanvas">
        <div class="tp-offcanvas-wrapper">
            <div class="tp-offcanvas-header d-flex justify-content-between align-items-center mb-90">
                <div class="tp-offcanvas-logo">
                    <a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-black.png" alt=""></a>
                </div>
                <div class="tp-offcanvas-close">
                    <button class="tp-offcanvas-close-toggle"><i class="fal fa-times"></i></button>
                </div>
            </div>
            <div class="tp-offcanvas-menu d-xl-none mb-50">
                <nav></nav>
            </div>
            <?php if(!empty($offcanvas_title || $offcanvas_description)): ?>
            <div class="tp-offcanvas-content mb-50 d-none d-xl-block">
                <h2 class="tp-offcanvas-title"> <?php echo esc_html($offcanvas_title); ?></h2>
                <p><?php echo esc_html($offcanvas_description); ?></p>
            </div>
            <?php endif; ?>
            <div class="tp-offcanvas-gallery mb-50">
                <a class="popup-image" href="<?php echo get_template_directory_uri(); ?>/assets/img/project/showcase-thumb-01.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/project/showcase-thumb-01.jpg" alt=""></a>
                <a class="popup-image" href="<?php echo get_template_directory_uri(); ?>/assets/img/project/showcase-thumb-02.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/project/showcase-thumb-02.jpg" alt=""></a>
                <a class="popup-image" href="<?php echo get_template_directory_uri(); ?>/assets/img/project/showcase-thumb-03.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/project/showcase-thumb-03.jpg" alt=""></a>
                <a class="popup-image" href="<?php echo get_template_directory_uri(); ?>/assets/img/project/showcase-thumb-04.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/project/showcase-thumb-04.jpg" alt=""></a>
            </div>
            <div class="tp-offcanvas-info mb-50">
                <h3 class="tp-offcanvas-sm-title">Information</h3>
                <span><a href="#">+ 4 20 7700 1007</a></span>
                <span><a href="#">hello@exdos.com</a></span>
                <span><a href="#">Avenue de Roma 158b, Lisboa</a></span>
            </div>
            <div class="tp-offcanvas-social mb-50">
                <h3 class="tp-offcanvas-sm-title">Follow Us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
    <div class="tp-offcanvas-overlay"></div>

    <!-- header end -->