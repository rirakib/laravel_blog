
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>rirrakib</title>

    <!-- Google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style-starter.css')}}">
  </head>
  <body>
<!--header-->
<header id="site-header" class="fixed-top">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light stroke">
      <a class="navbar-brand" href="index.html">
        <span> rirrakib</span>
      </a>
      <!-- if logo is image enable this   
        <a class="navbar-brand" href="#index.html">
            <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
        </a> -->
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa icon-expand fa-bars"></span>
        <span class="fa icon-close fa-times"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Home </a>
          </li>
          <li class="nav-item @@portfolio__active">
            <a class="nav-link" href="portfolio.html">My Portfolio</a>
          </li>
          <li class="nav-item @@c__active">
            <a class="nav-link" href="contact.html">Contact me</a>
          </li>
        </ul>
      </div>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <div class="popup ml-auto">
          <a href="#menu" class="domain" data-toggle="modal" data-target="#DomainModal">
            <div class="hamburger">
              <span class="top-bar"></span>
              <span class="middle-bar"></span>
              <span class="bottom-bar"></span>
            </div>
          </a>
        </div>
      </div>

      <!-- toggle switch for light and dark theme -->
      <div class="mobile-position ml-lg-2">
        <nav class="navigation">
          <div class="theme-switch-wrapper">
            <label class="theme-switch" for="checkbox">
              <input type="checkbox" id="checkbox">
              <div class="mode-container">
                <i class="gg-sun"></i>
                <i class="gg-moon"></i>
              </div>
            </label>
          </div>
        </nav>
      </div>
      <!-- //toggle switch for light and dark theme -->
    </nav>
  </div>
</header>
<!--/header-->
<div class="header-gap">

</div>


<!-- Domain Modal -->
<div class="modal right fade" id="DomainModal" tabindex="-1" role="dialog" aria-labelledby="DomainModalLabel2">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
          aria-hidden="true">&times;</span></button>

      <div class="modal-body">
        <div class="modal__content">
          <a class="navbar-brand"> <span>I, Portfolio </span></a>
          <!-- if logo is image enable this   
            <h2 class="logo">
              <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
            </h2> -->
          <p class="mt-md-3 mt-2">I Would Love to make your Ideas real. Contact me and we will discuss your projects!
          </p>

          <img src="assets/images/banner.png" alt="" class="img-fluid mt-5">

          <div class="widget-social-icons mt-sm-5 mt-4">
            <ul class="icon-rounded address">
              <li class="mt-3">
                <p><a href="tel:+404-11-22-89">+1-2345-345-678-11</a></p>
              </li>
              <li class="mt-2">
                <p><a href="mailto:design@portfolio.com">design@portfolio.com</a></p>
              </li>
            </ul>
          </div>
          <div class="widget-social-icons mt-sm-5 mt-4">
            <ul class="follow-social">
              <li><a href="#url"><span class="fa fa-behance"></span></a></li>
              <li><a href="#url"><span class="fa fa-linkedin"></span></a></li>
              <li><a href="#url"><span class="fa fa-facebook-official"></span></a></li>
              <li><a href="#url"><span class="fa fa-twitter"></span></a></li>
            </ul>
          </div>


        </div>
      </div>
    </div>
    <!-- //modal-content -->
  </div>
  <!-- //modal-dialog -->
</div>
<!-- //Domain modal -->
<!-- banner section -->
<section id="home" class="w3l-banner pb-5">
    <div class="container pb-md-3">
        <div class="banner-wrapper text-center">
            <div class="">
                <span class="text">About Me</span>
                <h2 class="mb-4 title"><span class="type-js"><span class="text-js"> Rir Rakib</span></span><br>
                    Web application developer.</h2>
                <p class="mx-lg-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, excepturi.
                </p>
            </div>
            <div class="row">
              <div class="col-lg-8 mx-lg-auto col-md-10">
                <img src="assets/images/banner.png" alt="" class="img-fluid mt-lg-5 mt-3">
              </div>
            </div>
            <ul class="follow-social">
                <li><p>Follow me </p></li>
                <li><a href="#url"><span class="fa fa-behance"></span></a></li>
                <li><a href="#url"><span class="fa fa-linkedin"></span></a></li>
                <li><a href="#url"><span class="fa fa-facebook-official"></span></a></li>
                <li><a href="#url"><span class="fa fa-twitter"></span></a></li>
            </ul>
        </div>
    </div>
</section>
<!-- //banner section -->


