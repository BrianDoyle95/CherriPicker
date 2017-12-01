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





            <!--home Section -->
            <section id="home" class="home">
                <div class="overlay">
                    <div class="home_skew_border">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 ">
                                    <div class="main_home_slider text-center">
                                        <div class="single_home_slider">
                                            <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                                <h3>The Best Events Are Our First Priority</h3>
                                                <h1>WELCOME TO PROJECT CHERRY</h1>
                                                <div class="separator"></div>
                                                <p>Project Cherry is a beginning and end to figuring out what you're going to do today, 
                                                    next weekend, and which race you're going to train for in 6 weeks time. 
                                                    With us we inform you of the best events nearest to you.</p>
                                                <div class="home_btn">
                                                    <a href="Sport.html" target="_blank" class="btn btn-default ">Sport</a>
                                                    <a href="NightLife.html" target="_blank" class="btn btn-default">NightLife</a>
													<a href="Culture.html" target="_blank" class="btn btn-default">Culture</a>
                                                </div>

                                            </div>
                                        </div>
                                        
                                    
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </section><!--End of home section -->


            <!--feature section -->
			<!--
            <section id="feature" class="feature sections">
                <div class="container">
                    <div class="row">
                        <div class="main_feature text-center">

                            <div class="col-sm-3">
                                <div class="single_feature">
                                    <div class="single_feature_icon">
                                        <i class="fa fa-clone"></i>
                                    </div>

                                    <h4>SLEEK DESIGN</h4>
                                    <div class="separator3"></div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting let. 
                                        Lorem Ipsum has been the industry.</p>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="single_feature">
                                    <div class="single_feature_icon">
                                        <i class="fa fa-heart-o"></i>
                                    </div>

                                    <h4>CLEAN CODE</h4>
                                    <div class="separator3"></div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting let. 
                                        Lorem Ipsum has been the industry.</p>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="single_feature">
                                    <div class="single_feature_icon">
                                        <i class="fa fa-lightbulb-o"></i>
                                    </div>
                                    <h4>CREATIVE IDEAS</h4>
                                    <div class="separator3"></div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting let. 
                                        Lorem Ipsum has been the industry.</p>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="single_feature">
                                    <div class="single_feature_icon">
                                        <i class="fa fa-comments-o"></i>
                                    </div>

                                    <h4>FREE SUPPORT</h4>
                                    <div class="separator3"></div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting let. 
                                        Lorem Ipsum has been the industry.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--End of container -->
            </section><!--End of feature Section -->
            <hr />
			
			


            <!-- History section -->
			<!--
            <section id="history" class="history sections">
                <div class="container">
                    <div class="row">
                        <div class="main_history">
                            <div class="col-sm-6">
                                <div class="single_history_img">
                                    <img src="assets/images/stab1.png" alt="" />
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="single_history_content">
                                    <div class="head_title">
                                        <h2>OUR HISTORY</h2>
                                    </div>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page 
                                        when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal 
                                        distribution of letters, as opposed to using 'Content here, content here', making it 
                                        look like readable English. Many desktop publishing packages and web page editors now use 
                                        Lorem Ipsum as their default model text, and a search for 'lorem ipsum' </p>

                                    <a href="" class="btn btn-lg">BROWSE OUR WORK</a>
                                </div>
                            </div>
                        </div>
                    </div><!--End of row -->
                </div><!--End of container -->
            </section><!--End of history -->


            <!-- service Section 
            <section id="service" class="service">
                <div class="container-fluid">
                    <div class="row">
                        <div class="main_service">
                            <div class="col-md-6 col-sm-12 no-padding">

                                <div class="single_service single_service_text text-right">
                                    <div class="head_title">
                                        <h2>What do we do?</h2>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 col-sm-10 col-xs-10 margin-bottom-60">
                                            <div class="row">

                                                <div class="col-sm-10 col-sm-offset-1 col-xs-9 col-xs-offset-1">
                                                    <article class="single_service_right_text">
                                                        <h4>Cherry Picker Exclusives</h4>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                            Lorem Ip sum has been the industry's standard dummy text ever.</p>
                                                    </article>
                                                </div>
                                                <div class="col-sm-1 col-xs-1">
                                                    <figure class="single_service_icon">
                                                        <i class="fa fa-heart"></i>
                                                    </figure><!-- End of figure -->
                                                </div>
                                            </div>
                                        </div><!-- End of col-sm-12 

                                        <div class="col-md-12 col-sm-10 col-xs-10 margin-bottom-60">
                                            <div class="row">

                                                <div class="col-sm-10 col-sm-offset-1 col-xs-9 col-xs-offset-1">
                                                    <article class="single_service_right_text">
                                                        <h4>Weekends made easy</h4>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                            Lorem Ip sum has been the industry's standard dummy text ever.</p>
                                                    </article>
                                                </div>
                                                <div class="col-sm-1 col-xs-1">
                                                    <figure class="single_service_icon">
                                                        <i class="fa fa-heart"></i>
                                                    </figure><!-- End of figure -->
                                                </div>
                                            </div>
                                        </div><!-- End of col-sm-12 

                                        <div class="col-md-12 col-sm-10 col-xs-10 margin-bottom-60">
                                            <div class="row">

                                                <div class="col-sm-10 col-sm-offset-1 col-xs-9 col-xs-offset-1 margin-bottom-20">
                                                    <article class="single_service_right_text">
                                                        <h4>FREE EVENTS</h4>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                            Lorem Ip sum has been the industry's standard dummy text ever.</p>
                                                    </article>
                                                </div>
                                                <div class="col-sm-1 col-xs-1">
                                                    <figure class="single_service_icon">
                                                        <i class="fa fa-heart"></i>
                                                    </figure><!-- End of figure -->
                                                </div>
                                            </div>
                                        </div><!-- End of col-sm-12 -->

                                    </div>
                                </div>
                            </div><!-- End of col-sm-6 

                            <div class="col-md-6 col-sm-12 no-padding">
                                <figure class="single_service single_service_img">
                                    <div class="overlay-img"></div>
                                    <img src="assets/images/servicerightimg.jpg" alt="" />
                                </figure><!-- End of figure -->
                            </div><!-- End of col-sm-6 -->

                        </div>
                    </div><!-- End of row -->
                </div><!-- End of Container-fluid -->
            </section><!-- End of service Section -->


            <section id="portfolio" class="portfolio sections">
                <div class="container-fluid">
                    <div class="row">
                        <div class="main_portfolio">
                            <div class="col-sm-12">
                                <div class="head_title text-center">
                                    
                                    <h2>Events Map</h2>
                                        <div id="map" style="width:100%;height:500px"></div>

                                        <script>
                                        function myMap() {
                                          var myCenter = new google.maps.LatLng(53.343688, -6.259467);
                                          var mapCanvas = document.getElementById("map");
                                          var mapOptions = {center: myCenter, zoom: 13};
                                          var map = new google.maps.Map(mapCanvas, mapOptions);
                                          
                            // Coordinates for each event location
                                          var Coppers = {lat: 53.335371, lng: -6.263609};
                                          var Whelans = {lat: 53.336578, lng: -6.265707};
                                          var District8 = {lat: 53.342324, lng: -6.276018};
                                          var NCI = {lat: 53.348811, lng: -6.243211};
                                          var TheBowery = {lat: 53.324325, lng: -6.264807};
                                          var Workmans = {lat: 53.345366, lng: -6.266418};
                                          var Dtwo = {lat: 53.334298, lng: -6.262810};
                                          
                            // Creating marker for each event
                                          var marker = new google.maps.Marker({
                                              position: Coppers,
                                              map: map,
                                              title: 'Coppers'
                                          });
                                          
                                          var marker = new google.maps.Marker({
                                              position: Whelans,
                                              map: map,
                                              title: 'Whelans'
                                          });
                                          
                                          var marker = new google.maps.Marker({
                                              position: District8,
                                              map: map,
                                              title: 'District 8'
                                          });
                                          
                                          
                                         var marker = new google.maps.Marker({
                                              position: NCI,
                                              map: map,
                                              title: 'NCI'
                                          });
                                          
                                          var marker = new google.maps.Marker({
                                              position: TheBowery,
                                              map: map,
                                              title: 'The Bowery'
                                          });
                                          
                                          var marker = new google.maps.Marker({
                                              position: Workmans,
                                              map: map,
                                              title: 'Workmans'
                                          });
                                          
                                          var marker = new google.maps.Marker({
                                              position: Dtwo,
                                              map: map,
                                              title: 'Dtwo'
                                          });
                                            
                                          
                                        }
                                        </script>
                                
                                        
                                        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdjYxIyEZe32zVZvn3UqVEdne3tpYkvf0&callback=myMap"></script>

                                    
                                <?php include 'eventnames.php';?>
                                    <div class="subtitle">
                                        It has survived not only five centuries, but also the leap scrambled it to make a type.
                                    </div>
                                    
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
                                    $result = mysqli_query($mysqli, $query); 
                                     $i =0; ?>
                                   <?php while($row = mysqli_fetch_array($result))
                                        {  ?>
                                          
                                         <div class="single_portfolio tile scale-anm bcards photo">
                                          <?php echo '<img src="data:image/jpeg;base64,' . base64_encode( $row['NightImage'] ) . '" />'; ?> 
                                          <div class="grid_item_overlay">
                                            <div class="separator4"></div>
                                            <h3><?php echo $row['NightName'] ?></h3>
                                            <p><?php echo $row['NightLocation'] ?></p>
                                         <?php echo '<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal'.$i.'">Event Details</button>'; ?>
                                              

                                        </div>
                                    
                                </div>
   
                                <?php $i++;  } ?>
                                
            <?php
                                    $query = "select * from Nightlife";
                                    $result = mysqli_query($mysqli, $query); 
                                     $i =0; ?>
                                   <?php while($row = mysqli_fetch_array($result))
                                        {  ?>        
       <?php echo'<div class="modal fade" id="myModal'.$i.'" role="dialog">'; ?>
            <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><?php echo $row['NightName'] ?></h4>
        </div>
        <div class="modal-body">
          <p><?php echo $row['NightLocation'] ?></p>
          <p><?php echo $row['NightDate'] ?></p>
          <p><?php echo $row['NightDesc'] ?></p>
          <p><?php echo $row['NightTime'] ?></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>   
                <?php  $i++;  } ?>
                               
  </div>
   <div style="clear:both;"></div>  
   
                        </div>
                    </div>
                </div><!-- End off container --> 
            </section> <!-- End off Work Section --> 
            <?php 
            mysqli_close ($mysqli);
            ?>
                                 
                                 
                  
   
                        
    
            
                  
                              <!--  <div class="single_portfolio tile scale-anm bcards photo" >
                                    <img src="/team_project/assets/images/diceys.png" alt="" />
                                    
                                        <div class="grid_item_overlay">
                                            <div class="separator4"></div>
                                            <h3>Diceys</h3>
                                            <p>Harcourt Street</p>
                                          <div class="stars">
  <form action="">
    <input class="star star-5" id="star-5" type="radio" name="star"/>
    <label class="star star-5" for="star-5"></label>
    <input class="star star-4" id="star-4" type="radio" name="star"/>
    <label class="star star-4" for="star-4"></label>
    <input class="star star-3" id="star-3" type="radio" name="star"/>
    <label class="star star-3" for="star-3"></label>
    <input class="star star-2" id="star-2" type="radio" name="star"/>
    <label class="star star-2" for="star-2"></label>
    <input class="star star-1" id="star-1" type="radio" name="star"/>
    <label class="star star-1" for="star-1"></label>
  </form>
