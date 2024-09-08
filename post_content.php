<?php 
				$dbh = getConnection();
				
				$member_id = $_SESSION['email_id']['member_id'];
				
				 $in_member = userFriend($member_id);
				
				$sql="SELECT * from post where member_id IN (".$in_member.") ORDER BY post_id desc";
				$sth = $dbh->query($sql);
				$i=0;
				while($row=$sth->fetch(PDO::FETCH_ASSOC)){
				
			?>
            <!-- Post Content
            ================================================= -->
            <div class="post-content" id="<?php echo "contentdiv".$i; ?>">
			<?php if(!empty($row['post_images'])){ ?>	
				<img src="<?php echo $row['post_images']; ?>" alt="post-image" class="img-responsive post-image" />
			<?php } ?>	
			<?php 
				if(!empty($row['post_media'])){ 
				// $file_ext=strtolower(end(explode('.',$row['post_media'])));	
				
				$array = explode('.', $row['post_media']);
				$file_ext = end( $array); 
			?>
				<?php if($file_ext == "mp3" || $file_ext == "Ogg" || $file_ext == "wav"){?>
				<audio controls><source src="<?php echo $row['post_media']; ?>" type="audio/<?php echo $file_ext; ?>">
					Your browser does not support the audio element.
				</audio>
				<?php }else{?>
				<video class="post-video" controls> <source src="<?php echo $row['post_media']; ?>" type="video/<?php echo $file_ext; ?>"> </video>
				<?php } }?>		
              <div class="post-container">
                <img src="<?php if(user_member_id("profile_image",$row['member_id']) !=""){ echo user_member_id("profile_image",$row['member_id']); }else{ echo "http://placehold.it/300x300"; } ?>" alt="user" class="profile-photo-md pull-left" />
                <div class="post-detail">
                  <div class="user-info">
                    <h5><a href="<?php if(($row['member_id']) == ($_SESSION['email_id']['member_id'])){ echo "timeline.php"; }else{ ?> timeline-members.php?member_id=<?php echo $row['member_id']; ?> <?php } ?>" class="profile-link"><?php echo user_member_id("member_name",$row['member_id']); ?></a> <span class="following">following</span></h5>
                    <p class="text-muted">
				<?php 
					$t1 = $row['entry_date'];
					$t2 = date('Y-m-d h:i:s');
					if((calculatetime($t1,$t2)) < 20){
						echo calculatetime($t1,$t2) . " hours ago.";	
					}else{
						
						$dates = strtotime($t1);
						echo date('d', $dates).' '.date('M', $dates).' '.date('Y', $dates);
					} 
				?>
					</p>
                  </div>
                  <div class="reaction" id="<?php echo "like".$i; ?>">
					<input type="hidden" name="member_id" id="<?php echo "member_id".$i; ?>" value="<?php echo $_SESSION['email_id']['member_id']; ?>" />
					<input type="hidden" name="post_id" id="<?php echo "post_id".$i; ?>" value="<?php echo $post_id = $row['post_id']; ?>" />
                    <a id="<?php echo "likebutton".$i; ?>" class="btn text-green" onclick="populateLike('<?php echo "member_id".$i; ?>','<?php echo "post_id".$i; ?>','<?php echo $i; ?>')"><i class="icon ion-thumbsup"></i> <?php echo like($post_id); ?></a>
                    <a id="<?php echo "dislikebutton".$i; ?>" class="btn text-red" onclick="populatedisLike('<?php echo "member_id".$i; ?>','<?php echo "post_id".$i; ?>')"><i class="fa fa-thumbs-down"></i> <?php echo dislike($post_id); ?></a>
                  </div>
                  <div class="line-divider"></div>
                  <div class="post-text">
                    <p><i class="em em-thumbsup"></i> <i class="em em-thumbsup"></i> <?php echo $row['post_content']; ?></p>
                  </div>
                  <div class="line-divider"></div>
				<?php 
					$post_id = $row['post_id'];
					$sql = mysql_query("SELECT * FROM post_comment WHERE post_id=$post_id");
					while($res = mysql_fetch_array($sql)){
				?>
				   <div class="post-comment">
                    <img src="<?php if(user_member_id("profile_image",$res['member_id']) !=""){ echo user_member_id("profile_image",$res['member_id']); }else{ echo "http://placehold.it/300x300"; } ?>" alt="" class="profile-photo-sm" />
                    <p><a href="<?php if(($res['member_id']) == ($_SESSION['email_id']['member_id'])){ echo "timeline.php"; }else{ ?> timeline-members.php?member_id=<?php echo $res['member_id']; ?> <?php } ?>" class="profile-link"><?php $member_ids = $res['member_id']; echo userName($member_ids); ?> </a> <?php echo $res['comment']; ?> </p>
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
			
			<?php 
					$i++;
				}
			?>