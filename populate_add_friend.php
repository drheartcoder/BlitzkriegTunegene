<?php 

require_once('database/db.php');



$member_id=$_REQUEST["member_id"];
$friend_id=$_REQUEST["friend_id"];
$date_entry = date('Y-m-d');


//echo ("insert into member_friend (member_id,friend_id,friend_date) VALUES('$member_id','$friend_id','$date_entry')");

mysql_query("insert into member_friend (member_id,friend_id,friend_status,friend_date) VALUES('$member_id','$friend_id','1','$date_entry')");
mysql_query("insert into member_friend (member_id,friend_id,friend_date) VALUES('$friend_id','$member_id','$date_entry')");

?>
<main_category>
<sub_category>
    <student_name><?php echo $member_id; ?></student_name>
	<student_name><?php echo $friend_id; ?></student_name>
</sub_category>
</main_category>