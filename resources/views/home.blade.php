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

  <section id="header">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
          <h1 class="wow fadeInUp"><b>Teknologi Ramah Lingkungan untuk Masa Depan Berkelanjutan</b></h1><br>
          <p style="text-align: center" ,class="wow fadeInUp" data-wow-delay=".2s">PT. TOP TEKNO INDO</p>
          <a href="https://www.youtube.com/watch?v=SUqqTbDnHSs" class="btn btn-lg video-btn wow fadeInUp lightbox mfp-iframe" data-wow-delay=".3s" data-effect="mfp-zoom-in"><i class="fa fa-play"></i> Watch Video</a>
        </div>
      </div>
    </div>
  </section>
  <section id="features">
    <div class="container">
      <div class="row">
        <div class="col-md-6 feature-item">
          <div class="feature wow fadeInUp">
            <div class="f-icon"><i class="lnr lnr-leaf"></i></div>
            <div class="f-description">
              <h4>Environment Friendly</h4>
              <p style="text-align: justify">Project Inovasi yang mengedepankan produk teknologi ramah lingkungan yang memiliki integrasi antara teknologi modern dengan ilmu lingkungan untuk mengurangi dampak negatif dari aktifitas manusia.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 feature-item">
          <div class="feature wow fadeInUp" data-wow-delay=".1s">
            <div class="f-icon"><i class="lnr lnr-smile"></i></div>
            <div class="f-description">
              <h4>Our Goals</h4>
              <p style="text-align: justify">Bertujuan untuk menemukan dan mengembangkan cara-cara untuk menyediakan kebutuhan bagi manusia tanpa menyebabkan kerusakan lingkungan.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- //Features -->

  <section id="iphone-feature">
    <div class="container">
      <div class="row">
        <div class="col-md-5 col-md-offset-7">
          <h2>
            StungtaXPindad
          </h2>
          <p style="text-align: justify"> 
            Compact & Portable.
            <br><br>
            Smokeless Incinerator adalah sebuah produk solusi Karya Anak Bangsa untuk penanganan masalah sampah dengan menggunakan produk teknologi ramah lingkungan dan hemat energi.
          </p>
          <div class="btns-container">
            <a href="#" class="btn btn-green">See more<i class="fa fa-arrow-right"></i></a>
            <!-- <a href="#" class="btn">Learn More</a> -->
          </div>
        </div>

        <div class="iphone-showcase wow fadeInLeft">
          <div class="device">
            <img src="images/product-stungta.png" alt="stungtaxpindad">
          </div>
        </div><!-- //iPhone Showcase -->


      </div>
    </div>
  </section><!-- //iPhone Feature -->

  <section id="map-feature">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <h2>HETRIC</h2>
          <p style="text-align: justify">
            Ramah Lingkungan & Hemat Energi.
            <br><br>
            Hejotekno Electric Tricycle adalah sebuah produk solusi Karya Anak Bangsa untuk penanganan distribusi sampah dengan menggunakan produk teknologi ramah lingkungan dan hemat energi.
          </p>
          <br><br>
          <div class="btns-container">
            <a href="#" class="btn btn-green">See more‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎  ‎ ‎ ‎ ‎ ‎ ‎ ‎ <i class="fa fa-arrow-right"></i></a>
            <!-- <a href="#" class="btn">Learn More</a> -->
          </div>
          <div class="partners">
            <div class="title"> </div>
            <!-- <ul>
              <li><a href="#"><img src="images/dropbox.png" alt="Dropbox"></a></li>
              <li><a href="#"><img src="images/evernote.png" alt="Dropbox"></a></li>
            </ul> -->
          </div>
        </div>

        <div class="map-showcase wow fadeInRight">
          <div class="map">
            <img src="images/product-hetric.png" alt="">
          </div>
        </div><!-- //Map Showcase -->

      </div>
    </div>
  </section><!-- //Map Feature -->

  <section id="iphone-screens">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2>KAMISAMA</h2>
          <hr>
          <p class="subtitle">Kawasan Minimasi Sampah Mandiri</p>
        </div>
      </div>
    </div>

    <div class="images-showcase wow fadeIn">
      <ul class="images-list">
        <li>
          <img src="images/interface/4.png" alt="">
        </li>
        <li>
          <img src="images/interface/1.png" alt="">
        </li>
        <li class="main-img">
          <img src="images/interface/3.png" alt="">
        </li>
        <li>
          <img src="images/interface/2.png" alt="">
        </li>
        <li>
          <img src="images/interface/5.png" alt="">
        </li>
      </ul>
      
    </div>
    
  </section>
  <!-- //iPhone Screens -->

  <!-- <section id="ready-to-buy">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="subtitle">Hejo<span class="f-w-400">Tekno</span></p>
          <h2>Get it to your smartphone</h2>
          <form action="">
            <div class="form-group">
              <input type="email" placeholder="Email here">
              <a href="#" class="btn btn-green">Send Invite <i class="fa fa-arrow-right"></i></a>
            </div>
          </form>
          <p class="subtitle">Or Download From</p>
          <div class="download-btn">
            <a href="#" class="btn btn-dark">
              <i class="fa fa-apple"></i>
              <span>
                Dowload on the <br>
                <b>App Store</b>
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>//Ready to Buy -->

  <!-- <section id="customers">
    <div class="container">
      <div class="row">
        <div id="testimonials-slider">
          <div class="col-md-6 col-md-offset-3 text-center">

            <div class="carousel slide" data-ride="carousel" id="quote-carousel">
              <!-- Carousel Slides / Quotes 
              <div class="carousel-inner text-center">
                <!-- Bottom Carousel Indicators 
                <ol class="carousel-indicators">
                    <li data-target="#quote-carousel" data-slide-to="0" class="active">
                      <img class="img-responsive " src="images/user1.jpg" alt="">
                    </li>
                    <li data-target="#quote-carousel" data-slide-to="1">
                      <img class="img-responsive" src="images/user2.jpg" alt="">
                      <div class="shadow"></div>
                    </li>
                    <li data-target="#quote-carousel" data-slide-to="2">
                      <img class="img-responsive" src="images/user3.jpg" alt="">
                    </li>
                </ol>
                

                  <!-- Quote 1 
                  <div class="item active">
                    <div class="testimonial">
                      <h3>New Providence is the great UI kit</h3>
                      <p>“Just then her head struck against the roof of the hall: in fact she was now more than nine feet high, and she at once took up the little golden key and hurried off to the garden door.”</p>
                      <div class="star-rating">
                        <i class="fa fa-star gold-star"></i>
                        <i class="fa fa-star gold-star"></i>
                        <i class="fa fa-star gold-star"></i>
                        <i class="fa fa-star gold-star"></i>
                        <i class="fa fa-star"></i>
                      </div>
                      <p class="customer-name">Cameron Downman</p>
                    </div>
                  </div>
                  <!-- Quote 2 
                  <div class="item">
                    <div class="testimonial">
                      <h3>New Providence is the great UI kit</h3>
                      <p>“Just then her head struck against the roof of the hall: in fact she was now more than nine feet high, and she at once took up the little golden key and hurried off to the garden door.”</p>
                      <div class="star-rating">
                        <i class="fa fa-star gold-star"></i>
                        <i class="fa fa-star gold-star"></i>
                        <i class="fa fa-star gold-star"></i>
                        <i class="fa fa-star gold-star"></i>
                        <i class="fa fa-star"></i>
                      </div>
                      <p class="customer-name">Cameron Downman</p>
                    </div>
                  </div>
                  <!-- Quote 3 
                  <div class="item">
                    <div class="testimonial">
                      <h3>New Providence is the great UI kit</h3>
                      <p>“Just then her head struck against the roof of the hall: in fact she was now more than nine feet high, and she at once took up the little golden key and hurried off to the garden door.”</p>
                      <div class="star-rating">
                        <i class="fa fa-star gold-star"></i>
                        <i class="fa fa-star gold-star"></i>
                        <i class="fa fa-star gold-star"></i>
                        <i class="fa fa-star gold-star"></i>
                        <i class="fa fa-star"></i>
                      </div>
                      <p class="customer-name">Cameron Downman</p>
                    </div>
                  </div>
              </div>

              <!-- Carousel Buttons Next/Prev 
              <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
              <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>//Customers -->

  <!-- <section id="plan">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h2>Choose your perfect plan</h2>
          <p class="subtitle">You are</p>
          <div class="toggle-container cf">
            <div class="switch-toggles">
              <div class="individual">Individual</div> <!-- active 
              <div class="company">Company</div>
            </div>
          </div>
          <p>
            Thus much I thought proper to tell you in relation to yourself, and to the trust I reposed in you.
          </p>
          <p class="info">Have a bigger team? <a href="#">Let‘s talk</a></p>
        </div>
        <div id="price_tables" class="col-md-7 col-md-offset-1">
          <div class="individual cf">
            <div class="price-table highlighted">
              <div class="table-inner text-center">
                <h3>Starter</h3>
                <span class="price">Free</span>
                <p class="phrase">Build your schedule<br> every day</p>
                <ul class="feature-list">
                  <li><i class="fa fa-check"></i> Unlimeted events</li>
                  <li><i class="fa fa-check"></i> Connect Dropbox & Evernote</li>
                  <li>&nbsp;</li>
                </ul>
                <a href="" class="btn btn-green">Get Started</a>                
              </div>
            </div>
            <div class="price-table">
              <div class="table-inner text-center">
                <h3>Pro</h3>
                <span class="price">$4.99</span>
                <p class="phrase">Make your life<br> better</p>
                <ul class="feature-list">
                  <li><i class="fa fa-check"></i> Unlimeted events</li>
                  <li><i class="fa fa-check"></i> Connect Dropbox & Evernote</li>
                  <li><i class="fa fa-check"></i> Personal assistant</li>
                </ul>
                <a href="" class="btn btn-green">Make me a pro</a>                
              </div>
            </div>
          </div><!-- /Individual 

          <div class="company cf">
            <div class="price-table highlighted">
              <div class="table-inner text-center">
                <h3>Starter</h3>
                <span class="price">Free</span>
                <p class="phrase">Build your schedule<br> every day</p>
                <ul class="feature-list">
                  <li><i class="fa fa-check"></i> Unlimeted events</li>
                  <li><i class="fa fa-check"></i> Connect Dropbox & Evernote</li>
                  <li>&nbsp;</li>
                </ul>
                <a href="" class="btn btn-green">Get Started</a>                
              </div>
            </div>
            <div class="price-table">
              <div class="table-inner text-center">
                <h3>Pro</h3>
                <span class="price">$4.99</span>
                <p class="phrase">Make your life<br> better</p>
                <ul class="feature-list">
                  <li><i class="fa fa-check"></i> Unlimeted events</li>
                  <li><i class="fa fa-check"></i> Connect Dropbox & Evernote</li>
                  <li><i class="fa fa-check"></i> Personal assistant</li>
                </ul>
                <a href="" class="btn btn-green">Make me a pro</a>                
              </div>
            </div>
          </div><!-- /Company 
        </div>
      </div>
    </div>
  </section>//Plan -->

  <!-- <section id="subscribe">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="subtitle"></p>
          <h2>Subscribe our newsletters</h2>
          <form action="">
            <div class="form-group">
              <input type="email" placeholder="Email here">
              <a href="#" class="btn btn-green">Subscribe</a>
            </div>
          </form>
          <p class="promise">We promise to never spam you.</p>
        </div>
      </div>
      </div>
    </div>
  </section> -->
  <!-- //Subscribe -->

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
