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


     /* untuk katalog */
     #catalog {
    padding: 0px 0;
    }

    .product {
    position: relative;
    overflow: hidden;
    margin-bottom: 0px;
    border: 1px solid #ddd;
    border-radius: 5px;
    transition: transform 0.3s ease;
    }

    .product img {
    width: 100%;
    border-radius: 5px;
    }

    .product-info {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.8);
    color: #fff;
    padding: 20px;
    box-sizing: border-box;
    transition: 0.3s;
    opacity: 0;
    transform: translateY(100%);
    }

    .product:hover {
    transform: scale(1.05);
    }

    .product:hover .product-info {
    opacity: 1;
    transform: translateY(0);
    }

    .product-info h4, .product-info p {
    margin: 0;
    }

    .product-info h4 {
    font-size: 16px;
    }

  </style>

</head>
<body>
<!-- overlay cart -->
<div id="cart-overlay">
  <div id="cart-content">
    <h3>Your Cart</h3>
    <div class="cart-items">
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

  <section id="catalog">
    <br><br><br><br><br><br><br><br>
    <div class="container">
      <div class="row">
        @foreach($products as $product)
        <div class="col-md-6">
          <a href="/product_detail/{{ $product->slug }}">
            <div class="product">
              <img src="{{ asset('images/products/' . $product->gambar) }}" alt="{{ $product->nama }}">
              <div class="product-info">
                <h4>{{ $product['nama_product'] }}</h4>
              </div>
            </div>
          </a>
        </div>
        @endforeach
      </div>
    </div>  
  </section>

  @include('components.footer')

  <script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script> <!-- jQuery -->
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>  <!-- Bootstrap -->
  <script src="{{ asset('js/wow.min.js') }}"></script>  <!-- wow -->
  <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>  <!-- magnific popup -->
  <script src="{{ asset('js/main.js') }}"></script>  <!-- Main Script -->
  
</body>
</html>

