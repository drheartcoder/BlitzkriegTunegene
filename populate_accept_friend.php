<?php 

require_once('database/db.php');



$member_id=$_REQUEST["member_id"];
$friend_id=$_REQUEST["friend_id"];
$date_entry = date('Y-m-d');


//echo ("UPDATE member_friend SET friend_status=1,accept_date='$date_entry' WHERE member_id=$friend_id AND friend_id=$member_id");

mysql_query("UPDATE member_friend SET friend_status=1,accept_date='$date_entry' WHERE member_id=$friend_id AND friend_id=$member_id");

?>
<main_category>
<sub_category>
    <student_name><?php echo $member_id; ?></student_name>
	<student_name><?php echo $friend_id; ?></student_name>
</sub_category>
</main_category>