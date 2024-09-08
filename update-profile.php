<?php include('header.php'); ?>
<link href="jquery.multiselect.css" rel="stylesheet" type="text/css">
    <div id="page-contents">
    	<div class="container">
    		<div class="row">

          <!-- Newsfeed Common Side Bar Left
          ================================================= -->
    		<?php include('left_sidebar.php'); ?>	
          
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
                  <h4 class="grey">Update Profile</h4>
                  <form class="contact-form" method="post">
                    <div class="form-group">
                      Name :
                      <input id="contact-name" type="text" name="member_name" class="form-control" placeholder="Enter your name *" required="required" data-error="Name is required." value="<?php if($res['member_name'] !=""){ echo $res['member_name']; } ?>">
                    </div>
					<div class="form-group">
                      DOB :
					  <select name="date">
							<option value="">Date</option>
						<?php 
							$day = array('01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31');
							$i = 0;
							while($i < count($day)){
						?>	
							<option value="<?php echo $day[$i]; ?>" <?php $time=strtotime($res['dob']); if((date("j",$time)) == ($day[$i])){ echo "selected"; } ?>><?php echo $day[$i]; ?></option>
						<?php 
							$i++;
							}
						?>
					  </select>
					  <select name="month">
							<option value="">Month</option>
						<?php 
							$month = array('01','02','03','04','05','06','07','08','09','10','11','12');
							$i = 0;
							while($i < count($month)){
						?>	
							<option value="<?php echo $month[$i]; ?>" <?php $time=strtotime($res['dob']); if((date("m",$time)) == ($month[$i])){ echo "selected"; } ?>><?php echo $month[$i]; ?></option>
						<?php 
							$i++;
							}
						?>	
							
					  </select>
					  <select name="year">
							<option value="">Year</option>
						<?php
							$i = 0;
							$year = date('Y');
							while($i<47){
						?>	
							<option value="<?php echo $year-$i; ?>" <?php $time=strtotime($res['dob']); if((date("Y",$time)) == ($year-$i)){ echo "selected"; } ?>><?php echo $year-$i; ?></option>
						<?php 
							$i++;
							}
						?>	
					  </select>
                     
                    </div>
					<div class="form-group">
                      Country Name :
					   <select name="country_name"  class="form-control">
							<option value="">Select</option>						
							<option value="india" <?php if($res['country_name'] == "india"){ echo "selected"; } ?>>India</option>				
							<option value="other" <?php if($res['country_name'] == "other"){ echo "selected"; } ?>>Other</option>						
					  </select>
                    </div>
					<div class="form-group">
                      City Name :
					   <select name="city_name"  class="form-control">
							<option value="">Select</option>						
							<option value="banglore" <?php if($res['city_name'] == "banglore"){ echo "selected"; } ?>>Banglore</option>						
							<option value="other" <?php if($res['city_name'] == "other"){ echo "selected"; } ?>>Other</option>						
					  </select>
                    </div>
					<div class="form-group">
                      Zip Code :
                      <input id="contact-name" type="text" name="pincode" class="form-control" placeholder="Enter your Zip-Code *" required="required" data-error="Name is required." value="<?php if($res['pincode'] !=""){ echo $res['pincode']; } ?>">
                    </div>
					<div class="form-group">
                      Field :
					   <select name="field"  class="form-control">
							<option value="">Select</option>						
							<option value="MUSICIAN" <?php if($res['field'] == "MUSICIAN"){ echo "selected"; } ?>>MUSICIAN</option>						
							<option value="VOCALIST" <?php if($res['field'] == "VOCALIST"){ echo "selected"; } ?>>VOCALIST</option>						
							<option value="DJ" <?php if($res['field'] == "DJ"){ echo "selected"; } ?>>DJ</option>						
							<option value="MUSIC PRODUCER" <?php if($res['field'] == "MUSIC PRODUCER"){ echo "selected"; } ?>>MUSIC PRODUCER</option>						
							<option value="MUSIC DIRECTOR" <?php if($res['field'] == "MUSIC DIRECTOR"){ echo "selected"; } ?>>MUSIC DIRECTOR</option>						
							<option value="SOUND ENGINEER" <?php if($res['field'] == "SOUND ENGINEER"){ echo "selected"; } ?>>SOUND ENGINEER</option>						
							<option value="SOUND TECHNICIAN" <?php if($res['field'] == "SOUND TECHNICIAN"){ echo "selected"; } ?>>SOUND TECHNICIAN</option>						
							<option value="RECORD LABEL" <?php if($res['field'] == "RECORD LABEL"){ echo "selected"; } ?>>RECORD LABEL</option>						
							<option value="MANAGER" <?php if($res['field'] == "MANAGER"){ echo "selected"; } ?>>MANAGER</option>						
							<option value="TALENT HUNTERS" <?php if($res['field'] == "TALENT HUNTERS"){ echo "selected"; } ?>>TALENT HUNTERS</option>						
							<option value="LAWYERS, VENUE" <?php if($res['field'] == "LAWYERS, VENUE"){ echo "selected"; } ?>>LAWYERS, VENUE</option>						
							<option value="SOUND EQUIPMENT RETAILERS" <?php if($res['field'] == "SOUND EQUIPMENT RETAILERS"){ echo "selected"; } ?>>SOUND EQUIPMENT RETAILERS</option>						
							<option value="MUSIC LOVER/FAN" <?php if($res['field'] == "MUSIC LOVER/FAN"){ echo "selected"; } ?>>MUSIC LOVER/FAN</option>						
							<option value="OTHER" <?php if($res['field'] == "OTHER"){ echo "selected"; } ?>>OTHER</option>						
					  </select>
                    </div>
					<div class="form-group">
                      Sub Field :
                      <input id="contact-name" type="text" name="sub_field" class="form-control" placeholder="Enter your Sub Field *" required="required" data-error="Name is required." value="<?php if($res['sub_field'] !=""){ echo $res['sub_field']; } ?>">
                    </div>
					
					
					<style>
						ul,li { margin:0; padding:0; list-style:none;}
						.label { color:#000; font-size:16px;}
					</style>
					<div class="form-group">
                      Genres :
                      <select name="course_id[]" multiple="multiple" class="form-control">
								<?php 
								
									$sqls = mysql_query("SELECT * FROM  `genres`");
									while($ress = mysql_fetch_array($sqls)){								
									?><style> .label{color: black !important;}</style>
									<optgroup style="color: black !important;" label="<?php echo $ress['genres_name']; ?>">
									<?php 
										 $genres_id = $ress['genres_id'];
										 $sqlss = mysql_query("SELECT * FROM sub_genres WHERE genres_id=$genres_id");
										 while($rows = mysql_fetch_array($sqlss)){								
									?>	
										<option value="<?php echo $rows['sub_genres_id']; ?>"><?php echo $rows['sub_genres_name']; ?></option>
									<?php 
										}
									?>	
									</optgroup>
								<?php 
									}
								?>	
								<?php 
								
									//$sql = mysql_query("SELECT * FROM qualifications");
									//while($res = mysql_fetch_array($sql)){								
								?>	
									<!--<optgroup label="<?php //echo $res['qualification_name']; ?>">
										<option value="JavaScript">JavaScript</option>
									</optgroup>-->
								<?php 
									//}
								?>	
									<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
									<script src="jquery.multiselect.js"></script>
									<script>
										$('select[multiple]').multiselect({
										columns: 4,
										placeholder: 'Select options'
										});
									</script>
								</select>
                    </div>
					
					<div class="form-group">
                      Experience :
					   <select name="experience"  class="form-control">
							<option value="">Select</option>						
							<option value="1-3" <?php if($res['experience'] == "1-3"){ echo "selected"; } ?>>1-3 YEARS</option>						
							<option value="3-5" <?php if($res['experience'] == "3-5"){ echo "selected"; } ?>>3-5 YEARS</option>						
							<option value="5-8" <?php if($res['experience'] == "5-8"){ echo "selected"; } ?>>5-8 YEARS</option>						
							<option value="8-10" <?php if($res['experience'] == "8-10"){ echo "selected"; } ?>>8-10 YEARS</option>						
							<option value="10-15" <?php if($res['experience'] == "10-15"){ echo "selected"; } ?>>10-15 YEARS</option>						
							<option value="15-19" <?php if($res['experience'] == "15-19"){ echo "selected"; } ?>>15- 19 YEARS</option>						
							<option value="20" <?php if($res['experience'] == "20"){ echo "selected"; } ?>>20 YEARS & ABOVE</option>	
					  </select>
                    </div>
										
                    <div class="form-group">
                      <textarea id="form-message" name="about" class="form-control" placeholder="Enter your personal information *" rows="4" data-error="Please,Enter your personal information."><?php if($res['about'] !=""){ echo $res['about']; } ?></textarea>
                    </div>
					<button class="btn-primary" name="submit">Update</button>
                  </form>
				  <?php 
				if(isset($_POST['submit'])){
					try{
						$token="";
						$dbh = getConnection();
						$dbh->beginTransaction();
						
						$member_id = $_SESSION['email_id']['member_id'];
						$member_name = mysql_real_escape_string($_POST['member_name']);
						$country_name = mysql_real_escape_string($_POST['country_name']);
						$city_name = mysql_real_escape_string($_POST['city_name']);
						$pincode = mysql_real_escape_string($_POST['pincode']);
						$dob = $_POST['year'].'_'.$_POST['month'].'_'.$_POST['date'];
						$field = mysql_real_escape_string($_POST['field']);
						$sub_field = mysql_real_escape_string($_POST['sub_field']);
						$experience = mysql_real_escape_string($_POST['experience']);
						$about = mysql_real_escape_string($_POST['about']);
						
								
						echo $sql="UPDATE member SET member_name='$member_name',country_name='$country_name',city_name='$city_name',pincode='$pincode',dob='$dob',field='$field',sub_field='$sub_field',experience='$experience',about='$about' WHERE member_id=$member_id";
						$dbh->exec($sql);
						
						$token="success";	
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
					header('Location: update-profile.php');
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
