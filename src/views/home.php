<!DOCTYPE html>
<html class="no-js" lang="fr">
<head>
  <!--- basic page needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Alicia Geran | Portfolio</title>
  <meta name="description" content="">
  <meta name="author" content="">
  <style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
  <!-- mobile specific metas
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS
  ================================================== -->
  <link rel="stylesheet" href="/public/css/base.css">
  <link rel="stylesheet" href="/public/css/main.css">
  <link rel="stylesheet" href="/public/css/vendor.css">

  <style type="text/css" media="screen">
    .s-styles {
      padding-top: 16rem;
      padding-bottom: 16rem;
      background-color: #ffffff;
    }
  </style>

  <!-- script
  ================================================== -->
  <script src="/public/js/modernizr.js"></script>

  <!-- favicons
  ================================================== -->
  <link rel="apple-touch-icon" sizes="180x180" href="/public/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/public/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/public/favicon-16x16.png">
  <link rel="manifest" href="/public/site.webmanifest">
</head>

<body id="top">
  <!-- preloader
  ================================================== -->
  <div id="preloader">
    <div id="loader" class="dots-fade">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>

  <?php include('partials/header.php'); ?>
  <?php include('partials/hero.php'); ?>

  <!-- styles
  ================================================== -->
  <section id="styles" class="s-styles page-content">
    <div class="row add-bottom">
      <div class="column large-full">
        <h1 class="display-1">À propos de moi</h1>

        <p class="lead">
          <?php echo $authors['long_biography']; ?>
        </p>
      </div>
    </div>

    <div class="row add-bottom">
      <h2>Mes expériences</h2>
      <div class="column large-full">
        <?php
          for ($i = 0; $i < count($experiences); $i++) {
            if ($i % 2 === 0) {
              echo (
                '<div class="row"><div class="column large-6 tab-full"><h3>'
                . $experiences[$i]['name']
                . '</h3><h6>'
                . $experiences[$i]['date']
                . '</h6><p>'
                . $experiences[$i]['description']
                . '</p></div>'
              );
            } else {
              echo (
                '<div class="column large-6 tab-full"><h3>'
                . $experiences[$i]['name']
                . '</h3><h6>'
                . $experiences[$i]['date']
                . '</h6><p>'
                . $experiences[$i]['description']
                . '</p></div></div>'
              );
            }
          }
        ?>
      </div>
    </div>

    <div class="row add-bottom">
      <h2>Mes projets</h2>
      <div class="column large-full">
        <?php
          for ($i = 0; $i < count($projects); $i++) {
            if ($i % 2 === 0) {
              echo (
                '<div class="row"><div class="column large-6 tab-full"><h3>'
                . $projects[$i]['name']
                . '</h3><p>'
                . $projects[$i]['description']
                . '</p></div>'
              );
            } else {
              echo (
                '<div class="column large-6 tab-full"><h3>'
                . $projects[$i]['name']
                . '</h3><p>'
                . $projects[$i]['description']
                . '</p></div>'
                
              );
            }
          }
        ?>
      </div>
    </div>
    <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 6</div>
  <img src="../../public/img/Projets/Janvier 2022 - Couverture Vinyle/Falling-Vinyl-Record-Disc-Mockup.jpg" style="width:100%">
  <div class="text">Artwork Vinyle</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 6</div>
  <img src="../../public/img/Projets/Janvier 2022 - Couverture Vinyle/Mockup 1 fond de base.jpg" style="width:100%">
  <div class="text">Artwork Vinyle</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 6</div>
  <img src="../../public/img/Projets/Janvier 2022 - Couverture Vinyle/Mockup 2 fond de base.jpg" style="width:100%">
  <div class="text">Artwork Vinyle</div>
</div>

<div class="mySlides fade">
    <div class="numbertext">4 / 6</div>
    <img src="../../public/img/Projets/Décembre 2021 - Wecolo/Mockup PC.png" style="width:100%">
    <div class="text">Projet tutoré Wecolo</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">5 / 6</div>
    <img src="../../public/img/Projets/Décembre 2021 - Wecolo/Mockup Tel.jpg" style="width:100%">
    <div class="text">Projet Tutoré Wecolo</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">6/ 6</div>
    <img src="../../public/img/Projets/Avril 2021 - Couverture de polar Lars Kepler/Soft_Cover_Book_Mockup_01.jpg" style="width:100%">
    <div class="text">Couverture polars Lars Kepler</div>
  </div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 
  <span class="dot" onclick="currentSlide(6)"></span> 
</div>
    <div class="video-container">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/dKy85UhjhY8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="video-container">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/T2r4sPR8hV0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
<!-- end row -->

    <div class="row">
      <div class="column large-6 tab-full">
        <h3></h3>

        <form method="post" action="Mail.php">
          <div>
            <label for="sampleInput">Votre adresse mail</label>
            <input class="h-full-width" type="email" placeholder="test@mailbox.com" id="sampleInput">
          </div>

          <label for="exampleMessage">Message</label>
          <textarea class="h-full-width" name = "message" placeholder="Votre message" id="exampleMessage"></textarea>

          <label class="h-add-bottom">
            <input type="checkbox">
            <span class="label-text">Envoyer une copie à votre adresse mail</span>
          </label>

          <input class="btn--primary h-full-width" type="submit" value="Envoyer">
        </form>
      </div>

  </section> <!-- end s-styles -->

  <?php include('partials/footer.php'); ?>

  <!-- photoswipe background
  ================================================== -->
  <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">
    <div class="pswp__bg"></div>

    <div class="pswp__scroll-wrap">
      <div class="pswp__container">
        <div class="pswp__item"></div>
        <div class="pswp__item"></div>
        <div class="pswp__item"></div>
      </div>

      <div class="pswp__ui pswp__ui--hidden">
        <div class="pswp__top-bar">
          <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title="Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
          
          <div class="pswp__preloader">
            <div class="pswp__preloader__icn">
              <div class="pswp__preloader__cut">
                <div class="pswp__preloader__donut"></div>
              </div>
            </div>
          </div>
        </div>

        <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
          <div class="pswp__share-tooltip"></div>
        </div>

        <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
        <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>

        <div class="pswp__caption">
          <div class="pswp__caption__center"></div>
        </div>
      </div>
    </div>
  </div> <!-- end photoSwipe background -->


  <!-- Java Script
  ================================================== -->
  <script src ="Carousel.js"></script>
  <script src="/public/js/jquery-3.2.1.min.js"></script>
  <script src="/public/js/plugins.js"></script>
  <script src="/public/js/main.js"></script>
</body>