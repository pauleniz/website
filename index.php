<?php 
	include "config.php";
?>
<html lang="lt">
  <head>
    <title>Solis LT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/solis-icon.png">

  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border text-primary" role="status">
        <span class="sr-only"><?php echo $lang['loading'] ?></span>
      </div>
    </div>
    <div class="site-wrap">
      <div class="site-mobile-menu site-navbar-target" >
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>
   
    
      <header class="site-navbar site-navbar-target" role="banner" style=" width: 100%; position: fixed; background: #fff">
        <div class="container" style="margin-left: 20px; margin-right: 20px; width: auto; max-width: none;">
          <div class="row align-items-center">
            <div class="col-4 col-md-2 col-xl-2">

              <a href="http://localhost/finances?lang=<?php echo $_SESSION['lang'] ?>" > <img src="images/Solis.png" style="height: 50px"></a>

            </div>
         
            <div class="col-8 col-md-10 d-none d-xl-block">
              <nav  class="site-navigation position-relative text-right" role="navigation">
                <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">

                  <li><a href="../finances#home" class="nav-link"><?php echo $lang['home'] ?></a></li>
                  <li><a href="#about" class="nav-link"><?php echo $lang['about'] ?></a></li>
                  <li><a href="#services" class="nav-link"><?php echo $lang['services'] ?></a></li>
                  <li><a href="#schedule" class="nav-link"><?php echo $lang['schedule'] ?></a></li>
                  <li><a href="#contact" class="nav-link"><?php echo $lang['contact'] ?></a></li>
                  
                  <li class="social"><a href="https://www.facebook.com/SOLIS-LT-109787743830866" target="_blank" class="nav-link"><span class="icon-facebook"></span></a></li>
                  <li class="social"><a href="https://lt.linkedin.com/in/evaldas-pagojus-59859017a" target="_blank" class="nav-link"><span class="icon-linkedin"></span></a></li>

                	<li class="social"><a href="" target="" class="nav-link"></a></li>
                	<li class="social"><a href="" target="" class="nav-link"></a></li>

                  <li class="social"><a href="?lang=lt" target="" class="nav-link" style="padding: 0px 10px 0px 20px">LT</a></li>
                  <li class="social"><a href="?lang=en" target="" class="nav-link" style="padding: 0px 20px 0px 15px">EN</a></li>
                  <li class="social"><a href="?lang=ru" target="" class="nav-link" style="padding: 0px 0px 0px 5px">RU</a></li>
                
                </ul>
              </nav>
            </div>
            <div class="col-8 col-md-10 d-inline-block d-xl-none ml-md-10 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3" style="color: black"></span></a></div>
          </div>
        </div>
      </header>

     
    <div class="site-blocks-cover overlay" style="background-image: url(images/hero_2.jpg);" data-aos="fade" id="home">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-10 mt-lg-5 text-center">
            <div class="single-text owl-carousel">
              <div class="slide">
                <h1 class="text-uppercase" data-aos="fade-up"><?php echo $lang['slide_1'] ?></h1>
              </div>
              <div class="slide">
                <h1 class="text-uppercase" data-aos="fade-up"><?php echo $lang['slide_2'] ?></h1>
              </div>
              <div class="slide">
                <h1 class="text-uppercase" data-aos="fade-up"><?php echo $lang['slide_3'] ?></h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  


    <div class="site-section cta-big-image" id="about">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-8 text-center">
            <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay=""><?php echo $lang['about'] ?></h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
            <figure class="circle-bg">
            <img src="images/img_2.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
            </figure>
          </div>
          <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
            <p><?php echo $lang['about_text'] ?></p>
          </div>
        </div>    
      </div>  
    </div>

    <section class="site-section border-bottom bg-light" id="services">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3"><?php echo $lang['services'] ?></h2>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
            <div class="unit-4">
              <div class="unit-4-icon">
                <img src="images/safety2.png"  class="img-fluid w-25 mb-4">
              </div>
              <div>
                <h3><?php echo $lang['service_1'] ?></h3>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="unit-4">
              <div class="unit-4-icon">
                <img src="images/safety2.png"  class="img-fluid w-25 mb-4">
              </div>
              <div>
                <h3><?php echo $lang['service_2'] ?></h3>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="unit-4">
              <div class="unit-4-icon">
                <img src="images/safety2.png"   class="img-fluid w-25 mb-4">
              </div>
              <div>
                <h3><?php echo $lang['service_3'] ?></h3>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="">
            <div class="unit-4">
              <div class="unit-4-icon">
                <img src="images/safety2.png"  class="img-fluid w-25 mb-4">
              </div>
              <div>
                <h3><?php echo $lang['service_4'] ?></h3>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="unit-4">
              <div class="unit-4-icon">
                <img src="images/safety2.png" class="img-fluid w-25 mb-4">
              </div>
              <div>
                <h3><?php echo $lang['service_5'] ?></h3>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="unit-4">
              <div class="unit-4-icon">
                <img src="images/safety2.png" class="img-fluid w-25 mb-4">
              </div>
              <div>
                <h3><?php echo $lang['service_6'] ?></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


