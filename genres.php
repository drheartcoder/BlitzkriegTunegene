<?php include('header.php'); ?>

    <div id="page-contents">
    	<div class="container">
    		<div class="row">

          <!-- Newsfeed Common Side Bar Left
          ================================================= -->
    		<?php include('left_sidebar_admin.php'); ?>	
          
    		<div class="col-md-7">

            <!-- Post Create Box
            ================================================= -->
           		  
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
			<?php 
				$member_id = $_SESSION['email_id']['member_id'];
				$sql = mysqli_query($con,"SELECT * FROM member WHERE member_id=$member_id");
				$res = mysqli_fetch_array($sql);
			?>		
              <div class="post-container">
                  <h4 class="grey">GENRES</h4>
                  <form class="contact-form" method="post">
                    <div class="form-group">
                     Genres Name :
                      <input id="contact-name" type="text" name="genres_name" class="form-control" placeholder="Enter genres name *" required="required" data-error="Name is required.">
                    </div>
										
					<button class="btn-primary" name="submit">Add</button>
                  </form>
				  <?php 
				if(isset($_POST['submit'])){
					try{
						$token="";
						$dbh = getConnection();
						$dbh->beginTransaction();
						
						$genres_name = mysql_real_escape_string($_POST['genres_name']);
						
						
						
						$repatt="SELECT * from genres where genres_name='$genres_name'";
						$sth = $dbh->query($repatt);
						if($sth->rowCount()>0){
							$token="exists";
							$_SESSION['token']=$token;
							header('Location: genres.php');
						}else{
								
							$sql="INSERT INTO genres(genres_name) VALUES('$genres_name')";
							$dbh->exec($sql);
							
							$token="success";
							$_SESSION['token']=$token;
								
						}
							
						$_SESSION['token']=$token;
						$dbh->commit();
						
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
					header('Location: genres.php');
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
