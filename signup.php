<?php 
	include('database/db.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Tunegene is a social networking website for the music industry......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>TUNE GENE </title>

    <!-- Stylesheets
    ================================================= -->
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <!--Google Webfont-->
		<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600,600italic,700' rel='stylesheet' type='text/css'>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>  
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="images/fav.png"/>
	</head>
	<body ng-app="">
  
    <!--preloader-->
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>

    <!-- Header
    ================================================= -->
		<header id="header" class="lazy-load">
      <nav class="navbar navbar-default navbar-fixed-top menu">
        <div class="container">

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo" /></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <!--<ul class="nav navbar-nav navbar-right main-menu">
              <li class="dropdown"><a href="index.html">Home</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Newsfeed <span><img src="images/down-arrow.png" alt="" /></span></a>
                  <ul class="dropdown-menu newsfeed-home">
                    <li><a href="newsfeed.html">Newsfeed</a></li>
                    <li><a href="newsfeed-people-nearby.html">Poeple Nearly</a></li>
                    <li><a href="newsfeed-friends.html">My friends</a></li>
                    <li><a href="newsfeed-messages.html">Chatroom</a></li>
                    <li><a href="newsfeed-images.html">Images</a></li>
                    <li><a href="newsfeed-videos.html">Videos</a></li>
                  </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Timeline <span><img src="images/down-arrow.png" alt="" /></span></a>
                <ul class="dropdown-menu login">
                  <li><a href="timeline.html">Timeline</a></li>
                  <li><a href="timeline-about.html">Timeline About</a></li>
                  <li><a href="timeline-album.html">Timeline Album</a></li>
                  <li><a href="timeline-friends.html">Timeline Friends</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle pages" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">All Pages <span><img src="images/down-arrow.png" alt="" /></span></a>
                <ul class="dropdown-menu page-list">
                  <li><a href="index.html">Landing Page</a></li>
                  <li><a href="newsfeed.html">Newsfeed</a></li>
                  <li><a href="newsfeed-people-nearby.html">Poeple Nearly</a></li>
                  <li><a href="newsfeed-friends.html">My friends</a></li>
                  <li><a href="newsfeed-messages.html">Chatroom</a></li>
                  <li><a href="newsfeed-images.html">Images</a></li>
                  <li><a href="newsfeed-videos.html">Videos</a></li>
                  <li><a href="timeline.html">Timeline</a></li>
                  <li><a href="timeline-about.html">Timeline About</a></li>
                  <li><a href="timeline-album.html">Timeline Album</a></li>
                  <li><a href="timeline-friends.html">Timeline Friends</a></li>
                  <li><a href="contact.html">Contact Us</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="contact.html">Contact</a></li>
            </ul>-->
            <form class="navbar-form navbar-right hidden-sm">
              <div class="form-group">
                <i class="icon ion-android-search"></i>
                <input type="text" class="form-control" placeholder="Search friends, photos, videos">
              </div>
            </form>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
    </header>
    <!--Header End-->

    <!-- Top Banner
    ================================================= -->
		<section id="banner">
			<div class="container">

        <!-- Sign Up Form
        ================================================= -->
        <div class="col-md-12">
        <div class="sign-up-form col-md-3 col-sm-12">
					<a href="index.html" class="logo"><img src="images/logo.png" alt="Friend Finder"/></a>
					<h2 class="text-white">TuneGene</h2>
					<div class="line-divider"></div>
					<div class="form-wrapper">
					<?php
						if(isset($_SESSION['token'])){
							echo getTokenMessage($_SESSION['token']);
							unset($_SESSION['token']);
						}
						if(!isset($_SESSION)){
							echo "Session Is Not Set!";
						}
						if(isset($_GET['token'])){
							echo getTokenMessage($_GET['token']);
						}
					?>
						<p class="signup-text">Signup now and meet awesome people around the world</p>
						<form method="post" action="#" name="myForm">
							<fieldset class="form-group">
								<input type="text" name="member_name" class="form-control" id="example-name" placeholder="Enter name" ng-model="member_name" required>
								<span ng-show="myForm.member_name.$touched && myForm.member_name.$invalid" style="color:red;    font-size: large;">The name is required.</span>
							</fieldset>
							<fieldset class="form-group">
								<input type="email" name="email" class="form-control" id="example-email" placeholder="Enter email" ng-model="email" required>
								<span ng-show="myForm.email.$touched && myForm.email.$invalid" style="color:red;    font-size: large;">The email-id is required.</span>
							</fieldset>
							<fieldset class="form-group">
								<input type="password" name="password" class="form-control" id="example-password" placeholder="Enter a password" ng-model="password" required>
								<span ng-show="myForm.password.$touched && myForm.password.$invalid" style="color:red;    font-size: large;">The password is required.</span>
							</fieldset>
							
						<p>By signning up you agree to the terms</p>
						<button class="btn-secondary" name="save">Signup</button>
						</form>
					<?php 
						if(isset($_POST['save'])){
							
							try{
								$token="";
								$dbh = getConnection();
								$dbh->beginTransaction();
								
								$member_name = mysql_real_escape_string($_POST['member_name']);
								$email_id = mysql_real_escape_string($_POST['email']);
								$password = mysql_real_escape_string($_POST['password']);
								
								$repatt="SELECT email_id from member where email_id='$email_id'";
								$sth = $dbh->query($repatt);
								if($sth->rowCount()>0){
									$token="exists";
									$_SESSION['token']=$token;
									header('Location: index.php');
								}else{
								
								$sql="INSERT INTO member(member_name,email_id) VALUES('$member_name','$email_id')";
								$dbh->exec($sql);
								$member_id=$dbh->lastInsertId();
								
								
								$sqllogin ="INSERT INTO login(member_id,email_id,password) VALUES('$member_id','$email_id','$password')";
								$dbh->exec($sqllogin);
								
								
								$dbh->commit();
								$token="signup";
								$_SESSION['token']=$token;
								
								}
							}
							catch(PDOException $e){
								echo $e;
								echo $e->getMessage();
							try{
								$dbh->rollback();
							}catch(PDOException $e){
								echo $e->getMessage();
							}
							}
							header('Location: index.php');
							}
						?>
					</div>
					<a href="index.php">Already have an account?</a>
					<img class="form-shadow" src="images/bottom-shadow.png" alt="" />
				</div>
                
           <div class="col-md-7 col-sm-12" style="float:right;">
          <div class="login-about">
        <h1>  WHAT IS TUNEGENE? </h1>
        <p style="color:#fff;">
Tunegene is a social networking website for the music industry. Lone Musicians/Singers/Dj's in any and all genres from across the globe get together to collaborate with each other to form Bands/Groups. Get in touch with Sound Technicians, Venues to perform live, Studios to record, Record Labels, Managers, Entertainment lawyers, Promoters and anybody else you will ever require to make it big in the music industry. 
<br><br>
</p>



          </div>
          
          
          
          </div>      
            </div>      
                
                <!-- Sign Up Form End -->

        <svg class="arrows hidden-xs hidden-sm">
          <path class="a1" d="M0 0 L30 32 L60 0"></path>
          <path class="a2" d="M0 20 L30 52 L60 20"></path>
          <path class="a3" d="M0 40 L30 72 L60 40"></path>
        </svg>
			</div>
		</section>

    <!-- Live Feed Section
    ================================================= -->
		<section id="live-feed">
			<div class="container wrapper">
				
			<h1>BENEFITS AND FEATURES OF TUNEGENE</h1>
<p >We at Tunegene are determined to help upcoming Musicians/Bands/Dj's and take them to the next step. So if you think you have a good voice or your talents lie on an instrument or dj console but have given up or don't know what to do next and how to do it... The solution to your problems are here. On Tunegene anything and everything you will need to push start your music career is at your fingertips. Create your Artist Profile,  Upload your audio, video and photo's, Create Music Clubs and Pages. Find Artists/Bands on Tunegene who you can follow or send friend requests. Chat with buddies. Listen, buy or sell your music. The possibilities are endless. On Tunegene the Music Community of the world comes to you.<br><br> 
So if you think you have music in your genes Sign up for a free account</p>
			
			</div>
		</section>
   

    <!-- Image Divider
    ================================================= -->
    <div class="img-divider hidden-sm hidden-xs"></div>

    <!-- Facts Section
    ================================================= -->
		<section id="site-facts">
			<div class="container wrapper">
				<div class="circle">
                <img src="images/tringle.png" alt="" width="100%" >
				<!--	<ul class="facts-list">
						<li>
							<div class="fact-icon"><i class="icon ion-ios-people-outline"></i></div>
							<h3 class="text-white">1,01,242</h3>
							<p>People registered</p>
						</li>
						<li>
							<div class="fact-icon"><i class="icon ion-images"></i></div>
							<h3 class="text-white">21,01,242</h3>
							<p>Posts published</p>
						</li>
						<li>
							<div class="fact-icon"><i class="icon ion-checkmark-round"></i></div>
							<h3 class="text-white">41,242</h3>
							<p>People online</p>
						</li>
					</ul>-->
				</div>
			</div>
		</section>

    <!-- Live Feed Section
    ================================================= -->
		<section id="app-download" style="background:#f7f7f7;">
			<div class="container wrapper">
				<h1>SUBSCRIPTIONS</h1>
              <div class="row db-padding-btm db-attached">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="db-wrapper">
                    <div class="db-pricing-eleven db-bk-color-one">
                        <div class="price">
                            FREE ACCOUNT
                             <small><p style="display:none; color:#000;">(add on Storage Space)</p></small>  
                        </div>
                        <div class="type">
                            GOLD MEMBER
                        </div>
                        <ul>

                            <li>Storage 250 MB </li>
                            <li>Data Transfer 500 MB <br><br></li>
                            
                        </ul>
                        <div class="pricing-footer">

                            <a href="#" class="btn db-button-color-square btn-lg">Register now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                 <div class="db-wrapper">
                <div class="db-pricing-eleven db-bk-color-two popular">
                    <div class="price" style="background:#f4c150 !important;">
                        1 GB
                               per quarter
                    </div>
                    <div class="type">
                        PLATINUM MEMBER
                    </div>
                    <ul>

                        <li>Storage 1 GB </li>
                        <li>Unlimited Data Transfer. $6 per month </li>
                        <li>$60 per year Saving</li>
                        <li>$12 on yearly basis</li>
                    </ul>
                    <div class="pricing-footer">

                        <a href="#" class="btn db-button-color-square btn-lg">Register now</a>
                    </div>
                </div>
                     </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                 <div class="db-wrapper">
                <div class="db-pricing-eleven db-bk-color-three">
                    <div class="price" style="padding-bottom: 0px; background: #dd6dd4;">
                        1GB / 3GB
                            <small style="margin-top: 0;">(add on Storage Space)</small>    
                    </div>
                    <div class="type">
                        DIAMONDS 
                    </div>
                    <ul>

                        <li>1GB: $5 per month, $45 per year Saving $15 on yearly basis
 </li>
                        <li>3GB: $15 per month, $150 per year Saving $30 on yearly basis
 </li>
                       
                    </ul>
                    <div class="pricing-footer">

                        <a href="#" class="btn db-button-color-square btn-lg">Register now</a>
                    </div>
                </div>
                     </div>
            </div>

        </div>
			
		
			</div>
		</section>

    <!-- Footer
    ================================================= -->
		<footer id="footer">
      <div class="container">
      	<div class="row">
          <div class="footer-wrapper">
            <div class="col-md-3 col-sm-3">
              <a href=""><img src="images/logo.png" alt="" class="footer-logo" /></a>
              <ul class="list-inline social-icons">
              	<li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
              	<li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
              	<li><a href="#"><i class="icon ion-social-googleplus"></i></a></li>
              	<li><a href="#"><i class="icon ion-social-pinterest"></i></a></li>
              	<li><a href="#"><i class="icon ion-social-linkedin"></i></a></li>
              </ul>
            </div>
            <div class="col-md-2 col-sm-2">
              <h6>For individuals</h6>
              <ul class="footer-links">
                <li><a href="">Signup</a></li>
                <li><a href="">login</a></li>
                <li><a href="">Explore</a></li>
                <li><a href="">Finder app</a></li>
                <li><a href="">Features</a></li>
                <li><a href="">Language settings</a></li>
              </ul>
            </div>
            <div class="col-md-2 col-sm-2">
              <h6>For businesses</h6>
              <ul class="footer-links">
                <li><a href="">Business signup</a></li>
                <li><a href="">Business login</a></li>
                <li><a href="">Benefits</a></li>
                <li><a href="">Resources</a></li>
                <li><a href="">Advertise</a></li>
                <li><a href="">Setup</a></li>
              </ul>
            </div>
            <div class="col-md-2 col-sm-2">
              <h6>About</h6>
              <ul class="footer-links">
                <li><a href="">About us</a></li>
                <li><a href="">Contact us</a></li>
                <li><a href="">Privacy Policy</a></li>
                <li><a href="">Terms</a></li>
                <li><a href="">Help</a></li>
              </ul>
            </div>
            <div class="col-md-3 col-sm-3">
              <h6>Contact Us</h6>
                <ul class="contact">
                	<li><i class="icon ion-ios-telephone-outline"></i>+1 (234) 222 0754</li>
                	<li><i class="icon ion-ios-email-outline"></i>info@thunder-team.com</li>
                  <li><i class="icon ion-ios-location-outline"></i>228 Park Ave S NY, USA</li>
                </ul>
            </div>
          </div>
      	</div>
      </div>
      <div class="copyright">
        <p>TuneGene © 2016. All rights reserved</p>
      </div>
		</footer>

    <!-- Scripts
    ================================================= -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.appear.min.js"></script>
		<script src="js/jquery.incremental-counter.js"></script>
    <script src="js/script.js"></script>
	</body>
</html>
