<?php
include 'config/database.php';
include 'system/crud.php';

$set = $rm->web();
$web = $set->fetch(PDO::FETCH_OBJ);

    //Simpan Data Statistik Website
    $ip      = $_SERVER['REMOTE_ADDR']; // Mendapatkan IP komputer user
    $tanggal = date("Y-m-d"); // Mendapatkan tanggal sekarang
    $waktu   = time(); //
    $insert = $rm->pengunjung($ip,$tanggal,$waktu); //mencatat pengunjung ke database
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $web->title_web;?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="shortcut icon" href="assets/upload/favicon.png">

        <!--<link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,600,700' rel='stylesheet' type='text/css'> -->
        <link rel="stylesheet" href="assets/front/css/fonticons.css">
        <link rel="stylesheet" href="assets/front/fonts/stylesheet.css">
        <link rel="stylesheet" href="assets/front/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/front/css/bootstrap.min.css">
        <!--        <link rel="stylesheet" href="assets/front/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="assets/front/css/plugins.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/front/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/front/css/responsive.css" />

        <script src="assets/front/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body data-spy="scroll" data-target="#navmenu">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <!--Home page style-->
        <header id="main_menu" class="header">
            <div class="main_menu_bg navbar-fixed-top">
                <div class="container">
                    <div class="row">
                        <div class="nave_menu wow fadeInUp" data-wow-duration="1s">
                            <nav class="navbar navbar-default" id="navmenu">
                                <div class="container-fluid">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <a class="navbar-brand" href="#"><img src="assets/front/images/logo.png" alt=""/></a>
                                    </div>

                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                        <ul class="nav navbar-nav navbar-right">
                                            <li class="active"><a href="#home">Home</a></li>
                                            <li><a href="#domain">Domain</a></li>
                                            <li><a href="#pricing">Hosting</a></li>
                                            <li><a href="#clients">Clients</a></li>
                                            <li><a href="#service">Service</a></li>
                                            <li><a href="#footer">Support</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>  
                    </div>

                </div>

            </div>
        </header> <!--End of header -->



        <section id="home" class="home">
            <div class="home-overlay-fluid">
                <div class="container">
                    <div class="row">
                        <div class="main_slider_area">
                            <div class="slider">
                                <div class="single_slider wow fadeIn" data-wow-duration="2s">
                                    <h2>HELLO!</h2>
                                    <p>Portfolio RM</p>
                                    <p>Company Profile One Page</p>
                                </div>
                                <!--<div class="single_slider">
                                    <h2>HELLO!</h2>
                                    <p>We love our work...</p>
                                    <p>And We're taking it seriously...</p>
                                </div>
                                <div class="single_slider">
                                    <h2>HELLO!</h2>
                                    <p>We love our work...</p>
                                    <p>And We're taking it seriously...</p>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End of Banner Section -->

<!--
        <section id="register" class="register">
            <div class="container-fullwidth">
                <div class="row text-center">
                    <div class="col-sm-6 col-xs-6 no-padding">
                        <div class="single_register single_login">
                            <a href="">Login</a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-6 no-padding">
                        <div class="single_register">
                            <a href="">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

