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
            <li class="nav-item">
              <a class="nav-link" href="{{ route('placements')}}">Placements</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('contact-us')}}">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{ route('online-admission')}}">Online Admission</a>
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



  <section class="hero-wrap hero-wrap-2" style="background-image: url('assets/images/banner/banner2.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center fadeInUp ftco-animated">
          <h1 class="mb-2 text-white">Online Admission</h1>
          <p class="breadcrumbs text-white"><span class="mr-2"><a href="{{ route('home')}}" class="text-white text-decoration-none">Home
                <i class="ion-ios-arrow-forward"></i></a></span>
            <span>Online Admission</span>
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- my admission  -->

  <section class="mt-5 mb-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-7 col-sm-12 pt-2 ftco-animate">
          <div class="contact-info shadow">
            <form action="{{route('admission')}}" method="POST">

              @csrf
              @if(session('message'))
              <div class="alert alert-success">
                {{ session('message') }}
              </div>
              @endif

              <div class="row">
                <h1 class="text-center causes-text heading1 mb-1 logo-color"><b>ONLINE ADMISSION FORM</b></h1>
                <p class="causes-text my-text-black text-justify">To get yourself enroll in fashion & interior design
                  courses of
                  Cadence Academy Wardhaman Nagar, fill
                  the online
                  admission form, and for more updates regarding your courses and events stay connected with our team &
                  follow us on
                  social media.</p>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="firstName" class="form-control form-control-lg causes-text" placeholder="Student Name" name="first_name" required />
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" id="MiddleName" class="form-control form-control-lg causes-text" placeholder="Father/Husband Name" name="middle_name" required />
                  </div>
                </div>

                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" id="MotherName" class="form-control form-control-lg causes-text" placeholder="Mother Name" name="mother_name" required />
                  </div>
                </div>

                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" id="lastName" class="form-control form-control-lg causes-text" placeholder="Last Name" name="last_name" required />
                  </div>
                </div>

                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" id="mobile" class="form-control form-control-lg causes-text" placeholder="Mobile Number" name="mobile" required />
                  </div>
                </div>

                <div class="col-md-6 mb-4">
                 
                  <div class="form-outline">
                    <input type="email" id="email" class="form-control form-control-lg causes-text" placeholder="Email-ID" name="email" required />
                  </div>
                </div>

                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" id="nationality" class="form-control form-control-lg causes-text" placeholder="Nationality" name="nationality" required>
                  </div>
                </div>

                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" class="form-control causes-text" id="date_of_birth" name="date_of_birth" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="Date of birth" required>
                  </div>
                </div>

                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                   
                    <select class="form-control causes-text" id="gender" name="gender" required>
                      <option disabled selected value> Gender </option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                      <option value="other">Other</option>
                    </select>
                  </div>


                </div>

                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    
                    <select class="form-control causes-text" id="marriage" name="marital_status" required>
                      <option disabled selected value> Marital Status </option>
                      <option value="married">Married</option>
                      <option value="unmarried">Unmarried</option>

                    </select>
                  </div>
                </div>

                <div class="col-md-12 mb-4">
                  <div class="form-outline">
                    <input type="text" id="adhar" class="form-control form-control-lg causes-text" placeholder="Adhar Number" name="aadhar_number" required />
                  </div>
                </div>


                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <select class="form-control causes-text" id="category" name="category" required>
                      <option disabled selected value>--Select Your Category-- </option>
                      <option value="open">Open</option>
                      <option value="obc">OBC</option>
                      <option value="sc/st">SC/ST</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <select class="form-control causes-text" id="course" name="course" required>
                      <option disabled selected value>--Select Your Course-- </option>
                      <option value="Fashion-Design">Fashion Design</option>
                      <option value="Interior-Design">Interior Design</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-12 mb-4">
                  <div class="form-outline">
                    <textarea class="form-control causes-text " id="address" name="address" rows="4" placeholder="Address" required></textarea>
                  </div>
                </div>


              </div>
              <div class="mb-3 admission-submit">
                <button type="submit" class="btn" style="padding: 6px 30px; border-radius: 0px; border: 0; border-radius: 5px; background-color: #ea4000; color: white;">Submit</button>
              </div>
            </form>
          </div>

        </div>

        <div class="col-md-12 col-lg-5 col-sm-12 pt-2 ftco-animate">
          <div class="contact-info shadow">
            <h4 class="causes-text text-justify mb-3 logo-color"><strong>Cadence Academy Wardhaman Nagar</strong> is one
              of the Best and Biggest Institute
              fashion
              &
              interior
              design
              academy in India that offers advanced fashion designing courses using state of the art tools & the
              best
              professional
              trainers.
            </h4>
            <img src="{{ asset('assets/images/online-admission.png')}}" alt="" width="100%">

          </div>


        </div>
      </div>
    </div>
  </section>

  <!-- End my admission  -->

  <div class="under-line m-auto"></div>


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
              <a href=""><img class="img-fluid me-3" src="{{ asset('assets/images/logo/logo.webp')}}" alt="" width="180px" /></a>
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





  <script src="{{asset('assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('assets/js/popper.min.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('assets/js/aos.js')}}"></script>
  <script src="{{asset('assets/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('assets/js/scrollax.min.js')}}"></script>
  <script src="{{asset('assets/js/model-pop-up.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
  <script src="{{asset('assets/js/google-map.js')}}"></script>
  <script src="{{asset('assets/js/main.js')}}"></script>

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