</div>
                                        </div>
                                    
                                </div>
                            
                            
                            
                            
                            
                                <div class="single_portfolio tile scale-anm web video">
                                    <img src="turk.jpg" alt="" />
                                    
                                        <div class="grid_item_overlay">
                                            <div class="separator4"></div>
                                            <h3>Turk's Head</h3>
                                            <p>Temple Bar</p>
                                              <div class="stars">
  <form action="">
    <input class="star star-5" id="star-5" type="radio" name="star"/>
    <label class="star star-5" for="star-5"></label>
    <input class="star star-4" id="star-4" type="radio" name="star"/>
    <label class="star star-4" for="star-4"></label>
    <input class="star star-3" id="star-3" type="radio" name="star"/>
    <label class="star star-3" for="star-3"></label>
    <input class="star star-2" id="star-2" type="radio" name="star"/>
    <label class="star star-2" for="star-2"></label>
    <input class="star star-1" id="star-1" type="radio" name="star"/>
    <label class="star star-1" for="star-1"></label>
  </form>
</div>
                                        </div>
                                    
                                </div>
                                <div class="single_portfolio tile scale-anm web photo" >
                                    <img src="assets/images/oreillys.jpg" alt="" />
                                    
                                        <div class="grid_item_overlay">
                                            <div class="separator4"></div>
                                            <h3>O'Reily's</h3>
                                            <p>Tara Street</p>
                                              <div class="stars">
  <form action="">
    <input class="star star-5" id="star-5" type="radio" name="star"/>
    <label class="star star-5" for="star-5"></label>
    <input class="star star-4" id="star-4" type="radio" name="star"/>
    <label class="star star-4" for="star-4"></label>
    <input class="star star-3" id="star-3" type="radio" name="star"/>
    <label class="star star-3" for="star-3"></label>
    <input class="star star-2" id="star-2" type="radio" name="star"/>
    <label class="star star-2" for="star-2"></label>
    <input class="star star-1" id="star-1" type="radio" name="star"/>
    <label class="star star-1" for="star-1"></label>
  </form>
