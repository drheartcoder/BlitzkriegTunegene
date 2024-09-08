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
              <li class="dropdown"><a href="page.php">Pages</a></li>
              <li class="dropdown"><a href="create-page.php">Create Pages</a></li>
              
            </ul>
          </div><!-- /.navbar-collapse -->

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
                  <h4 class="grey">Create Pages</h4>
                  <form class="contact-form" method="post">
                    <div class="form-group">
                      <i class="icon ion-person"></i>
                      <input id="contact-name" type="text" name="name" class="form-control" placeholder="Enter your Pages name *" required="required" data-error="Name is required.">
                    </div>
                    <div class="form-group">
                      <textarea id="form-message" name="about" class="form-control" placeholder="Enter Pages Details *" rows="4" required="required" data-error="Please,Enter Group Details."></textarea>
                    </div>
					<button class="btn-primary" name="submit">Create</button>
                  </form>
				  <?php 
				if(isset($_POST['submit'])){
					try{
						$token="";
						$dbh = getConnection();
						$dbh->beginTransaction();
						
						$member_id = $_SESSION['email_id']['member_id'];
						$name = mysql_real_escape_string($_POST['name']);
						$about = mysql_real_escape_string($_POST['about']);
						$ipaddress = $_SERVER['REMOTE_ADDR'];
						$entry_date = date('Y-m-d');
						$sqls = mysql_query("SELECT * FROM pages WHERE member_id=$member_id AND page_name='$name'");
						if(mysql_num_rows($sqls)>0){
							header('Location: create-group.php');
							$token="exists";	
							$_SESSION['token']=$token;
						}else{
		
						echo $sql="INSERT INTO pages(member_id,page_name,about_page,entry_date,ip) VALUES('$member_id','$name','$about','$entry_date','$ipaddress')";
						$dbh->exec($sql);
						
						$token="success";	
						$_SESSION['token']=$token;
						
						}
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
					header('Location: create-page.php');
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
    
    <!--preloader-->
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>
    
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
