<?php
	
	session_start();
	$hideModal = "";

	if(isset($_SESSION['collegename'])){
		$hideModal = 1;
		header("location: eventscont.php");
		die();
	}

	//Function to filter inputs
	function filter_any_data($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$conn = mysqli_connect("localhost","wasiq","root123","college_db_one");
	if(!$conn){
		die("connection to db failed.");
	}

	if(isset($_POST['clid']) && isset($_POST['collegepassword'])){
		$collegecode = filter_any_data($_POST['collegepassword']);
		$clid = filter_any_data($_POST['clid']);
		//$conn = mysqli_connect("localhost","wasiq","root123","college_db");
		//if(!$conn){
		//	die("connection to db failed.");
		//}
		$sql = mysqli_query($conn,"SELECT * FROM collegecode WHERE password = '$collegecode' AND clid='$clid'") or die(mysqli_error($conn)." 6");		//6
		if(mysqli_num_rows($sql)==0){
			die("No College Found");
		}
		else{
			$sql = mysqli_query($conn,"SELECT cname FROM collegecode WHERE password= '$collegecode' AND clid='$clid'") or die(mysqli_error($conn));
			$temp = mysqli_fetch_row($sql);
			$college = $temp[0];
			$hideModal = 1;
			$_SESSION['collegecode'] = $collegecode;
			$_SESSION['collegename'] = $college;
			
			header("location: cldetails.php");
			
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<?php require('initBootstrap.php');?>
		<title>College Login</title>

		<script type="text/javascript">
			$(document).ready(function(){
				if(document.getElementById('hideModal').value!=1){
					$("#loginModal").modal("show");
				}
			});
		</script>
	</head>
	<body>
		<?php require("loginmodal.php");?>
	</body>
</html>