</div>
                                   </div>
                                </div>
                                <div class="single_portfolio tile scale-anm bcards design" >
                                    <img src="assets/images/academy.png" alt="" />  

                                        <div class="grid_item_overlay">
                                            <div class="separator4"></div>
                                            <h3>The Academy</h3>
                                            <p>Abbey Street</p>
                                          <div class="stars">
  <form action="">
    <input class="star star-5" id="star-5" type="radio" name="star"/>
    <label class="star star-5" for="star-5"></label>
    <input class="star star-4" id="star-4" type="radio" name="star"/>
    <label class="star star-4" for="star-4"></label>
    <input class="star star-3" id="star-3" type="radio" name="star"/>
    <label class="star star-3" for="star-3"></label>
    <input class="star star-2" id="star-2" type="radio" name="star"/>
    <label class="star star-2" for="star-2"></label>
    <input class="star star-1" id="star-1" type="radio" name="star"/>
    <label class="star star-1" for="star-1"></label>
  </form>
</div>
                                        </div>
                                    
                                </div>

                                <div class="single_portfolio tile scale-anm flyers video design">
                                    <img src="/team_project/assets/images/workmans.png" alt="" />
                                    
                                        <div class="grid_item_overlay">
                                            <div class="separator4"></div>
                                            <h3>The Workman's Club</h3>
                                            <p>Along the Quays</p>
                                              <div class="stars">
 
