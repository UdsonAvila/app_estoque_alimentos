@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Estoque já</title>




  <!-- Vendor CSS Files -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <!-- Template Main CSS File -->
  <link href="../css/style.css" rel="stylesheet">

    </head>
    <body >
        <div class="navbar navbar-dark bg-primary">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" style="color:white" >Home</a>
                    @else
                        <a href="{{ route('login') }}" style="color:white" >Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" style="color:white" >Registro</a>
                        @endif
                    @endauth
                </div>
            @endif

        
        </div>


  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row justify-content-between">
          <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
            <img src="assets/img/about-img.svg" class="img-fluid" alt="" data-aos="zoom-in">
          </div>
          <div class="col-lg-6 pt-5 pt-lg-0">
            <h3 data-aos="fade-up">Voluptatem dignissimos provident quasi</h3>
            <p data-aos="fade-up" data-aos-delay="100">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
            </p>
            <div class="row">
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <em class="bx bx-receipt"></i>
                <h4>Corporis voluptates sit</h4>
                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
              </div>
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <em class="bx bx-cube-alt"></i>
                <h4>Ullamco laboris nisi</h4>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

   

  


    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Entre em Contato</h2>
         
        </div>

        <div class="col-12">

          <div class="col-4" data-aos="fade-up" data-aos-delay="100"  style="float:left;">
            <div class="info">
              <div class="address">
                <em class="bi bi-geo-alt"></i>
                <h4>Localização:</h4>
                <p>Rua Bahia 1449</p>
              </div>

              <div class="email">
                <em class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>esqtoqueja@esqtoqueja.com.br</p>
              </div>
            </div>

          </div>

          <div class="col-8" data-aos="fade-up" data-aos-delay="200"  style="float:left;">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Nome</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="name">Email</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

  

      </div>
      </div>
    </section><!-- End Contact Us Section -->
  <!-- ======= Footer ======= -->
  <footer id="footer">

   


      <div class="container">
        <div class="col-12" >

          <div class="col-3" style="float:left;">
            <h3>Ninestars</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-3" style="float:left;">
            <h4>Useful Links</h4>
            <ul>
              <li><em class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><em class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><em class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><em class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><em class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-3" style="float:left;">
            <h4>Our Services</h4>
            <ul>
              <li><em class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><em class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><em class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><em class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><em class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-3" style="float:left;">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><em class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><em class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><em class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><em class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><em class="bx bxl-linkedin"></i></a>
            </div>
          </div>

    
      </div>


    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Ninestars</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
      
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->
  </main><!-- End #main -->



  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><em class="bi bi-arrow-up-short"></i></a>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </body>
</html>
