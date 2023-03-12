    <!-- FOOTER -->
    <footer class="bg-light">
        <div class="container pb-1 pb-lg-7">
            <div class="row content-space-t-2">
                <div class="col-lg-3 mb-7 mb-lg-0">
                    <div class="mb-5">
                        <a class="navbar-brand" href="index" aria-label="Space">
                            <img class="navbar-brand-logo" src="./assets/media/logo/bcfa-logo.png" style="min-width: 4.5rem; max-width: 4.5rem;" alt="Image Description">
                        </a>
                    </div>

                    <ul class="list-unstyled list-py-1">
                        <li><a class="link-sm link-secondary" href="https://goo.gl/maps/ymwSk25o38YnVynr8" target="_blank"><i class="bi-geo-alt-fill me-1"></i> 153 Fumesua Kumasi, Ghana</a></li>
                        <li><a class="link-sm link-secondary" href="tel:+233-24-437-6573"><i class="bi-telephone-inbound-fill me-1"></i> +233 24 437 6573</a></li>
                    </ul>
                </div>
                <div class="col-sm mb-7 mb-sm-0">
                    <h5 class="mb-3">Company</h5>
                    <ul class="list-unstyled list-py-1 mb-0">
                        <li><a class="link-sm link-secondary" href="about-us">About</a></li>
                        <li><a class="link-sm link-secondary" href="javascript:;">Careers <span class="badge bg-warning text-dark rounded-pill ms-1">We're hiring</span></a></li>
                        <li><a class="link-sm link-secondary" href="javascript:;">Blog</a></li>
                    </ul>
                </div>
                <div class="col-sm mb-7 mb-sm-0">
                    <h5 class="mb-3">Features</h5>
                    <ul class="list-unstyled list-py-1 mb-0">
                        <li><a class="link-sm link-secondary" href="services">Services</a></li>
                        <li><a class="link-sm link-secondary" href="https://link.medium.com/QhiG30SBIwb" target="_blank">Press <i class="bi-box-arrow-up-right small ms-1"></i></a></li>
                    </ul>
                </div>
                <div class="col-sm mb-7 mb-sm-0">
                    <h5 class="mb-3">Documentation</h5>
                    <ul class="list-unstyled list-py-1 mb-0">
                        <li><a class="link-sm link-secondary" href="javascript:;">Events</a></li>
                        <li><a class="link-sm link-secondary" href="mailto:support@blockchainfoundationafrica.com">Support</a></li>
                    </ul>
                </div>
                <div class="col-sm">
                    <h5 class="mb-3">Resources</h5>
                    <ul class="list-unstyled list-py-1 mb-5">
                        <li><a class="link-sm link-secondary" href="contact-us">Contact Us</a></li>
                        <li><a class="link-sm link-secondary" href="javascript:;"><i class="bi-question-circle-fill me-1"></i> Help</a></li>
                    </ul>
                </div>
            </div>

            <div class="border-top my-7"></div>

            <div class="row mb-7">
                <div class="col-sm mb-3 mb-sm-0">
                    <ul class="list-inline list-separator mb-0">
                        <li class="list-inline-item">
                            <a class="text-body" href="javascript:;">Privacy &amp; Policy</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-body" href="javascript:;">Terms</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-body" href="javascript:;">Site Map</a>
                        </li>
                    </ul>
                </div>

                <div class="col-sm-auto">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <a class="btn btn-soft-secondary btn-xs btn-icon" href="https://web.facebook.com/BCFAfrica/">
                                <i class="bi-facebook"></i>
                            </a>
                        </li>

                        <li class="list-inline-item">
                            <a class="btn btn-soft-secondary btn-xs btn-icon" href="https://twitter.com/bcfafrica">
                                <i class="bi-twitter"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Copyright -->
            <div class="w-md-85 text-lg-center mx-lg-auto">
                <p class="text-muted small">&copy; BCFA 2014 - <script>document.write(new Date().getFullYear())</script>. All rights reserved.</p>
                <p class="text-muted small">Helping to create awareness on Bitcoin and other crypto currencies in Ghana and Africa to be precise.</p>
            </div>
        </div>
    </footer>
    
    <!-- Go To -->
    <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;" data-hs-go-to-options='{
                   "offsetTop": 700,
                   "position": {
         "init": {
           "right": "2rem"
         },
         "show": {
           "bottom": "2rem"
         },
         "hide": {
           "bottom": "-2rem"
         }
       }
     }'>
        <i class="bi-chevron-up"></i>
  </a>

  <script src="./assets/js/vendor.min.js"></script>
  <script src="./assets/js/aos.js"></script>
  <script src="./assets/js/theme.min.js"></script>
  <script>
    (function() {
      // INITIALIZATION OF HEADER
      // =======================================================
      new HSHeader('#header').init()


      // INITIALIZATION OF MEGA MENU
      // =======================================================
      new HSMegaMenu('.js-mega-menu', {
          desktop: {
            position: 'left'
          }
        })


      // INITIALIZATION OF SHOW ANIMATIONS
      // =======================================================
      new HSShowAnimation('.js-animation-link')


      // INITIALIZATION OF BOOTSTRAP VALIDATION
      // =======================================================
      HSBsValidation.init('.js-validate', {
        onSubmit: data => {
          data.event.preventDefault()
          alert('Submited')
        }
      })


      // INITIALIZATION OF GO TO
      // =======================================================
      new HSGoTo('.js-go-to')


      // INITIALIZATION OF AOS
      // =======================================================
      AOS.init({
        duration: 650,
        once: true
      });


      // INITIALIZATION OF TEXT ANIMATION (TYPING)
      // =======================================================
      HSCore.components.HSTyped.init('.js-typedjs')


      // INITIALIZATION OF VIDEO BG
      // =======================================================
      document.querySelectorAll('.js-video-bg').forEach(item=> {
        new HSVideoBg(item).init()
      })


      // INITIALIZATION OF SWIPER
      // =======================================================
      var swiper = new Swiper('.js-swiper-single-testimonials', {
        pagination: {
          el: '.js-swiper-single-testimonials-pagination',
          clickable: true,
        },
      });

       var swiper = new Swiper('.js-swiper-hero-clients',{
        slidesPerView: 2,
        breakpoints: {
          380: {
            slidesPerView: 3,
            spaceBetween: 15,
          },
          768: {
            slidesPerView: 4,
            spaceBetween: 15,
          },
          1024: {
            slidesPerView: 5,
            spaceBetween: 15,
          },
        },
      });

    })()
    </script>
</body>
</html>