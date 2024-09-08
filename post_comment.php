<?php 

require_once('database/db.php');



$member_id=$_REQUEST["member_id"];
$post_id=$_REQUEST["post_id"];
$postContant=$_REQUEST["post_contant"];
$date_entry = date('Y-m-d h:i:s');

echo ("insert into post_comment (member_id,post_id,comment,comment_date) VALUES('$member_id','$post_id','$postContant','$date_entry')");

mysql_query("insert into post_comment (member_id,post_id,comment,comment_date) VALUES('$member_id','$post_id','$postContant','$date_entry')");

?>
<main_category>
<sub_category>
    <student_name><?php echo $member_id;?></student_name>
	<student_name><?php echo $post_id;?></student_name>
</sub_category>
</main_category>

