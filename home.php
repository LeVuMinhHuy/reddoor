<html>

  <?php include './resource/header.php'; ?>

  <!--  tất cả class cần cho hiển thị trang home của website (chưa test trên điện thoại)-->
  <body class="ancillary-header-primary-nav-position-bottom-right tweak-header-primary-nav-hover-style-active tweak-footer-show tweak-mobile-bar-menu-icon-hamburger ancillary-mobile-bar-search-icon-position-hide has-primary-nav">
      <div class="Site" data-controller = "HeaderOverlay" data-controllers-bound = "HeaderOverlay" style="height: 661px;">
          <header class="Header--bottom Header--overlay">
            <?php include './resource/navbar.php'?>
            <br><br><br><br>
            <h1 style="text-align: center;font-family:Garamond"><font color="white">Red door</font></h1>
            <h3 style="text-align: center;font-family:Garamond"><font color="white">The Cafe</font></h3>
          </header>

          <?php include './resource/slideHome.php'; ?>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
          <div class="slide_buttons-home"></div>
          <script type="text/javascript">
          <?php include './assets/js/slideHome.js'; ?>
          </script>

        <div class="Index-page-image"></div>
     </div>

     <script type="text/javascript" src="assets/js/changepics.js"></script>
     <?php include './resource/footer.php'; ?>
     <?php include './resource/script.php'; ?>
    
  </body>
</html>
