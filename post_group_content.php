<?php 
				$dbh = getConnection();
				
				$group_id = $_REQUEST['group_id'];
				
				$sql="SELECT * from group_post where group_id=$group_id ORDER BY group_post_id desc";
				$sth = $dbh->query($sql);
				$i=0;
				while($row=$sth->fetch(PDO::FETCH_ASSOC)){
				
			?>
            <!-- Post Content
            ================================================= -->
            <div class="post-content" id="<?php echo "contentdiv".$i; ?>">
			<?php if(!empty($row['group_images'])){ ?>	
				<img src="<?php echo $row['group_images']; ?>" alt="post-image" class="img-responsive post-image" />
			<?php } ?>	
			<?php 
				if(!empty($row['group_media'])){ 
				//$file_ext=strtolower(end(explode('.',$row['group_media'])));	
				
				$array = explode('.', $row['group_media']);
				$file_ext = end( $array); 
			?>
			<?php if($file_ext == "mp3" || $file_ext == "Ogg" || $file_ext == "wav"){?>
				<audio class="post-video" controls> <source src="<?php echo $row['group_media']; ?>" type="audio/<?php echo $file_ext; ?>"> </audio><?php }else{?>
				<video class="post-video" controls> <source src="<?php echo $row['group_media']; ?>" type="video/<?php echo $file_ext; ?>"> </video>
				<?php } }?>	
              <div class="post-container">
                <img src="<?php if(user_member_id("profile_image",$row['member_id']) !=""){ echo user_member_id("profile_image",$row['member_id']); }else{ echo "http://placehold.it/300x300"; } ?>" alt="user" class="profile-photo-md pull-left" />
                <div class="post-detail">
                  <div class="user-info">
                    <h5><a href="<?php if(($row['member_id']) == ($_SESSION['email_id']['member_id'])){ echo "timeline.php"; }else{ ?> timeline-members.php?member_id=<?php echo $row['member_id']; ?> <?php } ?>" class="profile-link"><?php echo user_member_id("member_name",$row['member_id']); ?></a> <span class="following">following</span></h5>
                    <p class="text-muted">Published a photo about 1 hour ago</p>
                  </div>
                  <div class="reaction" id="<?php echo "like".$i; ?>">
					<input type="hidden" name="member_id" id="<?php echo "member_id".$i; ?>" value="<?php echo $_SESSION['email_id']['member_id']; ?>" />
					<input type="hidden" name="group_post_id" id="<?php echo "group_post_id".$i; ?>" value="<?php echo $group_post_id = $row['group_post_id']; ?>" />
                    <a id="<?php echo "likebutton".$i; ?>" class="btn text-green" onclick="populateGroupLike('<?php echo "member_id".$i; ?>','<?php echo "group_post_id".$i; ?>','<?php echo $i; ?>')"><i class="icon ion-thumbsup"></i> <?php echo grouplike($group_post_id); ?></a>
                    <a id="<?php echo "dislikebutton".$i; ?>" class="btn text-red" onclick="populateGroupdisLike('<?php echo "member_id".$i; ?>','<?php echo "group_post_id".$i; ?>')"><i class="fa fa-thumbs-down"></i> <?php echo groupdislike($group_post_id); ?></a>
                  </div>
                  <div class="line-divider"></div>
                  <div class="post-text">
                    <p><i class="em em-thumbsup"></i> <i class="em em-thumbsup"></i> <?php echo $row['group_content']; ?></p>
                  </div>
                  <div class="line-divider"></div>
				<?php 
					$group_post_id = $row['group_post_id'];
					$sql = mysql_query("SELECT * FROM group_post_comment WHERE group_post_id=$group_post_id");
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
                    <input type="text" class="form-control" placeholder="Post a comment" onkeypress="javascript:doit_onkeypress_group(event,this.value,'<?php echo "member_id".$i; ?>','<?php echo "group_post_id".$i; ?>');" required>
                  </div>
                </div>
              </div>
            </div>
			
			<?php 
					$i++;
				}
			?>