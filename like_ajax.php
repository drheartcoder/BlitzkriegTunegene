<?php

require_once('database/db.php');

if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'btn text-green':
            like();
            break;
        case 'btn text-red':
            dislike();
            break;
    }
}

function dislike() {
	$member_id = $_POST['member_id'];
	$post_id = $_POST['post_id'];
	$date_entry = date('Y-m-d');
	
    mysql_query("insert into post_dislike (member_id,post_id,dislike_date) VALUES('$member_id','$post_id','$date_entry')");
	
	header('Location: function.php');
    exit;
}

function like() {
	$member_id = $_POST['member_id'];
	$post_id = $_POST['post_id'];
	$date_entry = date('Y-m-d');
	
    mysql_query("insert into post_like (member_id,post_id,like_date) VALUES('$member_id','$post_id','$date_entry')");
	
	header('Location: function.php');
	
    exit;
}
?>