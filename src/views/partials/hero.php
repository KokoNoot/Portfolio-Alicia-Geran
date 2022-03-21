<!-- hero
================================================== -->
<section id="hero" class="s-hero target-section" data-parallax="scroll" data-image-src="/public/img/hero-bg-3000.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=center>
  <div class="row hero-content">
    <div class="column large-full">
      <h1>
        <?php echo $authors['short_biography']; ?>
      </h1>

      <ul class="hero-social">
        <li>
          <?php echo('<a href="' . $authors['twitter'] . '" target="_blank">Twitter</a>'); ?>
        </li>

        <li>
          <?php echo('<a href="' . $authors['instagram'] . '" target="_blank">Instagram</a>'); ?>
        </li>

        <li>
          <?php echo('<a href="' . $authors['linkedin'] . '" target="_blank">LinkedIn</a>'); ?>
        </li>
      </ul> <!-- end hero-social -->
    </div>
  </div> <!-- end hero-content -->

  <div class="hero-scroll">
    <a href="#styles" class="scroll-link smoothscroll">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
        <path d="M12 24l-8-9h6v-15h4v15h6z" />
      </svg>
    </a>
  </div> <!-- end hero-scroll -->
</section> <!-- end s-hero -->