<!-- home page about section -->
<section class="w3l-homeblock2" id="skills">
    <div class="midd-w3 py-5">
        <div class="container py-lg-5 py-md-3">
            <div class="row">
                <div class="col-lg-6 align-self">
                    <div class="position-relative px-lg-5 mx-lg-0 mx-md-5 image-padding">
                        <img src="assets/images/skills.png" alt="" class="radius-image img-fluid">
                        <div class="position-absolute-images">
                            <img src="assets/images/file.png" class="img-fluid pos-img" alt="" />
                            <img src="assets/images/file1.png" class="img-fluid pos-img1" alt="" />
                            <img src="assets/images/file2.png" class="img-fluid pos-img2" alt="" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-md-5 mt-4">
                    <span class="text">My Featured Skills</span>
                    <h3 class="title-big">I’m using <span>top leading</span>
                        design methods.</h3>
                    <p class="mt-4">I Specialize in Branding and Strategy, and am passionate about creating Awesome
                        Portfolio work. And I always ready to impress the audience with my Creativity. </p>
                    <div class="skills-bars mt-5">
                        <div class="progress-info">
                            <h6 class="progress-tittle">UI/UX Design</h6>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                        <div class="progress-info">
                            <h6 class="progress-tittle">Ideas &amp; Technology
                            </h6>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                        <div class="progress-info">
                            <h6 class="progress-tittle">Branding Design</h6>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                        <div class="progress-info mb-0">
                            <h6 class="progress-tittle">Responsive Web Design</h6>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //home page about section -->

<!-- home page about section -->

<!-- //home page about section -->

<!-- home page about section -->
<section class="w3l-clients" id="skills">
    <div class="midd-w3 py-5">
        <div class="container py-lg-5 py-md-3">
            <div class="row">
                <div class="col-lg-6 align-self">
                    <div class="position-relative px-lg-5">
                        <img src="assets/images/clients.png" alt="" class="radius-image img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-5">
                    <span class="text">Testimonials</span>
                    <h3 class="title-big">What my <span>clients think</span> about Me</h3>
                    <div id="owl-demo1" class="owl-carousel owl-theme mt-4 py-2 mb-4">
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <blockquote>
                                        <q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae
                                            laudantium
                                            voluptate rem ullam dolore nisi voluptatibus esse quasi, doloribus tempora.
                                            Dolores molestias adipisci dolor sit amet! by the Desire to achieve Success .</q>
                                    </blockquote>
                                    <div class="testi-des">
                                        <div class="test-img"><img src="assets/images/team1.jpg" class="img-fluid"
                                                alt="client-img">
                                        </div>
                                        <div class="peopl align-self">
                                            <h3>John wilson</h3>
                                            <p class="indentity">Seattle, Washington</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <blockquote>
                                        <q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae
                                            laudantium
                                            voluptate rem ullam dolore nisi voluptatibus esse quasi, doloribus tempora.
                                            Dolores molestias adipisci dolor sit amet! by the Desire to achieve Success.</q>
                                    </blockquote>
                                    <div class="testi-des">
                                        <div class="test-img"><img src="assets/images/team2.jpg" class="img-fluid"
                                                alt="client-img">
                                        </div>
                                        <div class="peopl align-self">
                                            <h3>Julia sakura</h3>
                                            <p class="indentity">Seattle, Washington</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <blockquote>
                                        <q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae
                                            laudantium
                                            voluptate rem ullam dolore nisi voluptatibus esse quasi, doloribus tempora.
                                            Dolores molestias adipisci dolor sit amet! by the Desire to achieve Success.</q>
                                    </blockquote>
                                    <div class="testi-des">
                                        <div class="test-img"><img src="assets/images/team3.jpg" class="img-fluid"
                                                alt="client-img">
                                        </div>
                                        <div class="peopl align-self">
                                            <h3>Roy Linderson</h3>
                                            <p class="indentity">Seattle, Washington</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <blockquote>
                                        <q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae
                                            laudantium
                                            voluptate rem ullam dolore nisi voluptatibus esse quasi, doloribus tempora.
                                            Dolores molestias adipisci dolor sit amet! by the Desire to achieve Success.</q>
                                    </blockquote>
                                    <div class="testi-des">
                                        <div class="test-img"><img src="assets/images/team4.jpg" class="img-fluid"
                                                alt="client-img">
                                        </div>
                                        <div class="peopl align-self">
                                            <h3>Mike Thyson</h3>
                                            <p class="indentity">Seattle, Washington</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <blockquote>
                                        <q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae
                                            laudantium
                                            voluptate rem ullam dolore nisi voluptatibus esse quasi, doloribus tempora.
                                            Dolores molestias adipisci dolor sit amet! by the Desire to achieve Success.</q>
                                    </blockquote>
                                    <div class="testi-des">
                                        <div class="test-img"><img src="assets/images/team2.jpg" class="img-fluid"
                                                alt="client-img">
                                        </div>
                                        <div class="peopl align-self">
                                            <h3>Laura gill</h3>
                                            <p class="indentity">Seattle, Washington</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //home page about section -->

<!-- home page about section -->

<!-- //home page about section -->

