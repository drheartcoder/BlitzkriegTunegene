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

            <!-- Media
            ================================================= -->
            <div class="media">
            	<div class="row js-masonry" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": ".grid-sizer", "percentPosition": true }'>
                <div class="grid-sizer col-md-6 col-sm-6"></div>
			<?php 
				$dbh = getConnection();
				
				$member_id = $_SESSION['email_id']['member_id'];
				
				 $in_member = userFriend($member_id);
				
				$sql="SELECT * from post where post_media !='' AND member_id IN (".$in_member.")  ORDER BY post_id desc";
				$sth = $dbh->query($sql);
				$i=0;
				while($row=$sth->fetch(PDO::FETCH_ASSOC)){
				
			?>	
                <div class="grid-item col-md-6 col-sm-6">
            			<div class="media-grid">
                    <div class="img-wrapper" data-toggle="modal" data-target=".modal-<?php echo $i; ?>">
					 
					
					
					<?php 
						$array = explode('.', $row['post_media']);
						$file_ext = end( $array);
					?>
					<?php 
						if($file_ext == "mp3" || $file_ext == "Ogg" || $file_ext == "wav"){
					?>
						<audio controls> <source src="<?php echo $row['post_media']; ?>" type="audio/<?php echo $file_ext; ?>"> </audio>
					<?php 
						}else{
					?>
						<video controls> <source src="<?php echo $row['post_media']; ?>" type="video/<?php echo $file_ext; ?>"> </video>
					<?php 
						} 
					?>	
					
                    </div>
                    <div class="media-info">
						<div class="reaction">
							<input type="hidden" name="member_id" id="<?php echo "member_id".$i; ?>" value="<?php echo $_SESSION['email_id']['member_id']; ?>" />
							<input type="hidden" name="post_id" id="<?php echo "post_id".$i; ?>" value="<?php echo $post_id = $row['post_id']; ?>" />
							<a id="<?php echo "likebutton".$i; ?>" class="btn text-green" onclick="populateLike('<?php echo "member_id".$i; ?>','<?php echo "post_id".$i; ?>')"><i class="icon ion-thumbsup"></i> <?php echo like($post_id); ?></a>
							<a id="<?php echo "dislikebutton".$i; ?>" class="btn text-red" onclick="populatedisLike('<?php echo "member_id".$i; ?>','<?php echo "post_id".$i; ?>')"><i class="fa fa-thumbs-down"></i> <?php echo dislike($post_id); ?></a>
						</div>
                      <div class="user-info">
                        <img src="<?php if(user_member_id("profile_image",$row['member_id']) !=""){ echo user_member_id("profile_image",$row['member_id']); }else{ echo "http://placehold.it/300x300"; } ?>" alt="" class="profile-photo-sm pull-left" />
                        <div class="user">
                          <h6><a href="<?php if(($row['member_id']) == ($_SESSION['email_id']['member_id'])){ echo "timeline.php"; }else{ ?> timeline-members.php?member_id=<?php echo $row['member_id']; ?> <?php } ?>" class="profile-link"><?php echo user_member_id("member_name",$row['member_id']); ?></a></h6>
                        </div>
                      </div>
                    </div>

                    <!--Popup-->
                    <div class="modal fade modal-<?php echo $i; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="post-content">
                    <?php 	
						$array = explode('.', $row['post_media']);
						$file_ext = end( $array);
					?>
					<?php 
						if($file_ext == "mp3" || $file_ext == "Ogg" || $file_ext == "wav"){
					?>
						<audio controls> <source src="<?php echo $row['post_media']; ?>" type="audio/<?php echo $file_ext; ?>"> </audio>
					<?php 
						}else{
					?>
						<video controls> <source src="<?php echo $row['post_media']; ?>" type="video/<?php echo $file_ext; ?>"> </video>
					<?php 
						} 
					?>
                            <div class="post-container">
                              <img src="<?php if(user_member_id("profile_image",$row['member_id']) !=""){ echo user_member_id("profile_image",$row['member_id']); }else{ echo "http://placehold.it/300x300"; } ?>" alt="user" class="profile-photo-md pull-left" />
                              <div class="post-detail">
                                <div class="user-info">
                                  <h5><a href="timeline.html" class="profile-link"><?php echo user_member_id("member_name",$row['member_id']); ?></a> <span class="following">following</span></h5>
                                  <p class="text-muted">Published a photo about 3 mins ago</p>
                                </div>
                                <div class="reaction">
									<input type="hidden" name="member_id" id="<?php echo "member_id".$i; ?>" value="<?php echo $_SESSION['email_id']['member_id']; ?>" />
									<input type="hidden" name="post_id" id="<?php echo "post_id".$i; ?>" value="<?php echo $post_id = $row['post_id']; ?>" />
									<a id="<?php echo "likebutton".$i; ?>" class="btn text-green" onclick="populateLike('<?php echo "member_id".$i; ?>','<?php echo "post_id".$i; ?>')"><i class="icon ion-thumbsup"></i> <?php echo like($post_id); ?></a>
									<a id="<?php echo "dislikebutton".$i; ?>" class="btn text-red" onclick="populatedisLike('<?php echo "member_id".$i; ?>','<?php echo "post_id".$i; ?>')"><i class="fa fa-thumbs-down"></i> <?php echo dislike($post_id); ?></a>
								</div>
                                <div class="line-divider"></div>
                                <div class="post-text">
                                  <p><?php echo $row['post_content']; ?> <i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i></p>
                                </div>
                                <div class="line-divider"></div>
                                <?php 
									$post_id = $row['post_id'];
									$sql = mysql_query("SELECT * FROM post_comment WHERE post_id=$post_id");
									while($res = mysql_fetch_array($sql)){
								?>
								<div class="post-comment">
									<img src="<?php if(user_member_id("profile_image",$res['member_id']) !=""){ echo user_member_id("profile_image",$res['member_id']); }else{ echo "http://placehold.it/300x300"; } ?>" alt="" class="profile-photo-sm" />
									<p><a href="timeline.php" class="profile-link"><?php $member_ids = $res['member_id']; echo userName($member_ids); ?> </a> <?php echo $res['comment']; ?> </p>
								</div>
								<?php 
									}
								?>
                                <div class="post-comment">
									<img src="<?php if(user("profile_image",$_SESSION['email_id']['email_id']) !=""){ echo user("profile_image",$_SESSION['email_id']['email_id']); }else{ echo "http://placehold.it/300x300"; } ?>" alt="" class="profile-photo-sm" />
									<input type="text" class="form-control" placeholder="Post a comment" onkeypress="javascript:doit_onkeypress(event,this.value,'<?php echo "member_id".$i; ?>','<?php echo "post_id".$i; ?>');" required>
								</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div><!--Popup End-->

                  </div>
            		</div>
				<?php
					$i++;
					}
				?>	
				
            	</div>
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
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery.sticky-kit.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
