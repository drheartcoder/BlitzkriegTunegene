<?php
	require_once('database/db.php');
	$friend_id = $_POST['current_member'];
	
	if($friend_id !=""){
		$myMemberid = $_SESSION['email_id']['member_id'];
		$message = mysql_real_escape_string($_POST['message']);
							
		$ipaddress = $_SERVER['REMOTE_ADDR'];
		date_default_timezone_set('Asia/Calcutta');
		$chitter_date = date('Y-m-d h:i:s'); 
							
		$sql = mysql_query("INSERT INTO chitter (member_id,friend_id,message,chitter_date,ip) VALUES('$myMemberid','$friend_id','$message','$chitter_date','$ipaddress')");
	}
	
?>	