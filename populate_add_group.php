<?php 

require_once('database/db.php');



$member_id=$_REQUEST["member_id"];
$group_id=$_REQUEST["group_id"];
$date_entry = date('Y-m-d');


//echo ("insert into group_member (group_id,member_id,entry_date) VALUES('$group_id','$member_id','$date_entry')");

mysql_query("insert into group_member (group_id,member_id,entry_date) VALUES('$group_id','$member_id','$date_entry')");

?>
<main_category>
<sub_category>
    <student_name><?php echo $member_id; ?></student_name>
	<student_name><?php echo $group_id; ?></student_name>
</sub_category>
</main_category>