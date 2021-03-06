<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Parallax, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>Babee Hive</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/line-icons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">

  </head>
  <body>

    <!-- Header Section Start -->
    <header id="hero-area" data-stellar-background-ratio="0.5">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <a href="{{ url('/') }}" class="navbar-brand"><img class="img-fulid" src="img/logobanner.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <i class="lnr lnr-menu"></i>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item">
                <a class="nav-link page-scroll" href="{{ url('/') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#services">Introduction</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#features">Programmes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#team">Team</a>
              </li>
              @auth
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/profile') }}">My profile</a>
              </li>
              @endauth
              <!-- if not auth users / guest, display login and register in navbar -->
              @guest
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
              </li>
              @endguest
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="mobile-menu">
           <li>
              <a class="page-scroll" href="#hero-area">Home</a>
            </li>
            <li>
              <a class="page-scroll" href="#services">Introduction</a>
            </li>
            <li>
              <a class="page-scroll" href="#features">Programmes</a>
            </li>
            <li>
              <a class="page-scroll" href="#team">Team</a>
            </li>
            <li>
              <a class="page-scroll" href="#contact">Contact</a>
            </li>
        </ul>
        <!-- Mobile Menu End -->

      </nav>
      <!-- Navbar End -->
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-10">
            <div class="contents text-center">
              <!-- <h1 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">BABEE HIVE</h1>
              <a href="#" class="btn btn-common wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">Download</a> -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Header Section End -->

    <!-- Introduction Section Start -->
    <section id="services" class="section">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">What is Babee Hive?</h2>
          <hr class="lines wow zoomIn" data-wow-delay="0.3s">
          <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">It is a reporting system developed by Ain Ayunni. <br> Specifically for a kindergarten.</p>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6">
            <div class="item-boxes wow fadeInDown" data-wow-delay="0.2s">
              <div class="icon">
                <i class="lnr lnr-laptop"></i>
              </div>
              <h4>Easy Reporting</h4>
              <p>Easier to log report for the teachers</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="item-boxes wow fadeInDown" data-wow-delay="0.8s">
              <div class="icon">
                <i class="lnr lnr-laptop-phone"></i>
              </div>
              <h4>Report Display</h4>
              <p>Report will be displayed to the parents</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="item-boxes wow fadeInDown" data-wow-delay="1.2s">
              <div class="icon">
                <i class="lnr lnr-tablet"></i>
              </div>
              <h4>Save Cost</h4>
              <p>No need to use the traditional system of logbook report</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Introduction Section End -->

    <!-- Programmes Section Start -->
    <section id="features" class="section" data-stellar-background-ratio="0.2">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">Our Programmes</h2>
          <hr class="lines">
          <p class="section-subtitle"></p>
        </div>
        <div class="row">
          <div class="col-lg-8 col-md-12 col-xs-12">
            <div class="container">
              <div class="row">
                 <div class="col-lg-6 col-sm-6 col-xs-12 box-item">
                    <span class="icon">
                      <i class="lnr lnr-cloud"></i>
                    </span>
                    <div class="text">
                      <h4>Baby School</h4>
                      <p>  It is a world of wonder out there for babies.
                        Everything they touch, see, hear, smell or taste is a unique and magical experience.</p>
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-6 col-xs-12 box-item">
                    <span class="icon">
                      <i class="lnr lnr-sun"></i>
                    </span>
                    <div class="text">
                      <h4>Discovery School</h4>
                      <p>Your little one is discovering more and more each day. Our approach to teaching this age as they navigate their world uses music, art, and movement while nurturing their progress toward preschool.</p>
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-6 col-xs-12 box-item">
                    <span class="icon">
                      <i class="lnr lnr-moon"></i>
                    </span>
                    <div class="text">
                      <h4>Play-School</h4>
                      <p>  Children learn best in an interactive environment where they can play, have fun, sing songs and use their imaginations.</p>
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-6 col-xs-12 box-item">
                    <span class="icon">
                      <i class="lnr lnr-star"></i>
                    </span>
                    <div class="text">
                      <h4>Pre-School</h4>
                      <p>Children will develop self-confidence and self awareness, independence, responsibility, tolerance, concentration and a joy of learning.</p>
                    </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-xs-12">
            <div class="show-box">
              <img class="img-fulid" src="img/features/feature.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Programmes Section End -->

    <!-- Team section Start -->
    <section id="team" class="section">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">Our Team</h2>
          <hr class="lines">
          <p class="section-subtitle">Our line up! <br> We teach you about life</p>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
              <img src="img/team/team1.jpg" alt="">
              <div class="team-details">
                <div class="team-inner">
                  <h4 class="team-title">Teacher Ayu</h4>
                  <p>Mathematics Teacher</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
              <img src="img/team/team2.jpg" alt="">
              <div class="team-details">
                <div class="team-inner">
                  <h4 class="team-title">Sir Nazren</h4>
                  <p>Sports Teacher</p>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
              <img src="img/team/team3.jpg" alt="">
              <div class="team-details">
                <div class="team-inner">
                  <h4 class="team-title">Teacher Liyana</h4>
                  <p>English Teacher</p>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
              <img class="img-fulid" src="img/team/team4.jpg" alt="">
              <div class="team-details">
                <div class="team-inner">
                  <h4 class="team-title">Teacher Auni</h4>
                  <p>Science Teacher</p>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Team section End -->

    <!-- Contact Section Start -->
    <section id="contact" class="section" data-stellar-background-ratio="-0.2">
      <div class="contact-form">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-sm-6 col-xs-12">
              <div class="contact-us">
                <h3>Contact with us</h3>
                <div class="contact-address">
                  <p>Babee Hive, Putrajaya, Malaysia </p>
                  <p class="phone">Phone: <span>+6013 258 9157</span></p>
                  <p class="email">E-mail: <span>ainayunni.work@gmail.com</span></p>
                  <p class="phone">Whatsapp: <span><a href="https://wa.link/egk1g2"</a>Hello, Babee Hive!</span></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Section Start -->
    <footer>
      <div class="container">
        <div class="row">
          <!-- Footer Links -->
          <div class="col-lg-6 col-sm-6 col-xs-12">
            <ul class="footer-links">
              <!-- <li>
                <a href="#">Homepage</a>
              </li>
              <li>
                <a href="#">Services</a>
              </li>
              <li>
                <a href="#">About Us</a>
              </li>
              <li>
                <a href="#">Contact</a>
              </li> -->
            </ul>
          </div>
          <div class="col-lg-6 col-sm-6 col-xs-12">
            <div class="copyright">
              <p>All copyrights reserved &copy; 2018 - Designed & Developed by <a rel="nofollow" href="https://uideck.com">UIdeck</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="lnr lnr-arrow-up"></i>
    </a>

    <div id="loader">
      <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
      </div>
    </div>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="js/jquery-min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mixitup.js"></script>
    <script src="js/nivo-lightbox.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/scrolling-nav.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/jquery.vide.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/main.js"></script>

  </body>
</html>
