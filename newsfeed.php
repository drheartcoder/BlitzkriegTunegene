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

            <!-- Post Content
            ================================================= -->
			<?php include('post_content.php'); ?>
                       
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
    <!--<div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>-->
    
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
