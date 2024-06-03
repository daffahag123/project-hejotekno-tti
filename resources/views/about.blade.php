<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HEJOTEKNO</title>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700,500' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css"> <!-- Font Awesome -->
  <link rel="stylesheet" href="css/normalize.css"> <!-- CSS reset -->
  <link rel="stylesheet" href="css/bootstrap.min.css"> <!-- Bootstrap Grid -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.min.css"><!-- Animate -->
  <link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
  <link rel="stylesheet" href="css/magnific-popup.css"> <!-- Resource style -->
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- overlay cart -->
  <style>
     .team-image {
    width: 100%; /* Adjust the width as needed */
    /* max-width: auto; Optional: to cap the maximum size */
    height: auto; /* Maintain aspect ratio */
    background-color: green;
  }
    .overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5); /* warna hitam dengan opacity 0.5 */
      z-index: 9998; /* letakkan di bawah cart-overlay */
      display: none; /* sembunyikan secara default */
    }
    #cart-overlay {
      position: fixed;
      top: 0;
      right: -300px; /* Start off-screen */
      width: 300px;
      height: 100%;
      background-color: rgba(255, 255, 255, 1);
      z-index: 9999;
      transition: right 0.3s ease; /* Add transition for smooth sliding */
    }
    #cart-content {
      position: absolute;
      top: 50%;
      right: 0;
      transform: translateY(-50%);
      width: 100%;
      padding: 20px;
      background-color: #fff;
      color: #333;
    }
    #cart-content h3 {
      margin-top: 0;
    }
    #checkout-btn {
      display: block;
      margin-top: 20px;
      padding: 10px 20px;
      background-color: #333;
      color: #fff;
      text-align: center;
      text-decoration: none;
    }
    #checkout-btn:hover {
      background-color: #555;
    }
    .social-media-icons a {
      padding: 20px;
    }
  </style>
</head>
<body>
  <div id="cart-overlay">
    <div id="cart-content">
      <h3>Your Cart</h3>
      <div class="cart-items">
        <!-- Isi dengan konten keranjang belanja -->
      </div>
      <a href="#" id="checkout-btn">Proceed to Checkout</a>
    </div>
  </div>
  <div class="overlay"></div>

  @include('components.header')

  <section id="header-about">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="right-side">
            <br><br><br><br><br><br><br><br>
            <h4 style="text-align: center; color: white;" class="wow fadeInUp">Our Story</h4><br>
          </div>
        </div>
        <div class="col-md-6">
          <div class="left-side">
            <h1 style="text-align: center;" class="wow fadeInUp">About Us</h1><br>
            <p style="text-align: justify;" class="wow fadeInUp" data-wow-delay=".2s">
              PT TOP TEKNO INDO (TTI) adalah anak perusahaan Hejotekno yang berfokus pada pengelolaan operasional. Mereka berpusat di Jalan Kapur, Cibuntu, Kecamatan Bandung Kulon, Kota Bandung, Jawa Barat, dan aktif dalam manajemen sampah di Kota Banjar, Jawa Barat. Kolaborasi dengan Pemerintah Kota Banjar dalam program Kawasan Minimasi Sampah Mandiri (Kamisama) menjadi bagian penting dari kontribusi mereka.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="our-team">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2>Our Team</h2>
          <img src="images/team.png" alt="Our Team" class="team-image">
          <br><br>
        </div>
      </div>
    </div>
  </section>

  <section id="social-media">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2>For more information and updates, follow us on:</h2>
          <br>
          <div class="social-media-icons">
            <a href="https://www.instagram.com/hejotekno.indonesia/" target="_blank">
              <i class="fa fa-instagram fa-3x" style="color: black;"></i>
            </a>
            <a href="https://www.youtube.com/channel/UCiPGPJWy0f7eB4tuV0lCVsg/videos" target="_blank">
              <i class="fa fa-youtube-play fa-3x" style="color: black;"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  @include('components.footer')

  <script src="js/jquery-2.1.4.min.js"></script> <!-- jQuery -->
  <script src="js/bootstrap.min.js"></script>  <!-- Bootstrap -->
  <script src="js/wow.min.js"></script>  <!-- wow -->
  <script src="js/jquery.magnific-popup.min.js"></script>  <!-- wow -->
  <script src="js/main.js"></script>  <!-- Main Script -->
  
</body>
</html>
