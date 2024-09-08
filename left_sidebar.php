	<div class="col-md-3 static">
            <div class="profile-card">
            	<img src="<?php if(user("profile_image",$_SESSION['email_id']['email_id']) !=""){ echo user("profile_image",$_SESSION['email_id']['email_id']); }else{ echo "http://placehold.it/300x300"; } ?>" alt="user" class="profile-photo" onclick="document.getElementById('light').style.display='block';" />
            	<h5><a href="timeline.php" class="text-white">
				
				<?php 
					echo user("member_name",$_SESSION['email_id']['email_id']);
				?>
				
				</a></h5>
            	<a href="#" class="text-white"><i class="ion ion-android-person-add"></i> <?php echo userfollower($_SESSION['email_id']['member_id']); ?> followers</a>
            </div><!--profile card ends-->
            <ul class="nav-news-feed">
              <li><i class="icon ion-ios-paper"></i><div><a href="newsfeed.php">My Newsfeed</a></div></li>
              <li><i class="icon ion-ios-people"></i><div><a href="newsfeed-people-nearby.php">People Nearby</a></div></li>
              <li><i class="icon ion-ios-people-outline"></i><div><a href="newsfeed-friends.php">Friends</a></div></li>
              <li><i class="icon ion-chatboxes"></i><div><a href="newsfeed-messages.php">Messages</a></div></li>
			  <li><i class="icon ion-ios-people"></i><div><a href="clubs.php">Clubs</a></div></li>
			  <li><i class="icon ion-ios-paper"></i><div><a href="page.php">Page</a></div></li>
              <li><i class="icon ion-images"></i><div><a href="newsfeed-images.php">Images</a></div></li>
              <li><i class="icon ion-ios-videocam"></i><div><a href="newsfeed-videos.php">Videos/Audio</a></div></li>
            </ul><!--news-feed links ends-->
            <div id="chat-block">
              <div class="title">Chitter online</div>
              <ul class="online-users list-inline">
			<?php 
				$member_id = $_SESSION['email_id']['member_id'];
				$sql = mysql_query("SELECT * FROM member_friend mf,member m WHERE mf.member_id=m.member_id AND mf.friend_id=$member_id AND mf.friend_status=1 AND mf.account_status=0");
				while($res = mysql_fetch_array($sql)){
					
				$member_id = $res['member_id'];
				$friend_id = $res['friend_id'];
								
				$sqlf = mysql_query("SELECT * FROM member_friend WHERE member_id=$friend_id AND friend_id=$member_id AND friend_status= 1");
				if(mysql_num_rows($sqlf) > 0){	
			?>
                <li><a href="newsfeed-messages.php" title="<?php echo $res['email_id']; ?>"><img src="<?php if(user("profile_image",$res['email_id']) !=""){ echo user("profile_image",$res['email_id']); }else{ echo "http://placehold.it/300x300"; } ?>" alt="user" class="img-responsive profile-photo" /><?php if((online($res['email_id'])) == 1){ ?><span class="online-dot"></span><?php } ?></a></li>
			<?php 
				}
				}
			?>	
               
              </ul>
            </div><!--chat block ends-->
          </div>
		  

<div id="light" class="white_content" style="display:none;">

<div style="height: 28px;background: #27aae1;text-align:center;color: white;"> <b>Upload Image</b>
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
		<button name="send" class="btn btn-primary pull-right" style="margin-right: 10px;">Publish</button>
		<br>
		<br>
	</form>	
	</div>
	
	
	
	<?php 
if(isset($_POST['send'])){
	
$member_id=$_SESSION["email_id"]["member_id"];

$ipaddress = $_SERVER['REMOTE_ADDR'];
date_default_timezone_set('Asia/Calcutta');
$date_entry = date('Y-m-d h:i:s'); 

$file_name = "images/profile_images/".$member_id.'_'.$_FILES['image']['name'];
$file_size =$_FILES['image']['size'];
$file_tmp =$_FILES['image']['tmp_name'];
$file_type=$_FILES['image']['type'];

$array = explode('.', $_FILES['image']['name']);
$file_ext = end( $array);       
$expensions= array("jpeg","jpg","png","gif");
      
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


//echo ("insert into profile_photo (member_id,profile_image,upload_date) VALUES('$member_id','$file_name','$date_entry')");

$file_names = mysql_real_escape_string($file_name);

mysql_query("insert into profile_photo (member_id,profile_image,upload_date,ip) VALUES('$member_id','$file_names','$date_entry','$ipaddress')");

$sql = mysql_query("UPDATE `member` SET profile_image='$file_names' WHERE member_id='$member_id'");
if($sql){
	echo "<script>window.location='newsfeed.php';</script>";
}else{
	echo "<script>alert('Try Again...!'); window.location='newsfeed.php';</script>";
}
}
	?>
</div>
    <!--<div id="fade" class="black_overlay"></div>-->
	
	
	
	
<style>
    .white_content {
    display: none;
    position: fixed;
    top: 28%;
    left: 23%;
    border: 4px solid #27aae1;
    background-color: white;
    z-index: 1002;
    overflow: auto;
	width: 241PX;
	border-radius: 4px;
    }
	


</style>
	
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>
	  
		  