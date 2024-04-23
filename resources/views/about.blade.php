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

  <header id="main-nav">
    <div class="container">
      <a id="navigation" href="#"><i class="fa fa-bars"></i></a>
      <div id="slide_out_menu">
        <a href="#" class="menu-close"><i class="fa fa-times"></i></a>
        <ul>
          <li><a href="/about">About</a></li>
          <li><a href="#">Products</a></li>
          <li><a href="#">Kamisama</a></li>
          <li><a href="/contact">Contact Us</a></li>
          <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
        </ul>
        <div class="slide_out_menu_footer">
          <div class="more-info"></div>
          <ul class="socials">
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <ul class="left">
            <li><a href="/about">About</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Kamisama</a></li>
          </ul>
        </div>
        <div class="col-md-4 text-center">
          <a href="/" class="logo"><img src="images/logohj.png" alt="Hejotekno"></a>
        </div>
        <div class="col-md-4">
          <ul class="right">
            <li><a href="/contact">Contact Us</a></li>
            <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>

  <section id="header">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
          <h1 class="wow fadeInUp">About Us</h1>
          <p class="wow fadeInUp" data-wow-delay=".2s">Blablbabla adalah sebuah perusahaan yang bergerak dibidang bla bla bla dan blablabla. Blablabla bla bla blablabla blabbla. Blbla bla blablabla blabbla bla bla blablabla blabbla.</p>
        </div>
      </div>
    </div>
  </section><!-- //Header -->

  <footer id="footer">
    <div class="container footer-container">
      <div class="row">
        <div class="col-md-3">
          <img class="logo" src="images/logohj.png" alt="">
          <p>It was some time before he obtained any answer, and the reply, when made, was unpropitious.</p>
          <ul class="socials">
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
        <div class="col-md-2 col-md-offset-3 col-sm-4 col-xs-6 footer-links">
          <ul>
            <li><p class="title">Learn More</p></li>
            <li><a href="#">How it works?</a></li>
            <li><a href="#">Meeting tools</a></li>
            <li><a href="#">Live striming</a></li>
            <li><a href="#">Contat method</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 footer-links">
          <ul>
            <li><p class="title">About Us</p></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Features</a></li>
            <li><a href="#">Privacy police</a></li>
            <li><a href="#">Terms & Conditions</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 footer-links">
          <ul>
            <li><p class="title">Support</p></li>
            <li><a href="#">F.A.Q.</a></li>
            <li><a href="#">Contact us</a></li>
            <li><a href="#">Live chat</a></li>
            <li><a href="#">Phone call</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container copyright-container">
      <div class="row">
        <div class="col-md-6 text-left">
          <div class="more-info">
            Projek TTI Hejotekno - ProKon
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="js/jquery-2.1.4.min.js"></script> <!-- jQuery -->
  <script src="js/bootstrap.min.js"></script>  <!-- Bootstrap -->
  <script src="js/wow.min.js"></script>  <!-- wow -->
  <script src="js/jquery.magnific-popup.min.js"></script>  <!-- wow -->
  <script src="js/main.js"></script>  <!-- Main Script -->
  <!-- script buat overlay cart -->
  <script>
   $(document).ready(function() {
  $('.fa-shopping-bag').click(function(e) {
    e.preventDefault();
    $('#cart-overlay, .overlay').css('right', '0'); // Slide in from the right
    $('.overlay').fadeIn(); // tampilkan overlay
  });

  $('.overlay').click(function(e) {
    if (e.target === this) {
      $('#cart-overlay, .overlay').css('right', '-300px');
      $('.overlay').fadeOut(); // sembunyikan overlay
    }
  });

  $('#checkout-btn').click(function(e) {
    window.location.href = 'checkout.html';
  });
});

  </script>
</body>
</html>
