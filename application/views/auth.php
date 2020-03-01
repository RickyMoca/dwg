<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Mosaddek">

  <!--favicon icon-->
  <link rel="icon" type="image/png" href="<?= base_url(); ?>assets/img/favicon.html">

  <title><?= $title ?></title>

  <!--web fonts-->
  <link href="http://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

  <!--bootstrap styles-->
  <link href="<?= base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!--icon font-->
  <link href="<?= base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/vendor/dashlab-icon/dashlab-icon.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/vendor/themify-icons/css/themify-icons.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/vendor/weather-icons/css/weather-icons.min.css" rel="stylesheet">

  <!--custom scrollbar-->
  <link href="<?= base_url(); ?>assets/vendor/m-custom-scrollbar/jquery.mCustomScrollbar.css" rel="stylesheet">

  <!--jquery dropdown-->
  <link href="<?= base_url(); ?>assets/vendor/jquery-dropdown-master/jquery.dropdown.css" rel="stylesheet">

  <!--jquery ui-->
  <link href="<?= base_url(); ?>assets/vendor/jquery-ui/jquery-ui.min.css" rel="stylesheet">

  <!--iCheck-->
  <link href="<?= base_url(); ?>assets/vendor/icheck/skins/all.css" rel="stylesheet">

  <!--custom styles-->
  <link href="<?= base_url(); ?>assets/css/main.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="<?= base_url(); ?>assets/vendor/html5shiv.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login-bg">

  <div class="col-lg-12">
    <!--login form-->
    <div class="login-form mt-5">
      <h4 class="text-uppercase text-dark text-left"><i class="fa fa-lock" aria-hidden="true"></i> <?= $card_titel ?></h4>
      <div class="form-divider-atas"></div>

      <!-- load form disi -->
      <?= $load_content ?>
      <!-- end Load kontent  -->

      <!-- footer Login -->
      <div class="text-center">
        <div class="form-divider-bottom"></div>
        <em>2020 All Right &copy; Reserved By Mohamad Ricky</em>
        .<p class="text-dark"> Www.Digitalwinning.id </p>
      </div>
    </div>
    <!-- End Footer Login -->


  </div>


  <!--basic scripts-->
  <script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/jquery-ui/jquery-ui.min.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/popper/popper.min.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/jquery-dropdown-master/jquery.dropdown.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/m-custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/icheck/skins/icheck.min.js"></script>

  <!--[if lt IE 9]>
    <script src="<?= base_url(); ?>assets/vendor/modernizr.js"></script>
    <![endif]-->

  <!--basic scripts initialization-->
  <script src="<?= base_url(); ?>assets/js/scripts.js"></script>
</body>

</html>