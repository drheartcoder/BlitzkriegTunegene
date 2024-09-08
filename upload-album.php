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
              <li class="dropdown"><a href="timeline-album.php">View Album</a></li>
              <li class="dropdown"><a href="create-album.php">Create Album</a></li>
            </ul>
           </div>
		  
		  <!-- /.navbar-collapse -->

            <!-- Post Content
            ================================================= -->
            <div class="post-content">
					<?php
						if(isset($_SESSION['token'])){
							echo getTokenMessage($_SESSION['token']);
							unset($_SESSION['token']);
						}
						if(!isset($_SESSION)){
							echo "Session Is Not Set!";
						}
						if(isset($_GET['token'])){
							echo getTokenMessage($_GET['token']);
						}
					?>
              <div class="post-container">
                  <h4 class="grey">Create Album</h4>
                  <form class="contact-form" method="post" enctype="multipart/form-data">
					<div class="form-group">
                      <i class="icon ion-person"></i>
					  <select name="album_id" class="form-control">
							<option value="">--Select Album--</option>
						<?php 
							$member_id = $_SESSION['email_id']['member_id'];
							$sql = mysql_query("SELECT * FROM album WHERE member_id=$member_id");
							while($res = mysql_fetch_array($sql)){
						?>	
							<option value="<?php echo $res['album_id']; ?>"> <?php echo $res['album_name']; ?> </option>
						<?php 
							}
						?>	
					  </select>
                      
                    </div>
                    <div class="form-group">
                      <i class="icon ion-person"></i>
                      <input id="contact-name" type="file" name="image" class="form-control" required="required" data-error="Name is required.">
                    </div>
					<button class="btn-primary" name="submit">Upload</button>
                  </form>
				  <?php 
				if(isset($_POST['submit'])){
					try{
						$token="";
						$dbh = getConnection();
						$dbh->beginTransaction();
						
						$member_id = $_SESSION['email_id']['member_id'];
						$album_id = mysql_real_escape_string($_POST['album_id']);
						$ipaddress = $_SERVER['REMOTE_ADDR'];
						$entry_date = date('Y-m-d');
						$arrayext = explode('.', $_FILES['image']['name']);
						$file_ext = end( $arrayext); 						
						$expensions= array("jpeg","jpg","png","mp4","mp3","avi","wmv","mkv");

						if(in_array($file_ext,$expensions)=== true){
	
							$file_name = "images/post_images/".$member_id.'_'.$_FILES['image']['name'];
							$file_size =$_FILES['image']['size'];
							$file_tmp =$_FILES['image']['tmp_name'];
							$file_type=$_FILES['image']['type'];
							$arrayext = explode('.', $_FILES['image']['name']);
							$file_ext = end( $arrayext); 
      
							$expensions= array("jpeg","jpg","png");
      
							if(in_array($file_ext,$expensions)=== false){
								$errors[]="extension not allowed, please choose a JPEG or PNG file.";
							}
      
							if($file_size > 50000005000000){
								$errors[]='File size must be excately 2 MB';
								$token="filesize";
								$_SESSION['token']=$token;
							}
      
							if(empty($errors)==true){
								move_uploaded_file($file_tmp,$file_name);
								//echo "Success";
							}else{
							print_r($errors);
								$token="filesize";
								$_SESSION['token']=$token;
							}
						
							if(in_array($file_ext,$expensions)=== true){	
								$sql="INSERT INTO album_content(album_id,album_images,entry_date) VALUES('$album_id','$file_name','$entry_date')";
								$value = $dbh->exec($sql);
								if($value){
									$token="postsuccess";
								}else{
									$token="fail";
									$_SESSION['token']=$token;
									header('Location: upload-album.php');
								}
								
								}else{
	
								print_r($errors);
								$token="filesize";
								$_SESSION['token']=$token;
								header('Location: upload-album.php');
								}
	
							}	
						$dbh->commit();
						$_SESSION['token']=$token;
					}
					catch(PDOException $e){
						echo $e;
						echo $e->getMessage();
					try{
						$dbh->rollback();
					}catch(PDOException $e){
						echo $e->getMessage();
					}
					}	
					header('Location: upload-album.php');
				}
			?>
				  
                  
              </div>
            </div>

            <!-- Post Content
            ================================================= -->
          
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
