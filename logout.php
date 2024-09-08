<?php
include('database/db.php');

// if the user is logged in, unset the session

if (isset($_SESSION['logged-user'])) {

unset($_SESSION['logged-user']);

$member_id = $_SESSION['email_id']['email_id'];

$ipaddress = $_SERVER['REMOTE_ADDR'];
date_default_timezone_set('Asia/Calcutta');
$logout_time = date('Y-m-d h:i:s'); 


$sqlu = mysql_query("UPDATE login set islogin=0 WHERE email_id='$member_id'");
$sqls = mysql_query("UPDATE login_info SET logout_time='$logout_time',logout_ip='$ipaddress' WHERE email_id='$member_id' Order By id DESC Limit 1");

}

// now that the user is logged out,

// go to login page

header('Location: index.php');

?>