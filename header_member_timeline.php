<?php

require_once('database/db.php');
require_once('database/function.php');

if ( !isset($_SESSION['logged-user']) || $_SESSION['logged-user'] !== true) {

header('Location: index.php');

exit;

}
$member_id = $_REQUEST['member_id']; 
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>My Timeline | This is My Coolest Profile</title>

    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link href="css/emoji.css" rel="stylesheet">
    <!--Google Webfont-->
		<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600,600italic,700' rel='stylesheet' type='text/css'>
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="images/fav.png"/>
	
	<script>
/*$(document).ready(function(){
    $('#likebutton').click(function(){
        var clickBtnValue = $('#likebutton').attr('class');
				
        var mamber_id = $("#member_id").val();
        var post_id = $("#post_id").val();
		
		//alert($('#likebutton').attr('class'));
		//alert($("#member_id").val());
		//alert($("#post_id").val());
		
        var ajaxurl = 'like_ajax.php',
        data =  {'action': clickBtnValue,'member_id': mamber_id,'post_id': post_id};
        $.post(ajaxurl, data, function (response) {
			
            // Response div goes here.
            //alert("action performed successfully");
        });
    });

});

$(document).ready(function(){
    $('#dislikebutton').click(function(){
        var clickBtnValue = $('#dislikebutton').attr('class');
				
        var mamber_id = $("#member_id").val();
        var post_id = $("#post_id").val();
		
		//alert($('#dislikebutton').attr('class'));
		//alert($("#member_id").val());
		//alert($("#post_id").val());
		
        var ajaxurl = 'like_ajax.php',
        data =  {'action': clickBtnValue,'member_id': mamber_id,'post_id': post_id};
        $.post(ajaxurl, data, function (response) {
            // Response div goes here.
            //alert("action performed successfully");
        });
    });

});
*/


function populateLike(member_id,post_id){
	var memberId = member_id;
	var postId = post_id;
	
	var memberValue = document.getElementById(memberId).value;
	var postValue = document.getElementById(postId).value;
	
	//alert(memberValue);
	//alert(postValue);
	
 var xmlhttp;
        if (window.XMLHttpRequest)
          {// code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp=new XMLHttpRequest();
          }
        else
          {// code for IE6, IE5
          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
          }
        xmlhttp.onreadystatechange=function()
        {
          if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
            var res=xmlhttp.responseText;
			//alert("Response: "+res);
			var parser=new DOMParser();
			  var xmlDoc=parser.parseFromString(xmlhttp.responseText,"text/xml");
			  var name = xmlDoc.getElementsByTagName("student_name");
			 //alert("Name: "+name);
			 //alert("Name: "+name[1].childNodes[0].nodeValue);
			 
			  // var value=name[0].childNodes[0].nodeValue;
			  // if(parseInt(value)==-1){
				// alert("Stud Id"+mobile_no+" doesn't exist. Please check the Stud Id!");
				// return;
			  // }
			  location.reload();
			  document.getElementById(rateId).value=name[1].childNodes[0].nodeValue;
			  var val=name[3].childNodes[0].nodeValue;
			  
            }
          }
        xmlhttp.open("GET","populate_like_ajax.php?member_id="+memberValue+"&post_id="+postValue,true);
        xmlhttp.send();	
}

function populatedisLike(member_id,post_id){
	var memberId = member_id;
	var postId = post_id;
	
	var memberValue = document.getElementById(memberId).value;
	var postValue = document.getElementById(postId).value;
	
	//alert(memberValue);
	//alert(postValue);
	
 var xmlhttp;
        if (window.XMLHttpRequest)
          {// code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp=new XMLHttpRequest();
          }
        else
          {// code for IE6, IE5
          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
          }
        xmlhttp.onreadystatechange=function()
        {
          if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
            var res=xmlhttp.responseText;
			//alert("Response: "+res);
			var parser=new DOMParser();
			  var xmlDoc=parser.parseFromString(xmlhttp.responseText,"text/xml");
			  var name = xmlDoc.getElementsByTagName("student_name");
			 //alert("Name: "+name);
			 //alert("Name: "+name[1].childNodes[0].nodeValue);
			 
			  // var value=name[0].childNodes[0].nodeValue;
			  // if(parseInt(value)==-1){
				// alert("Stud Id"+mobile_no+" doesn't exist. Please check the Stud Id!");
				// return;
			  // }
			  location.reload();
			  document.getElementById(rateId).value=name[1].childNodes[0].nodeValue;
			  var val=name[3].childNodes[0].nodeValue;
			  
            }
          }
        xmlhttp.open("GET","populate_dislike_ajax.php?member_id="+memberValue+"&post_id="+postValue,true);
        xmlhttp.send();	
}



function populateAddFriend(member_id,friend_id){
	var memberId = member_id;
	var friendId = friend_id;
	
	var memberValue = document.getElementById(memberId).value;
	var FriendValue = document.getElementById(friendId).value;
	
	//alert(memberValue);
	//alert(postValue);
	
 var xmlhttp;
        if (window.XMLHttpRequest)
          {// code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp=new XMLHttpRequest();
          }
        else
          {// code for IE6, IE5
          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
          }
        xmlhttp.onreadystatechange=function()
        {
          if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
            var res=xmlhttp.responseText;
			//alert("Response: "+res);
			var parser=new DOMParser();
			  var xmlDoc=parser.parseFromString(xmlhttp.responseText,"text/xml");
			  var name = xmlDoc.getElementsByTagName("student_name");
			 //alert("Name: "+name);
			 //alert("Name: "+name[1].childNodes[0].nodeValue);
			 
			  // var value=name[0].childNodes[0].nodeValue;
			  // if(parseInt(value)==-1){
				// alert("Stud Id"+mobile_no+" doesn't exist. Please check the Stud Id!");
				// return;
			  // }
			  
			  alert("SuccessFully Request Send");
			  
			  location.reload();
			  document.getElementById(rateId).value=name[1].childNodes[0].nodeValue;
			  var val=name[3].childNodes[0].nodeValue;
			  
            }
          }
        xmlhttp.open("GET","populate_add_friend.php?member_id="+memberValue+"&friend_id="+FriendValue,true);
        xmlhttp.send();	
}


