<?php include('header.php'); ?>
    <div id="page-contents">
    	<div class="container">
    		<div class="row">

    			<!-- Newsfeed Common Side Bar Left
          ================================================= -->
			<?php include('left_sidebar.php'); ?>	
          
    			<div class="col-md-7">

            <!-- Post Create Box
            ================================================= -->
            <?php include('post_create_box.php'); ?>
            <!-- Chat Room
            ================================================= -->
            <div class="chat-room">
              <div  class="row">
                <div class="col-md-5">
				<script>
					function memberId(mamber){
						var mId = mamber;
						//alert("Hiii");
						//alert(mId);
						document.getElementById('current_member').value=mId;
					}
				</script>

                  <!-- Contact List in Left-->
                  <ul class="nav nav-tabs contact-list scrollbar-wrapper scrollbar-outer">
				<?php 
					$member_id = $_SESSION['email_id']['member_id'];
					$sql = mysql_query("SELECT * FROM member_friend mf,member m WHERE mf.member_id=m.member_id AND mf.friend_id=$member_id AND mf.friend_status=1 AND mf.account_status=0");
					$i=1;
					while($res = mysql_fetch_array($sql)){
				?>  <input type="hidden" id="<?php echo "member_id".$i; ?>" value="<?php echo $res['member_id']; ?>">
                    <li <?php if($i==1){ echo 'class="active"';} ?>onclick="memberId(<?php echo $res['member_id']; ?>)">
                      <a href="#contact-<?php echo $i; ?>" data-toggle="tab">
                        <div class="contact">
                        	<img src="<?php if(user("profile_image",$res['email_id']) !=""){ echo user("profile_image",$res['email_id']); }else{ echo "http://placehold.it/300x300"; } ?>" alt="" class="profile-photo-sm pull-left"/>
                        	<div class="msg-preview">
                        		<h6><?php echo $res['member_name']; ?></h6>
                        		<p class="text-muted" id="form-content1">
									<?php 
										$member_id = $_SESSION['email_id']['member_id'];
										$friend_id = $res['member_id'];
										$sql_mesg = mysql_query("SELECT * FROM chitter WHERE (member_id=$member_id AND friend_id=$friend_id) OR (member_id=$friend_id AND friend_id=$member_id)  ORDER BY chitter_id DESC LIMIT 1");
										$res_mesg = mysql_fetch_array($sql_mesg);
										echo $res_mesg['message'];
									?>
								</p>
                            <small class="text-muted">a min ago</small>
                            <div class="chat-alert">1</div>
                        	</div>
                        </div>
                      </a>
                    </li>
				<?php 
				$i++;
					}
				?>	
                    
                  </ul><!--Contact List in Left End-->

                </div>
                <div class="col-md-7">

                  <!--Chat Messages in Right-->

                  <?php include('chat_right.php'); ?>
				  
				  <!--Chat Messages in Right End-->
				<form method="post" id="reg-form" autocomplete="off">
                  <div class="send-message">
                    <div class="input-group">
					<?php 
						$member_id = $_SESSION['email_id']['member_id'];
						$sql_default_member = mysql_query("SELECT * FROM member_friend mf,member m WHERE mf.member_id=m.member_id AND mf.friend_id=$member_id AND mf.friend_status=1 AND mf.account_status=0 LIMIT 1");
						$res_default_member = mysql_fetch_array($sql_default_member);
					?>
                      <input type="hidden" class="form-control" name="current_member" id="current_member" value="<?php echo $res_default_member['member_id']; ?>">
                      <input type="text" class="form-control" name="message" placeholder="Type your message" id="messagebox">
                      <span class="input-group-btn">
                        <button class="btn btn-default" name="submit" type="submit">Send</button>
                      </span>
					
					
                    </div>
					
                  </div>
				  </form>
				  
<script src="assets/jquery-1.12.4-jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {	
	
	// submit form using $.ajax() method
	
	$('#reg-form').submit(function(e){
		
		e.preventDefault(); // Prevent Default Submission
		
		$.ajax({
			url: 'chat.php',
			type: 'POST',
			data: $(this).serialize() // it will serialize the form data
		})
		.done(function(data){
			 $("#form-content").load(window.location + " #form-content");
			 $("#form-content1").load(window.location + " #form-content1");
			 document.getElementById("messagebox").value="";
		})
		.fail(function(){
			alert('Ajax Submit Failed ...');	
		});
	});

});
</script>

				  
<!--<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
setInterval(function(){
$("#loads").load('newchat.php')
}, 2000);
});
</script>-->				  
				 
				  
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>

    			<!-- Newsfeed Common Side Bar Right
          ================================================= -->
    		<?php include('right_sidebar.php'); ?>
    		</div>
    	</div>
    </div>

    <!-- Footer
    ================================================= -->
     <?php include('footer.php'); ?>
    

    <!-- Scripts
    ================================================= -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky-kit.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/script.js"></script>

  </body>
</html>