<section class="site-section border-bottom bg-light" id="schedule">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3"><?php echo $lang['schedule'] ?></h2>
          </div>
          <div style="width:100%; overflow-x:auto; margin-top: 50px">
          	<table style="width:1000px;">
			  <tr>
			  	<th></th>
			    <th style="width: : 20%"><?php echo $lang['schedule_training'] ?></th>
			    <th style="width: : 20%"><?php echo $lang['schedule_place'] ?></th>
			    <th style="width: : 20%"><?php echo $lang['schedule_date'] ?></th>
			    <th style="width: : 20%"><?php echo $lang['schedule_language'] ?></th>
			    <th></th>
			  </tr>
			  <tr>
			    <td><img src="images/work_safety.jpg" style="margin: 5px"></td>
			    <td><?php echo $lang['green_card'] ?></td>
			    <td><?php echo $lang['place_web'] ?></td>
			    <td>09.05.2020</td>
			    <td><?php echo nl2br($lang['lang_rusu']) ?></td>
			    <!--<th><a href="registracija.php" class="table-button">Registracija</a></th>-->
			  </tr>
			  <tr>
			    <td><img src="images/work_safety.jpg" style="margin: 5px"></td>
			    <td><?php echo $lang['green_card'] ?></td>
			    <td><?php echo $lang['place_web'] ?></td>
			    <td>16.05.2020</td>
			    <td><?php echo nl2br($lang['lang_rusu']) ?></td>
			  </tr>
			  <tr>
			    <td><img src="images/hot_work.jpg" style="margin: 5px"></td>
			    <td><?php echo $lang['grey_card_t'] ?></td>
			    <td><?php echo $lang['place_web'] ?></td>
			    <td>17.05.2020</td>
			    <td><?php echo nl2br($lang['lang_rusu']) ?></td>
			  </tr>
			  <tr>
			    <td><img src="images/hot_work.jpg" style="margin: 5px"></td>
			    <td><?php echo $lang['grey_card_p'] ?></td>
			    <td><?php echo $lang['place_klaipeda'] ?></td>
			    <td>21.05.2020</td>
			    <td><?php echo nl2br($lang['lang_rusu']) ?></td>
			  </tr>
			  <tr>
			    <td><img src="images/work_safety.jpg" style="margin: 5px"></td>
			    <td><?php echo $lang['green_card'] ?></td>
			    <td><?php echo $lang['place_web'] ?></td>
			    <td>25.05.2020</td>
			    <td><?php echo nl2br($lang['lang_rusu']) ?></td>
			  </tr>
			</table>
          </div>
        </div>
      </div>
    </section>


    <section class="site-section bg-light" id="contact" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3"><?php echo $lang['contact'] ?></h2>
          </div>
        </div>
        <div class="row mb-5">
          

          <div class="col-md-4 text-center">
            <p class="mb-4">
              <span class="icon-room d-block h2 " style="color: black"></span>
              <span>Taikos pr. 52C-607, Klaipėda LT-91184</span>
            </p>
          </div>
          <div class="col-md-4 text-center">
            <p class="mb-4">
              <span class="icon-phone d-block h2 " style="color: black"></span>
              <a><?php echo nl2br($lang['ceo']) ?> <br>+37065265923</a>
            </p>
          </div>
          <div class="col-md-4 text-center">
            <p class="mb-0">
              <span class="icon-mail_outline d-block h2 " style="color: black"></span>
              <a>evaldas@solis.lt</a>
            </p>
          </div>
        </div>
      </div>
    </section>


  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/main.js"></script>


</body>
</html>