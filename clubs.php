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
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left">
              <li class="dropdown"><a href="clubs.php">Clubs</a></li>
              <li class="dropdown"><a href="create-clubs.php">Create Clubs</a></li>
              
            </ul>
          </div><!-- /.navbar-collapse -->

            <!-- Nearby People List
            ================================================= -->
            <div class="people-nearby">
			<?php 
				
				$member_id = $_SESSION['email_id']['member_id'];
				$sql = mysql_query("SELECT * FROM group_name WHERE member_id=$member_id");
				while($res = mysql_fetch_array($sql)){
			?>
              <div class="nearby-user">
                <div class="row">
                  <div class="col-md-2 col-sm-2">
                    <img src="http://placehold.it/300x300" alt="user" class="profile-photo-lg" />
                  </div>
                  <div class="col-md-10 col-sm-10">
                    <h5><a href="clubsfeeds.php?group_id=<?php echo $res['group_id'];?>" class="profile-link"><?php echo $res['group_name']; ?></a></h5>
                    <p><?php echo $res['about_group']; ?></p>
                  </div>
                </div>
              </div>
			<?php 
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
