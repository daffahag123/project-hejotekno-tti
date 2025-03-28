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
     .checkout-container {
      padding: 50px 0;
    }

    .form-section {
      background-color: #f9f9f9;
      padding: 30px;
      border: 1px solid #ddd;
      border-radius: 10px;
      margin-bottom: 30px;
    }

    .cart-section {
      background-color: #fff;
      padding: 30px;
      border: 1px solid #ddd;
      border-radius: 10px;
    }

    .cart-item {
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
      padding-bottom: 10px;
      border-bottom: 1px solid #ddd;
    }

    .cart-item img {
      width: 60px;
      height: 60px;
      object-fit: cover;
    }

    .cart-item-details {
      flex-grow: 1;
      margin-left: 15px;
    }

    .cart-item-price {
      font-weight: bold;
    }

    .empty-cart-message {
      text-align: center;
      padding: 50px;
      background-color: #f9f9f9;
      border: 1px solid #ddd;
      border-radius: 10px;
    }
    
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

    /* quantity */
    .quantity-control {
  display: flex;
  align-items: center;
}

.quantity-control button {
  background-color: #ddd;
  border: none;
  padding: 5px 10px;
  cursor: pointer;
}

.quantity-control span {
  margin: 0 10px;
}

    #contact {
      background-color: #f9f9f9;
      /* Ganti warna background */
      padding: 50px 0;
      /* Tambahkan padding agar konten tidak terlalu dekat dengan border */
      border: 1px solid #ddd;
      /* Tambahkan border */
      border-radius: 10px;
      /* Membuat sudut menjadi rounded */
    }

    #map-container {
      margin-bottom: 20px;
      /* Tambahkan margin agar peta tidak terlalu dekat dengan border */
    }

    /* Posisikan Our Location di kiri */
    #map-container {
      order: 1;
    }

    /* Posisikan form contact di kanan */
    #contact .col-md-6 {
      order: 2;
    }
  </style>

</head>

<body>
  <!-- overlay cart -->
<div id="cart-overlay">
  <div id="cart-content">
    <h3>Your Cart</h3>
    <div class="cart-items">
      @isset($pesanan)
        @if ($pesanan->isEmpty())
        <div class="empty-cart-message">
          <h4>Keranjang masih kosong</h4>
        </div>
        @else
        @foreach ($pesanan as $item)
        <div class="cart-item">
          <img src="{{ asset('images/products/' . $item->product->gambar) }}" alt="{{ $item->product->name }}">
          <div class="cart-item-details">
            <h5>{{ $item->product->nama_product }}</h5>
            <h5>Jumlah: {{ $item->jumlah_item_dipesan }}</h5>
            <h5>Rp {{ number_format($item->jumlah_harga, 0, ',', '.') }}</h5>
            <div class="quantity-control">
              <form method="POST" action="{{ route('deccart') }}" class="decrement-form">
                @csrf
                <input type="hidden" name="id_product" value="{{ $item->id_product }}">
                <input type="hidden" name="jumlah_harga" value="{{ $item->jumlah_harga / $item->jumlah_item_dipesan }}">
                <button type="submit" class="decrement-btn">-</button>
              </form>
              <span class="jumlah-item">{{ $item->jumlah_item_dipesan }}</span>
              <form method="POST" action="{{ route('addcart2') }}" class="increment-form">
                @csrf
                <input type="hidden" name="id_product" value="{{ $item->id_product }}">
                <input type="hidden" name="jumlah_item_dipesan" value="1">
                <input type="hidden" name="jumlah_harga" value="{{ $item->jumlah_harga / $item->jumlah_item_dipesan }}">
                <button type="submit" class="increment-btn">+</button>
              </form>
            </div>
          </div>
        </div>
        @endforeach
        <div class="cart-total">
          <p>Total: Rp {{ number_format($pesanan->sum('jumlah_harga'), 0, ',', '.') }}</p>
        </div>
        @endif
      @else
        <div class="empty-cart-message">
          <h4>Keranjang masih kosong</h4>
        </div>
      @endisset
    </div>
    @if(Session::has('customer'))
    <a href="/checkout" id="checkout-btn">Proceed to Checkout</a>
    @else
    <a href="/loginUser" id="checkout-btn">Login</a>
    @endif
  </div>
</div>
<div class="overlay"></div>



  @include('components.header')

  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
          <br><br><br><br><br><br>
          <h1 class="wow fadeInUp">Contact Us</h1>
          <p class="wow fadeInUp" data-wow-delay=".2s">Have a question or need assistance? Contact us using the form below.</p>
          <br><br>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
        <form id="contact-form" method="post" action="{{ route('kirim.pesan') }}" role="form">
    @csrf
    <div class="messages"></div>
    <div class="controls">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">Name *</label>
                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your name *" required="required" data-error="Name is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_email">Email *</label>
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_message">Message *</label>
                    <textarea id="form_message" name="message" class="form-control" placeholder="Message for us *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <br><br>
                <input type="submit" class="btn btn-green" value="Send message">
            </div>
        </div>
    </div>
</form>

        </div>
      </div>
      <div class="row">
      <br><br><br><br><br><br>
        <div class="col-md-8 col-md-offset-2 text-center">
          <h2 class="wow fadeInUp">Our Location</h2>
          <div id="map-container" style="height: 400px;">
            <!-- Google Maps Embed Code -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.727949866227!2d107.56858507414148!3d-6.923089167760612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e52af0da3ff1%3A0x3faeba9f4127c0c7!2sHejotekno!5e0!3m2!1sen!2sid!4v1716016001434!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
          </div>
        </div>
      </div>
    </div>

  </section>


  </section><!-- //Contact -->

  @include('components.footer')

  <script src="js/jquery-2.1.4.min.js"></script> <!-- jQuery -->
  <script src="js/bootstrap.min.js"></script> <!-- Bootstrap -->
  <script src="js/wow.min.js"></script> <!-- wow -->
  <script src="js/jquery.magnific-popup.min.js"></script> <!-- wow -->
  <script src="js/main.js"></script> <!-- Main Script -->
  
</body>

</html>