<?php

require_once('database/db.php');
require_once('database/function.php');

if ( !isset($_SESSION['logged-user']) || $_SESSION['logged-user'] !== true) {

header('Location: index.php');

exit;

}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>My Timeline | This is My Coolest Profile</title>

    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link href="css/emoji.css" rel="stylesheet">
    <!--Google Webfont-->
		<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600,600italic,700' rel='stylesheet' type='text/css'>
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="images/fav.png"/>
	
	</head>
  <body>

    <!-- Header
    ================================================= -->
		<?php include('nav.php'); ?>
		
    <!--Header End-->

    <div class="container">

      <!-- Timeline
      ================================================= -->
      <div class="timeline"> 
	  <?php 
			$pages_id = $_REQUEST['pages_id'];
			$sqlpage = mysqli_query($con,"SELECT * FROM pages WHERE pages_id=$pages_id");
			$respage = mysqli_fetch_array($sqlpage);
		?>
        <div class="timeline-cover" style='background: url(<?php if($respage['page_timeline'] !=""){ echo $respage['page_timeline']; }else{ echo "http://placehold.it/1030x360"; } ?>) no-repeat;background-position: center;background-size: cover;'>
		
          <!--Timeline Menu for Large Screens-->
          <div class="timeline-nav-bar hidden-sm hidden-xs">
            <div class="row">
              <div class="col-md-3">
				<div class="profile-info">
                
                <ul class="ch-grid">
				<li>
					<div class="ch-item img-responsive profile-photo">
                        <img src="<?php if($respage['page_logo'] !=""){ echo $respage['page_logo']; }else{ echo "http://placehold.it/300x300"; } ?>" alt="" class="ch-img-3 img-responsive profile-photo"/>
							<div class="ch-info">
								<h3> <a href="#" onclick="document.getElementById('light_photo').style.display='block';">Update Prifile Picture</a></h3>
							</div>
						</div>
					</li>
				</ul>
                
                
                <!--  <img src="<?php if(user("profile_image",$_SESSION['email_id']['email_id']) !=""){ echo user("profile_image",$_SESSION['email_id']['email_id']); }else{ echo "http://placehold.it/300x300"; } ?>" alt="" class="img-responsive profile-photo" onclick="document.getElementById('light_photo').style.display='block';"/>-->
                  
                  
                  
                  
                  <h3><?php echo $respage['page_name']; ?></h3>
                  <p class="text-muted">Creative Director</p>
                </div>
				
				
              </div>
              <div class="col-md-9" onclick="document.getElementById('light').style.display='block';">
                <ul class="list-inline profile-menu">
                  <li><a href="pagefeeds.php" class="active">Home</a></li>
                  <li><a href="page-about.php">About</a></li>
                </ul>
                
              </div>
            </div>
          </div><!--Timeline Menu for Large Screens End-->

          <!--Timeline Menu for Small Screens-->
          <div class="navbar-mobile hidden-lg hidden-md">
            <div class="profile-info">
              <img src="http://placehold.it/300x300" alt="" class="img-responsive profile-photo" />
              <h4>Sarah Cruiz</h4>
              <p class="text-muted">Creative Director</p>
            </div>
            <div class="mobile-menu">
              <ul class="list-inline">
                <li><a href="timline.php" class="active">Timeline</a></li>
                <li><a href="timeline-about.php">About</a></li>
                <li><a href="timeline-album.php">Album</a></li>
                <li><a href="timeline-friends.php">Friends</a></li>
              </ul>
              <button class="btn-primary">Add Friend</button>
            </div>
          </div><!--Timeline Menu for Small Screens End-->

        </div>
		
		
		
		<div id="light" class="white_content" style="display:none;">

<div style="height: 28px;background: #27aae1;text-align:center;color: white;"> <b>Upload Timeline Image</b>
<a href = "javascript:void(0)" style="float: right;"  onclick = "document.getElementById('light').style.display='none';"><img src="close.png" style="width: 20px;"></a>
</div>
	<br>
	<div class="nextdisplay">
		<div id="results"></div>
	</div>
	
	<div class="nextpage">		
	<form  method="POST"   enctype="multipart/form-data" style="margin-left: 9px;">
		<label class="btn btn-primary">
                Upload <input type="file" name="image" style="display: none;">
            </label>
		<button name="upload_timeline" class="btn btn-primary pull-right" style="margin-right: 10px;">Publish</button>
		<br>
		<br>
	</form>	
	</div>
	
	
	
	<?php 
