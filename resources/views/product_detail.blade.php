<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HEJOTEKNO</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,700,500" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}"> <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('css/normalize.css') }}"> <!-- CSS reset -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> <!-- Bootstrap Grid -->
  <link rel="stylesheet" href="{{ asset('https://cdn.linearicons.com/free/1.0.0/icon-font.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}"><!-- Animate -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}"> <!-- Resource style -->
  <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}"> <!-- Resource style -->

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


    #productDetail {
      padding: 40px 0;
      background-color: #f9f9f9;
    }

    .product-image {
      background-color: #000;
      width: 100%;
      height: 320px;
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden; /* Pastikan gambar yang terlalu besar terpotong */
    }

    .product-image img {
      width: 100%;
      height: 100%;
      height: cover; /* Menjaga rasio aspek gambar */
    }

    .product-details {
      padding: 20px;
    }

    .product-name {
      font-size: 24px;
      font-weight: 700;
      margin-top: 5px;
      margin-bottom: 50px;
    }

    .product-price {
      font-size: 20px;
      color: #28a745;
      margin: px 0;
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
      font-size: 16px;
      margin-top: 40px;
    }

    .product-specs h4 {
      margin-bottom: 10px;
      font-weight: 700;
    }

    .product-specs ul {
      list-style-type: none;
      padding: 0;
    }

    .product-specs ul li {
      color: #777;
      padding: 2px;
      font-weight: 400;
    }

    .product-specs ul li::before {
      content: "• ";
      color: #28a745;
      font-weight: bold;
      margin-right: 10px;
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

  <section id="productDetail">
    <div class="container">
      <br><br><br><br><br>
      <div class="row">
        <div class="col-md-6">
          <div class="product-image">
            <img src="{{ asset('images/products/' . $product->gambar) }}" alt="{{ $product->name }}">
          </div>
        </div>
        <div class="col-md-6">
          <div class="product-details">
            <h2 class="product-name">{{ $product->nama_product }}</h2>
            <p class="product-price">Rp. {{ number_format($product->harga, 0, ',', '.') }}</p>
            @php
            $paragraphs = explode("\n", trim($product->deskripsi));
            $firstParagraph = $paragraphs[0];
            @endphp
            <p class="product-description">{{ $firstParagraph }}</p>
            <a href="#" class="add-to-cart-btn" data-product-id="{{ $product->id_product }}" data-product-price="{{ $product->harga }}">Add to Cart</a>
          </div>
        </div>
      </div>
      <div class="row product-specs">
        <div class="col-md-12">
          <h4>Keunggulan</h4>
          <ul>
            @php
            $keunggulan = explode("\n", trim($product->kelebihan));
            @endphp
            @foreach($keunggulan as $point)
            <li>{{ $point }}</li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </section>

  @include('components.footer')

  <script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script> <!-- jQuery -->
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>  <!-- Bootstrap -->
  <script src="{{ asset('js/wow.min.js') }}"></script>  <!-- wow -->
  <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>  <!-- magnific popup -->
  <script src="{{ asset('js/main.js') }}"></script>  <!-- Main Script -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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

$(document).ready(function() {
    $('.add-to-cart-btn').click(function(e) {
        e.preventDefault();

        var id_product = $(this).data('product-id');
        var jumlah_item_dipesan = 1; // Adjust as needed
        var jumlah_harga = $(this).data('product-price');

        $.ajax({
            url: '{{ route("addcart") }}',
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                id_product: id_product,
                jumlah_item_dipesan: jumlah_item_dipesan,
                jumlah_harga: jumlah_harga
            },
            success: function(response) {
                alert(response.success);
                location.reload(); 
            },
            error: function(xhr) {
                alert('Log In to Order');
            }
        });
    });
});

  </script>
</body>
</html>
