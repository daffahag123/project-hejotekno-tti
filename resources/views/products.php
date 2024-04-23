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

     /* untuk katalog */
     #catalog {
  padding: 50px 0;
}

.product {
  margin-bottom: 30px;
}

.product img {
  width: 100%;
  border: 1px solid #ddd;
  border-radius: 5px;
}

.product-info {
  background-color: #333;
  color: #fff;
  padding: 5px 10px;
  border-radius: 0 5px 0 5px;
  position: absolute;
  bottom: 10px;
  left: 10px;
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

  <section id="catalog">
    <div class="container">
        <div class="row">
        <div class="col-md-6">
            <div class="product">
            <img src="data:image/jpeg;base64,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" alt="Product 1">
            <div class="product-info">Product 1</div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="product">
            <img src="data:image/jpeg;base64,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" alt="Product 2">
            <div class="product-info">Product 2</div>
            </div>
        </div>
        </div>
    </div>
    </section>



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
