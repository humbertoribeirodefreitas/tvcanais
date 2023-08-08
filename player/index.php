<?php session_start(); ?>
<?php if($_SESSION['types']) { ?>
<script>  window.location.href = 'dashboard.php'; </script>
<?php exit(); } ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Play IPTV M3U stream files online free. No software or app to install. A browser based free IPTV player with all the functions you will expect from a premium player.">
      <meta name="author" content="Free IPTV Player">
      <title>IPTV Player - Reproduza sua lista online</title>
      <link rel="icon" type="image/png" href="img/favicon.png">
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <link href="css/osahan.css" rel="stylesheet">
      <link rel="stylesheet" href="vendor/owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="vendor/owl-carousel/owl.theme.css">
   </head>
   <body class="login-main-body">
      <section class="login-main-wrapper">
         <div class="container-fluid pl-0 pr-0">
            <div class="row no-gutters">
               <div class="col-md-12 p-5 bg-white full-height">
                  <div class="login-main-left">
                     <div class="text-center mb-5 login-main-left-header pt-4">
                        <img style="max-height: 80px;" src="img/favicon.png" class="img-fluid" alt="LOGO">
                        <h5 class="mt-3 mb-3">IPTV Player</h5>
                        <p>Reproduza sua lista online</p>
                     </div>
                     <form method="post" action="view.php" enctype="multipart/form-data">
                        <div class="form-group">
                           <label>IPTV Endereço URL</label>
                           <input type="text" name="iptv" id="iptv" class="form-control" placeholder="https://xxxxxxx.com/username/password.m3u">
                        </div>
                        <strong>OU</strong><br><br>
                        <div class="form-group">
                           <label>Aqruivo IPTV</label>
                           <input type="file" name="iptvfile" id="iptvfile" class="form-control">
                        </div>
                        <div class="mt-4">
                           <div class="row">
                              <div class="col-12">
                                 <button type="submit" name="submit" class="btn btn-outline-primary btn-block btn-lg">Assistir</button>
                              </div>
                           </div>
                        </div>
                        &nbsp;
                        <div class="text-center mt-5">
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
      <script src="vendor/owl-carousel/owl.carousel.js"></script>
      <script src="js/custom.js"></script>
   </body>
   <footer style="display: none;">
      <p style="text-align: center;"><span style="color: #999999;"><a style="color: #999999;" href="contact/">Contact</a> | <a style="color: #999999;" href="privacy-policy/">Privacy Policy</a> | <a style="color: #999999;" href="terms-of-service/">Terms of Service</a></span></p>
      <p style="text-align: center;"><span style="color: #ff0000;">&copy; 2019 <a style="color: #ff0000;" href="">IPTV Player</a></span></p>
   </footer>
</html>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-137728988-1"></script>
<script>
if (location.protocol != 'http:')
{
 location.href = 'http:' + window.location.href.substring(window.location.protocol.length);
}
</script>
