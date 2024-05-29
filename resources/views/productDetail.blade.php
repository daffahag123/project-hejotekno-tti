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
      background-color: rgba(0, 0, 0, 0.5);
      /* warna hitam dengan opacity 0.5 */
      z-index: 9998;
      /* letakkan di bawah cart-overlay */
      display: none;
      /* sembunyikan secara default */
    }

    #cart-overlay {
      position: fixed;
      top: 0;
      right: -300px;
      /* Start off-screen */
      width: 300px;
      height: 100%;
      background-color: rgba(255, 255, 255, 1);
      z-index: 9999;
      transition: right 0.3s ease;
      /* Add transition for smooth sliding */
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

    #productDetail {
      padding: 40px 0;
      background-color: #f9f9f9;
    }

    .product-image {
      background-color: #000;
      width: 100%;
      height: 400px;
    }

    .product-details {
      padding: 20px;
    }

    .product-name {
      font-size: 24px;
      font-weight: 700;
    }

    .product-price {
      font-size: 20px;
      color: #28a745;
      margin: 10px 0;
    }

    .product-description {
      font-size: 16px;
      margin-bottom: 20px;
    }

    .add-to-cart-btn {
      padding: 10px 20px;
      background-color: #333;
      color: #fff;
      text-align: center;
      text-decoration: none;
      display: inline-block;
    }

    .add-to-cart-btn:hover {
      background-color: #555;
    }

    .product-specs {
      margin-top: 40px;
    }

    .product-specs h4 {
      margin-bottom: 10px;
      font-weight: 700;
    }

    .product-specs p {
      margin: 0 0 10px;
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

  <section id="productDetail">
    <div class="container">
        <br><br><br><br><br>
      <div class="row">
        <div class="col-md-6">
          <div class="product-image">
            <!-- Placeholder for product image -->
          </div>
        </div>
        <div class="col-md-6">
          <div class="product-details">
            <h2 class="product-name">Product Name</h2>
            <p class="product-price">$99.99</p>
            <p class="product-description">Short description of the product goes here. It provides a brief overview of the product features and benefits.</p>
            <a href="#" class="add-to-cart-btn">Add to Cart</a>
          </div>
        </div>
      </div>
      <div class="row product-specs">
        <div class="col-md-12">
          <h4>Product Specifications</h4>
          <p>Specification 1: Value</p>
          <p>Specification 2: Value</p>
          <p>Specification 3: Value</p>
          <h4>Detailed Description</h4>
          <p>More detailed description of the product goes here. This section can include information about the product's history, manufacturing process, and other relevant details.</p>
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
    window.location.href = 'checkout';
  });
});

  </script>
</body>
</html>
