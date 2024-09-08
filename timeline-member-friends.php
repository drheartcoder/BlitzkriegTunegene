<?php 
	include('header_member_timeline.php');
?>
        <div id="page-contents">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-7">

              <!-- Friend List
              ================================================= -->
              <div class="friend-list">
                <div class="row">
                 
				
			<?php 
				$member_id = $_REQUEST['member_id'];
				$sql = mysql_query("SELECT * FROM member_friend mf,member m WHERE mf.member_id=m.member_id AND mf.friend_id=$member_id AND mf.friend_status=1 AND mf.account_status=0");
				while($res = mysql_fetch_array($sql)){
					
				$member_id = $res['member_id'];
				$friend_id = $res['friend_id'];
								
				$sqlf = mysql_query("SELECT * FROM member_friend WHERE member_id=$friend_id AND friend_id=$member_id AND friend_status= 1");
				if(mysql_num_rows($sqlf) > 0){
			?>
            	<div class="col-md-6 col-sm-6">
                  <div class="friend-card">
                  	<img src="<?php if(user_member_id("timeline_images",$res['member_id']) !=""){ echo user_member_id("timeline_images",$res['member_id']); }else{ echo "http://placehold.it/1030x360"; } ?>" alt="profile-cover" class="img-responsive cover" />
                  	<div class="card-info">
                      <img src="<?php if(user_member_id("profile_image",$res['member_id']) !=""){ echo user_member_id("profile_image",$res['member_id']); }else{ echo "http://placehold.it/300x300"; } ?>" alt="user" class="profile-photo-lg" />
                      <div class="friend-info">
                        <a href="#" class="pull-right text-green">My Friend</a>
                      	<h5><a href="timeline-members.php?member_id=<?php echo $res['member_id']; ?>" class="profile-link"><?php echo $res['member_name']; ?></a></h5>
                      	<p>Student at Harvard</p>
                      </div>
                    </div>
                  </div>
                </div>
			<?php 
				} 
				
				}
			?>
            
                </div>
              </div>
            </div>
           
              <?php include('right_activity.php'); ?>
          </div>
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
