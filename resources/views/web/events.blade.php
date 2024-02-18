<!DOCTYPE html>
<html lang="en">

<head>
  <title>Cadence Academy</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('assets/css/open-iconic-bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/aos.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/icomoon.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">

</head>

<body>

  <!-- header  -->
  <header>

    <!-- Topbar Start -->
    <div class="container-fluid logo-bg-color py-1">
      <div class="row">
        <div class="col-lg-6">
          <a href="tel:9823273512" class="d-flex justify-content-center text-white text-decoration-none topbar-responsive"><i class="fa-solid fa-phone mt-1"></i>&nbsp; Contact No.:&nbsp; +91 98232 73512</a>
        </div>
        <div class="col-lg-6">
          <a href="mailto:admission@cadence-wn.in" class="d-flex justify-content-center text-white text-decoration-none topbar-responsive"><i class="fa-solid fa-envelope mt-1"></i>&nbsp; Email:&nbsp; admission@cadence-wn.in</a>
        </div>
      </div>
    </div>
    <!-- Topbar End -->


    <nav class="navbar navbar-expand-lg bg-white bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home')}}"><img src="{{ asset('assets/images/logo/logo.webp')}}" alt="" width="150px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav m-auto mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{ route('home')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('about')}}">About</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Courses
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('fashion-designing-course')}}">Fashion Designing</a></li>
                <li><a class="dropdown-item" href="{{ route('fashion-designing-course')}}">Interior Designing</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('our-activities')}}">Our Activities</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('gallery')}}">Gallery</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('events')}}">Events</a>
            </li>

            <a class="nav-link" href="{{ route('placements')}}">Placements</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{ route('contact-us')}}">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('online-admission')}}">Online Admission</a>
            </li>
          </ul>
 
        </div>
      </div>
    </nav>
  </header>
  <!-- End Header  -->

  <!-- Sticky icon  -->
  <a href="https://www.instagram.com/cadence_wardhamannagar/?hl=en" class="floatx1" target="_blank">
    <i class="fa-brands fa-instagram my-floatx1"></i>
  </a>
  <a href="https://www.facebook.com/cadence.wardhamannagar/" class="floatx2" target="_blank">
    <i class="fa-brands fa-facebook my-floatx2"></i>
  </a>
  <a href="https://www.youtube.com/channel/UCL9PLt1ksSkueFHDjEKPhEQ" class="floatx3" target="_blank">
    <i class="fa-brands fa-youtube my-floatx3"></i>
  </a>

  <a href="#enquiry-tab" class="floatx4">
    <i class="fa-solid fa-headset my-floatx4"></i>
  </a>

  <a href="tel:9373273513" class="floatx6">
    <i class="fa-solid fa-phone my-floatx6"></i>
  </a>

  <a href="https://wa.me/919373273513" class="floatx5 whatsapp-small" target="_blank">
    <i class="fa-brands fa-whatsapp my-floatx5"></i>
  </a>
  <a href="https://web.whatsapp.com/send?phone/send?phone=919373273513" class="floatx5 whatsapp-large" target="_blank">
    <i class="fa-brands fa-whatsapp my-floatx5"></i>
  </a>
  <!-- End Sticky icon  -->

  <!-- Upper Section Start -->
  <section class="hero-wrap hero-wrap-2" style="background-image: url('assets/images/banner/banner2.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 text-white">Events</h1>
          <p class="breadcrumbs text-white"><span class="mr-2"><a href="{{ route('home')}}" class="text-white text-decoration-none">Home <i class="ion-ios-arrow-forward"></i></a></span>
            <span>Events</span>
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- Upper Section Start -->
  <!-- About Section  -->
  <section class="ftco-section welcome pt-5 pb-5">
    <div class="container">
      <div class="row ">
        <h2 class="causes-heading fw-600 logo-color text-center mb-4">Events</h2>

        <div class="col-lg-6 col-md-12 col-sm-12 ftco-animate py-2">
          <div class="row">
            <div class="col-md-12">
              <iframe width="100%" height="315" src="https://www.youtube.com/embed/bB61bA-XyrQ?si=6Xs_fFjSpKJWqslQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>


            </div>
            <!-- <div class="col-md-6">
              <iframe width="100%" height="170px" src="https://www.youtube.com/embed/3nC5MLScthU?si=btR6btLJpFohp4T-"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
          

            </div> -->
          </div>
        </div>


        <div class="col-lg-6 col-md-12 col-sm-12 ftco-animate py-2">
          <h2 class="mb-4 logo-color causes-heading">Events of Fashion Design</h2>

          <p class=" text-justify causes-text my-text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Magnam, inventore voluptatem cupiditate rem nulla ex laboriosam veritatis sed harum aspernatur maiores
            consequatur ut error voluptatum consequuntur dignissimos? Eveniet numquam sunt illo voluptates cum. Lorem
            ipsum dolor sit amet consectetur, adipisicing elit. Vero veritatis beatae impedit doloribus a laborum eos
            possimus sint, ullam voluptatibus! Reprehenderit ab cupiditate id hic animi illo accusamus repellat enim.
          </p>
        </div>
      </div>
    </div>
    <!-- <div class="under-line1 m-auto"></div> -->
  </section>


  <!-- End About Section  -->

  <section class="ftco-section welcome pt-5 pb-5">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 ftco-animate py-2">
          <h2 class="mb-4 logo-color causes-heading">Events of Fashion Design</h2>

          <p class=" text-justify causes-text my-text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Magnam, inventore voluptatem cupiditate rem nulla ex laboriosam veritatis sed harum aspernatur maiores
            consequatur ut error voluptatum consequuntur dignissimos? Eveniet numquam sunt illo voluptates cum. Lorem
            ipsum dolor sit amet consectetur, adipisicing elit. Vero veritatis beatae impedit doloribus a laborum eos
            possimus sint, ullam voluptatibus! Reprehenderit ab cupiditate id hic animi illo accusamus repellat enim.
          </p>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 ftco-animate py-2">
          <div class="row">
            <div class="col-md-12">
              <img src="{{asset('assets/images/fashionshow/fashionshow_img6.jpg')}}" alt="" width="100%">


            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- End About Section  -->


  <!-- About Section  -->
  <!-- <section class="ftco-section welcome pt-5 pb-5">
   
      <div class="container">
        <div class="row ">
          <h2 class="causes-heading fw-600 logo-color text-center mb-4">Other Activities and Events</h2>
          <div class="col-lg-12 col-md-12 col-sm-12 ftco-animate py-2">
            <div class="row">
              <div class="col-md-2"></div>
              <div class="col-md-8">
               
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/qxFpdnj8KmU?si=UnXZYC49CRJnVTMS" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        
              </div>
              <div class="col-md-2"></div>
             
            </div>
          </div> -->

  <!-- <div class="col-lg-6 col-md-12 col-sm-12 ftco-animate py-2">
            <h2 class="mb-4 logo-color causes-heading">Events of Fashion Design</h2>
  
            <p class=" text-justify causes-text my-text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Magnam, inventore voluptatem cupiditate rem nulla ex laboriosam veritatis sed harum aspernatur maiores
              consequatur ut error voluptatum consequuntur dignissimos? Eveniet numquam sunt illo voluptates cum. Lorem
              ipsum dolor sit amet consectetur, adipisicing elit. Vero veritatis beatae impedit doloribus a laborum eos
              possimus sint, ullam voluptatibus! Reprehenderit ab cupiditate id hic animi illo accusamus repellat enim.
            </p>
          </div> -->
  <!-- </div>
      </div>
    </section> -->

  <!-- End About Section  -->




  <div class="under-line1 m-auto"></div>

  <!-- Enquiry  -->
  <section id="enquiry-tab" class="pt-5 pb-5 enquiry-form-bg font_text">
    <div class="container">
      <div class="row justify-content-center">
        <h2 class="text-center logo-color mb-5">ENQUIRY</h2>
        <div class="col-sm-12 col-md-12 col-lg-12 ftco-animate">
          <div class="contact-info shadow">
            <div class="row">
              <div class="col-lg-6">
                @include('web.components.course-enq')
              </div>
              <div class="col-lg-6 d-none d-lg-block">
                <img src="{{ asset('assets/images/enquiry-bg3.png')}}" alt="" width="100%" height="100%" class="my-rounded">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- End Enquiry  -->


  <!-- Footer Start -->
  <footer>
    <div class="container-fluid bg-black-dim footer wow fadeIn" data-wow-delay="0.1s">
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-lg-3 col-md-6 ftco-animate">
            <div class="text-center bg-light my-rounded mb-2">
              <a href=""><img class="img-fluid me-3" src="{{asset('assets/images/logo/logo.webp')}}" alt="" width="180px" /></a>
            </div>
            <p class="text-white-90 text-justify causes-text">
              A renowned ISO 9001-2008 certified Fashion and Interior Design Institute which was established in the year
              2002 to
              impart par excellence vocational courses to students.
            </p>
          </div>
          <div class="col-lg-3 col-md-6 ftco-animate">
            <h4 class="text-white causes-heading">Contact Us</h4>
            <div class="under-line-short mb-4"></div>
            <p class="text-white-90 causes-text">
              <a href="{{ route('contact-us')}}"><i class="fa fa-map-marker-alt me-3 text-white-90"></i></a>
              Cadence Academy, Wardhaman Nagar 269 Shardha
              Complex
              Above HDFC
              Bank, Avenue, Nagpur-440008, Maharashtra
            </p>
            <p class="causes-text text-white-90"><a href="tel:9823273512" class="text-decoration-none text-white-90"><i class="fa-solid fa-phone me-3 text-white-90"></i>+91 98232
                73512</a>
            </p>
            <p class="causes-text text-white-90"><a href="mailto:admission@cadence-wn.in" class="text-decoration-none text-white-90"><i class="fa fa-envelope me-3 text-white-90"></i>admission@cadence-wn.in</a></p>
          </div>
          <div class="col-lg-3 col-md-6 ftco-animate">
            <h4 class="text-light causes-heading">Quick Links</h4>
            <div class="under-line-short mb-4"></div>
            <ul class="footer-list">
              <li><a href="{{ route('home')}}" class="text-decoration-none text-white-90"><i class="fa-solid fa-angles-right"></i>&nbsp; Home</a></li>
              <li><a href="{{ route('about')}}" class="text-decoration-none text-white-90"><i class="fa-solid fa-angles-right"></i>&nbsp; About</a></li>
              <li><a href="{{ route('our-activities')}}" class="text-decoration-none text-white-90"><i class="fa-solid fa-angles-right"></i>&nbsp; Our Activities</a></li>
              <li><a href="{{ route('gallery')}}" class="text-decoration-none text-white-90"><i class="fa-solid fa-angles-right"></i>&nbsp; Gallery</a></li>
              <li><a href="{{ route('placements')}}" class="text-decoration-none text-white-90"><i class="fa-solid fa-angles-right"></i>&nbsp; Placements</a></li>
              <li><a href="{{ route('contact-us')}}" class="text-decoration-none text-white-90"><i class="fa-solid fa-angles-right"></i>&nbsp; Contact</a></li>
              <li><a href="{{ route('online-admission')}}" class="text-decoration-none text-white-90"><i class="fa-solid fa-angles-right"></i>&nbsp; Online Admission</a></li>
            </ul>

          </div>
          <div class="col-lg-3 col-md-6 ftco-animate footerz-col">
            <h4 class="text-light causes-heading">Social Media</h4>
            <div class="under-line-short mb-4"></div>
            <div class="social-links">
              <a href="https://www.instagram.com/cadence_wardhamannagar/?hl=en" class="ig" target="_blank"><i class="fab fa-instagram x-large"></i></a>
              <a href="https://www.facebook.com/cadence.wardhamannagar/" class="fb" target="_blank"><i class="fab fa-facebook-f x-large"></i></a>
              <a href="https://www.youtube.com/channel/UCL9PLt1ksSkueFHDjEKPhEQ" class="yt" target="_blank"><i class="fab fa-youtube x-large"></i></a>
              <!-- <a href="#" class="wa"><i class="fab fa-whatsapp"></i></a> -->
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="container-fluid bg-black ">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center mt-2 mb-2 text-white">
            <span>Copyright &copy; 2023; All Rights Reserved.</span>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer End -->

  <!-- Button top scroll  -->
  <button class="btnx-scroll"><i class="fa-solid fa-angle-up"></i></button>
  <!-- End button top scroll  -->





  <!-- scroll to top button  -->
  <script>
    const button = document.querySelector('.btnx-scroll');

    const displayButton = () => {
      window.addEventListener('scroll', () => {
        console.log(window.scrollY);

        if (window.scrollY > 100) {
          button.style.display = "block";
        } else {
          button.style.display = "none";
        }
      });
    };

    const scrollToTop = () => {
      button.addEventListener("click", () => {
        window.scroll({
          top: 0,
          left: 0,
          behavior: 'smooth'
        });
        console.log(event);
      });
    };

    displayButton();
    scrollToTop();
  </script>
  <!-- End scroll to top button  -->




  <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
  <script src="{{ asset('assets/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{ asset('assets/js/popper.min.js')}}"></script>
  <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('assets/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{ asset('assets/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{ asset('assets/js/jquery.stellar.min.js')}}"></script>
  <script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{ asset('assets/js/aos.js')}}"></script>
  <script src="{{ asset('assets/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{ asset('assets/js/scrollax.min.js')}}"></script>
  <script src="{{ asset('assets/js/model-pop-up.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
  <script src="{{asset('assets/js/google-map.js')}}"></script>
  <script src="{{ asset('assets/js/main.js')}}"></script>

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
  </script>
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"81fb64094ee17938","b":1,"version":"2023.10.0","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
</body>

</html>