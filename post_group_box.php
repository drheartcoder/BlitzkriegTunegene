<div class="create-post">
            	<div class="row">
				
			<form method="post" enctype="multipart/form-data">	
            	<div class="col-md-7 col-sm-7">
                  <div class="form-group">
                    <img src="<?php if(user("profile_image",$_SESSION['email_id']['email_id']) !=""){ echo user("profile_image",$_SESSION['email_id']['email_id']); }else{ echo "http://placehold.it/300x300"; } ?>" alt="" class="profile-photo-md" />
                    <textarea name="texts" id="exampleTextarea" cols="30" rows="1" class="form-control" placeholder="Write what you wish"></textarea>
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
                  </div>
				  
                </div>
            	<div class="col-md-5 col-sm-5">
                  <div class="tools">
                    <ul class="publishing-tools list-inline">
                      <!--<li><a href="#"><i class="ion-compose"></i></a></li>-->
                      <li><a href="#" class="image-upload"><label for="file-input"><i class="ion-images"></i></label> <input type="file" name="image" id="file-input" /></a></li>/
                      <li><a href="#" class="image-upload"><label for="file-input"><i class="ion-ios-videocam"></i></label> <input type="file" name="video" id="file-input" /></a></li>
					  <style>
					  .image-upload > input{ display: none; }
					  </style>
					  </style>
                      <!--<li><a href="#"><i class="ion-map"></i></a></li>-->
                    </ul>
                    <button name="post" class="btn btn-primary pull-right">Publish</button>
                  </div>
                </div>
			</form>
			<?php 
				if(isset($_POST['post'])){
					
					$member_id = $_SESSION['email_id']['member_id'];
					$group_id = $_REQUEST['group_id'];
					$texts = mysql_real_escape_string($_POST['texts']);
				    $file_size =$_FILES['image']['size'];
					$arrayext = explode('.', $_FILES['image']['name']);
					$file_ext = end( $arrayext); 	
					$expensionsfile = array("jpeg","jpg","png","mp4","mp3","avi","wmv","mkv");
					$ipaddress = $_SERVER['REMOTE_ADDR'];
					$entry_date = date('Y-m-d');
				if($file_size > 104857600){
					$token="filesize";
					$_SESSION['token']=$token;
					header('Location: groupfeeds.php?group_id='.$_REQUEST['group_id'].'');
				}else if(in_array($file_ext,$expensionsfile)=== false){
					$token="fileformate";
					$_SESSION['token']=$token;
					header('Location: groupfeeds.php?group_id='.$_REQUEST['group_id'].'');
				}else{	
					try{
						$token="";
						$dbh = getConnection();
						$dbh->beginTransaction();
						
$arrayext = explode('.', $_FILES['image']['name']);
$file_ext = end( $arrayext);						
$expensions= array("jpeg","jpg","png");

$expensionsvedio= array("mp4","mp3","avi","wmv","mkv");

if(in_array($file_ext,$expensions)=== true){
	
$file_name = "images/group_images/".$member_id.'_'.$_FILES['image']['name'];
$file_size =$_FILES['image']['size'];
$file_tmp =$_FILES['image']['tmp_name'];
$file_type=$_FILES['image']['type'];
$arrayext = explode('.', $_FILES['image']['name']);
$file_ext = end( $arrayext); 
      
$expensions= array("jpeg","jpg","png");
      
if(in_array($file_ext,$expensions)=== false){
	$errors[]="extension not allowed, please choose a JPEG or PNG file.";
}
      
if($file_size > 104857600){
	$errors[]='File size must be excately 100 MB';
	echo $token="exists";
	$_SESSION['token']=$token;
}
      
if(empty($errors)==true){
	move_uploaded_file($file_tmp,$file_name);
		//echo "Success";
}else{
	print_r($errors);
	echo $token="exists";
	$_SESSION['token']=$token;
}
						
if(in_array($file_ext,$expensions)=== true){	
	$sql="INSERT INTO group_post(member_id,group_id,group_content,group_images,entry_date,ip) VALUES('$member_id','$group_id','$texts','$file_name','$entry_date','$ipaddress')";
	$dbh->exec($sql);
	$token="postsuccess";
}else{
	
	print_r($errors);
	echo $token="exists";
	$_SESSION['token']=$token;
}
	
}else if(in_array($file_ext,$expensionsvedio)=== true){
	
	
	
$file_name = "videos/group_vedio/".$member_id.'_'.$_FILES['image']['name'];
$file_size =$_FILES['image']['size'];
$file_tmp =$_FILES['image']['tmp_name'];
$file_type=$_FILES['image']['type'];
$arrayext = explode('.', $_FILES['image']['name']);
$file_ext = end( $arrayext);
      
$expensions= array("mp4","mp3","avi","wmv","mkv","Ogg");
      
if(in_array($file_ext,$expensionsvedio)=== false){
	$errors[]="extension not allowed, please choose a mp4 or mp3 file.";
	echo $token="exists";
	$_SESSION['token']=$token;
	//header('Location: newsfeed.php');
}
      
if($file_size > 50000005000000){
	echo $token="exists";
	$_SESSION['token']=$token;
	$errors[]='File size must be excately 2 MB';
	//header('Location: newsfeed.php');
}
      
if(empty($errors)==true){
	move_uploaded_file($file_tmp,$file_name);
		//echo "Success";
}else{
	print_r($errors);
	echo $token="exists";
	$_SESSION['token']=$token;
	//header('Location: newsfeed.php');
}
						
if(in_array($file_ext,$expensions)=== true){
	$sql="INSERT INTO group_post(member_id,group_id,group_content,group_media,entry_date,ip) VALUES('$member_id','$group_id','$texts','$file_name','$entry_date','$ipaddress')";
	$dbh->exec($sql);
	$token="postsuccess";
}else{
	
	print_r($errors);
	echo $token="exists";
	$_SESSION['token']=$token;
	//header('Location: newsfeed.php');
}	
	
	
	
}else if(!empty($texts)){
	$sql="INSERT INTO group_post(member_id,group_id,group_content,entry_date,ip) VALUES('$member_id','$group_id','$texts','$entry_date','$ipaddress')";
	$dbh->exec($sql);
	$token="postsuccess";	
}	
						
 						
						
						
						
						$dbh->commit();
						$_SESSION['token']=$token;
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
				}	
					header('Location: groupfeeds.php?group_id='.$_REQUEST['group_id'].'');
				}
			?>	
			
					
            	</div>
            </div><!-- Post Create Box End-->