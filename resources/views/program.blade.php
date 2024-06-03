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

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
  <style>
    /* Customize carousel styles here */
    .carousel {
      max-width: 800px;
      margin: auto;
    }
    .slick-prev, .slick-next {
      padding: 20px;
      font-size: 24px;
      color: black;
    }
    .slick-dots li button:before {
      padding-top:20px;
      font-size: 12px;
      color: black;
    }
    .slick-dots li.slick-active button:before {
      color: black;
    }
  </style>
</head>
<body>
  @include('components.header')

  <section id="kamisama-description">
    <br><br><br><br><br><br>
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <img src="images/kamisama.png" class="img-responsive wow fadeInUp logokamisama" data-wow-delay=".2s" alt="KAMISAMA Program">
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

  <section id="iphone-screens">
    <div class="images-showcase wow fadeIn">
      <ul class="images-list">
        <li>
          <img src="images/interface/4.png" alt="">
        </li>
        <li>
          <img src="images/interface/1.png" alt="">
        </li>
        <li class="main-img">
          <img src="images/interface/5.png" alt="">
        </li>
        <li>
          <img src="images/interface/2.png" alt="">
        </li>
        <li>
          <img src="images/interface/3.png" alt="">
        </li>
      </ul>
    </div>
  </section>

  <section id="kamisama-description">
    <!-- <h2 class="center">Carousel Section</h2> -->
    <div class="carousel">
      <div><img src="images/slide/1.png" style="width:100%"></div>
      <div><img src="images/slide/2.png" style="width:100%"></div>
      <div><img src="images/slide/3.png" style="width:100%"></div>
      <div><img src="images/slide/4.png" style="width:100%"></div>
      <div><img src="images/slide/5.png" style="width:100%"></div>
      <div><img src="images/slide/6.png" style="width:100%"></div>
      <div><img src="images/slide/7.png" style="width:100%"></div>
      <div><img src="images/slide/8.png" style="width:100%"></div>
      <div><img src="images/slide/9.png" style="width:100%"></div>
      <div><img src="images/slide/10.png" style="width:100%"></div>
      <div><img src="images/slide/11.png" style="width:100%"></div>
      <div><img src="images/slide/12.png" style="width:100%"></div>
      <div><img src="images/slide/13.png" style="width:100%"></div>
      <div><img src="images/slide/14.png" style="width:100%"></div>
      <div><img src="images/slide/15.png" style="width:100%"></div>
      <div><img src="images/slide/16.png" style="width:100%"></div>
      <div><img src="images/slide/17.png" style="width:100%"></div>
      <div><img src="images/slide/18.png" style="width:100%"></div>
      <div><img src="images/slide/19.png" style="width:100%"></div>
      <div><img src="images/slide/20.png" style="width:100%"></div>
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

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> <!-- jQuery -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> <!-- Bootstrap -->
  <script src="js/wow.min.js"></script>  <!-- wow -->
  <script src="js/jquery.magnific-popup.min.js"></script>  <!-- wow -->
  <script src="js/main.js"></script>  <!-- Main Script -->
  <!-- Include jQuery before Slick Carousel script -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Slick Carousel script -->
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
  $(document).ready(function(){
    $('.carousel').slick({
      dots: true,
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      adaptiveHeight: true,
      prevArrow: '<button type="button" class="slick-prev">&#10094;</button>',
      nextArrow: '<button type="button" class="slick-next">&#10095;</button>',
    });
  });
</script>
</body>
</html>
