	<div class="col-md-2 static">
            <div class="suggestions" id="sticky-sidebar">
              <h4 class="grey">Who to Follow</h4>
			  
			<?php 
				$member_id = $_SESSION['email_id']['member_id'];
				$sql = mysql_query("SELECT * FROM member WHERE member_id!=$member_id");
				$i = 0;
				while($res = mysql_fetch_array($sql)){
					$mId = $res['member_id'];
					$sqls = mysql_query("SELECT count(*) cnt FROM member_friend WHERE member_id=$mId And friend_id=$member_id");
					$rows = mysql_fetch_array($sqls);
					
					if($rows['cnt']==0){
						//echo $mId;
					
			?>
			  <div class="follow-user">
                <img src="<?php if(user_member_id("profile_image",$res['member_id']) !=""){ echo user_member_id("profile_image",$res['member_id']); }else{ echo "http://placehold.it/300x300"; } ?>" alt="" class="profile-photo-sm pull-left" />
                <div>
                  <h5><a href="timeline-members.php?member_id=<?php echo $res['member_id']; ?>"><?php echo $res['member_name']; ?></a></h5>
				  
				  <input type="hidden" name="member_id" id="<?php echo "memberid".$i; ?>" value="<?php echo $_SESSION['email_id']['member_id']; ?>" />
				  <input type="hidden" name="friend_id" id="<?php echo "friendid".$i; ?>" value="<?php echo $friend_id = $res['member_id']; ?>" />
					
                  <a href="#" class="text-green"  onclick="populateAddFriend('<?php echo "memberid".$i; ?>','<?php echo "friendid".$i; ?>')">Add friend</a>
                </div>
              </div>
			<?php 
					}
				$i++;
			}
			?>  
            
            </div>
          </div>