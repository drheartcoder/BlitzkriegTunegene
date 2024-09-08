<?php 
require_once('db.php');

function user($member,$email_id){
	$email_id = $email_id;
	$sql = mysql_query("SELECT * FROM member WHERE email_id='$email_id'");
	$res = mysql_fetch_array($sql);
		
	$message="";
	if(strnatcasecmp($member,"member_name")==0){
		$message= $res['member_name'];
	}else if(strnatcasecmp($member,"email_id")==0){
		$message= $res['email_id'];
	}else if(strnatcasecmp($member,"profile_image")==0){
		$message= $res['profile_image'];
	}else if(strnatcasecmp($member,"timeline_images")==0){
		$message= $res['timeline_images'];
	}
	
	$name = $res['member_name'];
	
	return $message;
}


function user_member_id($member,$member_id){
	$member_id = $member_id;
	$sql = mysql_query("SELECT * FROM member WHERE member_id='$member_id'");
	$res = mysql_fetch_array($sql);
		
	$message="";
	if(strnatcasecmp($member,"member_name")==0){
		$message= $res['member_name'];
	}else if(strnatcasecmp($member,"email_id")==0){
		$message= $res['email_id'];
	}else if(strnatcasecmp($member,"profile_image")==0){
		$message= $res['profile_image'];
	}else if(strnatcasecmp($member,"timeline_images")==0){
		$message= $res['timeline_images'];
	}
		
	return $message;
}


function userFriend($member_id){
	$member_id = $member_id;
	
	$memberfriend = "";
	$sql = mysql_query("SELECT * FROM member_friend WHERE friend_id='$member_id' AND friend_status=1");
	while($res = mysql_fetch_array($sql)){
		$memberfriend .= $res['member_id'].",";
	}
		
	
	return $memberfriend.$member_id;
}

function userfollower($member_id){
	$member_id = $member_id;
	$sql = mysql_query("SELECT COUNT(*) total FROM member_friend WHERE friend_id='$member_id' AND friend_status=1");
	$res = mysql_fetch_array($sql);
	
	return $res['total'];	
}

function userName($member_id){
	$member_id = $member_id;
	$sql = mysql_query("SELECT * FROM member WHERE member_id='$member_id'");
	$res = mysql_fetch_array($sql);
	
	$name = $res['member_name'];
	
	return $name;
}

function online($email_id){
	$email_id = $email_id;
	$sql = mysql_query("SELECT * FROM login WHERE email_id='$email_id'");
	$res = mysql_fetch_array($sql);
	
	$islogin = $res['islogin'];
	
	return $islogin;
}

function like($post_id)
{
	$post_id = $post_id;
	$sql = mysql_query("SELECT COUNT(*) Tot FROM post_like WHERE post_id='$post_id'");
	$res = mysql_fetch_array($sql);
   
	return $res['Tot'];
}

function dislike($post_id)
{
	$post_id = $post_id;
	$sql = mysql_query("SELECT COUNT(*) Totcont FROM post_dislike WHERE post_id='$post_id'");
	$res = mysql_fetch_array($sql);
   
	return $res['Totcont'];
}



function grouplike($post_id)
{
	$group_post_id = $post_id;
	$sql = mysql_query("SELECT COUNT(*) Tot FROM group_post_like WHERE group_post_id='$group_post_id'");
	$res = mysql_fetch_array($sql);
   
	return $res['Tot'];
}	

function groupdislike($post_id)
{
	$group_post_id = $post_id;
	$sql = mysql_query("SELECT COUNT(*) Totcont FROM group_post_dislike WHERE group_post_id='$post_id'");
	$res = mysql_fetch_array($sql);
   
	return $res['Totcont'];
}


function calculatetime($t1,$t2){


$hour1 = 0; $hour2 = 0;
$date1 = $t1;
$date2 = $t2;
$datetimeObj1 = new DateTime($date1);
$datetimeObj2 = new DateTime($date2);
$interval = $datetimeObj1->diff($datetimeObj2);
 
if($interval->format('%a') > 0){
$hour1 = $interval->format('%a')*24;
}
if($interval->format('%h') > 0){
$hour2 = $interval->format('%h');
}

return ($hour1 + $hour2);

}
	
?>