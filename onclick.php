<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $('#like').click(function(){
        var clickBtnValue = $('#like').attr('class');
		alert($('#like').attr('class'));
		
        var mamber_id = $("#member_id").val();
        var post_id = $("#post_id").val();
		
        var ajaxurl = 'like_ajax.php',
        data =  {'action': clickBtnValue,'member_id': mamber_id,'post_id': post_id};
        $.post(ajaxurl, data, function (response) {
            // Response div goes here.
            alert("action performed successfully");
        });
    });

});
</script>
<form  method="POST" >
  
	<input type="hidden" name="member_id" id="member_id" value="1" />
	<input type="hidden" name="post_id" id="post_id" value="1" />
	<a href="#" id="like" class="btn text-green" value="insert">a</a>
	<input type="submit" class="button" name="insert" value="insert" />
	<input type="submit" class="button" name="select" value="select" />
  
</form>

<?php 
if(isset($_GET['call'])){

    function anyfunction(){
    echo "added";

     // your funtion code

}
}
?>