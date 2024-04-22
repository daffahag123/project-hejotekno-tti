<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
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
</head>
<body>

  <header id="main-nav">
    <div class="container">

      <a id="navigation" href="#"><i class="fa fa-bars"></i></a>

      <div id="slide_out_menu">
        <a href="#" class="menu-close"><i class="fa fa-times"></i></a>
        <!-- <div class="logo"><img src="images/logohj-white.png" alt=""></div> -->
        <ul>
          <li><a href="/about">About</a></li>
          <li><a href="#">Products</a></li>
          <li><a href="#">Kamisama</a></li>
          <li><a href="#">Help</a></li>
          <li><a href="#">Contacts</a></li>
          <li><a href="#" class="btn btn-green">Log In</a></li>
        </ul>

        <div class="slide_out_menu_footer">
          <div class="more-info">
            <!-- <p>Made with love by <a href="http://getcraftwork.com">Craft Work</a></p>
            <p>Developed by <a href="http://ruibogasdesign.net/">Rui Bogas</a> -->
          </div>
          <ul class="socials">
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <ul class="left">
            <li><a href="/about">About</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Kamisama</a></li>
          </ul>
        </div>
        <div class="col-md-4 text-center">
          <a href="/" class="logo"><img src="images/logohj.png" alt="Hejotekno"></a>
        </div>
        <div class="col-md-4">
          <ul class="right">
              <li><a href="#" class="help">Help</a></li>
              <li><a href="#">Contacts</a></li>
              <li><a href="#" class="btn btn-green">Log In</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header><!-- //Main Nav -->

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
          <form id="contact-form" method="post" action="contact.php" role="form">
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
    </div>
  </section><!-- //Contact -->



  <footer id="footer">
    <div class="container footer-container">
      <div class="row">
        <div class="col-md-3">
          <img class="logo" src="images/logohj.png" alt="">
          <p>It was some time before he obtained any answer, and the reply, when made, was unpropitious.</p>
          <ul class="socials">
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
        <div class="col-md-2 col-md-offset-3 col-sm-4 col-xs-6 footer-links">
          <ul>
            <li><p class="title">Learn More</p></li>
            <li><a href="#">How it works?</a></li>
            <li><a href="#">Meeting tools</a></li>
            <li><a href="#">Live striming</a></li>
            <li><a href="#">Contat method</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 footer-links">
          <ul>
            <li><p class="title">About Us</p></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Features</a></li>
            <li><a href="#">Privacy police</a></li>
            <li><a href="#">Terms & Conditions</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 footer-links">
          <ul>
            <li><p class="title">Support</p></li>
            <li><a href="#">F.A.Q.</a></li>
            <li><a href="#">Contact us</a></li>
            <li><a href="#">Live chat</a></li>
            <li><a href="#">Phone call</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container copyright-container">
      <div class="row">
        <div class="col-md-6 text-left">
          <div class="more-info">
            Projek TTI Hejotekno - ProKon
          </div>
        </div>
        <div class="col-md-6 text-right">
          <!-- <div class="made-by">Made with Love by <a href="http://getcraftwork.com" target="_blank"><img src="images/craftwork.png" alt=""></a></div> -->
        </div>
      </div>
    </div>
  </footer>

  <script src="js/jquery-2.1.4.min.js"></script> <!-- jQuery -->
  <script src="js/bootstrap.min.js"></script>  <!-- Bootstrap -->
  <script src="js/wow.min.js"></script>  <!-- wow -->
  <script src="js/jquery.magnific-popup.min.js"></script>  <!-- wow -->
  <script src="js/main.js"></script>  <!-- Main Script -->
</body>
</html>
