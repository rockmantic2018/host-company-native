<?php 
include '../config/database.php';
include_once '../system/crud.php';//config database
include '../system/sqli.php';
$systemload = new CRUD();//load controller


?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="description" content="Miminium Admin Template v.1">
  <meta name="author" content="Isna Nur Azis">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Miminium</title>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="../assets/back/css/bootstrap.min.css">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="../assets/back/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="../assets/back/css/plugins/simple-line-icons.css"/>
  <link rel="stylesheet" type="text/css" href="../assets/back/css/plugins/animate.min.css"/>
  <link rel="stylesheet" type="text/css" href="../assets/back/css/plugins/icheck/skins/flat/aero.css"/>
  <link href="../assets/back/css/style.css" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="../assets/back/img/logomi.png">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>

    <body id="mimin" class="dashboard form-signin-wrapper">

      <div class="container">

        <form class="form-signin" method="POST">
          <div class="panel periodic-login">
              <span class="atomic-number"><?php echo date('d F Y');?></span>
              <div class="panel-body text-center">
                  <h1 class="atomic-symbol">RM</h1>
                  <?php
  $hari = array ( 1 =>    'Senin',
        'Selasa',
        'Rabu',
        'Kamis',
        'Jumat',
        'Sabtu',
        'Minggu'
      );
?>
                  <p class="atomic-mass"><?php echo $hari[date('N')];?></p>

                  <i class="icons icon-arrow-down"></i>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" class="form-text" required name="username">
                    <span class="bar"></span>
                    <label>Username</label>
                  </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="password" class="form-text" required name="password">
                    <span class="bar"></span>
                    <label>Password</label>
                  </div>
                  <!--
                  <label class="pull-left">
                  <input type="checkbox" class="icheck pull-left" name="checkbox1"/> Remember me
                  </label>
                -->
                  <input type="submit" name="proses-login" class="btn col-md-12" value="SignIn"/>
              </div>
                <div class="text-center" style="padding:5px;">
                    <a href="#">Forgot Password </a>
                    <a href="#">| Signup</a>
                </div>
          </div>
        </form>
        <?php      
      if (isset($_POST['proses-login'])) 
      {
        $login = $systemload->login($_POST['username'],$_POST['password']);        
      }
     ?>


      </div>

      <!-- end: Content -->
      <!-- start: Javascript -->
      <script src="../assets/back/js/jquery.min.js"></script>
      <script src="../assets/back/js/jquery.ui.min.js"></script>
      <script src="../assets/back/js/bootstrap.min.js"></script>

      <script src="../assets/back/js/plugins/moment.min.js"></script>
      <script src="../assets/back/js/plugins/icheck.min.js"></script>

      <!-- custom -->
      <script src="../assets/back/js/main.js"></script>
      <script type="text/javascript">
       $(document).ready(function(){
         $('input').iCheck({
          checkboxClass: 'icheckbox_flat-aero',
          radioClass: 'iradio_flat-aero'
        });
       });
     </script>
     <!-- end: Javascript -->
   </body>
   </html>