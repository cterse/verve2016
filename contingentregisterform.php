<?php
	session_start();
	if(!isset($_SESSION['collegename'])){
		header("location: loginpage.php");
		die();
	}

	$college = $max_participants = $eventid = $eventName = $count = "";
	
	if(isset($_SESSION['collegename'])){
		//$hideModal = 1;
		$college = $_SESSION['collegename'];
	}

	$conn = mysqli_connect("localhost","wasiq","root123","college_db_one");
	if(!$conn){
		die("connection to db failed.");
	}

	//Function to filter inputs
	function filter_any_data($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	if(isset($_GET['eventid'])){
		//Get eventid from the link
		$eventid = $_GET['eventid'];
		//$conn = mysqli_connect("localhost","wasiq","root123","college_db_one");
		//if(!$conn){
		//	die("connection to db failed.");
		//}
		//Get event name from the event code
		$sql = mysqli_query($conn,"SELECT event FROM tableid WHERE id='$eventid'") or die(mysqli_error($conn)." 3");	//3
		$temp = mysqli_fetch_row($sql);
		$eventName = $temp[0];
		//echo $eventName;
		//Get type of event from eSEventcode
		//$sql = mysqli_query($conn,"SELECT type FROM tableid WHERE id='$eventid'") or die(mysqli_error($conn)."  4");	//4
		//$eventType = mysqli_fetch_row($sql);
		//if($eventType[0] == 2)
		//	$disableGoSoloButton = 1;
		//Get max praticipants
		$sql = mysqli_query($conn,"SELECT max_participants FROM tableid WHERE id='$eventid'") or die(mysqli_error($conn)." 5");		//5
		$temp = mysqli_fetch_row($sql);
		$max_participants = $temp[0];
		//echo $max_participants;
	}

	/*
	if(isset($_POST['clid']) && isset($_POST['collegepassword'])){
		$collegecode = filter_any_data($_POST['collegepassword']);
		$clid = filter_any_data($_POST['clid']);
		//$conn = mysqli_connect("localhost","wasiq","root123","college_db_one");
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
		}
	}
	*/

		if(isset($_POST['name1']) && isset($_POST['phone1']) && isset($_POST['email1'])){
			//echo "Success";
			$pos = array();
			//print_r($pos);
			//$count = count($pos);
			//echo "  ".$count."  ";
			for($x=0,$k=0;$x<$max_participants;$x++){
				//echo "x = ".$x."  ";
				//echo "Count = ".count($pos)."  ";
				if( ($_POST["name".($x+1)] != null) && ($_POST["name".($x+1)] != "") ){
					$pos[$k++] = ($x+1);
				}
			}
			$count = count($pos);
			//print_r($pos);
			//die("Count = ".$count);
			
			$inputArray = array();
			for($x=0,$k=0;$x<$count*3;$x++){
				$inputArray[$x++] = filter_any_data($_POST['name'.($pos[$k])]);
				$inputArray[$x++] = filter_any_data($_POST['phone'.($pos[$k])]);
				$inputArray[$x] = filter_any_data($_POST['email'.($pos[$k])]);
				$k++;
			}

			$tableName = $eventName."id";
			//echo $tableName;
			
			$sql = mysqli_query($conn,"INSERT INTO $tableName (members,paid,grouptype) VALUES ($count,null,'1')") or die(mysqli_error($conn)." 1");		//1
			$groupId = mysqli_insert_id($conn);
			//echo "$groupId";
			$cname = $_SESSION["collegename"];
			//if(isset($_POST["cname"]))
			//	$cname = filter_any_data($_POST["cname"]);
			for($x=0,$t=0;$x<$count;$x++){
				$k = $inputArray[$t];	$j = $inputArray[$t+1];	$l = $inputArray[$t+2];
				$sql = mysqli_query($conn,"INSERT INTO $eventName"."cont"." (groupid,fullname,phone,email,cname,id) 
					VALUES ('$groupId','$k','$j','$l','$cname',null)") or die(mysqli_error($conn)." 2");		//2
				$t = $t+3;
			}
			header("location: successfulregistration.php");
			die();
		}

?>
<!doctype html>
<html>
	<head>
		<?php require("initBootstrap.php");?>
		<title>Events Page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<?php include("initBootstrap.php");?>
		<script src="js/jquery-1.11.3.min.js"></script>
		<link rel="stylesheet" type="text/css" href="font-awesome-4.4.0/css/font-awesome.min.css">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		
		<script type="text/javascript">
			function goToEvents(){
				location.replace("eventscont.php");
			}

			function validateForm(){
    			var err = 0;
    			var participants = <?php echo $max_participants;?>;
    			var i = 0;
    			for(i=0;i<participants;i++){
    				if( (document.getElementById('name'+(i+1)).value!=null) && (document.getElementById('name'+(i+1)).value!="") )
    					break;
    				else{
    					alert("Atleast 1 participant expected. Start entering details from the top.");
    					return false;
    				}
    			}
    			for(i=0;i<participants;i++){
    				if( (document.getElementById('name'+(i+1)).value!=null) && (document.getElementById('name'+(i+1)).value!="") ){
    					if( (document.getElementById('phone'+(i+1)).value==null) || (document.getElementById('phone'+(i+1)).value=="") ){
    						document.getElementById('req_phonespan_'+(i+1)).style.display = "inline";
    						err = 1;
    					} else{
    						if( (document.getElementById('phone'+(i+1)).value.length!=10) ){
    							document.getElementById('req_phonespan_'+(i+1)).style.display = "inline";
    							err = 1;
    							alert("Enter a 10-digit phone number.");
    						}else{
    							if( (document.getElementById('phone'+(i+1)).value.search(/[^0123456789]/)) != -1){
    								document.getElementById('req_phonespan_'+(i+1)).style.display = "inline";
    								err = 1;
    								alert("Enter only digits in phone number.");
    							}else{
    								document.getElementById('req_phonespan_'+(i+1)).style.display = "none";
    							}
    						}
    					}
    					if( (document.getElementById('email'+(i+1)).value==null) || (document.getElementById('email'+(i+1)).value=="") ){
    						document.getElementById('req_emailspan_'+(i+1)).style.display = "inline";
    						err = 1;
    					} else{
    						document.getElementById('req_emailspan_'+(i+1)).style.display = "none";
    					}
    				}
    			}
    			if(document.getElementById('cname').value==null || document.getElementById('cname').value==""){
    				document.getElementById('req_span_col').style.display = "inline";
    				err = 1;
    			} else{
    				document.getElementById('req_span_col').style.display = "none";
    			}
    			if(err == 1)
    				return false;
    			else return true;
    		}

			$(window).load(function(){
				//if(document.getElementById('hideModal').value!=1)
       			//	$('#loginModal').modal('show');
       			//if(document.getElementById('disableGoSoloButton').value==1)
       			//	document.getElementById('goingSoloButton').style.display = "none";
       			if(document.getElementById('cname').value != ""){
       				document.getElementById('cname').disabled = true;
    				document.getElementById('changeCollegeLink').style.display = "inline";
       			} else{
       				document.getElementById('changeCollegeLink').style.display = "none";
       			}
       			
       			//alert("<?php echo $max_participants?>");
    		});
		</script>

		<style type="text/css">
			.req_spans{
				display:none;
			}
			#changeCollegeLink{
				color: ;
				margin-top: 2em;
			}
		</style>
	</head>
	<BODY background="images/back.jpg">
		<!--College Login modal code-->
	
		<!--Hidden text field. Disable for strictly cont events-->
		<!--<input id="disableGoSoloButton" type="text" value="<?php echo $disableGoSoloButton;?>">-->
		<!--Form Starts-->
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" style="background:#ff9980;margin-top:2em;margin-bottom:2em;border-radius:2em;">
				
				<?php
					$sql = mysqli_query($conn,"SELECT name FROM tableid WHERE id='$eventid'") or die(mysqli_error($conn)." 3");	//3
					$temp = mysqli_fetch_row($sql);
					$n = $temp[0];
				?>
				<h3 id="eventTitle" name="eventTitle" style="margin-left:2em;"><?php echo $n;?></h3>
				
				<form style="margin=2em;" role="form" autocomplete="off" onsubmit="return validateForm()" action="contingentregisterform.php?eventid=<?php echo $eventid;?>" method="post">
					<?php
						//$conn = mysqli_connect("localhost","wasiq","root123","college_db_one");
						//if(!$conn){ die("connection to db failed."); }
						//echo $max_participants[0];
						for($i=0;$i<$max_participants;$i++){
							$inputList = "<div class='col-md-4'>
											<div class='form-group'>
												<label>Name:&nbsp;<span id='req_namespan_".($i+1)."' name='req_namespan_".($i+1)."' class='fa fa-asterisk req_spans' style='color:red;'></span></label>
												<input name='name".($i+1)."' id='name".($i+1)."' type='text' class='form-control' placeholder='Full Name'>
											</div>
										</div>".
										"<div class='col-md-4'>
											<div class='form-group'>
												<label>Phone:&nbsp;<span id='req_phonespan_".($i+1)."' name='req_phonespan_".($i+1)."' class='fa fa-asterisk req_spans' style='color:red;'></span></label>
												<input name='phone".($i+1)."' id='phone".($i+1)."' type='text' class='form-control' placeholder='Mobile No.'>
											</div>
										</div>".
										"<div class='col-md-4'>
											<div class='form-group'>
												<label>Email:&nbsp;<span id='req_emailspan_".($i+1)."' name='req_emailspan_".($i+1)."' class='fa fa-asterisk req_spans' style='color:red;'></span></label>
												<input name='email".($i+1)."' id='email".($i+1)."' type='email' class='form-control' placeholder='E-Mail ID'>
											</div>
										</div>";
							echo $inputList;
						}
					?>
					
						<div class='form-group'>
							<label>College:&nbsp;<span id='req_span_col' name='req_span_col' class='fa fa-asterisk req_spans' style='color:red;'></span></label>
							<input name="cname" id="cname" value="<?php echo $college;?>" type='text' class='form-control'>
							<a id="changeCollegeLink" name="changeCollegeLink" href="temporary.php?eventid=<?php echo $_GET['eventid'];?>">Change College</a>
						</div>
						
						<button type="submit" style="margin-left:44%;margin-bottom:2em;" class="btn btn-success btn-lg">Register</button>
						<button type="button" class="btn btn-danger btn-lg" onclick="goToEvents()" title="Return to Events" style="margin-left:30%;margin-bottom:2em;">Cancel</button>
				</form>
			</div>
		</div>
	</BODY>
</html>