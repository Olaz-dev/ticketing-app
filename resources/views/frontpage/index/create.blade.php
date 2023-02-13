<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Selecao Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('IndexPage/assets/img/favicon.png')}}" rel="icon">
  <link href="{{ asset('IndexPage/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('IndexPage/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{ asset('IndexPage/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ asset('IndexPage/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('IndexPage/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('IndexPage/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('IndexPage/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('IndexPage/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{ asset('IndexPage/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('IndexPage/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Selecao - v4.10.0
  * Template URL: https://bootstrapmade.com/selecao-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html">Selecao</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="{{ asset('IndexPage/assets/img/logo.png')}}" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{ route('index.index') }}">Home Page</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="{{ route('index.create') }}">Submit Ticket</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4" data-aos="fade-right">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-12 form-group">
                    <label for="Title">Title<span class="text-danger">*</span></label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
              <div class="form-group mt-3">
                <label for="Message">Message<span class="text-danger">*</span></label>
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              
              <div class="form-group mt-3">
                        <label class="form-label">Priority  <span class="text-danger">*</span></label>
                            <select class="form-control ps-4" name="" id="">
                                <option value="">Select Priority</option>
                                @foreach ($priorities  as $priority )
                                        <option  value="">{{ ucfirst($priority->priority) }}</option>
                                @endforeach
                            </select>
              </div>
              <div class="col-md-6 form-group">
                <div class="md-6">
                       <label class="form-label">Upload <span class="text-danger">*</span></label>
                           <input class="form-control ps-4" type="file">
                </div>
             </div>
              
              <div class="form-group mt-3">
                    <div class="form-check">
                        <label class="form-label">Labels  <span class="text-danger">*</span></label>
                        @foreach ($labels  as $label )
                        <label for="javascript">{{ucfirst($label->label)}}</label>  
                            <input type="checkbox" value="{{$label->label }}" name="label" class="checkoption" {{ old('labels') == "$label->label" ? 'checked' : '' }} >
                        @endforeach
                    </div>
              </div>
              <br>
              <div class="form-group mt-3">
                 <div class="form-check">
                     <label class="form-label">Categories  <span class="text-danger">*</span></label>
                     @foreach ($categories  as $category )
                         <input type="checkbox" value="{{$category->name }}" name="label" class="checkoption2" for="flexCheckDefault" {{ old('labels') == "$category->name" ? 'checked' : '' }} >
                         <label class="form-check-label" for="javascript">{{ucfirst($category->name)  }}</label>  
                     @endforeach
                  </div>
              </div>
            
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Selecao</h3>
      <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Selecao</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/selecao-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('IndexPage/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{ asset('IndexPage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('IndexPage/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('IndexPage/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('IndexPage/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('IndexPage/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('IndexPage/assets/js/main.js')}}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){

     $('.checkoption').click(function() {
        $('.checkoption').not(this).prop('checked', false);
     });

     $('.checkoption2').click(function() {
        $('.checkoption2').not(this).prop('checked', false);
     });

  });
  </script>

</body>

</html>