<!-- home page contact section -->
<section class="w3l-contactblock" id="contact">
    <div class="midd-w3 py-5">
        <div class="container py-lg-4 py-md-3">
            <div class="contact-heading text-center">
                <span class="text">Get in touch with Me </span>
                <h3 class="title-big">Are you ready to <span>work together?</span></h3>
                <p class="mt-4">Let's start a Project! Hire Me.</p>
            </div>
            <div class="row mt-md-5 mt-4 pt-lg-3">
                <div class="col-lg-5">
                    <p>I’m open to any communication! Feel free to contact me any convenient way!
                        I’m always interested in hearing about new projects and opportunities.
                    </p>
                    <ul class="address mt-md-5 mt-4">
                        <li class="mb-3">
                            <p><span class="fa fa-phone"></span> <a href="tel:+404-11-22-89">+1-2345-345-678-11</a></p>
                        </li>
                        <li class="mb-4">
                            <p><span class="fa fa-envelope-open"></span> <a href="mailto:design@portfolio.com">design@portfolio.com</a></p>
                        </li>
                        <li class="">
                            <p><span class="fa fa-map-marker"></span> #135 block, Barnard St. Brooklyn, <br>London 10036, UK.</p>
                        </li>
                    </ul>

                </div>
                <div class="col-lg-7 mt-lg-0 mt-md-5 mt-4">
                    <form action="" method="post">
                        <div class="twice-two">
                            <input type="text" class="form-control" name="w3lName" id="w3lName" placeholder="Name"
                                required="">
                            <input type="email" class="form-control" name="w3lSender" id="w3lSender" placeholder="Email"
                                required="">
                        </div>
                        <div class="twice">
                            <input type="text" class="form-control" name="w3lSubject" id="w3lSubject"
                                placeholder="Subject" required="">
                        </div>
                        <textarea name="w3lMessage" class="form-control" id="w3lMessage" placeholder="Message"
                            required=""></textarea>
                        <div class="text-right">
                            <button type="submit" class="btn btn-secondary btn-style mt-4">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //home page contact section -->
<div class="copyright py-sm-5 py-4 text-center">
  <div class="container">
    <p class="copy-footer-29">© 2020 I, Portfolio. All rights reserved | Design by <a
        href="https://w3layouts.com">W3layouts</a></p>
  </div>
</div>
<!-- move top -->
<button onclick="topFunction()" id="movetop" title="Go to top">
  <span class="fa fa-angle-up"></span>
</button>
<script>


  window.onscroll = function () {
    scrollFunction()
  };

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("movetop").style.display = "block";
    } else {
      document.getElementById("movetop").style.display = "none";
    }
  }

  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
</script>
<!-- /move top -->

<!-- jQuery and Bootstrap JS -->
<script src="{{asset('frontend/assets/js/jquery-3.3.1.min.js')}}"></script>

<script src="{{asset('frontend/assets/js/theme-change.js')}}"></script>


<!-- owlcarousel -->
<script src="{{asset('frontend/assets/js/owl.carousel.js')}}"></script>

<!-- script for tesimonials carousel slider -->
<script>
  $(document).ready(function () {
    $("#owl-demo1").owlCarousel({
      loop: true,
      nav: false,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        736: {
          items: 1,
          nav: false
        }
      }
    })
  })
</script>
<!-- //script for tesimonials carousel slider -->

<!-- script for portfolio slider -->
<script>
  $(document).ready(function () {
    $("#owl-portfolio").owlCarousel({
      loop: true,
      margin: 20,
      nav: false,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        568: {
          items: 2,
          nav: false
        },
        1080: {
          items: 3,
          nav: false
        }
      }
    })
  })
</script>
<!-- //script for portfolio slider -->

<!-- script for featured posts blog slider -->
<script>
  $(document).ready(function () {
    $('.owl-testimonial').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: false
        },
        1000: {
          items: 1,
          nav: false
        }
      }
    })
  })
</script>
<!-- //script for featured posts blog slider -->

<!-- script for banner typing text -->
<script>
  function autoType(elementClass, typingSpeed) {
    var thhis = $(elementClass);
    thhis.css({
      "position": "relative",
      "display": "inline-block"
    });
    thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
    thhis = thhis.find(".text-js");
    var text = thhis.text().trim().split('');
    var amntOfChars = text.length;
    var newString = "";
    thhis.text("|");
    setTimeout(function () {
      thhis.css("opacity", 1);
      thhis.prev().removeAttr("style");
      thhis.text("");
      for (var i = 0; i < amntOfChars; i++) {
        (function (i, char) {
          setTimeout(function () {
            newString += char;
            thhis.text(newString);
          }, i * typingSpeed);
        })(i + 1, text[i]);
      }
    }, 1500);
  }

  $(document).ready(function () {
    // Now to start autoTyping just call the autoType function with the 
    // class of outer div
    // The second paramter is the speed between each letter is typed.   
    autoType(".type-js", 300);
  });
</script>
<!-- //script for banner typing text -->


<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

<!-- MENU-JS -->
<script>
  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
      $("#site-header").addClass("nav-fixed");
    } else {
      $("#site-header").removeClass("nav-fixed");
    }
  });

  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function () {
    $("header").toggleClass("active");
  });
  $(document).on("ready", function () {
    if ($(window).width() > 991) {
      $("header").removeClass("active");
    }
    $(window).on("resize", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
    });
  });
</script>
<!-- //MENU-JS -->

<!-- bootstrap -->
<script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>

</body>

</html>