<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KAMISAMA Program - HEJOTEKNO</title>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700,500' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css"> <!-- Font Awesome -->
  <link rel="stylesheet" href="css/normalize.css"> <!-- CSS reset -->
  <link rel="stylesheet" href="css/bootstrap.min.css"> <!-- Bootstrap Grid -->
  <link rel="stylesheet" href="css/animate.min.css"><!-- Animate -->
  <link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
  <link rel="stylesheet" href="css/magnific-popup.css"> <!-- Resource style -->
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  @include('components.header')

  <section id="kamisama-description">
    <br><br><br><br><br><br>
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="wow fadeInUp">KAMISAMA</h1>
          <p class="wow fadeInUp" data-wow-delay=".2s">Kawasan Minimasi Sampah Mandiri</p>
        </div>
      </div>
      <br><br>
      <div class="row">
        <div class="col-md-6">
          <br><br><br><br>
          <p class="wow fadeInUp" data-wow-delay=".3s" style="text-align: justify;">
            KAMISAMA (Kawasan Minimasi Sampah Mandiri) adalah program inovatif yang dikembangkan oleh HEJOTEKNO untuk meminimalkan produksi sampah di lingkungan kita. Program ini dirancang untuk mempromosikan praktik pengelolaan sampah yang berkelanjutan, melalui berbagai teknologi ramah lingkungan dan strategi yang dapat diterapkan di tingkat individu dan komunitas.
          </p>
          <p class="wow fadeInUp" data-wow-delay=".3s" style="text-align: justify;">
            Kami percaya bahwa dengan kolaborasi yang kuat antara teknologi dan partisipasi masyarakat, kita dapat menciptakan lingkungan yang lebih bersih dan sehat untuk masa depan.
          </p>
        </div>
        <div class="col-md-6">
          <img src="http://127.0.0.1:8000/images/interface/3.png" class="img-responsive wow fadeInUp" data-wow-delay=".4s" alt="KAMISAMA Placeholder Image">
        </div>
      </div>
    </div>
  </section>

  <section id="kamisama-features">
  <br><br><br>
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2 class="wow fadeInUp">Program Features</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 feature-item">
          <div class="feature wow fadeInUp">
            <div class="f-icon"><i class="lnr lnr-leaf"></i></div>
            <div class="f-description">
              <h4>Environment Friendly</h4>
              <p style="text-align: justify">Produk kami dirancang untuk mengurangi dampak negatif terhadap lingkungan dengan menggunakan teknologi ramah lingkungan.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 feature-item">
          <div class="feature wow fadeInUp" data-wow-delay=".1s">
            <div class="f-icon"><i class="lnr lnr-rocket"></i></div>
            <div class="f-description">
              <h4>Innovative Solutions</h4>
              <p style="text-align: justify">Solusi inovatif untuk pengelolaan sampah yang lebih efektif dan efisien, termasuk incinerator tanpa asap dan kendaraan listrik.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 feature-item">
          <div class="feature wow fadeInUp" data-wow-delay=".2s">
            <div class="f-icon"><i class="lnr lnr-users"></i></div>
            <div class="f-description">
              <h4>Community Focused</h4>
              <p style="text-align: justify">Kami bekerja sama dengan komunitas lokal untuk memastikan implementasi yang sukses dan berkelanjutan dari program kami.</p>
            </div>
          </div>
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
        window.location.href = 'checkout.html';
      });
    });
  </script>
</body>
</html>