<form action=""> 
    <input class="star star-5" id="star-5" type="radio" name="star"/> 
    <label class="star star-5" for="star-5"></label>
    <input class="star star-4" id="star-4" type="radio" name="star"/>
    <label class="star star-4" for="star-4"></label>
    <input class="star star-3" id="star-3" type="radio" name="star"/>
    <label class="star star-3" for="star-3"></label>
    <input class="star star-2" id="star-2" type="radio" name="star"/>
    <label class="star star-2" for="star-2"></label>
    <input class="star star-1" id="star-1" type="radio" name="star"/>
    <label class="star star-1" for="star-1"></label>
  </form>
  
  
</div>
                                        </div>
                                    
                                </div>
                                <div class="single_portfolio tile scale-anm photo flyers">
                                    <img src="assets/images/themezz.png" alt="" />
                                    
                                        <div class="grid_item_overlay">
                                            <div class="separator4"></div>
                                            <h3>The Mezz</h3>
                                            <p>Temple Bar</p>
                                              <div class="stars">
  <form action="">
    <input class="star star-5" id="star-5" type="radio" name="star"/>
    <label class="star star-5" for="star-5"></label>
    <input class="star star-4" id="star-4" type="radio" name="star"/>
    <label class="star star-4" for="star-4"></label>
    <input class="star star-3" id="star-3" type="radio" name="star"/>
    <label class="star star-3" for="star-3"></label>
    <input class="star star-2" id="star-2" type="radio" name="star"/>
    <label class="star star-2" for="star-2"></label>
    <input class="star star-1" id="star-1" type="radio" name="star"/>
    <label class="star star-1" for="star-1"></label>
  </form>
</div>
                                        </div>
                                    
                                </div>

                                <div class="single_portfolio tile scale-anm bcards video" >
                                    <img src="/team_project/assets/images/livingroom.png" alt="" />
                                    
                                        <div class="grid_item_overlay">
                                            <div class="separator4"></div>
                                            <h3>Living Room</h3>
                                            <p>O'Connel Street</p>
                                          <div class="stars">
  <form action="">
    <input class="star star-5" id="star-5" type="radio" name="star"/>
    <label class="star star-5" for="star-5"></label>
    <input class="star star-4" id="star-4" type="radio" name="star"/>
    <label class="star star-4" for="star-4"></label>
    <input class="star star-3" id="star-3" type="radio" name="star"/>
    <label class="star star-3" for="star-3"></label>
    <input class="star star-2" id="star-2" type="radio" name="star"/>
    <label class="star star-2" for="star-2"></label>
    <input class="star star-1" id="star-1" type="radio" name="star"/>
    <label class="star star-1" for="star-1"></label>
  </form>
