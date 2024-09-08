<?php

require_once('database/db.php');
require_once('database/function.php');

if ( !isset($_SESSION['logged-user']) || $_SESSION['logged-user'] !== true) {

header('Location: index.php');

exit;

}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>News Feed | Check what your friends are doing</title>

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



function populateAddGroupMember(member_id,group_id){
	var memberId = member_id;
	var groupId = group_id;
	
	var memberValue = document.getElementById(memberId).value;
	var groupValue = document.getElementById(groupId).value;
	
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
        xmlhttp.open("GET","populate_add_group.php?member_id="+memberValue+"&group_id="+groupValue,true);
        xmlhttp.send();	
}



function populateAcceptFriend(member_id,friend_id){
	var memberId = member_id;
	var friendId = friend_id;
	
	//alert(memberId);
	//alert(friendId);
	
	var memberValue = document.getElementById(memberId).value;
	var FriendValue = document.getElementById(friendId).value;
	
	//alert(memberValue);
	//alert(FriendValue);
	
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
			  
			  //alert("SuccessFully Request Send");
			  
			  location.reload();
			  document.getElementById(rateId).value=name[1].childNodes[0].nodeValue;
			  var val=name[3].childNodes[0].nodeValue;
			  
            }
          }
        xmlhttp.open("GET","populate_accept_friend.php?member_id="+memberValue+"&friend_id="+FriendValue,true);
        xmlhttp.send();	
}



function populateGroupLike(member_id,post_id){
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
        xmlhttp.open("GET","populate_group_like_ajax.php?member_id="+memberValue+"&post_id="+postValue,true);
        xmlhttp.send();	
}




function populateGroupdisLike(member_id,post_id){
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
        xmlhttp.open("GET","populate_group_dislike_ajax.php?member_id="+memberValue+"&post_id="+postValue,true);
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
			
			
			
			
	function doit_onkeypress_group(event,postcontant,member_id,post_id){
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
        xmlhttp.open("GET","post_group_comment.php?member_id="+memberValue+"&post_id="+postValue+"&post_contant="+postContant,true);
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
