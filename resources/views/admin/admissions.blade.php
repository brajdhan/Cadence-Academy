<!DOCTYPE html>
<html lang="en">

<head>
  <title>Cadence Academy</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&amp;display=swap"
    rel="stylesheet">
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
    <nav class="navbar navbar-expand-lg bg-white bg-body-tertiary">
      <div class="container-fluid">
       
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav m-auto mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.contacts')}}">Contact Info</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="{{ route('admin.course')}}">Course Enquiry</a>
            </li>

        
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.gallery')}}">Gallery</a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link active"   aria-current="page" href="{{ route('admin.admissions')}}">Admissions</a>
            </li>
            
          </ul>

        </div>
      </div>
    </nav>
  </header>
  <!-- End Header  -->

  
  <section class="mt-5 mb-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-7 col-sm-12 pt-2 ftco-animate">
          <h2>Admissions Information</h2>

          <div>
            <table class="table">
              <thead>
                <th scope="col">Sr</th>
                <th scope="col">First Name</th>
                <th scope="col">Father Name</th>
                <th scope="col">Mother Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile</th>
                <th scope="col">Nationality</th>
                <th scope="col">Date Of Birth</th>
                <th scope="col">Gender</th>
                <th scope="col">Marital Status</th>
                <th scope="col">Aadhar Number</th>
                <th scope="col">Category</th>
                <th scope="col">Course</th>
                <th scope="col">Address</th>
              </thead>
              <tbody>
                @forelse($admissions as $admission)
                <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$admission->first_name}}</td>
                <td>{{$admission->middle_name}}</td>
                <td>{{$admission->mother_name}}</td>
                <td>{{$admission->last_name}}</td>
                <td>{{$admission->email}}</td>
                <td>{{$admission->mobile}}</td>
                <td>{{$admission->nationality}}</td>
                <td>{{$admission->date_of_birth}}</td>
                <td>{{$admission->gender}}</td>
                <td>{{$admission->marital_status}}</td>
                <td>{{$admission->aadhar_number}}</td>
                <td>{{$admission->category}}</td>
                <td>{{$admission->course}}</td>
                <td>{{$admission->address}}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="15">There are no gallery.</td>
                </tr>
              @endforelse
              </tbody>
            </table>
            {!! $admissions->withQueryString()->links('pagination::bootstrap-5') !!}
          </div>
        </div>
      </div>
    </div>
  </section>

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
  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
  <script src="{{asset('assets/js/google-map.js')}}"></script>
  <script src="{{ asset('assets/js/main.js')}}"></script>

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
 
</body>


</html>