</div>
                                        </div>
                                    
                                </div>

                            </div>

                            <div style="clear:both;"></div>  
                        </div>
                    </div>
                </div><!-- End off container --> 
            </section> <!-- End off Work Section -->            



            <!-- Study Section --> 
            <section id="study" class="study text-center wow fadeIn"  data-wow-duration="2s" data-wow-dealy="1.5s">
                <div class="container">
                    <div class="row">
                        <div class="main_study_area sections">
                            <div class="head_title text-center">
                                <h2>Editor's Choice</h2>
                                <div class="subtitle">
                                   blah blah blah
                                </div>
                                <div class="separator"></div>
                            </div>
                            <div class="single_study_content">
                                <div class="col-sm-6">
                                    <div class="single_study_slid_area">

                                        <div class="single_study_text">
                                            <div class="study_slider"> 
                                                <div class="item">
                                                    <div class="s_study_icon">
                                                        <i class="fa fa-lightbulb-o"></i>  
                                                    </div>
                                                    <h4>aCCUMULATE CREATIVE IDEAS</h4>
                                                    <div class="separator3"></div>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem Ipsum has been the industry.
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting let.
                                                        Lorem Ipsum has been the industry Printing and typelorem Ipsum has been the setting let.</p>

                                                    <a href="" class="btn btn-lg">read more</a>
                                                </div>
                                                <div class="item">
                                                    <div class="s_study_icon">
                                                        <i class="fa fa-lightbulb-o"></i>  
                                                    </div>
                                                    <h4>aCCUMULATE CREATIVE IDEAS</h4>
                                                    <div class="separator3"></div>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem Ipsum has been the industry.
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting let.
                                                        Lorem Ipsum has been the industry Printing and typelorem Ipsum has been the setting let.</p>

                                                    <a href="" class="btn btn-lg">read more</a>
                                                </div>
                                                <div class="item">
                                                    <div class="s_study_icon">
                                                        <i class="fa fa-lightbulb-o"></i>  
                                                    </div>
                                                    <h4>aCCUMULATE CREATIVE IDEAS</h4>
                                                    <div class="separator3"></div>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem Ipsum has been the industry.
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting let.
                                                        Lorem Ipsum has been the industry Printing and typelorem Ipsum has been the setting let.</p>

                                                    <a href="" class="btn btn-lg">read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="single_study_right_img">
                                    <div class="col-sm-6">
                                        <div class="single_study_img">
                                            <img src="assets/images/study.jpg" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End off row --> 
                </div><!-- End off Container --> 
            </section><!-- End off Study Section --> 


            <!-- Counter Section --> 
            <section id="counter" class="counter">
                <div class="video_overlay">
                    <div class="container">
                        <div class="row">  
                        <div class="head_title textwhite text-center margin-top-80">
                                    <h2>NightLife Statistics</h2>
                                    <div class="subtitle">
                                        A few numbers if you're into that sort of thing
                                    </div>
                                    <div class="separator"></div>
                                </div><!-- End off Head_title -->
                            <div class="col-sm-12">               
                                <div class="main_counter_area text-center">

                                    <div class="row">
                                        <div class="single_counter border_right">
                                            <div class="col-sm-3 col-xs-12">
                                                <div class="single_counter_item">
                                                    <i class="icon icon-thumbs-up"></i>
                                                    <h2 class="statistic-counter">3891</h2>
                                                    <h4 class="">User Favourites</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single_counter">
                                            <div class="col-sm-3 col-xs-12">
                                                <div class="single_counter_item">
                                                    <i class="icon icon-business-3"></i>
                                                    <h2 class="statistic-counter">281</h2>
                                                    <h4 class="">Posts Last 24 Hours</h4>  
                                                </div>
                                            </div>
                                        </div> 

                                        <div class="single_counter">
                                            <div class="col-sm-3 col-xs-12">
                                                <div class="single_counter_item">
                                                    <i class="icon icon-people-32"></i>
                                                    <h2 class="statistic-counter">618</h2>
                                                    <h4 class="">Total Posts</h4>  
                                                </div>

                                            </div>
                                        </div>

                                        <div class="single_counter">
                                            <div class="col-sm-3 col-xs-12">
                                                <div class="single_counter_item">
                                                    <i class="icon icon-cup"></i>
                                                    <h2 class="statistic-counter">178</h2>
                                                    <h4 class="">Amazing Features</h4>

                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End off container --> 
            </section>   <!-- End of counter section -->

            <!-- Pricing Section -->
            <section id="pricing" class="pricing">
                <div class="container">
                    <div class="row">
                        <div class="main_pricing_area sections">
                            <div class="head_title text-center">
                                <h2>OUR AWARDS</h2>
                                <div class="subtitle">
                                   We may be a young company, but we've accumulated many awards thus far.
                                </div>
                                <div class="separator"></div>
                            </div><!-- End off Head_title -->

                            <div class="col-md-4 col-sm-6">
                                <div class="single_pricing">
                                    <div class="pricing_head">
                                        <h3>Young Start-ups Competition</h3>
                                        <div class="pricing_price">
                                            <div class="p_r text-center">Winner</div>
                                            <div class="m_t text-center">2017</div>
                                        </div>
                                    </div>

                                    <div class="pricing_body">
                                        <ul>
                                            <li>We're deadly</li>
                                            <li>Some say we're class</li>
                                            <li>Actually we're fantastic</li>
                                            <li>10/10 IGN</li>
                                        </ul>
                                        <a href="https://bootstrapthemes.co" class="btn btn-md">CHOOSE PLAN</a>
                                    </div>
                                </div>
                            </div> <!-- End off col-md-4 -->
                            <div class="col-md-4 col-sm-6">
                                <div class="single_pricing pricing_business">
                                    <div class="pricing_head ">
                                        <h3>30 under 30 award</h3>
                                        <div class="pricing_price">
                                            <div class="p_r text-center">Winner</div>
                                            <div class="m_t text-center">2017</div>
                                        </div>
                                    </div>

                                    <div class="pricing_body">
                                        <ul>
                                            <li>We're deadly</li>
                                            <li>Some say we're class</li>
                                            <li>Actually we're fantastic</li>
                                            <li>10/10 IGN</li>
                                        </ul>
                                        <a href="https://bootstrapthemes.co" class="btn btn-md">CHOOSE PLAN</a>
                                    </div>
                                </div>
                            </div> <!-- End off col-md-4 -->
                            <div class="col-md-4 col-sm-6">
                                <div class="single_pricing">
                                    <div class="pricing_head">
                                        <h3>Entrepreneur and Innovational Awards</h3>
                                        <div class="pricing_price">
                                            <div class="p_r text-center">Winner</div>
                                            <div class="m_t text-center">2017</div>
                                        </div>
                                    </div>

                                    <div class="pricing_body">
                                        <ul>
                                            <li>We're deadly</li>
                                            <li>Some say we're class</li>
                                            <li>Actually we're fantastic</li>
                                            <li>10/10 IGN</li>
                                        </ul>
                                        <a href="https://bootstrapthemes.co" class="btn btn-md">CHOOSE PLAN</a>
                                    </div>
                                </div>
                            </div> <!-- End off col-md-4 -->
                        </div>
                    </div><!-- End off row -->
                </div><!-- End off container -->
            </section><!-- End off Pricing Section -->

            <!-- Team Section -->
            <section id="team" class="team">
                <div class="main_team_area">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="head_title textwhite text-center margin-top-80">
                                    <h2>OUR TEAM</h2>
                                    <div class="subtitle">
                                        Meet the craziest team. Share your thoughts with them.
                                    </div>
                                    <div class="separator"></div>
                                </div><!-- End off Head_title -->

                                <div class="main_team">
                                    <ul>
                                        <li>
                                            <div class="single_team_img">
                                                <img src="assets/images/team1.jpg" alt="" />
                                            </div>
                                            <div class="single_team_text">
                                                <h4>Aidan Maher</h4>
                                                <p>Founder</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single_team_img">
                                                <img src="assets/images/team2.jpg" alt="" />
                                            </div>
                                            <div class="single_team_text">
                                                <h4>David Mather</h4>
                                                <p>Engineering</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single_team_img">
                                                <img src="assets/images/team3.jpg" alt="" />
                                            </div>
                                            <div class="single_team_text">
                                                <h4>Ciaran Seagrave</h4>
                                                <p>Designer</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single_team_img">
                                                <img src="assets/images/team4.jpg" alt="" />
                                            </div>
                                            <div class="single_team_text">
                                                <h4>Brian Doyle</h4>
                                                <p>Marketing</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single_team_img">
                                                <img src="assets/images/test2.jpg" alt="" />
                                            </div>
                                            <div class="single_team_text">
                                                <h4>Keith Maycock</h4>
                                                <p>Project Consultant</p>
                                            </div>
                                        </li>
                                    </ul>
                                    </div>

                            </div><!-- End of main team contant --> 
                        </div>
                    </div><!-- End of container -->
                </div>
            </section><!-- End off Team Section -->

          
           <!-- Client Logo Section -->
           <!--
            <section id="clogo" class="clogo">
                <div class="container">
                    <div class="row">
                        <div class="main_clogo sections text-center">
                            <div class="head_title text-center">
                                <h2>Great Integrations with Others</h2>
                                <div class="subtitle">
                                    Some of our beautiful partner's in all their glory.
                                </div>
                                <div class="separator"></div>
                            </div><!-- End off Head_title -->
                <!--
                            <div class="col-sm-3 col-xs-6"> 
                                <a href=""><img src="assets/images/clogo1.png" alt="" /></a>
                            </div>
                            <div class="col-sm-3 col-xs-6"> 
                                <a href=""><img src="assets/images/clogo2.png" alt="" /></a>
                            </div>
                            <div class="col-sm-3 col-xs-6"> 
                                <a href=""><img src="assets/images/clogo3.png" alt="" /></a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href=""><img src="assets/images/clogo4.png" alt="" /></a>
                            </div>
                            <div class="col-sm-3 col-xs-6"> 
                                <a href=""><img src="assets/images/clogo5.png" alt="" /></a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href=""><img src="assets/images/clogo6.png" alt="" /></a>
                            </div>
                            <div class="col-sm-3 col-xs-6"> 
                                <a href=""><img src="assets/images/clogo9.png" alt="" /></a>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <a href=""><img src="assets/images/clogo8.png" alt="" /></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divider"></div>
            </section>
            -->
            <!-- End off clogo Section -->


            <!-- Blog Section -->
            <section id="blog" class="blog">
                <div class="container-fluid">
                    <div class="row">
                        <div class="main_blog sections">
                            <div class="head_title text-center">
                                <h2>OUR BLOG</h2>
                                <div class="subtitle">
                                    Suspendisse sed eros mollis, tincidunt felis eget, interdum eratullam sit amet odio. 
                                </div>
                                <div class="separator"></div>
                            </div><!-- End off Head_title -->

                            <div class="main_blog_content">
                                <div class="col-sm-6">
                                    <div class="single_blog_area textwhite">
                                        <div class="row">
                                            <div class="col-sm-6 no-padding">
                                                <div class="single_blog_img">
                                                    <img src="assets/images/blog1.jpg" alt="" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6 no-padding">
                                                <div class="single_blog_text s_b_left">
                                                    <p>art/t-shirt</p>
                                                    <h3>T-SHIRT DESIGN</h3>
                                                    <div class="separator2"></div>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indu Stry's 
                                                        standard dummy text ever since the 1500s, an unknown printer took a galley of type 
                                                        a scrambled it to make a type specimen book.</p>

                                                    <a href="" class="read_more">Read More >></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="single_blog_area textwhite">
                                        <div class="row">
                                            <div class="col-sm-6 no-padding">
                                                <div class="single_blog_img">
                                                    <img src="assets/images/blog2.jpg" alt="" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6 no-padding">
                                                <div class="single_blog_text s_b_left">
                                                    <p>art/t-shirt</p>
                                                    <h3>T-SHIRT DESIGN</h3>
                                                    <div class="separator2"></div>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indu Stry's 
                                                        standard dummy text ever since the 1500s, an unknown printer took a galley of type 
                                                        a scrambled it to make a type specimen book.</p>

                                                    <a href="" class="read_more">Read More >></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="single_blog_area textwhite">
                                        <div class="row">

                                            <div class="col-sm-6 col-sm-push-6 no-padding">
                                                <div class="single_blog_img">
                                                    <img src="assets/images/blog3.jpg" alt="" />
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-sm-pull-6 no-padding">
                                                <div class="single_blog_text s_b_right">
                                                    <p>art/t-shirt</p>
                                                    <h3>T-SHIRT DESIGN</h3>
                                                    <div class="separator2"></div>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indu Stry's 
                                                        standard dummy text ever since the 1500s, an unknown printer took a galley of type 
                                                        a scrambled it to make a type specimen book.</p>

                                                    <a href="" class="read_more">Read More >></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="single_blog_area textwhite">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-push-6 no-padding">
                                                <div class="single_blog_img">
                                                    <img src="assets/images/blog4.jpg" alt="" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-sm-pull-6 no-padding">
                                                <div class="single_blog_text s_b_right">
                                                    <p>art/t-shirt</p>
                                                    <h3>T-SHIRT DESIGN</h3>
                                                    <div class="separator2"></div>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indu Stry's 
                                                        standard dummy text ever since the 1500s, an unknown printer took a galley of type 
                                                        a scrambled it to make a type specimen book.</p>

                                                    <a href="" class="read_more">Read More >></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div><!-- End off container -->
            </section><!-- End off Blog Section -->


            <section id="contact" class="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="contact_contant sections">
                                <div class="head_title text-center">
                                    <h2>kEEP IN TOUCH</h2>
                                    <div class="subtitle">
                                        Nullam sit amet odio eu est aliquet euismod a a urna. Proin eu urna suscipit, dictum quam nec.  
                                    </div>
                                    <div class="separator"></div>
                                </div><!-- End off Head_title -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="main_contact_info">
                                            <div class="row">
                                                <div class="contact_info_content padding-top-90 padding-bottom-60 p_l_r">
                                                    <div class="col-sm-12">
                                                        <div class="single_contact_info">
                                                            <div class="single_info_text">
                                                                <h3>OUR ADDRESS</h3>
                                                                <h4> IFSC, Mayor Street, North Dock, Dublin 1, D01 Y300</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="single_contact_info">
                                                            <div class="single_info_text">
                                                                <h3>CALL US</h3>
                                                                <h4>+ 880 168 109 1425</h4>
                                                                <h4>+ 0216809142</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="single_contact_info">
                                                            <div class="single_info_text">
                                                                <h3>EMAIL US</h3>
                                                                <h4>contactus@email.com</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 

                                    <div class="col-sm-6">
                                        <div class="single_contant_left padding-top-90 padding-bottom-90">
                                            <form action="#" id="formid">
                                                <div class="col-lg-8 col-md-8 col-sm-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">

                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="name" placeholder="First Name" required="">
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <input type="email" class="form-control" name="email" placeholder="Email" required="">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="form-group">
                                                        <textarea class="form-control" name="message" rows="7" placeholder="Message"></textarea>
                                                    </div>

                                                    <div class="">
                                                        <input type="submit" value="SEND MESSAGE" class="btn btn-lg">
                                                    </div>
                                                </div> 
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End of contact section -->

            <section id="trial" class="trial text-center wow fadeIn"  data-wow-duration="2s" data-wow-dealy="1.5s">
                <div class="main_trial_area">
                    <div class="video_overlay sections">
                        <div class="container">
                            <div class="row">
                                <div class="main_trial">
                                    <div class="col-sm-12">
                                        <h2>Let's Get Started Now. <span>It's FREE!</span></h2>
                                        <h4>30 day free trial. Free plan allows up to 2 projects. Pay if you need more. 
                                            Cancel anytime. No catches.</h4>
                                        <a href="" class="btn btn-lg">start free trial</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End of Trial section -->


            <!--Footer section-->
            <section class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="main_footer">
                                <div class="row">
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="flowus">
                                            <a href=""><i class="fa fa-facebook"></i></a>
                                            <a href=""><i class="fa fa-twitter"></i></a>
                                            <a href=""><i class="fa fa-google-plus"></i></a>
                                            <a href=""><i class="fa fa-instagram"></i></a>
                                            <a href=""><i class="fa fa-youtube"></i></a>
                                            <a href=""><i class="fa fa-dribbble"></i></a>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-xs-12">
                                        <div class="copyright_text">
                                            <p class=" wow fadeInRight" data-wow-duration="1s">Made with <i class="fa fa-heart"></i> by <a href="https://facebook.com/aidanmaher123"> Aido180</a>2017. All Rights Reserved</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End off footer Section-->











        </div>

        <!-- START SCROLL TO TOP  -->

        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>
        


        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <script src="assets/js/jquery.magnific-popup.js"></script>
        <script src="assets/js/jquery.mixitup.min.js"></script>
        <script src="assets/js/jquery.easing.1.3.js"></script>
        <script src="assets/js/jquery.masonry.min.js"></script>

        <!--slick slide js -->
        <script src="assets/css/slick/slick.js"></script>
        <script src="assets/css/slick/slick.min.js"></script>


        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>

    </body>
</html>
