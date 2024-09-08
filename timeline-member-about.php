<?php 
	include('header_member_timeline.php');
?>
        <div id="page-contents">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-7">
			<?php 
				$member_id = $_REQUEST['member_id'];
				$sql = mysqli_query($con,"SELECT * FROM member WHERE member_id=$member_id");
				$res = mysqli_fetch_array($sql);
			?>
              <!-- About
              ================================================= -->
              <div class="about-profile">
                <div class="about-content-block">
                  <h4 class="grey"><i class="ion-ios-information-outline icon-in-title"></i>Personal Information </h4> 
                  <p><?php echo $res['about']; ?></p>
                </div>
                <div class="about-content-block">
                  <h4 class="grey"><i class="ion-ios-briefcase-outline icon-in-title"></i>Work Experiences</h4>
                  <div class="organization">
                    
                    <div class="work-info">
                      <h5><?php echo $res['experience']; ?> Year</h5>
					  <p><span class="text-grey"></span></p>
                    </div>
                  </div>
                  
                </div>
				<div class="about-content-block">
                  <h4 class="grey"><i class="ion-ios-briefcase-outline icon-in-title"></i>Field</h4>
                  <div class="organization">
                    
                    <div class="work-info">
                      <h5><?php echo $res['field']; ?></h5>
					  <p><span class="text-grey"></span></p>
                    </div>
                  </div>
                  
                </div>
				<div class="about-content-block">
                  <h4 class="grey"><i class="ion-ios-briefcase-outline icon-in-title"></i>Sub Field</h4>
                  <div class="organization">
                    
                    <div class="work-info">
                      <h5><?php echo $res['sub_field']; ?></h5>
					  <p><span class="text-grey"></span></p>
                    </div>
                  </div>
                  
                </div>
                <div class="about-content-block">
                  <h4 class="grey"><i class="ion-ios-location-outline icon-in-title"></i>Location</h4>
                  <p><?php echo $res['country_name']; ?>, <?php echo $res['city_name']; ?>, <?php echo $res['pincode']; ?></p>
                  <div class="google-maps">
                    <div id="map" class="map"></div>
                  </div>
                </div>
                <div class="about-content-block">
                  <h4 class="grey"><i class="ion-ios-heart-outline icon-in-title"></i>D.O.B</h4>
                  <p><?php echo $res['dob']; ?></p>
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
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTMXfmDn0VlqWIyoOxK8997L-amWbUPiQ&callback=initMap"></script>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky-kit.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/script.js"></script>
    
  </body>
</html>