if(isset($_POST['upload_timeline'])){
	
$pages_id=$_REQUEST["pages_id"];

$ipaddress = $_SERVER['REMOTE_ADDR'];
date_default_timezone_set('Asia/Calcutta');
$date_entry = date('Y-m-d h:i:s'); 

$file_name = "images/page_images/".$pages_id.'_'.$_FILES['image']['name'];
$file_size =$_FILES['image']['size'];
$file_tmp =$_FILES['image']['tmp_name'];
$file_type=$_FILES['image']['type'];
$array = explode('.', $_FILES['image']['name']);
$file_ext = end( $array);
      
$expensions= array("jpeg","jpg","png");
      
if(in_array($file_ext,$expensions)=== false){
	$errors[]="extension not allowed, please choose a JPEG or PNG file.";
}
      
if($file_size > 5000000){
	$errors[]='File size must be excately 2 MB';
}
      
if(empty($errors)==true){
	move_uploaded_file($file_tmp,$file_name);
		//echo "Success";
}else{
	print_r($errors);
}

$file_names = mysql_real_escape_string($file_name);

mysql_query("UPDATE `pages` SET page_timeline='$file_names' WHERE pages_id='$pages_id'");
}
	?>
</div>
    <!--<div id="fade" class="black_overlay"></div>-->
	
	
<div id="light_photo" class="white_content" style="display:none;">

<div style="height: 28px;background: #27aae1;text-align:center;color: white;"> <b>Upload Profile Picture</b>
<a href = "javascript:void(0)" style="float: right;"  onclick = "document.getElementById('light_photo').style.display='none';"><img src="close.png" style="width: 20px;"></a>
</div>
	<br>
	<div class="nextdisplay">
		<div id="results"></div>
	</div>
	
	<div class="nextpage">		
	<form  method="POST"   enctype="multipart/form-data" style="margin-left: 9px;">
		<label class="btn btn-primary">
                Upload <input type="file" name="image" style="display: none;">
            </label>
		<button name="upload_profile" class="btn btn-primary pull-right" style="margin-right: 10px;">Publish</button>
		<br>
		<br>
	</form>	
	</div>
	
	
	
	<?php 
if(isset($_POST['upload_profile'])){
	
$pages_id=$_REQUEST["pages_id"];

$ipaddress = $_SERVER['REMOTE_ADDR'];
date_default_timezone_set('Asia/Calcutta');
$date_entry = date('Y-m-d h:i:s'); 

$file_name = "images/page_images/".$pages_id.'_'.$_FILES['image']['name'];
$file_size =$_FILES['image']['size'];
$file_tmp =$_FILES['image']['tmp_name'];
$file_type=$_FILES['image']['type'];
$array = explode('.', $_FILES['image']['name']);
$file_ext = end( $array);
      
$expensions= array("jpeg","jpg","png");
      
if(in_array($file_ext,$expensions)=== false){
	$errors[]="extension not allowed, please choose a JPEG or PNG file.";
}
      
if($file_size > 5000000){
	$errors[]='File size must be excately 2 MB';
}
      
if(empty($errors)==true){
	move_uploaded_file($file_tmp,$file_name);
		//echo "Success";
}else{
	print_r($errors);
}


$file_names = mysql_real_escape_string($file_name);

mysql_query("UPDATE `pages` SET page_logo='$file_names' WHERE pages_id='$pages_id'");
}
	?>
</div>	
	
	
	
	
<style>
    .white_content {
    display: none;
    position: fixed;
    top: 28%;
    left: 45%;
    border: 4px solid #27aae1;
    background-color: white;
    z-index: 1002;
    overflow: auto;
	width: 241PX;
	border-radius: 4px;
    }
	


</style>