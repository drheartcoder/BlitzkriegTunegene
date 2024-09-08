<?php 

require_once('database/db.php');



$member_id=$_REQUEST["member_id"];
$group_post_id=$_REQUEST["post_id"];
$date_entry = date('Y-m-d h:i:s');

$sql = mysql_query("SELECT * FROM group_post_like WHERE member_id=$member_id AND group_post_id=$group_post_id");
if(mysql_num_rows($sql)>0){

}else{
	mysql_query("insert into group_post_like (member_id,group_post_id,like_date) VALUES('$member_id','$group_post_id','$date_entry')");
}
?>
<main_category>
<sub_category>
    <student_name><?php echo $member_id;?></student_name>
	<student_name><?php echo $post_id;?></student_name>
</sub_category>
</main_category>

