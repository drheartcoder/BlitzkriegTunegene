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

            <!-- Nearby People List
            ================================================= -->
            <div class="people-nearby">
              <!--<div class="google-maps">
                <div id="map" class="map"></div>
              </div>-->
			<?php 
				$member_id = $_SESSION['email_id']['member_id'];
				$sql = mysql_query("SELECT * FROM member WHERE member_id!=$member_id");
				$i = 0;
				while($res = mysql_fetch_array($sql)){
					$mId = $res['member_id'];
					$sqls = mysql_query("SELECT count(*) cnt FROM member_friend WHERE member_id=$mId And friend_id=$member_id");
					$rows = mysql_fetch_array($sqls);
					
					if($rows['cnt']==0){
						//echo $mId;
			?>
			  
              <div class="nearby-user">
                <div class="row">
                  <div class="col-md-2 col-sm-2">
                    <img src="<?php if(user_member_id("profile_image",$res['member_id']) !=""){ echo user_member_id("profile_image",$res['member_id']); }else{ echo "http://placehold.it/300x300"; } ?>" alt="user" class="profile-photo-lg" />
                  </div>
                  <div class="col-md-7 col-sm-7">
                    <h5><a href="timeline-members.php?member_id=<?php echo $res['member_id']; ?>" class="profile-link"><?php echo $res['member_name']; ?></a></h5>
                    <p><?php echo $res['field']; ?></p>
                    <p class="text-muted">500m away</p>
                  </div>
                  <div class="col-md-3 col-sm-3">
					<input type="hidden" name="member_id" id="<?php echo "memberid".$i; ?>" value="<?php echo $_SESSION['email_id']['member_id']; ?>" />
					<input type="hidden" name="friend_id" id="<?php echo "friendid".$i; ?>" value="<?php echo $friend_id = $res['member_id']; ?>" />
                    <button class="btn btn-primary pull-right" onclick="populateAddFriend('<?php echo "memberid".$i; ?>','<?php echo "friendid".$i; ?>')">Add Friend</button>
                  </div>
                </div>
              </div>
			<?php
					}
				$i++;
				}
			?> 
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
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTMXfmDn0VlqWIyoOxK8997L-amWbUPiQ&callback=initMap"></script>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky-kit.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/script.js"></script>

  </body>
</html>