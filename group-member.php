<?php include('header.php'); ?>
    <!--Header End-->

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
			 
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left">
              <li class="dropdown"><a href="add-group-member.php?group_id=<?php echo $_REQUEST['group_id']; ?>">Add Group Member</a></li>
              <li class="dropdown"><a href="group-member.php?group_id=<?php echo $_REQUEST['group_id']; ?>">View Group Member</a></li>
            </ul>
			</div>

            <!-- Friend List
            ================================================= -->
            <div class="friend-list">
            	<div class="row">
			<!--------------------------------------------------------------Pending Friend ---------------------------------------------------------------------------------->	
			<?php 
				$group_id =  $_REQUEST['group_id'];;
				$sql = mysql_query("SELECT * FROM group_member gm,member m WHERE gm.member_id=m.member_id AND gm.group_id=$group_id");
				while($res = mysql_fetch_array($sql)){
			?>
            	<div class="col-md-6 col-sm-6">
                  <div class="friend-card">
                  	<img src="<?php if(user_member_id("timeline_images",$res['member_id']) !=""){ echo user_member_id("timeline_images",$res['member_id']); }else{ echo "http://placehold.it/1030x360"; } ?>" alt="profile-cover" class="img-responsive cover" />
                  	<div class="card-info">
                      <img src="<?php if(user_member_id("profile_image",$res['member_id']) !=""){ echo user_member_id("profile_image",$res['member_id']); }else{ echo "http://placehold.it/300x300"; } ?>" alt="user" class="profile-photo-lg" />
                      <div class="friend-info">
                          	<h5><a href="timeline-members.php?member_id=<?php echo $res['member_id']; ?>" class="profile-link"><?php echo $res['member_name']; ?></a></h5>
                      	<p>Student at Harvard</p>
                      </div>
                    </div>
                  </div>
                </div>
			<?php 
				}
			?>	
			
			<!--------------------------------------------------------------Accept Friend ---------------------------------------------------------------------------------->
			
			            		
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
    
    <!--preloader-->
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>

    <!-- Scripts
    ================================================= -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky-kit.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/script.js"></script>
    
  </body>
</html>
