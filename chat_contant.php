<div class="col-md-5">
				<script>
					function memberId(mamber){
						var mId = mamber;
						//alert("Hiii");
						//alert(mId);
						document.getElementById('current_member').value=mId;
					}
				</script>

                  <!-- Contact List in Left-->
                  <ul class="nav nav-tabs contact-list scrollbar-wrapper scrollbar-outer">
				<?php 
					$member_id = $_SESSION['email_id']['member_id'];
					$sql = mysql_query("SELECT * FROM member_friend mf,member m WHERE mf.member_id=m.member_id AND mf.friend_id=$member_id AND mf.friend_status=1 AND mf.account_status=0");
					$i=1;
					while($res = mysql_fetch_array($sql)){
				?>  <input type="hidden" id="<?php echo "member_id".$i; ?>" value="<?php echo $res['member_id']; ?>">
                    <li <?php if($i==1){ echo 'class="active"';} ?>onclick="memberId(<?php echo $res['member_id']; ?>)">
                      <a href="#contact-<?php echo $i; ?>" data-toggle="tab">
                        <div class="contact">
                        	<img src="<?php if(user("profile_image",$res['email_id']) !=""){ echo user("profile_image",$res['email_id']); }else{ echo "http://placehold.it/300x300"; } ?>" alt="" class="profile-photo-sm pull-left"/>
                        	<div class="msg-preview">
                        		<h6><?php echo $res['member_name']; ?></h6>
                        		<p class="text-muted" id="form-content1">
									<?php 
										$member_id = $_SESSION['email_id']['member_id'];
										$friend_id = $res['member_id'];
										$sql_mesg = mysql_query("SELECT * FROM chitter WHERE (member_id=$member_id AND friend_id=$friend_id) OR (member_id=$friend_id AND friend_id=$member_id)  ORDER BY chitter_id DESC LIMIT 1");
										$res_mesg = mysql_fetch_array($sql_mesg);
										echo $res_mesg['message'];
									?>
								</p>
                            <small class="text-muted">a min ago</small>
                            <div class="chat-alert">1</div>
                        	</div>
                        </div>
                      </a>
                    </li>
				<?php 
				$i++;
					}
				?>	
                    
                  </ul><!--Contact List in Left End-->

                </div>
                <div class="col-md-7">

                  <!--Chat Messages in Right-->

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
				  
				  <!--Chat Messages in Right End-->
				<form method="post" id="reg-form" autocomplete="off">
                  <div class="send-message">
                    <div class="input-group">
					<?php 
						$member_id = $_SESSION['email_id']['member_id'];
						$sql_default_member = mysql_query("SELECT * FROM member_friend mf,member m WHERE mf.member_id=m.member_id AND mf.friend_id=$member_id AND mf.friend_status=1 AND mf.account_status=0 LIMIT 1");
						$res_default_member = mysql_fetch_array($sql_default_member);
					?>
                      <input type="hidden" class="form-control" name="current_member" id="current_member" value="<?php echo $res_default_member['member_id']; ?>">
                      <input type="text" class="form-control" name="message" placeholder="Type your message" id="messagebox">
                      <span class="input-group-btn">
                        <button class="btn btn-default" name="submit" type="submit">Send</button>
                      </span>
					
					
                    </div>
					
                  </div>
				  </form>
				  
			  
				 
				  
                </div>
                <div class="clearfix"></div>