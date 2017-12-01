<?php
session_start();
require 'dbh1.php';

$mysqli = mysqli_connect($host, $user, $pass, $db);
if (!$mysqli) die("Unable to connect to MySQL: ". mysqli_error());


?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no
m-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Project Cherry - NightLife</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <!--Google Fonts link-->
        
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700,700i" rel="stylesheet">

        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/iconfont.css">
        <link rel="stylesheet" href="assets/css/slick/slick.css">
        <link rel="stylesheet" href="assets/css/slick/slick-theme.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/jquery.fancybox.css">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->
        

        <!--For Plugins external css-->
        <link rel="stylesheet" href="assets/css/plugins.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />
<link rel="stylesheet" href="assets/css/star.css">
        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    
        
    </head>
    <body data-spy="scroll" data-target=".navbar-collapse">

        <div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <div class="culmn">
            <header id="main_menu" class="header navbar-fixed-top">            
                <div class="main_menu_bg">
                    <div class="container">
                        <div class="row">
                                <nav class="navbar navbar-default">
                                    <div class="container-fluid">
                                        <!-- Brand and toggle get grouped for better mobile display -->
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                            <a class="navbar-brand" href="#home">
                                                 <!--- <h3>Project Cherry</h3><img src="assets/images/logo.png"/> --->
                                            </a>
                                        </div>

                                        <!-- Collect the nav links, forms, and other content for toggling -->



                                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                            <ul class="nav navbar-nav navbar-right">
                                                <li><a href="index.html">HOME</a></li>
                                                <!-- <li><a href="#history">ABOUT US</a></li> -->
                                                <!-- <li><a href="#portfolio">PORTFOLIO</a></li>
                                                <li><a href="#pricing">Awards</a></li>
                                                <li><a href="#team">Culture</a></li>
                                                <!-- <li><a href="#blog">BLOG</a></li> 
                                                <li><a href="#contact">Sport</a></li>-->
                                                
                                                <?php 
                                                    if (isset ($_SESSION['logged_in'] )) {
                                                       echo '<li><a href="eventcreate.php">Create Event</a></li>
                                                            <li><a href="logout.php">LOGOUT</a></li>';
                                                    } else {
                                                      echo  '<li><a href="login.php">LOGIN / SIGNUP</a></li>';
                                                    }
                                                ?> 
                                                
                                            </ul>
                                                
                                        </div>

                                    </div>
                                </nav>
                            </div>	
                        </div>

                    </div>

                </div>
            </header> <!--End of header -->





           
                                    <div class="separator"></div>
                                </div>
                            </div>
                            <div class="work_menu text-center">
                                <div id="filters" class="toolbar mb2 mt2">
                                   <button class="btn-md fil-cat filter active" data-filter="all">ALL</button>/
                                    <button class="btn-md fil-cat filter" data-rel="web" data-filter=".web">WEB DESIGN</button>/
                                    <button class="btn-md fil-cat filter" data-rel="design" data-filter=".design">PRINT DESIGN</button>/
                                    <button class="btn-md fil-cat filter" data-rel="flyers" data-filter=".flyers">ANIMATION</button>/
                                    <button class="btn-md fil-cat filter" data-rel="bcards" data-filter=".bcards">ART</button>/
                                    <button class="btn-md fil-cat filter" data-rel="photo" data-filter=".photo">PHOTOGRAPHY</button>/
                                    <button class="btn-md fil-cat filter" data-rel="video" data-filter=".video">VIDEO</button>
                                </div> 

                            </div>
                            
                            
                        
                            <div style="clear:both;"></div>     
                            <div id="portfoliowork">
                                 
                                 
                                   <?php
                                    $query = "select * from Nightlife";
                                    $result = mysqli_query($mysqli, $query); ?>
                                    
                                   <?php while($row = mysqli_fetch_array($result))
                                        { ?>
                                          
                                         <div class="single_portfolio tile scale-anm bcards photo">
                                          <?php echo '<img src="data:image/jpeg;base64,' . base64_encode( $row['NightImage'] ) . '" />'; ?> 
                                          <div class="grid_item_overlay">
                                            <div class="separator4"></div>
                                            <h3><?php echo $row['NightName'] ?></h3>
                                            <p><?php echo $row['NightLocation'] ?></p>
                                            
                                           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#signupModal">
View Event
</button>


<!-- Modal -->
<div class="modal fade" id="signupModal" class="" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div class="row">
            <div class="col-sm-6 text-center col-xs-height">
                <div class="signup-popup">
                    <h4>Signup Now</h4>
                </div>
            </div>

            

                </div>

            </div>
        </div>
      </div>

    </div>

  
  
  
  

                                           
                                        </div>
                                    
                                </div>
                                <?php } ?>
      
  </div>
   <div style="clear:both;"></div>  
   
                        </div>
                    </div>
                </div><!-- End off container --> 
            </section> <!-- End off Work Section --> 
            <?php 
            mysqli_close ($mysqli);
            ?>
                                 
    </body>
    </html>
    
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">View Event</button>

<!-- Modal -->
<div class="modal fade" id="myModal" class="" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div class="row">
            <div class="col-sm-6 text-center col-xs-height">
                <div class="signup-popup">
                    <h4>Signup Now</h4>

                   
                    </div>

                </div>

            </div>
        </div>
      </div>

    </div>
  </div>
