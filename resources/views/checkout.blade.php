<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Checkout - HEJOTEKNO</title>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700,500' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}"> <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('css/normalize.css') }}"> <!-- CSS reset -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> <!-- Bootstrap Grid -->
  <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
  <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}"><!-- Animate -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}"> <!-- Resource style -->
  <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}"> <!-- Resource style -->

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
  </style>
</head>

<body>
@include('components.header')

<div class="container checkout-container">
  <div class="row">
    <!-- Form Data Diri dan Alamat Pengiriman -->
    <div class="col-md-6">
      <div class="form-section">
        <h3>Data Diri dan Alamat Pengiriman</h3>
        <form id="checkout-form" method="post" action="{{ route('customer.transaksi') }}">
            @csrf
            <div class="form-group">
                <label for="name">Nama Lengkap *</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ session('customer')->name ?? '' }}" placeholder="Nama Lengkap" required>
            </div>
            <div class="form-group">
                <label for="address">Alamat Lengkap *</label>
                <textarea id="address" name="address" class="form-control" rows="4" placeholder="Alamat Lengkap" required>{{ session('customer')->alamat ?? '' }}</textarea>
            </div>
            <div class="form-group">
                <label for="zip_code">Kode Pos *</label>
                <input type="text" id="zip_code" name="zip_code" class="form-control" value="" placeholder="Kode Pos" required>
            </div>
            <div class="form-group">
                <label for="email">Email *</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ session('customer')->email ?? '' }}" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label for="phone">No. Telp *</label>
                <input type="text" id="phone" name="phone" class="form-control" value="{{ session('customer')->no_telephone ?? '' }}" placeholder="No. Telp" required>
            </div>
            <input type="hidden" name="product_ids" value="{{ $pesanan->pluck('id_pesanan')->implode(',') }}">
            <input type="hidden" name="total" value="{{ $pesanan->sum('jumlah_harga') }}">
            <button type="submit" class="btn btn-green">Proses Checkout</button>
        </form>
      </div>
    </div>

    <!-- Daftar Barang di Cart -->
    <div class="col-md-6">
      <div class="cart-section">
        @if ($pesanan->isEmpty())
        <div class="empty-cart-message">
          <h4>Keranjang masih kosong</h4>
        </div>
        @else
        <h3>Barang dalam Keranjang</h3>
        <div class="cart-items">
            @foreach ($pesanan as $item)
            <div class="cart-item">
              <img src="{{ asset('images/products/' . $item->product->gambar) }}" alt="{{ $item->product->name }}">
              <div class="cart-item-details">
                <h5>{{ $item->product->nama_product }}</h5>
                <p>{{ $item->product->deskripsi_nama }}</p>
                <p>Jumlah: {{ $item->jumlah_item_dipesan }}</p>
              </div>
              <div class="cart-item-price">Rp {{ number_format($item->jumlah_harga, 0, ',', '.') }}</div>
            </div>
            @endforeach
          </div>
          <div class="cart-total">
            <h4>Total: Rp {{ number_format($pesanan->sum('jumlah_harga'), 0, ',', '.') }}</h4>
          </div>
        @endif
      </div>
    </div>
  </div>
</div>

  @include('components.footer')

  <script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script> <!-- jQuery -->
  <script src="{{ asset('js/bootstrap.min.js') }}"></script> <!-- Bootstrap -->
  <script src="{{ asset('js/wow.min.js') }}"></script> <!-- wow -->
  <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script> <!-- wow -->
  <script src="{{ asset('js/main.js') }}"></script> <!-- Main Script -->

  <script>
    document.getElementById('checkout-form').addEventListener('submit', function(event) {
      // Check if the cart is empty
      var cartIsEmpty = @json($pesanan->isEmpty());

      if (cartIsEmpty) {
        alert('Keranjang masih kosong, silahkan tambahkan barang ke keranjang sebelum melakukan checkout.');
        event.preventDefault();
      }
    });
  </script>
</body>


</html>
