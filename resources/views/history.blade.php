<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HEJOTEKNO - Transaction History</title>
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
    .table-container {
      margin: 50px auto;
      width: 80%;
      background-color: #fff;
      padding: 20px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }
    table {
      width: 100%;
      border-collapse: collapse;
    }
    th, td {
      padding: 12px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
    th {
      background-color: #f4f4f4;
    }
    tr:hover {
      background-color: #f1f1f1;
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

  <section id="transaction-history" class="table-container">
  <br><br>
  <h2>Transaction History</h2>
  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>Transaction Date</th>
        <th>Items Purchased</th>
        <th>Total Price</th>
        <th>Status</th>
        <th>Download Invoice</th>
      </tr>
    </thead>
    <tbody>
      @foreach($transaksi as $index => $trx)
        <tr>
          <td>{{ $index + 1 }}</td>
          <td>{{ $trx->waktu_transaksi }}</td>
          <td>{{ $trx->items_purchased }}</td> 
          <td>Rp {{ number_format($trx->total, 0, ',', '.') }}</td>
          <td>{{ $trx->status }}</td> 
          <td><a href="{{ asset('path/to/invoices/' . $trx->pdf) }}" class="download-invoice">Download PDF</a></td>
        </tr>
      @endforeach
    </tbody>
  </table>
</section>

  @include('components.footer')

  <script src="js/jquery-2.1.4.min.js"></script> <!-- jQuery -->
  <script src="js/bootstrap.min.js"></script>  <!-- Bootstrap -->
  <script src="js/wow.min.js"></script>  <!-- wow -->
  <script src="js/jquery.magnific-popup.min.js"></script>  <!-- wow -->
  <script src="js/main.js"></script>  <!-- Main Script -->
  <script>
document.addEventListener('DOMContentLoaded', function() {
  document.querySelectorAll('.download-invoice').forEach(function(element) {
    element.addEventListener('click', function(event) {
      event.preventDefault(); // Prevent default action

      var link = event.target;
      var filename = link.getAttribute('data-filename');

      // Check if file exists
      fetch(filename, { method: 'HEAD' })
        .then(function(response) {
          if (response.ok) {
            // File exists, proceed with download
            window.location.href = filename;
          } else {
            // File does not exist, show alert
            alert('Dokumen receipt belum tersedia, silakan tunggu beberapa saat.');
          }
        })
        .catch(function(error) {
          console.error('Error:', error);
          alert('Terjadi kesalahan saat memeriksa ketersediaan dokumen.');
        });
    });
  });
});
</script>
</body>
</html>
