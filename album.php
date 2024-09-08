<?php 
	include('header_timeline.php');
?>
        <div id="page-contents">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-7">
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left">	
			  <li class="dropdown"><a href="timeline-album.php">View Album</a></li>	
              <li class="dropdown"><a href="create-album.php">Create Album</a></li>
              <li class="dropdown"><a href="upload-album.php">Upload Photos</a></li>
            </ul>
            </div>	
              <!-- Photo Album
              ================================================= -->
              <ul class="album-photos">
			<?php 
				$album_id = $_REQUEST['album_id'];
				$sqls = mysql_query("SELECT * FROM album_content WHERE album_id=$album_id");
				$i=0;
				while($ress = mysql_fetch_array($sqls)){
			?>
                <li>
                  <div class="img-wrapper" data-toggle="modal" data-target=".photo-<?php echo $i; ?>">
                    <img src="<?php echo $ress['album_images']; ?>" alt="photo" />
                  </div>
                  <div class="modal fade photo-<?php echo $i; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <img src="<?php echo $ress['album_images']; ?>" alt="photo" />
                      </div>
                    </div>
                  </div>
                </li>
			<?php
				$i++;
				}
			?>	
                
              </ul>
            </div>
            <div class="col-md-2 static">
              <div id="sticky-sidebar">
                <h4 class="grey">Sarah's activity</h4>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link">Sarah</a> Commended on a Photo</p>
                    <p class="text-muted">5 mins ago</p>
                  </div>
                </div>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link">Sarah</a> Has posted a photo</p>
                    <p class="text-muted">an hour ago</p>
                  </div>
                </div>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link">Sarah</a> Liked her friend's post</p>
                    <p class="text-muted">4 hours ago</p>
                  </div>
                </div>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link">Sarah</a> has shared an album</p>
                    <p class="text-muted">a day ago</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
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
