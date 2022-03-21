<!-- footer
================================================== -->
<footer class="s-footer h-dark-bg">
  <div class="right-vert-line"></div>

  <div class="row s-footer__main">
    <div class="column large-6">
      <div class="section-intro">
        <h3 class="subhead">Get In Touch</h3>

        <h1 class="display-1">
          Have an idea or a concept that really excite you?
          Let's turn that idea into reality. Shoot me a message.
        </h1>
      </div>

      <div class="footer-email-us">
        <?php echo('<a href="mailto:' . $authors['email'] . '" class="btn btn--primary h-full-width">Let\'s Talk</a>'); ?>
      </div>
    </div>

    <div class="column large-5">
      <div class="footer-contacts">
        <div class="footer-contact-block">
          <h5 class="footer-contact-block__header">
            Email
          </h5>
          <p class="footer-contact-block__content">
            <?php echo('<a href="mailto:' . $authors['email'] . '">' . $authors['email'] . '</a>'); ?>
          </p>
        </div> <!-- end footer-contact-block -->

        <div class="footer-contact-block">
          <h5 class="footer-contact-block__header">
            Phone
          </h5>
          <p class="footer-contact-block__content">
            <?php echo('<a href="tel:' . $authors['phone'] . '">' . $authors['phone'] . '</a>'); ?>
          </p>
        </div> <!-- end footer-contact-block -->
        <br>

        <div class="footer-contact-block">
          <h5 class="footer-contact-block__header">
            Social
          </h5>
          
          <ul class="footer-contact-block__list">
            <li>
              <?php echo('<a href="' . $authors['twitter'] . '" target="_blank">Twitter</a>'); ?>
            </li>
            <li>
              <?php echo('<a href="' . $authors['instagram'] . '" target="_blank">Instagram</a>'); ?>
            </li>
            <li>
              <?php echo('<a href="' . $authors['linkedin'] . '" target="_blank">LinkedIn</a>'); ?>
            </li>
          </ul>
        </div> <!-- end footer-contact-block -->
      </div>
    </div>
  </div> <!-- end s-footer__main -->

  <div class="row s-footer__bottom">
    <div class="column large-full ss-copyright">
      <span>© Copyright Ethos 2019</span>
      <span>Design by <a href="https://www.styleshout.com/">StyleShout</a></span>
    </div> <!-- end ss-copyright -->

    <div class="ss-go-top">
      <a class="smoothscroll" title="Back to Top" href="#top">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
          <path d="M12 0l8 9h-6v15h-4v-15h-6z" />
        </svg>
      </a>
    </div> <!-- end ss-go-top -->
  </div> <!-- end s-footer__bottom -->
</footer> <!-- end s-footer -->