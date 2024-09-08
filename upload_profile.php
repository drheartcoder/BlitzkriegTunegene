<?php 

require_once('database/db.php');


if(isset($_POST['send'])){
	
$member_id=$_SESSION["email_id"]["member_id"];
$date_entry = date('Y-m-d');

$file_name = "images/profile_images/".$_FILES['image']['name'];
$file_size =$_FILES['image']['size'];
$file_tmp =$_FILES['image']['tmp_name'];
$file_type=$_FILES['image']['type'];
$arrayext = explode('.', $_FILES['image']['name']);
$file_ext = end( $arrayext);       
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


echo ("insert into profile_photo (member_id,profile_image,upload_date) VALUES('$member_id','$file_name','$date_entry')");

mysql_query("insert into profile_photo (member_id,profile_image,upload_date) VALUES('$member_id','$file_name','$date_entry')");
}
?>


<form  method="POST"   enctype="multipart/form-data" style="margin-left: 9px;">
			<label class="btn btn-primary">
                Upload <input type="file" name="image" style="display: none;">
            </label>
		<button name="send" class="btn btn-primary pull-right" style="margin-right: 10px;">Publish</button>
		<br>
		<br>
	</form>	