-->
        <section id="domain" class="domainsearce">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="main_somainsearrce">
                            <div class="head_title text-center wow fadeInDown" data-wow-duration="1s">
                                <h2>Would you like to buy a new domain ?</h2>                                
                            </div>

                            <div class="serceoption wow fadeIn" data-wow-duration="1.5s">
                                <div class="input-group input-group-lg">
                                    <span class="input-group-addon">www.</span>
                                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                    <span class="input-group-addon">.com 
                                        <span class="caret"></span> 
                                    </span> 
                                </div>
                            </div>

                            <div class="sercelist wow fadeIn" data-wow-duration="2s">
                                <div class="single_dotcom_serce text-center">
                                    
                                    <?php 
                                    $rik = $rm->show_dom();
                                    while($dom = $rik->fetch(PDO::FETCH_OBJ))
                                    {
                                    ?>
                                    <ul class="list-inline no-border">
                                        <li><p>.<?php echo $dom->nama_domain;?></p></li>
                                        <li><p>1 yer</p></li>
                                        <li><p><?php echo $dom->harga;?></p></li>
                                        <li><p><?php echo $dom->stok;?></p></li>
                                    </ul>
                                    <?php } ?>
                                    
                                   
                                 </div>    
                            </div> <!-- End of sercelist -->

                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section id="pricingtop" class="pricingtop">
            <div class="overlay">
                <div class="container">
                    <div class="main_pricingtop"></div>
                </div> 
            </div>
        </section>

        <section id="pricing" class="pricing">
            <div class="container">
                <div class="row">
                    <div class="main_pricing">

                        <div class="pricing_content">
                            <?php
                            $lagi = $rm->show_host();
                            while($host = $lagi->fetch(PDO::FETCH_OBJ))
                            {
                            ?>
                            <div class="col-md-3 col-sm-6">
                                <div class="single_pricing pricing_color_two wow fadeIn" data-wow-duration="1.2s">
                                    <div class="pricing_head text-center">
                                        <div class="icon_area p_icon_two">
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h3><?php echo $host->plan;?> PACKAGE</h3>
                                         <div class="separator"></div>
                                    </div>
                                    <figure class="single_pricing_figure">
                                        <ul>
                                            <li><span class="princing_name">Disk Space (GB)</span> <span class="princing_price princing_price_two"><?php echo $host->disk_space;?></span></li>
                                            <li><span class="princing_name">Subdomains</span> <span class="princing_price princing_price_two"><?php echo $host->subdomain;?></span></li>
                                            <li><span class="princing_name">Transfer (GB)</span> <span class="princing_price princing_price_two"><?php echo $host->transfer;?></span></li>
                                            <li><span class="princing_name">Data bases</span> <span class="princing_price princing_price_two"><?php echo $host->db;?></span></li>
                                        </ul>
                                        <div class="separator"></div>
                                    </figure>
                                    
                                    <footer class="pricing_footer text-center">
                                        <h3><span class="dolor">Rp</span> <?php echo $host->harga;?> <span class="month">/Mo </span></h3>
                                        <div class="smallseparator separetor_two"></div>
                                        <a href="">SELECT PLAN</a>
                                    </footer>
                                    
                                </div>
                            </div>
                            <?php } ?>

                        </div><!-- End of pcining section -->

                        <div class="abouts_area">
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="single_about wow fadeInLeft" data-wow-duration="1.5s">
                                        <h3>About Us</h3>
                                        <p><?php echo $web->about;?></p>
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="single_about_right wow fadeInRight" data-wow-duration="1.5s">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="single_team text-center">
                                                    <div class="team_img">
                                                        <img src="assets/front/images/team1.jpg" alt="" />
                                                    </div>
                                                    <div class="team_deatels">
                                                        <h4>Jonny Doe</h4>
                                                        <p>Designer</p>
                                                        <div class="team_socail">
                                                            <a href=""><i class="fa fa-facebook"></i></a>
                                                            <a href=""><i class="fa fa-twitter"></i></a>
                                                            <a href=""><i class="fa fa-link"></i></a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="single_team text-center">
                                                    <div class="team_img">
                                                        <img src="assets/front/images/team3.jpg" alt="" />
                                                    </div>
                                                    <div class="team_deatels">
                                                        <h4>Jonny Doe</h4>
                                                        <p>Designer</p>
                                                        <div class="team_socail">
                                                            <a href=""><i class="fa fa-facebook"></i></a>
                                                            <a href=""><i class="fa fa-twitter"></i></a>
                                                            <a href=""><i class="fa fa-link"></i></a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="single_team text-center">
                                                    <div class="team_img">
                                                        <img src="assets/front/images/team4.jpg" alt="" />
                                                    </div>
                                                    <div class="team_deatels">
                                                        <h4>Jonny Doe</h4>
                                                        <p>Designer</p>
                                                        <div class="team_socail">
                                                            <a href=""><i class="fa fa-facebook"></i></a>
                                                            <a href=""><i class="fa fa-twitter"></i></a>
                                                            <a href=""><i class="fa fa-link"></i></a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section><!-- End of Pricing Section -->




        <section id="clients" class="comments">
            <div class="overlay-fluid-block">
                <div class="container">
                    <div class="row">
                        <div class="main_comments wow fadeInUp" data-wow-duration="1.5s">
                            <div class="main_comments_content">
                                <?php
                                $ni = $rm->show_testi();
                                while($testi = $ni->fetch(PDO::FETCH_OBJ))
                                {
                                    ?>
                                <div class="single_comments text-center">
                                    <p>“<?php echo $testi->isi;?>”  </p>
                                    <a href=""><?php echo $testi->nama;?></a>
                                </div>
                                <?php } ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </section>

        <section id="service" class="service">
            <div class="container">
                <div class="row">
                    <div class="main_service text-center">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single_service wow fadeIn" data-wow-duration=".6s">
                                <div class="single_service_icon icon_one">
                                    <a href=""><i class="fa fa-flash"></i></a>
                                </div>
                                <div class="single_service_deatels">
                                    <h4>Fast Servers</h4>
                                    <p>Nulla dapibus neque augue, quis tincidunt tortor aliquam vitae.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single_service wow fadeIn" data-wow-duration="1.2s">
                                <div class="single_service_icon icon_two">
                                    <a href=""><i class="fa fa-skype"></i></a>
                                </div>
                                <div class="single_service_deatels">
                                    <h4>Cloud Servers</h4>
                                    <p>Nulla dapibus neque augue, quis tincidunt tortor aliquam vitae.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single_service wow fadeIn" data-wow-duration="1.7s">
                                <div class="single_service_icon icon_three">
                                    <a href=""><i class="fa fa-arrows"></i></a>
                                </div>
                                <div class="single_service_deatels">
                                    <h4>Domain Transfer</h4>
                                    <p>Nulla dapibus neque augue, quis tincidunt tortor aliquam vitae.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single_service wow fadeIn" data-wow-duration="2s">
                                <div class="single_service_icon icon_four">
                                    <a href=""><i class="fa fa-comments"></i></a>
                                </div>
                                <div class="single_service_deatels">
                                    <h4>Live Support</h4>
                                    <p>Nulla dapibus neque augue, quis tincidunt tortor aliquam vitae.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End of service Section -->



        <section id="footer" class="footer sections">
            <div class="container">
                <div class="row">
                    <div class="main_footer wow fadeInDown" data-wow-duration="2s">
                        <div class="col-sm-3 col-xs-12">
                            <div class="footer_logo">
                                <a href=""><img src="assets/front/images/logo.png" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-sm-9 col-xs-12">
                            <div class="footer_menu">
                                <ul class="list-inline">
                                    <li><a href="">HOME</a></li>
                                    <li><a href="">ABOUT US</a></li>
                                    <li><a href="">SERVICE</a></li>
                                    <li><a href="">POLICY</a></li>
                                    <li><a href="">CONTACT</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="footer_bottom_area">
                        <div class="col-sm-9 col-xs-12">
                            <div class="fo_bottom_right">
                                <div class="row">
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="single_right_footer wow fadeIn" data-wow-duration="1s">
                                            <p><?php echo $web->about;?></p>
                                            <a href="#domain">Buy : <strong>Now</strong></a>
                                            
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="single_right_footer wow fadeIn" data-wow-duration="1.5s">
                                            <ul>
                                                <li><a href=""><i class="lnr lnr-chevron-right"></i> Support</a></li>
                                                <li><a href=""><i class="lnr lnr-chevron-right"></i> Account</a></li>
                                                <li><a href=""><i class="lnr lnr-chevron-right"></i> Product Catalog</a></li>
                                                <li><a href=""><i class="lnr lnr-chevron-right"></i> Shortcodes</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="single_right_footer wow fadeIn" data-wow-duration="2s">
                                            <ul>
                                                <li><a href=""><i class="lnr lnr-chevron-right"></i> Support</a></li>
                                                <li><a href=""><i class="lnr lnr-chevron-right"></i> Account</a></li>
                                                <li><a href=""><i class="lnr lnr-chevron-right"></i> Product Catalog</a></li>
                                                <li><a href=""><i class="lnr lnr-chevron-right"></i> Shortcodes</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="col-sm-3 col-xs-12">
                            <div class="fo_bottom_socail wow fadeIn" data-wow-duration="2.3s">
                                <a href="#"><i class="fa fa-phone"> <?php echo $web->hp;?></i></a>
                                <a href=""><i class="fa fa-envelope"></i> <?php echo $web->email;?></a>
                                <p><?php echo $web->alamat;?> </p>
                            </div>
                        </div> 
                    </div>
                </div>
                
                
                
                
                
            </div>
        </section><!-- End of footer3 section -->
        
        <footer id="coppyrights" class="coppyrights">
            <div class="container-fluid">
            <div class="row">
                <div class="coppyright">
                    <p class="wow fadeInUp" data-wow-duration="2s">Made with <i class="fa fa-heart"></i> by <strong><a href="#">RM Development</a></strong> <?php echo date('Y');?>. All Rights Reserved</p>
                </div>
            </div>
            </div>
        </footer>






        <!-- STRAT SCROLL TO TOP -->

        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>

        <script src="assets/front/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/front/js/vendor/bootstrap.min.js"></script>
        <script src="assets/front/js/jquery.easypiechart.min.js"></script>

        <script src="assets/front/js/plugins.js"></script>
        <script src="assets/front/js/main.js"></script>

    </body>
</html>
