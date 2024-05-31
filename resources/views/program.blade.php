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
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
    .mySlides {display:none}
    .w3-left, .w3-right, .w3-badge {cursor:pointer}
    .w3-badge {height:13px;width:13px;padding:0}
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
      <h2 class="w3-center"></h2>

      <div class="w3-content w3-display-container" style="max-width:800px">
      <img class="mySlides" src="images/slide/1.png" style="width:100%">
      <img class="mySlides" src="images/slide/2.png" style="width:100%">
      <img class="mySlides" src="images/slide/3.png" style="width:100%">
      <img class="mySlides" src="images/slide/4.png" style="width:100%">
      <img class="mySlides" src="images/slide/5.png" style="width:100%">
      <img class="mySlides" src="images/slide/6.png" style="width:100%">
      <img class="mySlides" src="images/slide/7.png" style="width:100%">
      <img class="mySlides" src="images/slide/8.png" style="width:100%">
      <img class="mySlides" src="images/slide/9.png" style="width:100%">
      <img class="mySlides" src="images/slide/10.png" style="width:100%">
      <img class="mySlides" src="images/slide/11.png" style="width:100%">
      <img class="mySlides" src="images/slide/12.png" style="width:100%">
      <img class="mySlides" src="images/slide/13.png" style="width:100%">
      <img class="mySlides" src="images/slide/14.png" style="width:100%">
      <img class="mySlides" src="images/slide/15.png" style="width:100%">
      <img class="mySlides" src="images/slide/16.png" style="width:100%">
      <img class="mySlides" src="images/slide/17.png" style="width:100%">
      <img class="mySlides" src="images/slide/18.png" style="width:100%">
      <img class="mySlides" src="images/slide/19.png" style="width:100%">
      <img class="mySlides" src="images/slide/20.png" style="width:100%">
      
      <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
        <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
        <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(5)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(6)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(7)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(8)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(9)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(10)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(11)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(12)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(13)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(14)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(15)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(16)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(17)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(18)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(19)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(20)"></span>
      </div>
    </div>

    <script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
      showDivs(slideIndex += n);
    }

    function currentDiv(n) {
      showDivs(slideIndex = n);
    }

    function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      if (n > x.length) {slideIndex = 1}
      if (n < 1) {slideIndex = x.length}
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" w3-white", "");
      }
      x[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " w3-white";
    }
    </script>
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
