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
  <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
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

    .logokamisama {
      display: block;
      margin: 0 auto; /* Center the image horizontally */
      max-width: 50%; /* Adjust this value to make the image smaller */
      height: auto;
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

  <section id="header">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
          <h1 class="wow fadeInUp"><b>Teknologi Ramah Lingkungan untuk Masa Depan Berkelanjutan</b></h1><br>
          <p style="text-align: center" ,class="wow fadeInUp" data-wow-delay=".2s">PT. TOP TEKNO INDO</p>
          <a href="https://www.youtube.com/watch?v=SUqqTbDnHSs" class="btn btn-lg video-btn wow fadeInUp lightbox mfp-iframe" data-wow-delay=".3s" data-effect="mfp-zoom-in"><i class="fa fa-play"></i> Watch Video</a>
        </div>
      </div>
    </div>
  </section>
  <section id="features">
    <div class="container">
      <div class="row">
        <div class="col-md-6 feature-item">
          <div class="feature wow fadeInUp">
            <div class="f-icon"><i class="lnr lnr-leaf"></i></div>
            <div class="f-description">
              <h4>Environment Friendly</h4>
              <p style="text-align: justify">Project Inovasi yang mengedepankan produk teknologi ramah lingkungan yang memiliki integrasi antara teknologi modern dengan ilmu lingkungan untuk mengurangi dampak negatif dari aktifitas manusia.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 feature-item">
          <div class="feature wow fadeInUp" data-wow-delay=".1s">
            <div class="f-icon"><i class="lnr lnr-smile"></i></div>
            <div class="f-description">
              <h4>Our Goals</h4>
              <p style="text-align: justify">Bertujuan untuk menemukan dan mengembangkan cara-cara untuk menyediakan kebutuhan bagi manusia tanpa menyebabkan kerusakan lingkungan.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- //Features -->

  <section id="iphone-feature">
    <div class="container">
      <div class="row">
        <div class="col-md-5 col-md-offset-7">
          <!-- <h2>
            StungtaXPindad
          </h2> -->
          <img src="images/stungtaxpindadtext.png" alt="stungtaxpindad" width="400">
          <br><br>

          <p style="text-align: justify"> 
            Compact & Portable.
            <br><br>
            Smokeless Incinerator adalah sebuah produk solusi Karya Anak Bangsa untuk penanganan masalah sampah dengan menggunakan produk teknologi ramah lingkungan dan hemat energi.
          </p>
          <div class="btns-container">
            <a href="product_detail/product-1" class="btn btn-green">See more<i class="fa fa-arrow-right"></i></a>
            <!-- <a href="#" class="btn">Learn More</a> -->
          </div>
        </div>

        <div class="iphone-showcase wow fadeInLeft">
          <div class="device">
            <img src="images/product-stungta.png" alt="stungtaxpindad">
          </div>
        </div><!-- //iPhone Showcase -->


      </div>
    </div>
  </section><!-- //iPhone Feature -->

  <section id="map-feature">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <!-- <h2>HETRIC</h2> -->
          <img src="images/hetrichitamlogo.png" alt="stungtaxpindad" width="400">
          <br><br>
          <p style="text-align: justify">
            Ramah Lingkungan & Hemat Energi.
            <br><br>
            Hejotekno Electric Tricycle adalah sebuah produk solusi Karya Anak Bangsa untuk penanganan distribusi sampah dengan menggunakan produk teknologi ramah lingkungan dan hemat energi.
          </p>
          <br><br>
          <div class="btns-container">
            <a href="product_detail/product-2" class="btn btn-green">See more‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎  ‎ ‎ ‎ ‎ ‎ ‎ ‎ <i class="fa fa-arrow-right"></i></a>
            <!-- <a href="#" class="btn">Learn More</a> -->
          </div>
          <div class="partners">
            <div class="title"> </div>
            <!-- <ul>
              <li><a href="#"><img src="images/dropbox.png" alt="Dropbox"></a></li>
              <li><a href="#"><img src="images/evernote.png" alt="Dropbox"></a></li>
            </ul> -->
          </div>
        </div>

        <div class="map-showcase wow fadeInRight">
          <div class="map">
            <img src="images/product-hetric.png" alt="">
          </div>
        </div><!-- //Map Showcase -->

      </div>
    </div>
  </section><!-- //Map Feature -->

  <section id="iphone-screens">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="col-md-12 text-center">
          <img src="images/kamisama.png" class="img-responsive wow fadeInUp logokamisama" data-wow-delay=".2s" alt="KAMISAMA Program">
        </div>
          <hr>
          <p class="subtitle">Program Kami</p>
        </div>
      </div>
    </div>

    <div class="images-showcase wow fadeIn">
      <ul class="images-list">
        <li>
          <img src="images/interface/4.png" alt="">
        </li>
        <li>
          <img src="images/interface/1.png" alt="">
        </li>
        <li class="main-img">
          <img src="images/interface/3.png" alt="">
        </li>
        <li>
          <img src="images/interface/2.png" alt="">
        </li>
        <li>
          <img src="images/interface/5.png" alt="">
        </li>
      </ul>
      
    </div>
    
  </section>
  
  <!-- //iPhone Screens -->

  
  @include('components.footer')

  <script src="js/jquery-2.1.4.min.js"></script> <!-- jQuery -->
  <script src="js/bootstrap.min.js"></script>  <!-- Bootstrap -->
  <script src="js/wow.min.js"></script>  <!-- wow -->
  <script src="js/jquery.magnific-popup.min.js"></script>  <!-- wow -->
  <script src="js/main.js"></script>  <!-- Main Script -->
  
</body>
</html>
