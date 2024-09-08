<div class="tab-content scrollbar-wrapper wrapper scrollbar-outer" id="form-content">
				<?php 
					$member_id = $_SESSION['email_id']['member_id'];
					$sql = mysql_query("SELECT * FROM member_friend mf,member m WHERE mf.member_id=m.member_id AND mf.friend_id=$member_id AND mf.friend_status=1 AND mf.account_status=0");
					$i=1;
					while($res = mysql_fetch_array($sql)){
				?>   
                    <div class="tab-pane  <?php if($i==1){ echo 'active';} ?>" id="contact-<?php echo $i; ?>">
                      <div class="chat-body">
                      	<ul class="chat-message">
						
						
						<?php 
							
							$member_id = $_SESSION['email_id']['member_id'];
							$friend_id = $res['member_id'];
							$sql_mesg = mysql_query("SELECT * FROM chitter WHERE (member_id=$member_id AND friend_id=$friend_id) OR (member_id=$friend_id AND friend_id=$member_id) ORDER BY chitter_id DESC");
							while($res_mesg = mysql_fetch_array($sql_mesg)){
							
							$crunt_member_id = $res['member_id']; 	
							$msg_member_id = $res_mesg['member_id'];
							if($msg_member_id == $crunt_member_id){
							$msg_member = $res_mesg['member_id'];
							$sql_member_message = mysql_query("SELECT * FROM member WHERE member_id=$msg_member");
							$res_member_message = mysql_fetch_array($sql_member_message);	
						?>
						
						
                      	<li class="left">
                      			<img src="<?php if(user("profile_image",$res_member_message['email_id']) !=""){ echo user("profile_image",$res_member_message['email_id']); }else{ echo "http://placehold.it/300x300"; } ?>" alt="" class="profile-photo-sm pull-left" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5><?php echo $res_member_message['member_name']; ?></h5>
                              	<small class="text-muted">3 days ago</small>
                              </div>
                              <p><?php echo $res_mesg['message']; ?></p>
                            </div>
                      	</li>
						
						<?php 
							}else{
							$msg_member = $res_mesg['member_id'];
							$sql_member_message = mysql_query("SELECT * FROM member WHERE member_id=$msg_member");
							$res_member_message = mysql_fetch_array($sql_member_message);	
						?>
						 <li class="right">
                      			<img src="<?php if(user("profile_image",$res_member_message['email_id']) !=""){ echo user("profile_image",$res_member_message['email_id']); }else{ echo "http://placehold.it/300x300"; } ?>" alt="" class="profile-photo-sm pull-right" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5><?php echo $res_member_message['member_name']; ?></h5>
                              	<small class="text-muted">3 days ago</small>
                              </div>
                              <p><?php echo $res_mesg['message']; ?></p>
                            </div>
                      	</li>
						<?php 
							}
							}
						?>
                       
                      	</ul>
                      </div>
                    </div>
				<?php 
				$i++;
					}
				?>	
                
                </div>