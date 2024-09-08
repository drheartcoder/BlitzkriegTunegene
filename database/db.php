<?php 
session_start();
ob_start();

function getConnection(){
		$dbh=new PDO('mysql:host=localhost;dbname=blitz_tunegene','blitz_tuneuser','blitz@123');
		$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		return $dbh;
	}

@mysql_connect('localhost','blitz_tuneuser','blitz@123');
@mysql_select_db('blitz_tunegene');
	
$con = mysqli_connect("localhost","blitz_tuneuser","blitz@123","blitz_tunegene");

class DBController {
	private $host = "localhost";
	private $user = "blitz_tuneuser";
	private $password = "blitz@123";
	private $database = "blitz_tunegene";
	
	function __construct() {
		$conn = $this->connectDB();
		if(!empty($conn)) {
			$this->selectDB($conn);
		}
	}
	
	function connectDB() {
		$conn = @mysql_connect($this->host,$this->user,$this->password);
		return $conn;
	}
	
	function selectDB($conn) {
		@mysql_select_db($this->database,$conn);
	}
	
	function runQuery($query) {
		$result = @mysql_query($query);
		while($row= @mysql_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
	}
	
	function numRows($query) {
		$result  = @mysql_query($query);
		$rowcount = @mysql_num_rows($result);
		return $rowcount;	
	}
}


function getTokenMessage($token){
	$message="";
	if(strnatcasecmp($token,"success")==0){
		$message="<div class='validateTips' style='background:#4EF572; margin-left:15px; color:black;text-align:center;'  >Message: Record Saved Successfully!</div>";
	}else if(strnatcasecmp($token,"postsuccess")==0){
		$message="<div class='validateTips' style='background:#4EF572; margin-left:15px; color:black;text-align:center;'>Message: Post Successfully!</div>";
	}else if(strnatcasecmp($token,"filesize")==0){
		$message="<div class='validateTips' style='background:red; margin-left:15px; color:black;text-align:center;'>Message: File size must be excately 5 MB!</div>";
	}else if(strnatcasecmp($token,"signup")==0){
		$message="<div class='validateTips' style='background:#F56F4E; margin-left:15px;'>Message: Signup Successfully!</div>";
	}else if(strnatcasecmp($token,"wrongpassword")==0){
		$message="<div class='validateTips' style='background:#F56F4E; margin-left:15px;'>Message: Incorrect Password!</div>";
	}else if(strnatcasecmp($token,"fail")==0){
		$message="<div class='validateTips' style='background:#F56F4E; margin-left:15px;'>Message: Record Could Not Be Saved!</div>";
	}else if(strnatcasecmp($token,"exists")==0){
		$message="<div class='validateTips' style='background:#4E9CF5; margin-left:15px;'>Message: Record Already Exists!</div>";
	}else if(strnatcasecmp($token,"EDIT_OK")==0){
		$message="<div class='validateTips' style='background:#4EF572; margin-left:15px;' >Message: Record Edited Successfully!</div>";
	}else if(strnatcasecmp($token,"EDIT_FAIL")==0){
		$message="<div class='validateTips' style='background:#F56F4E; margin-left:15px;'>Message: Record Could Not Be Edited!</div>";
	}else if(strnatcasecmp($token,"DELETE_OK")==0){
		$message="<div class='validateTips' style='background:#4EF572; margin-left:15px;' >Message: Record Deleted Successfully!</div>";
	}else if(strnatcasecmp($token,"DELETE_FAIL")==0){
		$message="<div class='validateTips' style='background:#F56F4E; margin-left:15px;'>Message: Record Could Not Be Deleted!</div>";
	}else if(strnatcasecmp($token,"EMPTY")==0){
		$message="<div class='validateTips' style='background:#FC21F4; margin-left:15px;'>Message: Please Enter Required Fields!</div>";
	}	
	return $message;
}
	
	
?>