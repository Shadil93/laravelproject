<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home - Append Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
<!--cd links-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!-- Fonts -->
  <link href="{{asset('https://fonts.googleapis.com')}}" rel="preconnect">
  <link href="{{asset('https://fonts.gstatic.com')}}" rel="preconnect" crossorigin>
  <link href="{{asset('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap')}}" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css ')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Append
  * Updated: Feb 01 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/append-bootstrap-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

<style>
  .hero 
  {
background-image: url("assets/img/hero-bg.jpg");
background-repeat: no-repeat;
  }
  .abc:hover
  {
transform: scale(1.05);
  }
  .abc 
  {
    transition:transform 3s;
  }
</style>


</head>

<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Car Rental</h1>
        <span>.</span>
      </a>

      <!-- Nav Menu -->
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.html#hero" class="active">Home</a></li>
          <li><a href="index.html#about">car</a></li>
          <li><a href="index.html#services">Services</a></li>

          <li class="dropdown has-dropdown"><a href="{{route('login')}}">login<i class="bi bi-chevron-down"></i></a>
            <ul class="dd-box-shadow">
            <li><a href="{{route('login')}}">admin</a></li>
              <li><a href="{{route('loginuser')}}">user</a></li>
             
            </ul>
          </li>
          <li class="dropdown has-dropdown"><a href="#"><sapn><i class="bi bi-person-circle"></i></sapn><i class="bi bi-chevron-down"></i></a>
            <ul class="dd-box-shadow">
            <li><a href="{{route('register')}}">register</a></li>
          
              <li class="dropdown has-dropdown"><a href="#"><span>profile</span> <i class="bi bi-chevron-down"></i></a>
                <ul class="dd-box-shadow">
                <li class="dropdown has-dropdown"><a href="#"><span>profile</span> <i class="bi bi-chevron-down"></i></a>
                 
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li>
         
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
          
        <form class="d-flex" action="{{route('do_search')}}" method="POST">
          @csrf
        <input class="form-control me-2" type="search" name="search" id="" placeholder="Search" >
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
     
           
        
      </nav><!-- End Nav Menu -->

      

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- Hero Section - Home Page --->
    <section id="hero" class="hero">

      <!-- <img src="" alt="" data-aos="fade-in"> -->

      <div class="container">
        <div class="row">
          <div class="col-12 d-flex ">
          @foreach($data as $datas)
          <div class="abc card mx-2" style="width: 13rem;box-shadow:7px 10px 7px 10px grey">
          <img src="{{ asset('storage/images/'.$datas->photo) }}" class="position-relative" width="50px" height="50px">
  <div class="card-body">
  <p class="text-dark fs-6">Carname:{{$datas->Carname}}</p>
    <p class="text-dark fs-6">Rate:{{$datas->rate}}</p>
    <p class="text-dark fs-6">model:{{$datas->models}}</p>
    <p class="text-dark fs-6">location:{{$datas->location}}</p>
          
    <a href="{{route('loginuser')}}" class="btn btn-danger">book now</a> 
  </div>
</div>

@endforeach
          </div>
       
        </div>
      </div>

    </section><!-- End Hero Section -->

    <!-- Clients Section - Home Page --->
    <section id="clients" class="clients">

      <div class="container-fluid" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div><!-- End Client Item --->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

        </div>

      </div>

    </section><!-- End Clients Section -->
    

    <!-- About Section - Home Page  -->
    <div class="container" >
      <div class="row" > 
        <div class="col-12 d-flex flex-wrap">

    

        </div>
    </div>
    </div>
             
  

  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Append</span>
          </a>
          <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>A108 Adam Street</p>
          <p>New York, NY 535022</p>
          <p>United States</p>
          <p class="mt-4"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
          <p><strong>Email:</strong> <span>info@example.com</span></p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>&copy; <span>Copyright</span> <strong class="px-1">Append</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer><!-- End Footer -->

  <!-- Scroll Top Button -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>