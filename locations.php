<html>

    <?php include './resource/header.php'; ?>

    <body class="ancillary-header-primary-nav-position-bottom-right tweak-header-primary-nav-hover-style-active tweak-footer-show tweak-mobile-bar-menu-icon-hamburger ancillary-mobile-bar-search-icon-position-hide has-primary-nav">

      <div class="Site" data-controller = "HeaderOverlay" data-controllers-bound = "HeaderOverlay" style="height: 400px;">
          <header class="Header--bottom Header--overlay">
            <?php include './resource/navbar.php'?>
          </header>

          <?php include './resource/slideNav.php'; ?>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
          <!-- <div class="slide_buttons-nav"></div> -->
          <script type="text/javascript">
          <?php include './assets/js/slideNav.js'; ?>
          </script>

          <div class="Intro-image"></div>
     </div>

     <div class="Main-content" style="padding-left: 200px;padding-right: 200px;">
        <?php include './resource/info.php'; ?>


    </div>



        <?php include './resource/footer.php'; ?>
        <?php include './resource/script.php'; ?>
      </body>
      </html>
