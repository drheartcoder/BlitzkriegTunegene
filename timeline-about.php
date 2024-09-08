<?php 
	include('header_timeline.php');
?>
<link href="jquery.multiselect.css" rel="stylesheet" type="text/css">
        <div id="page-contents">
          <div class="row">
            <div class="col-md-3"></div>
            			
			<div class="col-md-7">
              <h4 class="grey">General Account Settings</h4>
            <?php 
				$member_id = $_SESSION['email_id']['member_id'];
				$sql = mysqli_query($con,"SELECT * FROM member WHERE member_id=$member_id");
				$res = mysqli_fetch_array($sql);
			?>
              <!-- Nav tabs category -->
              <div class="panel-group" id="accordion-cat-1">
                
                <div class="panel panel-default panel-faq">
                  <div class="panel-heading"> <a data-toggle="collapse" data-parent="#accordion-cat-1" href="#faq-cat-1-sub-1">
                    <h4 class="panel-title"> <strong class="settings-panel">Name</strong> <strong class="settings-panel-name"><?php echo $res['member_name']; ?></strong> <span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span> </h4>
                    </a> </div>
                  <div id="faq-cat-1-sub-1" class="panel-collapse collapse">
                    <div class="panel-body"> 
					<form method="post">
					<input id="contact-name" type="text" name="member_name" placeholder="Enter your name *" required="required" data-error="Name is required." value="<?php if($res['member_name'] !=""){ echo $res['member_name']; } ?>">
					<input type="submit" name="name" value="update">
					</form>
				<?php 
					if(isset($_POST['name'])){
					try{
						$token="";
						$dbh = getConnection();
						$dbh->beginTransaction();
						
						$member_id = $_SESSION['email_id']['member_id'];
						$member_name = mysql_real_escape_string($_POST['member_name']);
														
						$sql="UPDATE member SET member_name='$member_name' WHERE member_id=$member_id";
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
					header('Location: timeline-about.php');
					}
				?>
					</div>
                  </div>
                </div>
                <div class="panel panel-default panel-faq">
                  <div class="panel-heading"> <a data-toggle="collapse" data-parent="#accordion-cat-1" href="#faq-cat-1-sub-2">
                    <h4 class="panel-title"><strong class="settings-panel">Work Experiences</strong> <strong class="settings-panel-name"><?php echo $res['experience']; ?> Year</strong> <span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span> </h4>
                    </a> </div>
                  <div id="faq-cat-1-sub-2" class="panel-collapse collapse">
                    <div class="panel-body">
					<form method="post">
						<select name="experience">
							<option value="">Select</option>						
							<option value="1-3" <?php if($res['experience'] == "1-3"){ echo "selected"; } ?>>1-3 YEARS</option>						
							<option value="3-5" <?php if($res['experience'] == "3-5"){ echo "selected"; } ?>>3-5 YEARS</option>						
							<option value="5-8" <?php if($res['experience'] == "5-8"){ echo "selected"; } ?>>5-8 YEARS</option>						
							<option value="8-10" <?php if($res['experience'] == "8-10"){ echo "selected"; } ?>>8-10 YEARS</option>						
							<option value="10-15" <?php if($res['experience'] == "10-15"){ echo "selected"; } ?>>10-15 YEARS</option>						
							<option value="15-19" <?php if($res['experience'] == "15-19"){ echo "selected"; } ?>>15- 19 YEARS</option>						
							<option value="20" <?php if($res['experience'] == "20"){ echo "selected"; } ?>>20 YEARS & ABOVE</option>	
						</select>
					
						<input type="submit" name="working" value="update">
					</form>
					<?php 
					if(isset($_POST['working'])){
					try{
						$token="";
						$dbh = getConnection();
						$dbh->beginTransaction();
						
						$member_id = $_SESSION['email_id']['member_id'];
						$experience = mysql_real_escape_string($_POST['experience']);
														
						$sql="UPDATE member SET experience='$experience' WHERE member_id=$member_id";
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
					header('Location: timeline-about.php');
					}
				?>
					</div>
                  </div>
                </div>
                <div class="panel panel-default panel-faq">
                  <div class="panel-heading"> <a data-toggle="collapse" data-parent="#accordion-cat-1" href="#faq-cat-1-sub-3">
                    <h4 class="panel-title"><strong class="settings-panel">Field</strong> <strong class="settings-panel-name"><?php echo $res['field']; ?></strong> <span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span> </h4>
                    </a> </div>
                  <div id="faq-cat-1-sub-3" class="panel-collapse collapse">
                    <div class="panel-body">
					<form method="post">	
						<select name="field">
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
					  <input type="submit" name="fieldsubmit" value="update">
					</form>
					<?php 
					if(isset($_POST['fieldsubmit'])){
					try{
						$token="";
						$dbh = getConnection();
						$dbh->beginTransaction();
						
						$member_id = $_SESSION['email_id']['member_id'];
						$field = mysql_real_escape_string($_POST['field']);
														
						$sql="UPDATE member SET field='$field' WHERE member_id=$member_id";
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
					header('Location: timeline-about.php');
					}
				?>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default panel-faq">
                  <div class="panel-heading"> <a data-toggle="collapse" data-parent="#accordion-cat-1" href="#faq-cat-1-sub-4">
                    <h4 class="panel-title"><strong class="settings-panel">Sub Field</strong> <strong class="settings-panel-name"> <?php echo $res['sub_field']; ?></strong> <span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span> </h4>
                    </a> </div>
                  <div id="faq-cat-1-sub-4" class="panel-collapse collapse">
                    <div class="panel-body"> 
					<form method="post">
						<input id="contact-name" type="text" name="sub_field" placeholder="Enter your Sub Field *" required="required" data-error="Name is required." value="<?php if($res['sub_field'] !=""){ echo $res['sub_field']; } ?>">
						<input type="submit" name="subfieldsubmit" value="update">
					</form>	
				<?php 
					if(isset($_POST['subfieldsubmit'])){
					try{
						$token="";
						$dbh = getConnection();
						$dbh->beginTransaction();
						
						$member_id = $_SESSION['email_id']['member_id'];
						$sub_field = mysql_real_escape_string($_POST['sub_field']);
														
						$sql="UPDATE member SET sub_field='$sub_field' WHERE member_id=$member_id";
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
					header('Location: timeline-about.php');
					}
				?>
					</div>
                  </div>
                </div>
				 <div class="panel panel-default panel-faq">
                  <div class="panel-heading"> <a data-toggle="collapse" data-parent="#accordion-cat-1" href="#faq-cat-1-sub-5">
                    <h4 class="panel-title"><strong class="settings-panel">Genres </strong> 
					<strong class="settings-panel-name">..</strong> 
					<span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span> </h4>
                    </a> </div>
                  <div id="faq-cat-1-sub-5" class="panel-collapse collapse">
                    <div class="panel-body"> 
					<style>
						ul,li { margin:0; padding:0; list-style:none;}
						.label { color:#000; font-size:16px;}
					</style>
					<form method="post">
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
					</form>			
                    </div>
                  </div>
                </div>
                <div class="panel panel-default panel-faq">
                  <div class="panel-heading"> <a data-toggle="collapse" data-parent="#accordion-cat-1" href="#faq-cat-1-sub-6">
                    <h4 class="panel-title"><strong class="settings-panel">Location</strong> <strong class="settings-panel-name"><?php echo $res['country_name']; ?>, <?php echo $res['city_name']; ?>, <?php echo $res['pincode']; ?></strong> <span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span> </h4>
                    </a> </div>
                  <div id="faq-cat-1-sub-6" class="panel-collapse collapse">
                    <div class="panel-body"> 
					<form method="post">
					   <select name="country_name">
							<option value="">Country Name</option>						
							<option value="india" <?php if($res['country_name'] == "india"){ echo "selected"; } ?>>India</option>				
							<option value="other" <?php if($res['country_name'] == "other"){ echo "selected"; } ?>>Other</option>						
					  </select>
					   <select name="city_name">
							<option value="">City Name</option>						
							<option value="banglore" <?php if($res['city_name'] == "banglore"){ echo "selected"; } ?>>Banglore</option>						
							<option value="other" <?php if($res['city_name'] == "other"){ echo "selected"; } ?>>Other</option>						
					  </select>
					  Zip-Code : <input id="contact-name" type="text" name="pincode" placeholder="Enter your Zip-Code *" required="required" data-error="Name is required." value="<?php if($res['pincode'] !=""){ echo $res['pincode']; } ?>">
					  <input type="submit" name="locationsubmit" value="update">
					</form>
					<?php 
					if(isset($_POST['locationsubmit'])){
					try{
						$token="";
						$dbh = getConnection();
						$dbh->beginTransaction();
						
						$member_id = $_SESSION['email_id']['member_id'];
						$country_name = mysql_real_escape_string($_POST['country_name']);
						$city_name = mysql_real_escape_string($_POST['city_name']);
						$pincode = mysql_real_escape_string($_POST['pincode']);
														
						$sql="UPDATE member SET country_name='$country_name',city_name='$city_name',pincode='$pincode' WHERE member_id=$member_id";
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
					header('Location: timeline-about.php');
					}
				?>
					</div>
                  </div>
                </div>
                <div class="panel panel-default panel-faq">
                  <div class="panel-heading"> <a data-toggle="collapse" data-parent="#accordion-cat-1" href="#faq-cat-1-sub-7">
                    <h4 class="panel-title"><strong class="settings-panel">D.O.B</strong> <strong class="settings-panel-name"><?php echo $res['dob']; ?></strong> <span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span> </h4>
                    </a> </div>
                  <div id="faq-cat-1-sub-7" class="panel-collapse collapse">
                    <div class="panel-body">
					<form method="post">
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
						<input type="submit" name="dobsubmit" value="update">
					</form>	
					<?php 
					if(isset($_POST['dobsubmit'])){
					try{
						$token="";
						$dbh = getConnection();
						$dbh->beginTransaction();
						
						$member_id = $_SESSION['email_id']['member_id'];
						$dob = $_POST['year'].'_'.$_POST['month'].'_'.$_POST['date'];
														
						$sql="UPDATE member SET dob='$dob' WHERE member_id=$member_id";
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
					header('Location: timeline-about.php');
					}
				?>
					</div>
                  </div>
                </div>
                <div class="panel panel-default panel-faq" style="border-bottom:1px solid #000 !important;">
                  <div class="panel-heading"> <a data-toggle="collapse" data-parent="#accordion-cat-1" href="#faq-cat-1-sub-8">
                    <h4 class="panel-title"><strong class="settings-panel">Personal Information</strong>
					<strong class="settings-panel-name">
					<?php 
					
					function limit_words($string, $word_limit)
						{
						$words = explode(" ",$string);
						return implode(" ",array_splice($words,0,$word_limit));
						}
 
 
						$content = $res['about'];
 
						echo limit_words($content,6);
					?>
					</strong> 
					<span class="pull-right"><i class="glyphicon glyphicon-plus"></i></span> </h4>
                    </a> </div>
                  <div id="faq-cat-1-sub-8" class="panel-collapse collapse">
                    <div class="panel-body"> 
					<form method="post">
						<textarea id="form-message" name="about" placeholder="Enter your personal information *" rows="4" data-error="Please,Enter your personal information."><?php if($res['about'] !=""){ echo $res['about']; } ?></textarea>
						<input type="submit" name="aboutsubmit" value="update">
					</form>
				<?php 
					if(isset($_POST['aboutsubmit'])){
					try{
						$token="";
						$dbh = getConnection();
						$dbh->beginTransaction();
						
						$member_id = $_SESSION['email_id']['member_id'];
						$about = mysql_real_escape_string($_POST['about']);
														
						$sql="UPDATE member SET about='$about' WHERE member_id=$member_id";
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
					header('Location: timeline-about.php');
					}
				?>					
					</div>
                  </div>
                </div>
                
              </div>
              <!--End Nav tabs category --> 
              
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
    <script type="text/javascript">
$(document).ready(function() {
    $('.collapse').on('show.bs.collapse', function() {
        var id = $(this).attr('id');
        $('a[href="#' + id + '"]').closest('.panel-heading').addClass('active-faq');
        $('a[href="#' + id + '"] .panel-title span').html('<i class="glyphicon glyphicon-minus"></i>');
    });
    $('.collapse').on('hide.bs.collapse', function() {
        var id = $(this).attr('id');
        $('a[href="#' + id + '"]').closest('.panel-heading').removeClass('active-faq');
        $('a[href="#' + id + '"] .panel-title span').html('<i class="glyphicon glyphicon-plus"></i>');
    });
});
</script>
  </body>
</html>
