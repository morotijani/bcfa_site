<?php 

    require_once ('connection/conn.php');
    $headerTitle = 'B.C.F.A';
    include ("include/header.php");

?>

    <!-- MAIN -->
    <main id="content" role="main">
        <div class="d-lg-flex position-relative bg-light">
            <div class="container d-lg-flex align-items-lg-center content-space-t-3 content-space-lg-0 min-vh-lg-100">
                <div class="w-100">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="mb-5">
                                <h1 class="display-4 mb-3">
                                    Turn your ideas into a
                                    <span class="text-info text-highlight-warning">
                                        <span class="js-typedjs" data-hs-typed-options="{
                                            &quot;strings&quot;: [&quot;startup.&quot;, &quot;future.&quot;, &quot;success.&quot;],
                                            &quot;typeSpeed&quot;: 90,
                                            &quot;loop&quot;: true,
                                            &quot;backSpeed&quot;: 30,
                                            &quot;backDelay&quot;: 2500
                                            }">future.</span>
                                        <span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span>
                                    </span>
                                </h1>
                                <p class="lead">Empowering Blockchain Startups. build strategies, build confidence, build businesses.</p>
                            </div>

                            <div class="d-grid d-sm-flex gap-3">
                                <a class="btn btn-link" href="about-us">Know more <i class="bi-chevron-right small ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SVG Shape -->
                <div class="col-lg-7 col-xl-6 d-none d-lg-block position-absolute top-0 end-0 pe-0" style="margin-top: 4.5rem;">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1137.5 979.2">
                        <path fill="#F9FBFF" d="M565.5,957.4c81.1-7.4,155.5-49.3,202.4-115.7C840,739.8,857,570,510.7,348.3C-35.5-1.5-4.2,340.3,2.7,389
                      c0.7,4.7,1.2,9.5,1.7,14.2l29.3,321c14,154.2,150.6,267.8,304.9,253.8L565.5,957.4z"></path>
                            <defs>
                                <path id="mainHeroSVG1" d="M1137.5,0H450.4l-278,279.7C22.4,430.6,24.3,675,176.8,823.5l0,0C316.9,960,537.7,968.7,688.2,843.6l449.3-373.4V0z"></path>
                            </defs>
                            <clipPath id="mainHeroSVG2">
                                <use xlink:href="#mainHeroSVG1"></use>
                            </clipPath>
                            <g transform="matrix(1 0 0 1 0 0)" clip-path="url(#mainHeroSVG2)">
                                <image width="750" height="750" xlink:href="./assets/media/hero.jpg" transform="matrix(1.4462 0 0 1.4448 52.8755 0)"></image>
                            </g>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Clients -->
        <div class="container mt-5">
            <div class="js-swiper-hero-clients swiper text-center">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="avatar avatar-lg avatar-4x3" src="./assets/media/logo/lbank.png" alt="Logo">
                    </div>
                    <div class="swiper-slide">
                        <img class="avatar avatar-lg avatar-4x3" src="./assets/media/logo/bwb.png" alt="Logo">
                    </div>
                    <div class="swiper-slide">
                        <img class="avatar avatar-lg avatar-4x3" src="./assets/media/logo/paxful.png" alt="Logo">
                    </div>
                    <div class="swiper-slide">
                        <img class="avatar avatar-lg avatar-4x3" src="./assets/media/logo/lbank.png" alt="Logo">
                    </div>
                    <div class="swiper-slide">
                        <img class="avatar avatar-lg avatar-4x3" src="./assets/media/logo/bwb.png" alt="Logo">
                    </div>
                    <div class="swiper-slide">
                        <img class="avatar avatar-lg avatar-4x3" src="./assets/media/logo/paxful.png" alt="Logo">
                    </div>
                </div>
            </div>
        </div>

        <!-- Step -->
        <div class="container content-space-t-2 content-space-t-lg-3 content-space-b-lg-2">
            <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
                <span class="text-cap">Your competitive edge.</span>
                <h2>Our business is taking care of your business.</h2>
            </div>
            <ul class="step step-md step-centered">
                <li class="step-item">
                    <div class="step-content-wrapper">
                        <span class="step-icon step-icon-soft-info">1</span>
                        <div class="step-content">
                            <h3>Awareness</h3>
                            <p>As the first stage of the market entry funnel, we create brand awareness for our partners to cast a wide net across the audience of potential buyers to our community making your brand become top-of-mind when these consumers are ready to research and make a purchase.</p>
                        </div>
                    </div>
                </li>
                <li class="step-item">
                    <div class="step-content-wrapper">
                        <span class="step-icon step-icon-soft-info">2</span>
                        <div class="step-content">
                            <h3>Advertising</h3>
                            <p>We create effective advertisements like a daunting task to promote the products and services of our partners by uniquely highlighting the benefits of your product that your competition doesn’t offer.</p>
                        </div>
                    </div>
                </li>
                <li class="step-item">
                    <div class="step-content-wrapper">
                        <span class="step-icon step-icon-soft-info">3</span>
                        <div class="step-content">
                            <h3>Promotion</h3>
                            <p>As the world of blockchain is buzzing with new projects launched almost on a daily basis, It is important to leverage all possible channels in social networks by promoting the products or services of our partners on all our social media networks.</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Testimonials -->
        <div class="overflow-hidden">
            <div class="container content-space-b-2">
                <div class="position-relative">
                    <div class="bg-light text-center rounded-2 p-4 p-md-7">
                        <img class="avatar avatar-lg avatar-4x3 mx-auto mb-4" src="./assets/media/logo/bcfa-logo.png" alt="SVG Logo">

                        <figure class="w-md-80 w-lg-20 mx-md-auto">
                            <blockquote class="blockquote">The Blockchain Foundation Africa engages community leaders, influencers and campus leaders in the various tertiary institutions on the continent in open dialogs regarding the benefits of Bitcoin and the blockchain technology through meet-ups and seminars to assist in providing information for pro-Bitcoin education, and actively advocates for the good impact Blockchain technology is having towards humanity in Africa.</blockquote>

                            <figcaption class="blockquote-footer">
                                Continental Mission
                                <span class="blockquote-footer-source"><a class="link-sm link-secondary" href="https://link.medium.com/QhiG30SBIwb" target="_blank">Press <i class="bi-box-arrow-up-right small ms-1"></i></a></span>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="position-absolute bottom-0 start-0 w-100" style="max-width: 7rem;">
                        <div class="mb-n7 ms-n7">
                            <img class="img-fluid" src="./assets/media/svg/dots.svg" alt="Image Description">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="border-top mx-auto" style="max-width: 25rem;"></div>

        <!-- Testimonials -->
        <div class="container content-space-2 content-space-lg-3">
            <div class="text-center mb-5">
                <img class="avatar avatar-lg avatar-4x3" src="./assets/media/svg/oc-person-3.svg" alt="Illustration">
            </div>

            <figure class="w-md-75 text-center mx-md-auto">
                <blockquote class="blockquote">
                    “ The Blockchain Foundation Africa is the longest established Bitcoin and Blockchain advocacy organization in Africa. (Previously called Dream Bitcoin Foundation). 
                    <br><br>
                    The first organization in Africa to organize a Bitcoin conference in December 2014. Please check the link for the press release on the event ”
                </blockquote>

                <figcaption class="blockquote-footer text-center">
                    EST. June, 2014
                    <span class="blockquote-footer-source"><a class="link-sm link-secondary" href="https://cointelegraph.com/news/bitcoin-education-comes-to-ghana" target="_blank">Press <i class="bi-box-arrow-up-right small ms-1"></i></a></span>
                </figcaption>
            </figure>
        </div>
     
    <div class="border-top mx-auto" style="max-width: 25rem;"></div>
    
    <!-- Card Grid -->
    <div class="container content-space-2 content-space-lg-3">
        <div class="w-lg-50 text-center mx-lg-auto mb-7">
            <span class="text-cap">Learn the ins and outs</span>
            <h2>Upcoming Programs</h2>
        </div>
        <div class="row mb-5 mb-sm-5">
            <div class="col-md-5 mb-3 mb-md-5">
                <a class="card card-transition h-100" href="#" data-aos="fade-up">
                    <div class="card-pinned">
                        <img class="card-img-top" src="./assets/media/img-1.jpg" alt="Image Description">
                        <span class="card-pinned-top-start">
                            <span class="badge bg-info rounded-pill">Free</span>
                        </span>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title text-inherit">Workshops</h3>
                        <p class="card-text text-body">BCFA workshops are to engage users of partners to explore the history of digital cash and blockchain technology · We primarily organize workshops engaged in the cryptocurrencies of our partners for trading opportunities</p>
                    </div>
                    <div class="card-footer pt-0">
                        <span class="card-link">Learn more <i class="bi-chevron-right small ms-1"></i></span>
                    </div>
                </a>
            </div>

            <div class="col-md mb-3 mb-md-5">
                <a class="card card-transition h-100" href="#" data-aos="fade-up" data-aos-delay="150">
                    <div class="card-pinned">
                        <img class="card-img-top" src="./assets/media/img-2.jpg" alt="Image Description">
                        <span class="card-pinned-top-start">
                            <!-- <span class="badge bg-info rounded-pill">$99</span> -->
                            <span class="badge bg-info rounded-pill">Free</span>
                        </span>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title text-inherit">Developer Week</h3>
                        <p class="card-text text-body">This is a week with a series of events to empower developers to engage in collaborative computer programming to build new web and mobile services. This is an event competed by a group of coders to solve simple problems in business activities.</p>
                    </div>
                    <div class="card-footer pt-0">
                        <span class="card-link">Learn more <i class="bi-chevron-right small ms-1"></i></span>
                    </div>
                </a>
            </div>
            <div class="col-md mb-3 mb-md-5">
                <a class="card card-transition h-100" href="#" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-pinned">
                        <img class="card-img-top" src="./assets/media/img-3.jpg" alt="Image Description">
                        <span class="card-pinned-top-start">
                            <span class="badge bg-info rounded-pill">Free</span>
                        </span>
                    </div>

                    <div class="card-body">
                        <h3 class="card-title text-inherit">Festivals</h3>
                        <p class="card-text text-body">We host events in celebration of the adoption of the Bitcoi
                    </div>
                    <div class="card-footer pt-0">
                        <span class="card-link">Learn more <i class="bi-chevron-right small ms-1"></i></span>
                    </div>
                </a>
            </div>
        </div>
        <div class="text-center">
            <div class="card card-info-link card-sm">
                <div class="card-body">
                    Want to learn more? <a class="card-link ms-2" href="#">View all events <span class="bi-chevron-right small ms-1"></span></a>
                </div>
            </div>
        </div>
    </div>

     
    <!-- Card Grid -->
    <div class="container content-space-2 content-space-lg-3">
        <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
            <h2 class="h1">Read our latest news</h2>
            <p>Read more from our latest news.</p>
        </div>

        <div class="row gx-3 mb-5 mb-md-9">
            <div class="col-sm-6 col-lg-3 mb-3 mb-lg-0">
                <a class="card card-transition h-100" href="#">
                    <img class="card-img-top" src="./assets/media/bg-2.jpg" alt="Image Description">
                    <div class="card-body">
                        <span class="card-subtitle text-info">Product</span>
                        <h5 class="card-text lh-base">Better is when everything works together</h5>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-lg-3 mb-3 mb-lg-0">
                <a class="card card-transition h-100" href="#">
                    <img class="card-img-top" src="./assets/media/bg-2.jpg" alt="Image Description">
                    <div class="card-body">
                        <span class="card-subtitle text-info">Business</span>
                        <h5 class="card-text lh-base">What CFR really is about</h5>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-lg-3 mb-3 mb-sm-0">
                <a class="card card-transition h-100" href="#">
                    <img class="card-img-top" src="./assets/media/bg-2.jpg" alt="Image Description">
                    <div class="card-body">
                        <span class="card-subtitle text-info">Business</span>
                        <h5 class="card-text lh-base">Should Product Owners think like entrepreneurs?</h5>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-lg-3">
                <a class="card card-transition h-100" href="#">
                    <!-- img width and height = 500x280 -->
                    <img class="card-img-top" src="./assets/media/bg-1.jpg" alt="Image Description">
                    <div class="card-body">
                        <span class="card-subtitle text-info">Facilitate</span>
                        <h5 class="card-text lh-base">Announcing Front Strategies: Ready-to-use rules</h5>
                    </div>
                </a>
            </div>
        </div>

        <!-- Card Info -->
        <div class="text-center">
            <div class="card card-info-link card-sm">
                <div class="card-body">
                    Want to read more? <a class="card-link ms-2" href="blog">Go here <span class="bi-chevron-right small ms-1"></span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Card Grid -->

<?php include ('include/footer.php'); ?>