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
                            <p>We build brand awareness for our partners as the first stage of the market entry funnel to reach a broad audience of potential ...</p><a href="services">read more</a>
                        </div>
                    </div>
                </li>
                <li class="step-item">
                    <div class="step-content-wrapper">
                        <span class="step-icon step-icon-soft-info">2</span>
                        <div class="step-content">
                            <h3>Advertising</h3>
                            <p>By specifically highlighting the advantages of your product that your competitors don't offer in a way that is satisfactory ...</p><a href="services">read more</a>
                        </div>
                    </div>
                </li>
                <li class="step-item">
                    <div class="step-content-wrapper">
                        <span class="step-icon step-icon-soft-info">3</span>
                        <div class="step-content">
                            <h3>Promotion</h3>
                            <p>By specifically highlighting the advantages of your product that your competitors don't offer in a way that is satisfactory ...</p><a href="services">read more</a>
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

        <!-- Testimonials -->
        <div class="overflow-hidden">
            <div class="container content-space-2 content-space-lg-3">
                <div class="row justify-content-lg-between align-items-md-center">
                    <div class="col-md-6 order-md-2 mb-10 mb-md-0">
                        <div class="position-relative">
                            <img class="img-fluid rounded-2" src="./assets/media/boss.jpg"alt="Image Description">
                            <figure class="position-absolute top-0 start-0 zi-n1 mt-n7 ms-n7" style="width: 12rem;">
                                <img class="img-fluid" src="./assets/media/svg/dots-lg.svg" alt="SVG">
                            </figure>
                            <figure class="position-absolute bottom-0 end-0 zi-n1 mb-n7 me-n7" style="width: 12rem;">
                                <img class="img-fluid" src="./assets/media/svg/dots-lg.svg" alt="SVG">
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 order-md-1">
                        <div class="mb-4">
                            <img class="avatar avatar-xl avatar-4x3" src="./assets/media/logo/bcfa-logo.png" style="width: 60px;"  alt="Image Description">
                        </div>
                        <figure>
                            <blockquote class="blockquote blockquote-lg">" Let’s encourage the use of Bitcoin amongst Africans so as to create “interconnected hubs of prosperity” throughout the continent of Africa and beyond. "</blockquote>
                            <figcaption class="blockquote-footer">
                                Philip Agyei Asare
                                <span class="blockquote-footer-source">Founder . BCFA</span>
                            </figcaption>
                        </figure>
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

        <!-- Features -->
        <div class="position-relative">
            <div class="container content-space-lg-3">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-9 mb-7 mb-md-0">
                        <div class="w-md-65 mb-7">
                            <h2 class="h1">B.C.F.A Core Values;</h2>
                            <p>We need to build a neighborhood that prioritizes present needs while attempting to foresee and improve future needs. We wholeheartedly accept that it is our responsibility to involve young designers for the upcoming generations, and we want to create a learning environment that provides opportunity to everyone who has the drive to learn and fosters a culture where we grow through action.</p>
                        </div>

                        <div class="row">
                            <div class="col-md-4 mb-3 mb-md-0">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <span class="svg-icon text-primary mb-3">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.5 3C5.67157 3 5 3.67157 5 4.5V6H3.5C2.67157 6 2 6.67157 2 7.5C2 8.32843 2.67157 9 3.5 9H5V19.5C5 20.3284 5.67157 21 6.5 21C7.32843 21 8 20.3284 8 19.5V9H20.5C21.3284 9 22 8.32843 22 7.5C22 6.67157 21.3284 6 20.5 6H8V4.5C8 3.67157 7.32843 3 6.5 3Z" fill="#035A4B" />
                                                <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M20.5 11H10V17.5C10 18.3284 10.6716 19 11.5 19H15.5C17.3546 19 19.0277 18.2233 20.2119 16.9775C20.1436 16.9922 20.0727 17 20 17C19.4477 17 19 16.5523 19 16V13C19 12.4477 19.4477 12 20 12C20.5523 12 21 12.4477 21 13V15.9657C21.6334 14.9626 22 13.7741 22 12.5C22 11.6716 21.3284 11 20.5 11Z" fill="#035A4B" />
                                            </svg>
                                        </span>
                                        <h4 class="card-title">Workshops </h4>
                                        <p class="card-text">Users of partners are encouraged to participate in BCFA workshops to learn about the history of digital money and blockchain technology. We primarily host workshops focused on our partners' cryptocurrencies to provide trading opportunities.</p>
                                        <a class="card-link" href="workshops">Read more<i class="bi-chevron-right small ms-1"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 mb-3 mb-md-0">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <span class="svg-icon text-primary mb-3">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M21.7 18.9L18.6 15.8C17.9 16.9 16.9 17.9 15.8 18.6L18.9 21.7C19.3 22.1 19.9 22.1 20.3 21.7L21.7 20.3C22.1 19.9 22.1 19.3 21.7 18.9Z" fill="#035A4B" />
                                                <path opacity="0.3" d="M11 20C6 20 2 16 2 11C2 6 6 2 11 2C16 2 20 6 20 11C20 16 16 20 11 20ZM11 4C7.1 4 4 7.1 4 11C4 14.9 7.1 18 11 18C14.9 18 18 14.9 18 11C18 7.1 14.9 4 11 4ZM8 11C8 9.3 9.3 8 11 8C11.6 8 12 7.6 12 7C12 6.4 11.6 6 11 6C8.2 6 6 8.2 6 11C6 11.6 6.4 12 7 12C7.6 12 8 11.6 8 11Z" fill="#035A4B" />
                                            </svg>
                                        </span>
                                        <h4 class="card-title">Developer Week</h4>
                                        <p class="card-text">This week has a number of activities that will enable developers to participate in group computer programming to create new web and mobile services. The goal of this competition is to create decentralized applications.</p>
                                        <a class="card-link" href="developer-week">Read more <i class="bi-chevron-right small ms-1"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <span class="svg-icon text-primary mb-3">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.3" d="M18 22H6C5.4 22 5 21.6 5 21V8C6.6 6.4 7.4 5.6 9 4H15C16.6 5.6 17.4 6.4 19 8V21C19 21.6 18.6 22 18 22ZM12 5.5C11.2 5.5 10.5 6.2 10.5 7C10.5 7.8 11.2 8.5 12 8.5C12.8 8.5 13.5 7.8 13.5 7C13.5 6.2 12.8 5.5 12 5.5Z" fill="#035A4B" />
                                                <path d="M12 7C11.4 7 11 6.6 11 6V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V6C13 6.6 12.6 7 12 7ZM15.1 10.6C15.1 10.5 15.1 10.4 15 10.3C14.9 10.2 14.8 10.2 14.7 10.2C14.6 10.2 14.5 10.2 14.4 10.3C14.3 10.4 14.3 10.5 14.2 10.6L9 19.1C8.9 19.2 8.89999 19.3 8.89999 19.4C8.89999 19.5 8.9 19.6 9 19.7C9.1 19.8 9.2 19.8 9.3 19.8C9.5 19.8 9.6 19.7 9.8 19.5L15 11.1C15 10.8 15.1 10.7 15.1 10.6ZM11 11.6C10.9 11.3 10.8 11.1 10.6 10.8C10.4 10.6 10.2 10.4 10 10.3C9.8 10.2 9.50001 10.1 9.10001 10.1C8.60001 10.1 8.3 10.2 8 10.4C7.7 10.6 7.49999 10.9 7.39999 11.2C7.29999 11.6 7.2 12 7.2 12.6C7.2 13.1 7.3 13.5 7.5 13.9C7.7 14.3 7.9 14.5 8.2 14.7C8.5 14.9 8.8 14.9 9.2 14.9C9.8 14.9 10.3 14.7 10.6 14.3C11 13.9 11.1 13.3 11.1 12.5C11.1 12.3 11.1 11.9 11 11.6ZM9.8 13.8C9.7 14.1 9.5 14.2 9.2 14.2C9 14.2 8.8 14.1 8.7 14C8.6 13.9 8.5 13.7 8.5 13.5C8.5 13.3 8.39999 13 8.39999 12.6C8.39999 12.2 8.4 11.9 8.5 11.7C8.5 11.5 8.6 11.3 8.7 11.2C8.8 11.1 9 11 9.2 11C9.5 11 9.7 11.1 9.8 11.4C9.9 11.7 10 12 10 12.6C10 13.2 9.9 13.6 9.8 13.8ZM16.5 16.1C16.4 15.8 16.3 15.6 16.1 15.4C15.9 15.2 15.7 15 15.5 14.9C15.3 14.8 15 14.7 14.6 14.7C13.9 14.7 13.4 14.9 13.1 15.3C12.8 15.7 12.6 16.3 12.6 17.1C12.6 17.6 12.7 18 12.9 18.4C13.1 18.7 13.3 19 13.6 19.2C13.9 19.4 14.2 19.5 14.6 19.5C15.2 19.5 15.7 19.3 16 18.9C16.4 18.5 16.5 17.9 16.5 17.1C16.7 16.8 16.6 16.4 16.5 16.1ZM15.3 18.4C15.2 18.7 15 18.8 14.7 18.8C14.4 18.8 14.2 18.7 14.1 18.4C14 18.1 13.9 17.7 13.9 17.2C13.9 16.8 13.9 16.5 14 16.3C14.1 16.1 14.1 15.9 14.2 15.8C14.3 15.7 14.5 15.6 14.7 15.6C15 15.6 15.2 15.7 15.3 16C15.4 16.2 15.5 16.6 15.5 17.2C15.5 17.7 15.4 18.1 15.3 18.4Z" fill="#035A4B" />
                                            </svg>
                                        </span>
                                        <h4 class="card-title">Festivals</h4>
                                        <p class="card-text">We hold celebrations of the use of the Bitcoin Blockchain, such as Coinfest, which was created to encourage use of cryptocurrencies while enlightening the public about their significance and widespread adoption in local households.</p>
                                        <a class="card-link" href="festival">Read more <i class="fas bi-chevron-right small ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 900x900 -->
            <div class="banner-half-middle-x bg-img-start d-none d-md-block" style="background-image: url(assets/media/charity.jpg);"></div>
        </div>
        
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

        <!-- WEB3 Features -->
        <div class="bg-light">
            <div class="container content-space-1 content-space-b-lg-3">
                <div class="row align-items-lg-center">
                    <div class="col-lg-5 mb-5 mb-lg-0">
                        <div class="pe-lg-6">
                            <div class="mb-4">
                                <h2 class="h1">Web3</h2>
                            </div>
                            <div class="mb-4">
                                <p>We are an independent research and limit-building organization with a specialization in blockchain technology. In order to attempt pivotal exploration of blockchain innovation and emphasize the skillet in blockchain transformation by involving engineers in the development of Decentralized applications, we bring together Africa's top industry pioneers, academics, strategy producers, business people, and scientists.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <figure class="device-browser">
                            <div class="device-browser-header">
                                <div class="device-browser-header-btn-list">
                                    <span class="device-browser-header-btn-list-btn"></span>
                                    <span class="device-browser-header-btn-list-btn"></span>
                                    <span class="device-browser-header-btn-list-btn"></span>
                                </div>
                                <div class="device-browser-header-browser-bar">www.blockchainfoundationafrica.com</div>
                            </div>
                            <div class="device-browser-frame">
                                <!-- 1618x1010 -->
                                <img class="device-browser-img" src="./assets/media/web3.jpg" alt="Image Description">
                            </div>
                        </figure>
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