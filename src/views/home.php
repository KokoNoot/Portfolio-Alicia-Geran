<!DOCTYPE html>
<html class="no-js" lang="fr">
<head>
  <!--- basic page needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Alicia Geran | Portfolio</title>
  <meta name="description" content="">
  <meta name="author" content="">

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
  <script src="/public/js/jquery-3.2.1.min.js"></script>
  <script src="/public/js/plugins.js"></script>
  <script src="/public/js/main.js"></script>
</body>