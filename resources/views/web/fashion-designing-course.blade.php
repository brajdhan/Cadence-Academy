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


  <style>
    .divbox {
      box-shadow: 0px 0px 10px 1px rgb(200, 200, 200);
      padding: 4%;
      height: 100%;
      border-radius: 5px;
      transition-duration: 0.6s;
      font-family: fongsang;
    }

    .divbox:hover {
      scale: 1.01;
      box-shadow: 0px 0px 10px 1px gray;
      transform: translate(0px, -5px);
    }



    .btn-custom {
      cursor: pointer;
      display: inline-block;
      text-align: center;
      white-space: nowrap;
      vertical-align: middle;
      position: relative;
      background-color: #ea4000;
      line-height: 24px;
      border: 0;
      color: #fff;
      font-size: 14px;
      font-weight: 600;
      padding: 12px 30px;
      -webkit-transition: 0.3s;
      -o-transition: 0.3s;
      transition: 0.3s;
      text-transform: uppercase;
      border-radius: 8px;
      z-index: 1;
      -webkit-box-shadow: 4px 3px 24px rgba(133, 183, 44, 0.5);
      box-shadow: 4px 3px 24px rgba(133, 183, 44, 0.5);
    }

    .col1 {
      color: #ea4000;
    }
  </style>

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
              <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Courses
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('fashion-designing-course')}}">Fashion Designing</a>
                </li>
                <li><a class="dropdown-item" href="{{ route('fashion-designing-course')}}">Interior
                    Designing</a></li>
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
          <h1 class="mb-2 text-white">Fashion Designing</h1>
          <p class="breadcrumbs text-white"><span class="mr-2"><a href="{{ route('home')}}" class="text-white text-decoration-none">Home <i class="ion-ios-arrow-forward"></i></a></span>
            <span>Fashion Designing</span>
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- Upper Section Start -->



  <section class="section about-sec style-3 mt-4 mb-4">
    <div class="container">
      <div class="row">
        <h2 class="text-center logo-color fw-600 causes-heading mb-5">COURSES</h2>
        <div class="col-lg-6 mb-2">
          <div class="about-wrapper">
            <img src="assets/images/fashion-designing/fashionx7.jpg" alt="image" class="home-img shadow" width="100%">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="section-title-wrap">
            <h2 class="title causes-heading"> <strong class="col1">FASHION DESIGN</strong> COURSE IN NAGPUR
            </h2>
            <h3 class="subtitle causes-text italic">Fashion design is the art of applying design, aesthetics and natural
              beauty to clothing and its accessories.</h3>
            <div class="under-line-short"></div>
            <p class="text-justify causes-text mb-0">
              Learn Best and Biggest Institute of fashion design course in Nagpur from Cadence academy, Wardhaman Nagar Nagpur. It is a well-known
              institute for fashion design courses that provide diplomas in fashion technology. Fashion design is the
              art of applying design, aesthetics, and natural beauty to clothing and its accessories. It is influenced
              by cultural and social attitudes and has varied over time and place. Fashion designers work in a number of
              ways in designing clothing and accessories. In today’s life, a fashion design course is the most preferred
              carrier option for students. scope for this is continuously growing. <br>

              People nowadays are more conscious of their fashion and dress thus fashion design course in Nagpur create
              a huge demand for students. This is because it will require a keen sense of fashion with some technical
              skills, your passion for fashion, and the talent to explore your knowledge. The fashion industry is
              incredibly fast-paced, that focuses on the newly emerging designs and fashion trends when they arrived.
            </p>
          </div>

          <div class="about-btn mt-4">
            <a href="{{ route('online-admission')}}" class="btn-custom primary shadow-none text-decoration-none" tabindex="0">Apply Now <i class="fas fa-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="row d-flex pt-4">
        <div class="col-md-12 col-lg-4 py-2">
          <div class="divbox">
            <div class="row">
              <div class="col-md-9 ">
                <h3 class=" font2 causes-text">Diploma in Fashion Technology(DFT)</h3>
                <ul>
                  <li><strong>Duration: </strong> 1 Year</li>
                  <li><strong> Level:</strong> Diploma</li>
                  <li><strong>Eligibility:</strong>10th Pass</li>
                </ul>
              </div>
            </div>
          </div>

        </div>

        <div class="col-md-12 col-lg-4 py-2">
          <div class="divbox">
            <div class="row">
              <div class="col-md-9 ">
                <h3 class=" font2 causes-text">Advanced Diploma in Fashion Technology(ADFT)</h3>
                <ul>
                  <li><strong>Duration: </strong> 2 Year</li>
                  <li><strong> Level:</strong>Advanced Diploma</li>
                  <li><strong>Eligibility:</strong>10th Pass OR 12Th Pass/Equivalent Certificate</li>
                </ul>
              </div>
            </div>
          </div>

        </div>

        <div class="col-md-12 col-lg-4 py-2">
          <div class="divbox">
            <div class="row">
              <div class="col-md-9 ">
                <h3 class=" font2 causes-text">B.Voc in Fashion Technology(B.Voc FT)</h3>
                <ul>
                  <li><strong>Duration: </strong> 3 Year</li>
                  <li><strong> Level:</strong> Bachelor Of Vocation(UG)</li>
                  <li><strong>Eligibility:</strong>12th Pass/Equivalent Certificate</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="under-line m-auto"></div>











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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
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