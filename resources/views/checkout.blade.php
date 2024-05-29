<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Checkout - HEJOTEKNO</title>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700,500' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css"> <!-- Font Awesome -->
  <link rel="stylesheet" href="css/normalize.css"> <!-- CSS reset -->
  <link rel="stylesheet" href="css/bootstrap.min.css"> <!-- Bootstrap Grid -->
  <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
  <link rel="stylesheet" href="css/animate.min.css"><!-- Animate -->
  <link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
  <link rel="stylesheet" href="css/magnific-popup.css"> <!-- Resource style -->

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
          <form id="checkout-form" method="post" action="submit_checkout.php">
            <div class="form-group">
              <label for="name">Nama Lengkap *</label>
              <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="address">Alamat Lengkap *</label>
              <textarea id="address" name="address" class="form-control" rows="4" required></textarea>
            </div>
            <div class="form-group">
              <label for="zip_code">Kode Pos *</label>
              <input type="text" id="zip_code" name="zip_code" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="email">Email *</label>
              <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="phone">No. Telp *</label>
              <input type="text" id="phone" name="phone" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-green">Proses Checkout</button>
          </form>
        </div>
      </div>

      <!-- Daftar Barang di Cart -->
      <div class="col-md-6">
        <div class="cart-section">
          <h3>Barang dalam Keranjang</h3>
          <div class="cart-items">
            <div class="cart-item">
              <img src="images/product1.jpg" alt="Product 1">
              <div class="cart-item-details">
                <h5>Nama Produk 1</h5>
                <p>Deskripsi singkat produk 1</p>
              </div>
              <div class="cart-item-price">Rp 100.000</div>
            </div>
            <div class="cart-item">
              <img src="images/product2.jpg" alt="Product 2">
              <div class="cart-item-details">
                <h5>Nama Produk 2</h5>
                <p>Deskripsi singkat produk 2</p>
              </div>
              <div class="cart-item-price">Rp 200.000</div>
            </div>
            <!-- Tambahkan item lain di sini -->
          </div>
          <div class="cart-total">
            <h4>Total: Rp 300.000</h4>
          </div>
        </div>
      </div>
    </div>
  </div>

  @include('components.footer')

  <script src="js/jquery-2.1.4.min.js"></script> <!-- jQuery -->
  <script src="js/bootstrap.min.js"></script> <!-- Bootstrap -->
  <script src="js/wow.min.js"></script> <!-- wow -->
  <script src="js/jquery.magnific-popup.min.js"></script> <!-- wow -->
  <script src="js/main.js"></script> <!-- Main Script -->
</body>

</html>
