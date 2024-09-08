<?php 
	include('header_timeline.php');
?>
        <div id="page-contents">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-7">
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left">	
              <li class="dropdown"><a href="create-album.php">Create Album</a></li>
              <li class="dropdown"><a href="upload-album.php">Upload Photos</a></li>
            </ul>
           </div>
              <!-- Photo Album
              ================================================= -->
              <ul class="album-photos">
			<?php 
				$member_id = $_SESSION['email_id']['member_id'];
				$sql = mysql_query("SELECT * FROM album WHERE member_id=$member_id");
				while($res = mysql_fetch_array($sql)){
					$album_id = $res['album_id'];
					$sqls = mysql_query("SELECT Count(*) cnt,album_images FROM album_content WHERE album_id=$album_id Limit 0,1");
					$ress = mysql_fetch_array($sqls);	
			?>	
				<li>
                <div class="img-wrapper">
                    <a href="album.php"><img src="<?php echo $ress['album_images']; ?>" alt="photo" /></a>
                    <a href="album.php?album_id=<?php echo $res['album_id']; ?>"><div class="img-detail"><p><strong><?php echo $res['album_name']; ?></strong></p></a>
                    <p><?php echo $ress['cnt']; ?></p>
                    </div>
                  </div>
                 
                </li>
            <?php 
				}
			?>    
              </ul>
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