</script>

<script type="text/javascript">
            function doit_onkeypress(event,postcontant,member_id,post_id){
                if (event.keyCode == 13 || event.which == 13){
					//var val = document.getElementById(value).value;
                    //alert(postcontant);
                    //alert(member_id);
                    //alert(post_id);
                    //alert("You are clicked");
					
					
					
	var memberId = member_id;
	var postId = post_id;
	var postContant = postcontant;
		
	var memberValue = document.getElementById(memberId).value;
	var postValue = document.getElementById(postId).value;
	
	//alert(memberValue);
	//alert(postValue);
	
 var xmlhttp;
        if (window.XMLHttpRequest)
          {// code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp=new XMLHttpRequest();
          }
        else
          {// code for IE6, IE5
          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
          }
        xmlhttp.onreadystatechange=function()
        {
          if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
            var res=xmlhttp.responseText;
			//alert("Response: "+res);
			var parser=new DOMParser();
			  var xmlDoc=parser.parseFromString(xmlhttp.responseText,"text/xml");
			  var name = xmlDoc.getElementsByTagName("student_name");
			 //alert("Name: "+name);
			 //alert("Name: "+name[1].childNodes[0].nodeValue);
			 
			  // var value=name[0].childNodes[0].nodeValue;
			  // if(parseInt(value)==-1){
				// alert("Stud Id"+mobile_no+" doesn't exist. Please check the Stud Id!");
				// return;
			  // }
			  location.reload();
			  document.getElementById(rateId).value=name[1].childNodes[0].nodeValue;
			  var val=name[3].childNodes[0].nodeValue;
			  
            }
          }
        xmlhttp.open("GET","post_comment.php?member_id="+memberValue+"&post_id="+postValue+"&post_contant="+postContant,true);
        xmlhttp.send();	
					
					
					
					
					
                }
            }
        </script>
	
	
	</head>
  <body>

    <!-- Header
    ================================================= -->
		<?php include('nav.php'); ?>
    <!--Header End-->

    <div class="container">

      <!-- Timeline
      ================================================= -->
      <div class="timeline"> 
        <div class="timeline-cover" style='background: url(<?php if(user_member_id("timeline_images",$_REQUEST['member_id']) !=""){ echo user_member_id("timeline_images",$_REQUEST['member_id']); }else{ echo "http://placehold.it/1030x360"; } ?>) no-repeat;background-position: center;background-size: cover;'>

          <!--Timeline Menu for Large Screens-->
          <div class="timeline-nav-bar hidden-sm hidden-xs">
            <div class="row">
              <div class="col-md-3">
                <div class="profile-info">
                  <img src="<?php if(user_member_id("profile_image",$_REQUEST['member_id']) !=""){ echo user_member_id("profile_image",$_REQUEST['member_id']); }else{ echo "http://placehold.it/300x300"; } ?>" alt="" class="img-responsive profile-photo" />
                  <h3><?php echo user_member_id("member_name",$_REQUEST['member_id']); ?></h3>
                  <p class="text-muted">Creative Director</p>
                </div>
              </div>
              <div class="col-md-9">
                <ul class="list-inline profile-menu">
                  <li><a href="timeline-members.php?member_id=<?php echo $_REQUEST['member_id']; ?>" <?php if((basename($_SERVER['PHP_SELF']) == "timeline-members.php")){ echo "class='active'"; } ?>>Timeline</a></li>
                  <li><a href="timeline-member-about.php?member_id=<?php echo $_REQUEST['member_id']; ?>" <?php if((basename($_SERVER['PHP_SELF']) == "timeline-member-about.php")){ echo "class='active'"; } ?>>About</a></li>
                  <li><a href="timeline-member-album.php?member_id=<?php echo $_REQUEST['member_id']; ?>" <?php if((basename($_SERVER['PHP_SELF']) == "timeline-member-album.php")){ echo "class='active'"; } ?>>Album</a></li>
                  <li><a href="timeline-member-friends.php?member_id=<?php echo $_REQUEST['member_id']; ?>" <?php if((basename($_SERVER['PHP_SELF']) == "timeline-member-friends.php")){ echo "class='active'"; } ?>>Friends</a></li>
                </ul>
                
              </div>
            </div>
          </div><!--Timeline Menu for Large Screens End-->

          <!--Timeline Menu for Small Screens-->
          <div class="navbar-mobile hidden-lg hidden-md">
            <div class="profile-info">
              <img src="http://placehold.it/300x300" alt="" class="img-responsive profile-photo" />
              <h4>Sarah Cruiz</h4>
              <p class="text-muted">Creative Director</p>
            </div>
            <div class="mobile-menu">
              <ul class="list-inline">
                <li><a href="timeline-members.php?member_id=<?php echo $_REQUEST['member_id']; ?>" class="active">Timeline</a></li>
                <li><a href="timeline-about.html">About</a></li>
                <li><a href="timeline-album.html">Album</a></li>
                <li><a href="timeline-friends.html">Friends</a></li>
              </ul>
              <button class="btn-primary">Add Friend</button>
            </div>
          </div><!--Timeline Menu for Small Screens End-->

        </div>
		
		
		
		
    <!--<div id="fade" class="black_overlay"></div>-->
	
	

