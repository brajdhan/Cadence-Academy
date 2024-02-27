<!DOCTYPE html>
<html lang="en">

<head>
  <title>Cadence Academy</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/css/open-iconic-bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
</head>

<body>

  @if(session('message'))
  <div class="alert alert-success">
    {{ session('message') }}
  </div>
  @endif
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header swar">
          <h5 class="modal-title text-center uppercase" id="exampleModalLabel" style="color:#fffcfc;">Please Leave Your
            Number
            for Free Counselling By Our Expert</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background-color: #fff;"></button>
        </div>
        <div class="modal-body">
          <div class="container mt-2">
            <!-- <h5 style="color: #000; font-size: 20px; margin-bottom: 15px; text-align: center;">Please Leave Your Number
              for Free Counselling Our Expert</h5> -->
            <form action="{{ route('course-enq') }}" method="post">
              @csrf
              <div class="mb-3">
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your Name" required>
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" id="" name="mobile" placeholder="Enter your Mobile No." required>
              </div>
              <div class="mb-3">
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your Email" required>
              </div>
              <div class="mb-3">
                <!-- <label for="Mobile No" class="form-label">City</label> -->
                <input type="text" class="form-control" id="city" name="city" placeholder="Enter your City" required>
              </div>
              <div class="mb-3">
                <label class="form-label" style="font-weight:600;">Choose Course</label>
                <div class="row">
                  <div class="col-md-6">
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="check1" name="course[]" value="Fashion-Design">
                      <label class="form-check-label" for="check1" style="margin: 0 10px 0 0;">Fashion Design</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="check2" name="course[]" value="Interior-Design">
                      <label class="form-check-label" for="check2" style="margin: 0 10px 0 0;">Interior Design</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mb-3 popup-submit">
                <button type="submit" class="btn" style="padding: 6px 30px; border-radius: 0px; border: 0; border-radius: 5px; background-color: #ea4000; color: white;">Submit</button>
              </div>
            </form>
          </div>
        </div>
        <!--  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div> -->
      </div>
    </div>
  </div>
  <!-- data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000"  -->

  <!-- End modal popup  -->

  <!-- header  -->
  <header>

    <!-- Topbar Start -->
    <div class="container-fluid logo-bg-color1 py-1">
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
        <a class="navbar-brand" href="{{route('home')}}"><img src="{{ asset('assets/images/logo/logo.webp')}}" alt="" width="150px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav m-auto mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('about')}}">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Courses
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('fashion-designing-course')}}">Fashion Designing</a></li>
                <li><a class="dropdown-item" href="{{route('interior-designing-course')}}">Interior Designing</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('our-activities')}}">Our Activities</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('gallery')}}">Gallery</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#notice">Notice</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="{{route('events')}}">Events</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('placements')}}">Placements</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('contact-us')}}">Contact</a>
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

  <a href="#notice" class="floatx7">
    <i class="fa-solid fa-bell" style="color: #fafcff;"></i>
  </a>



  <a href="https://wa.me/919373273513" class="floatx5 whatsapp-small" target="_blank">
    <i class="fa-brands fa-whatsapp my-floatx5"></i>
  </a>
  <a href="https://web.whatsapp.com/send?phone/send?phone=919373273513" class="floatx5 whatsapp-large" target="_blank">
    <i class="fa-brands fa-whatsapp my-floatx5"></i>
  </a>
  <!-- End Sticky icon  -->

  <!-- Carousel  -->
  <div id="carouselExampleCaptions" class="carousel slide bg-dark bg-gradient margin-t-header">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('assets/images/banner/banner1.jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block ftco-animate">
          <h1 class="text-white carousel-heading causes-heading">Welcome to Cadence Academy, <br>Wadhaman Nagar</h1>
          <h4 class="text-white causes-heading">Best Fashion Designing Courses</h4>
          <p><a href="{{route('contact-us')}}" class="btn my-btn px-4 py-2 mt-3">Enquiry</a></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{asset('assets/images/banner/banner2.jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-md-block ftco-animate">
          <h1 class="text-white carousel-heading causes-heading">Welcome to Cadence Academy, <br>Wadhaman Nagar</h1>
          <h4 class="text-white causes-heading">Best Fashion Designing Courses</h4>
          <p><a href="{{route('contact-us')}}" class="btn my-btn px-4 py-2 mt-3">Enquiry</a></p>
        </div>
      </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- End Carousel  -->


  <section class="ftco-section welcome pt-5 pb-5">
    <!-- About Start -->
    <div class="container pb-5">
      <div class="row align-items-center">
        <div class="col-12 ftco-animate">
          <h1 class="mb-4 logo-color causes-heading text-center main-heading">WELCOME TO CADENCE ACADEMY WARDHAMAN NAGAR
          </h1>
        </div>
        <div class="col-lg-6 ftco-animate">
          <div class="row g-2">
            <div class="col-6 text-end">
              <img class="img-fluid rounded w-100 shadow scale-big" src="{{asset('assets/images/fashion-designing/fashionx8.jpg')}}">
            </div>
            <div class="col-6 text-start mt-auto">
              <img class="img-fluid rounded w-75 shadow scale-big" src="{{ asset('assets/images/interior-designing/interiorx3.jpg')}}">
            </div>
            <div class="col-6 text-end mb-auto">
              <img class="img-fluid rounded w-75 shadow scale-big" src="{{ asset('assets/images/interior-designing/interiorx7.jpg')}}">
            </div>
            <div class="col-6 text-start">
              <img class="img-fluid rounded w-100 shadow scale-big" src="{{asset('assets/images/fashion-designing/fashionx9.jpg')}}">
            </div>
          </div>
        </div>
        <div class="col-lg-6 ftco-animate">
          <h2 class="mb-4 logo-color causes-heading">Academy Of Fashion & Interior</h2>

          <p class=" text-justify causes-text my-text-black"><strong>Cadence Academy, Wardhaman Nagar</strong> is the
            Best and Biggest Fashion
            Designing and Interior Designing
            Institute
            that offers
            several professional
            courses in
            art, design, and allied fields. We are committed to providing our students with quality & professional
            educational
            experiences. Many opportunities to enhance your education are provided beyond the traditional classroom
            experience.
            You’ll have the opportunity to participate in profession-related organizations, specialized workshops, guest
            lectures,
            field trips, and study programs.

            Our experienced instructors and hands-on projects will help you develop a strong foundation in fashion
            design and
            interior design.
          </p>
          <a href="{{ route('about')}}" class="btn my-btn px-4 py-2 mt-3">More Info</a>
          </a>
        </div>
      </div>
    </div>
    <!-- About End -->

  </section>

  <div class="under-line m-auto"></div>

  <!-- our courses  -->
  <section class="section style-3 pt-5 pb-5 our-courses">
    <div class="container ">

      <div class="row">
        <div class="col-12">
          <h2 class="text-center logo-color fw-600 causes-heading mb-5">OUR COURSES</h2>
        </div>


        <div class="col-lg-6 ftco-animate py-2">

          <div class="slideshow-container shadow my-rounded">
            <!-- Slides -->
            <div class="mySlides">
              <img src="{{ asset('assets/images/fashion-designing/fashion4.jpg')}}" style="width:100%">
            </div>

            <div class="mySlides">
              <img src="{{ asset('assets/images/fashion-designing/fashion6.jpg')}}" style="width:100%">
            </div>

            <div class="mySlides">
              <img src="{{ asset('assets/images/fashion-designing/fashion7.jpg')}}" style="width:100%">
            </div>

            <!-- Navigation buttons -->
            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>
            <!-- Dots/bullets for navigation -->
            <div style="text-align:center" class="mt-2 pb-2">
              <span class="dot" onclick="currentSlide(1)"></span>
              <span class="dot" onclick="currentSlide(2)"></span>
              <span class="dot" onclick="currentSlide(3)"></span>
            </div>
          </div>


        </div>

        <div class="col-lg-6 ftco-animate py-2">
          <div class="section-title-wrap">

            <h3 class="subtitle causes-heading fw-500 logo-color">Fashion Design</h3>
            <p class="text-justify mb-0 causes-text my-text-black">
              Fashion Designing industry provides the most lucrative, glamorous and exciting career options in today's
              world. If you
              have a penchant for creativity, style, and originality, Cadence Academy of Fashion and Interior Designing,
              Nagpur offers
              a tailor-made course in fashion designing exclusively for you. <br>
              Fashion designing is the art of creating clothing and accessories that not only serve a functional purpose
              but also make
              a powerful statement about individual style and self-expression. It's a dynamic and ever-evolving field
              where creativity
              knows no bounds. Fashion designers play a pivotal role in shaping trends, colors, fabrics, and silhouettes
              that define
              each season.
            </p>
          </div>


          <a href="{{route('fashion-designing-course')}}" class="btn my-btn px-4 py-2 mt-3">Explore</a>
          </a>

        </div>
      </div>
      <hr>
      <div class="row mt-5 mb-5">

        <div class="col-lg-6 ftco-animate py-2">
          <div class="section-title-wrap">

            <h3 class="subtitle causes-heading fw-500 logo-color">Interior Design</h3>
            <p class="text-justify mb-0 causes-text my-text-black">
              Our course on Interior Designing is created to meet expectations of the industry. We create a harmony
              between
              theoretical, technical, artistic, and creative fields. Interior designing is competitive where the key to
              success is
              getting you noticed. Interior designers execute projects for a myriad of activities. <br>
              Interior designing is the transformative art of creating harmonious, functional, and aesthetically
              pleasing living and working spaces. It's about turning a house into a home, an office into a sanctuary,
              and a space into an experience. Interior designers combine their expertise in color theory, furniture
              selection, spatial planning, and a deep understanding of architectural elements to craft interiors that
              reflect the unique personalities and needs of their clients. They carefully curate materials, fabrics, and
              decor to create atmospheres that not only impress but also promote comfort and well-being.
            </p>
          </div>


          <a href="{{route('interior-designing-course')}}" class="btn my-btn px-4 py-2 mt-3">Explore</a>
          </a>

        </div>

        <div class="col-lg-6 ftco-animate py-2">
          <div class="slideshow-container2 shadow my-rounded">
            <!-- Slides -->
            <div class="mySlides2">
              <img src="{{ asset('assets/images/interior-designing/interior2.jpg')}}" style="width:100%">
            </div>

            <div class="mySlides2">
              <img src="{{ asset('assets/images/interior-designing/interior4.jpg')}}" style="width:100%">
            </div>

            <div class="mySlides2">
              <img src="{{ asset('assets/images/interior-designing/interior8.jpg')}}" style="width:100%">
            </div>

            <!-- Navigation buttons -->
            <a class="prev2" onclick="plusSlides2(-1)">❮</a>
            <a class="next2" onclick="plusSlides2(1)">❯</a>

            <!-- Dots/bullets for navigation -->
            <div style="text-align:center" class="mt-2 pb-2">
              <span class="dot2" onclick="currentSlide2(1)"></span>
              <span class="dot2" onclick="currentSlide2(2)"></span>
              <span class="dot2" onclick="currentSlide2(3)"></span>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End our courses  -->

  <div class="under-line m-auto"></div>


  <!-- Our Activities  -->
  <section class="ftco-section our-activities pt-5 pb-5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row ">
        <div class="col-12 ftco-animate">
          <h2 class="text-center logo-color fw-600 causes-heading">OUR ACTIVITIES</h2>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12  ftco-animate py-4">

          <iframe width="100%" height="100%" class="my-rounded youtube-video" src="https://www.youtube.com/embed/F94XoMuaWvA?autoplay=1&mute=1&loop=1">
          </iframe>


        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 pr-md-4 ftco-animate py-2">
          <h2 class="mb-4 logo-color causes-heading">By our student's creative work, design and ideas</h2>

          <p class=" text-justify causes-text my-text-black">In Wardhaman Nagar, Cadence Academy is the premier Fashion
            Designing and Interior Designing Institute, offering a variety of professional
            courses in art, design, and allied fields. Our commitment to delivering quality and professional educational
            experiences
            to our students is unwavering. We provide numerous opportunities to enrich your education beyond the
            conventional
            classroom setting. You'll have the chance to engage in profession-related organizations, attend specialized
            workshops,
            benefit from guest lectures, partake in field trips, and explore study programs.</p>


          </a>


        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-12 ftco-animate">
          <a href="{{ route('our-activities')}}" class="text-black text-decoration-none">
            <div class="boxx">
              <div class="headingg uppercase">
                <h3 class="text-center causes-heading">Celebrity Interaction</h3>
              </div>
              <div class="imgg">
                <img src="{{ asset('assets/images/celebrity-interaction/ShreyasTalpadeManjriFadnvis-800x600-1.jpg')}}" alt="" width="100%">
              </div>
            </div>
          </a>

        </div>
        <div class="col-md-4 col-sm-12 ftco-animate">
          <a href="{{ route('our-activities')}}" class="text-black text-decoration-none">
            <div class="boxx">
              <div class="headingg uppercase">
                <h3 class="text-center causes-heading">Exhibition</h3>
              </div>
              <div class="imgg">
                <img src="{{ asset('assets/images/exhibition/Exhi-2.jpg')}}" alt="" width="100%">
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-sm-12 ftco-animate">
          <a href="{{ route('our-activities')}}" class="text-black text-decoration-none">
            <div class="boxx">
              <div class="headingg uppercase">
                <h3 class="text-center causes-heading">Fashion Shows</h3>
              </div>
              <div class="imgg">
                <img src="{{ asset('assets/images/fashionshow/fashionshow_imgx6.jpg')}}" alt="" width="100%">
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-sm-12 ftco-animate">
          <a href="{{ route('our-activities')}}" class="text-black text-decoration-none">
            <div class="boxx">
              <div class="headingg uppercase">
                <h3 class="text-center causes-heading">Industrial Visits</h3>
              </div>
              <div class="imgg">
                <img src="{{ asset('assets/images/industrial-visits/industrial-visits-2.jpg')}}" alt="" width="100%">
              </div>
            </div>
          </a>

        </div>
        <div class="col-md-4 col-sm-12 ftco-animate">
          <a href="{{ route('our-activities')}}" class="text-black text-decoration-none">
            <div class="boxx">
              <div class="headingg uppercase">
                <h3 class="text-center causes-heading">Festivity</h3>
              </div>
              <div class="imgg">
                <img src="{{ asset('assets/images/freshers-party/frehsers-2.jpg')}}" alt="" width="100%">
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-sm-12 ftco-animate">
          <a href="{{ route('our-activities')}}" class="text-black text-decoration-none">
            <div class="boxx">
              <div class="headingg uppercase">
                <h3 class="text-center causes-heading">Site Visit</h3>
              </div>
              <div class="imgg">
                <img src="{{ asset('assets/images/site-visit/sitevisit-8.jpg')}}" alt="" width="100%">
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-sm-12 ftco-animate">
          <a href="{{ route('our-activities')}}" class="text-black text-decoration-none">
            <div class="boxx">
              <div class="headingg uppercase">
                <h3 class="text-center causes-heading">Educational Tours</h3>
              </div>
              <div class="imgg">
                <img src="{{ asset('assets/images/tours/Long-Tours-3.jpg')}}" alt="" width="100%">
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-sm-12 ftco-animate">
          <a href="{{ route('our-activities')}}" class="text-black text-decoration-none">
            <div class="boxx">
              <div class="headingg uppercase">
                <h3 class="text-center causes-heading">Training and Workshops</h3>
              </div>
              <div class="imgg">
                <img src="{{ asset('assets/images/training-workshop/Class-Rooms-2.jpg')}}" alt="" width="100%">
              </div>
            </div>
          </a>

        </div>
        <div class="col-md-4 col-sm-12 ftco-animate">
          <a href="{{ route('our-activities')}}" class="text-black text-decoration-none">
            <div class="boxx">
              <div class="headingg uppercase">
                <h3 class="text-center causes-heading">Garba</h3>
              </div>
              <div class="imgg">
                <img src="{{ asset('assets/images/garba/Garba-5.jpg')}}" alt="" width="100%">
              </div>
            </div>
          </a>

        </div>
      </div>
      <a href="{{ route('our-activities')}}" class="btn my-btn px-4 py-2 mt-3">Explore</a>
    </div>
  </section>
  <!-- End Our Activities  -->

  <div class="under-line m-auto"></div>

  <!-- Why Choose us  -->
  <section class="pt-5 pb-5 keypoints">
    <div class="container">
      <div class="my-container">
        <div class="row d-flex">
          <div class="col-lg-12 ftco-animate">
            <h2 class="text-center logo-color fw-600 causes-heading">KEYPOINTS</h2>
            <h3 class="text-center fw-600 causes-heading mb-4">Why Choose Cadence?</h3>
            <p class="text-center causes-text text-justify my-text-black"> Cadence Academy Wadhaman Nagar, Design has
              been in the
              field
              of Fashion
              Designing &
              Interior
              Designing since the year 2002. Cadence, by doing its best for 18 years wants to contribute to the great
              ocean of designers and believes in creating achievers, not just certificate receivers. Cadence has a
              garden
              of professional alumni who are now spreading the fragrance of success in their respective fields.</p>
          </div>
          <div class="rowb">

            <div class="columnb ftco-animate">
              <div class="cardb">
                <div class="icon-wrapperb">
                  <i class="fa-regular fa-user" style="color: #ea4000; justify-content: center;
                                  display: flex;"></i>
                </div>
                <h4 class=" causes-heading logo-color">Expert Faculty</h4>
                <p class="causes-text my-text-black">We make sure that our students are taught the nuances of their
                  craft by expert
                  faculty.</p>
              </div>
            </div>
            <div class="columnb ftco-animate">
              <div class="cardb">
                <div class="icon-wrapperb">
                  <i class="fa-solid fa-plane-departure" style="color: #ea4000; justify-content: center;
                                  display: flex;"></i>
                </div>
                <h4 class=" causes-heading logo-color">Foreign Tours</h4>

                <p class="causes-text my-text-black">We strongly believe that our students must have a global view of
                  Fashion &
                  Interior.</p>
              </div>
            </div>
            <div class="columnb ftco-animate">
              <div class="cardb">
                <div class="icon-wrapperb">
                  <i class="fa-solid fa-wifi" style="color: #ea4000; justify-content: center;
                                                    display: flex;"></i>
                </div>
                <h4 class=" causes-heading logo-color">WiFi campus</h4>

                <p class="causes-text my-text-black">We ensure that our students get seamless connectivity on campus.
                </p>
              </div>
            </div>
            <div class="columnb ftco-animate">
              <div class="cardb">
                <div class="icon-wrapperb">
                  <i class="fa-solid fa-shirt" style="color: #ea4000; justify-content: center;
                                                    display: flex;"></i>
                </div>
                <h4 class="causes-heading logo-color">Fashion Shows</h4>

                <p class="causes-text my-text-black">Creations must be exhibited, Cadence organizes Fashion Shows and
                  exhibitions.</p>
              </div>
            </div>
            <div class="columnb ftco-animate">
              <div class="cardb">
                <div class="icon-wrapperb">
                  <i class="fa-solid fa-file-invoice" style="color: #ea4000; justify-content: center;
                                                    display: flex;"></i>
                </div>
                <h4 class="causes-heading logo-color">Scholarships</h4>

                <p class="causes-text my-text-black"> Talented students must have an opportunity to make it big in the
                  Fashion &
                  Interior industry.</p>
              </div>
            </div>
            <div class="columnb ftco-animate">
              <div class="cardb">
                <div class="icon-wrapperb">
                  <i class="fa-solid fa-briefcase" style="color: #ea4000; justify-content: center;
                                                    display: flex;"></i>
                </div>
                <h4 class="causes-heading logo-color">Placement/Internship</h4>

                <p class="causes-text my-text-black">
                  We have excellent tie-ups with the Fashion & Interior industry. We also offer internships.</p>
              </div>
            </div>
            <div class="columnb ftco-animate">
              <div class="cardb">
                <div class="icon-wrapperb">
                  <i class="fa-solid fa-book" style="color: #ea4000; justify-content: center;
                                                    display: flex;"></i>
                </div>
                <h4 class="causes-heading logo-color">Syllabus Tailored For Success</h4>

                <p class="causes-text my-text-black">Our syllabus matches the needs of the fashion & interior industry.
                </p>
              </div>
            </div>
            <div class="columnb ftco-animate">
              <div class="cardb">
                <div class="icon-wrapperb">
                  <i class="fa-solid fa-pen-to-square" style="color: #ea4000; justify-content: center;
                                                    display: flex;"></i>
                </div>
                <h4 class="causes-heading logo-color">Personalized Attention</h4>
                <p class="causes-text my-text-black"> We take great care and give personal attention to help students.
                </p>
              </div>
            </div>
            <div class="columnb ftco-animate">
              <div class="cardb">
                <div class="icon-wrapperb">
                  <i class="fa-solid fa-building" style="color: #ea4000; justify-content: center;
                                                    display: flex;"></i>
                </div>
                <h4 class="causes-heading logo-color">Institute-Industry Interface
                </h4>
                <p class="causes-text my-text-black">We invite professionals to conduct seminars, guest lectures etc.
                </p>
              </div>
            </div>
            <div class="columnb ftco-animate">
              <div class="cardb">
                <div class="icon-wrapperb">
                  <i class="fa-solid fa-laptop" style="color: #ea4000; justify-content: center;
                                                    display: flex;"></i>
                </div>
                <h4 class="causes-heading logo-color">Complete Automation(ERP)</h4>
                <p class="causes-text my-text-black">We have a complete automation system wherein we help our students
                  via E2E.</p>
              </div>
            </div>
            <div class="columnb ftco-animate">
              <div class="cardb">
                <div class="icon-wrapperb">
                  <i class="fa-regular fa-bookmark" style="color: #ea4000; justify-content: center;
                                                    display: flex;"></i>
                </div>
                <h4 class="causes-heading logo-color">In-House Publication</h4>
                <p class="causes-text my-text-black">
                  Tailor made Exclusive courseware for Cadence Students for every subject.</p>
              </div>
            </div>
            <div class="columnb ftco-animate">
              <div class="cardb">
                <div class="icon-wrapperb">
                  <i class="fa-regular fa-bookmark" style="color: #ea4000; justify-content: center;
                                                    display: flex;"></i>
                </div>
                <h4 class="causes-heading logo-color">Workshop</h4>
                <p class="causes-text my-text-black">
                  Industries experts Famous FDs and Renowned architect and Designer section to be added</p>
              </div>
            </div>

          </div>
        </div>
      </div>
  </section>
  <!-- End Why Choose us  -->

  <section class="ftco-section welcome pt-5 pb-5" id="notice">
    <!-- notic Start -->
    <div class="container pb-5">
      <div class="row align-items-center">
        <div class="col-12 ftco-animate">

        </div>
        <div class="col-lg-6 ftco-animate">

          <img class="img-fluid rounded w-100 shadow" width="100%" src="{{ asset('assets/images/unnamed.png')}}">

        </div>
        <div class="col-lg-6 ftco-animate">
          <div class="circular-notice">
            <div class="heading-bg">
              <h2 class="mb-4 logo-color causes-heading text-center"><a href="" target="_blank" class="text-decoration-none" style="color: #ffffff;">Circular And Notice</a></h2>
            </div>


            <marquee behavior="scroll" direction="up" class="mt-2 p-4">
              <p class=" text-justify causes-text my-text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Quasi recusandae amet laborum vel dolorem iusto eaque molestiae nemo, voluptatum totam quia, magni dolorum
                impedit nihil reiciendis? Iste at asperiores assumenda?
              </p>
            </marquee>
          </div>


          <!-- <a href="{{ route('about')}}" class="btn my-btn px-4 py-2 mt-3">More Info</a> -->
          </a>
        </div>
      </div>
    </div>
    <!-- notice End -->

  </section>

  <div class="under-line m-auto"></div>


  <!-- Testimonial slider  -->

  <section class="pt-5 pb-4 testimonial">
    <div class="content-wrapper ftco-animate">
      <h2 class="causes-heading fw-600 logo-color text-center mb-4">STUDENT TESTIMONIALS</h2>
      <!-- <div class="under-line"></div> -->
      <div class="wrapper-for-arrows py-2">
        <div id="reviewWrap" class="review-wrap">
          <div id="imgDiv" class="">
          </div>
          <div id="personName"></div>
          <div id="profession"></div>
          <div id="description" class="scrollable-content">
          </div>
        </div>
        <div class="left-arrow-wrap arrow-wrap">
          <div class="arrow" id="leftArrow"></div>
        </div>
        <div class="right-arrow-wrap arrow-wrap">
          <div class="arrow" id="rightArrow"></div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Testimonial slider  -->

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
              <a href="{{route('contact-us')}}"><i class="fa fa-map-marker-alt me-3 text-white-90"></i></a>
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
              <li><a href="{{route('home')}}" class="text-decoration-none text-white-90"><i class="fa-solid fa-angles-right"></i>&nbsp; Home</a></li>
              <li><a href="{{route('home')}}" class="text-decoration-none text-white-90"><i class="fa-solid fa-angles-right"></i>&nbsp; Home</a></li>
              <li><a href="{{ route('about')}}" class="text-decoration-none text-white-90"><i class="fa-solid fa-angles-right"></i>&nbsp; About</a></li>
              <li><a href="our-activities" class="text-decoration-none text-white-90"><i class="fa-solid fa-angles-right"></i>&nbsp; Our Activities</a></li>
              <li><a href="{{ route('gallery')}}" class="text-decoration-none text-white-90"><i class="fa-solid fa-angles-right"></i>&nbsp; Gallery</a></li>
              <li><a href="{{ route('placements')}}" class="text-decoration-none text-white-90"><i class="fa-solid fa-angles-right"></i>&nbsp; Placements</a></li>
              <li><a href="{{route('contact-us')}}" class="text-decoration-none text-white-90"><i class="fa-solid fa-angles-right"></i>&nbsp; Contact</a></li>
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

  <!-- Enquiry popup button  -->
  <script>
    function openPopupx() {
      document.getElementById("myModal").style.display = "block";
    }
  </script>
  <!-- End Enquiry popup button  -->

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

  <!-- Testimonial Slider  -->
  <script src="{{ asset('assets/js/gsap.min.js')}}"></script>
  <script>
    const reviewWrap = document.getElementById("reviewWrap");
    const leftArrow = document.getElementById("leftArrow");
    const rightArrow = document.getElementById("rightArrow");
    const imgDiv = document.getElementById("imgDiv");
    const personName = document.getElementById("personName");
    const profession = document.getElementById("profession");
    const description = document.getElementById("description");
    const surpriseMeBtn = document.getElementById("surpriseMeBtn");
    const chicken = document.querySelector(".chicken");

    let isChickenVisible;

    let people = [{
        photo: 'url("https://cdn.pixabay.com/photo/2018/03/06/22/57/portrait-3204843_960_720.jpg")',
        name: "Akshay Satpute",
        profession: "April 2022",
        description: "My experience was very good in Cadence Academy Wardhaman Nagar. I like to study here to do work after my class hours too. Faculties are relly good and knowledgeable. I like to thank Cadence Academy Wardhaman Nagar, the best institute ever... "
      },
      {
        photo: 'url("https://cdn.pixabay.com/photo/2018/03/06/22/57/portrait-3204843_960_720.jpg")',
        name: "Pranjali Kandalkar",
        profession: "February 2022",
        description: "I am extremely happy with the study patten and teaching process of Cadence Wardhaman Nagar. The faculties make all the concept easy to understand through various mode of teaching pattern. Thank you Cadence Wardhaman Nagar for helping me in understading my potential..."
      },
      {
        photo: 'url("https://cdn.pixabay.com/photo/2018/03/06/22/57/portrait-3204843_960_720.jpg")',
        name: "Komal Krishnaji Raghorte",
        profession: "February 2022",
        description: "Cadence Academy Wardhaman Nagar is a great academy. They have a very good staff and teaching is done very nicely. All teachers are very frank that's why I feel comfortable with them. I really feel proud that I'am student of Cadence Academy Wardhaman Nagar..."
      },

      {
        photo: "url('https://cdn.pixabay.com/photo/2019/02/11/20/20/woman-3990680_960_720.jpg')",
        name: "Aashi Model",
        profession: "March 2022",
        description: "Cadence has always believed in helping and guiding its students and it was no different in the placement season. Regular classes were held at our Academy to help us with our practical skills. The faculties are very supportive, co-operative and humble. Thank you for everything Cadence..."
      },

      {
        photo: "url('https://cdn.pixabay.com/photo/2016/11/21/12/42/beard-1845166_960_720.jpg')",
        name: "Sakshi Pothare",
        profession: "April 2022",
        description: "The Experience of learning at Cadence Wardhaman Nagar has been great. The institute is one of the best in its kind, as there are plenty of opportunities to learn here in various activities and class visits. The faculties are best as they cater to each students needs and help them in all ways related to studies. Thank you Cadence Wardhaman Nagar for making me what I am today..."
      },

      {
        photo: "url('https://cdn.pixabay.com/photo/2014/10/30/17/32/boy-509488_960_720.jpg')",
        name: "Dhananjay Pathrabe",
        profession: "March 2022",
        description: "Being a part of Cadence Wardhaman Nagar makes me feel proud and happy as I am very much satisfied with the syllabus and the way the faculties makes the subject easy for us. Thank you Cadence Wardhaman Nagar for giving me a great platform to shape my creativity..."
      }
    ];

    imgDiv.style.backgroundImage = people[0].photo;
    personName.innerText = people[0].name;
    profession.innerText = people[0].profession;
    description.innerText = people[0].description;
    let currentPerson = 0;

    //Select the side where you want to slide
    function slide(whichSide, personNumber) {
      let reviewWrapWidth = reviewWrap.offsetWidth + "px";
      let descriptionHeight = description.offsetHeight + "px";
      //(+ or -)
      let side1symbol = whichSide === "left" ? "" : "-";
      let side2symbol = whichSide === "left" ? "-" : "";

      let tl = gsap.timeline();

      if (isChickenVisible) {
        tl.to(chicken, {
          duration: 0.4,
          opacity: 0
        });
      }

      tl.to(reviewWrap, {
        duration: 0.4,
        opacity: 0,
        translateX: `${side1symbol + reviewWrapWidth}`
      });

      tl.to(reviewWrap, {
        duration: 0,
        translateX: `${side2symbol + reviewWrapWidth}`
      });

      setTimeout(() => {
        imgDiv.style.backgroundImage = people[personNumber].photo;
      }, 400);
      setTimeout(() => {
        description.style.height = descriptionHeight;
      }, 400);
      setTimeout(() => {
        personName.innerText = people[personNumber].name;
      }, 400);
      setTimeout(() => {
        profession.innerText = people[personNumber].profession;
      }, 400);
      setTimeout(() => {
        description.innerText = people[personNumber].description;
      }, 400);

      tl.to(reviewWrap, {
        duration: 0.4,
        opacity: 1,
        translateX: 0
      });

      if (isChickenVisible) {
        tl.to(chicken, {
          duration: 0.4,
          opacity: 1
        });
      }
    }

    function setNextCardLeft() {
      if (currentPerson === 3) {
        currentPerson = 0;
        slide("left", currentPerson);
      } else {
        currentPerson++;
      }

      slide("left", currentPerson);
    }

    function setNextCardRight() {
      if (currentPerson === 0) {
        currentPerson = 3;
        slide("right", currentPerson);
      } else {
        currentPerson--;
      }

      slide("right", currentPerson);
    }

    leftArrow.addEventListener("click", setNextCardLeft);
    rightArrow.addEventListener("click", setNextCardRight);

    surpriseMeBtn.addEventListener("click", () => {
      if (chicken.style.opacity === "0") {
        chicken.style.opacity = "1";
        imgDiv.classList.add("move-head");
        surpriseMeBtn.innerText = "Remove the chicken";
        surpriseMeBtn.classList.remove("surprise-me-btn");
        surpriseMeBtn.classList.add("hide-chicken-btn");
        isChickenVisible = true;
      } else if (chicken.style.opacity === "1") {
        chicken.style.opacity = "0";
        imgDiv.classList.remove("move-head");
        surpriseMeBtn.innerText = "Surprise me";
        surpriseMeBtn.classList.add("surprise-me-btn");
        surpriseMeBtn.classList.remove("hide-chicken-btn");
        isChickenVisible = false;
      }
    });

    window.addEventListener("resize", () => {
      description.style.height = "100%";
    });
  </script>
  <!-- End Testimonial Slider  -->


  <!-- our courses slider  -->
  <!-- First image slider script  -->
  <script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      let i;
      const slides = document.getElementsByClassName("mySlides");
      const dots = document.getElementsByClassName("dot");

      if (n > slides.length) {
        slideIndex = 1;
      }

      if (n < 1) {
        slideIndex = slides.length;
      }

      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }

      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active-dots", "");
      }

      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active-dots";
    }

    // Automatic slideshow
    setInterval(() => {
      plusSlides(1);
    }, 4000); // Change slide every 4 seconds
  </script>

  <!-- Second Image Slider script  -->
  <script>
    let slideIndex2 = 1;
    showSlides2(slideIndex2);

    function plusSlides2(n) {
      showSlides2(slideIndex2 += n);
    }

    function currentSlide2(n) {
      showSlides2(slideIndex2 = n);
    }

    function showSlides2(n) {
      let i;
      const slides = document.getElementsByClassName("mySlides2");
      const dots = document.getElementsByClassName("dot2");

      if (n > slides.length) {
        slideIndex2 = 1;
      }

      if (n < 1) {
        slideIndex2 = slides.length;
      }

      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }

      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active-dots", "");
      }

      slides[slideIndex2 - 1].style.display = "block";
      dots[slideIndex2 - 1].className += " active-dots";
    }

    // Automatic slideshow
    setInterval(() => {
      plusSlides2(1);
    }, 5000); // Change slide every 5 seconds
  </script>
  <!-- End our courses slider  -->






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
  <script src="{{ asset('assets/js/google-map.js')}}"></script>
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