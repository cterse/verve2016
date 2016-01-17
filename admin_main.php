<?php
	session_start();
	
	//Redirect to login page if session isn't set
	if (!isset($_SESSION["adminname"])) {
    	header("location: adminlogin.php"); 
    	exit();
	}

	//Function to filter inputs
	function filter_any_data($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	//Connect to db
	$conn = mysqli_connect("localhost","wasiq","root123","college_db_one");
	if(!$conn){
		die("Error connectiong to db.");
	}

	//Get session variables
	$id = filter_any_data($_SESSION["adminid"]);
	$username = filter_any_data($_SESSION["adminname"]);
	$password = filter_any_data($_SESSION["adminpassword"]);

	//Fire query to check if the session variables exist in db
		$sql = mysqli_query($conn,"SELECT * FROM admin WHERE username='$username' AND password='$password'");
		//Count no of rows of result
		$rows = mysqli_num_rows($sql);

		if($rows == 0)
		{
			//The session is forged.
			echo "Your record doesn't exist in the database.";	exit();
		}
		else {
			//The session is valid
		}

?>
<?php
	$queryList = $noRegs = $eventName = "";
	if(isset($_GET['getdetails'])){
		$event = $_GET['getdetails'];
		$sql = mysqli_query($conn,"SELECT name FROM tableid WHERE event = '$event'") or die(mysqli_error($conn));
		$temp = mysqli_fetch_row($sql);
		$eventName = $temp[0];
		$sql = mysqli_query($conn,"SELECT * FROM $event"."cont") or die(mysqli_error($conn));
		$n = mysqli_num_rows($sql);
		if($n > 0){
			while($row = mysqli_fetch_array($sql)){
				$id = $row["id"];
				$fn = $row["fullname"];
				$gid = $row["groupid"];
				$phone = $row["phone"];
				$email = $row["email"];
				$college = $row["cname"];
				$queryList .= "	<tr>
									<td>$id</td>
									<td>$gid</td>
									<td>$fn</td>
									<td>$email</td>
									<td>$phone</td>
									<td>$college</td>
								</tr>";
			}
		} else{
			$noRegs = "<h4>No Registrations Yet...</h4>";
		}
	}
?>

<!doctype html>
<html>
	<head>
		<title>Admin Main Page</title>
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
		
		<script>
			function getEventDetails(data){
				location.href = "admin_main.php?getdetails="+data;
			} 
			function logoutToMain(){
				location.replace("temporary.php");
			}
			function goToNonContDetails(){
				location.href = "admin_noncont.php";
			}
			
			$(document).ready(function(){
    			$("#lebutton").click(function(){
        			$("#litevents").slideToggle("")("slow");
        			$("#perfarts").slideUp("")("slow");
    				$("#techcomp").slideUp("")("slow");
    				$("#finearts").slideUp("")("slow");
    			});
    			$("#pabutton").click(function(){
    				$("#perfarts").slideToggle("")("slow");
        			$("#litevents").slideUp("")("slow");
    				$("#techcomp").slideUp("")("slow");
    				$("#finearts").slideUp("")("slow");
    			});
    			$("#tcbutton").click(function(){
    				$("#techcomp").slideToggle("")("slow");
        			$("#litevents").slideUp("")("slow");
        			$("#perfarts").slideUp("")("slow");
    				$("#finearts").slideUp("")("slow");
    			});
    			$("#fabutton").click(function(){
    				$("#finearts").slideToggle("")("slow");
        			$("#litevents").slideUp("")("slow");
        			$("#perfarts").slideUp("")("slow");
    				$("#techcomp").slideUp("")("slow");
    			});
    			var url = window.location.href;
    			var searchRes = url.indexOf("?");
    			//alert(searchRes);
    			if(searchRes == -1){
    				document.getElementById('tableCol').style.opacity = "0";
    				document.getElementById('tableDiv').style.display = "none";
    			}
    			var rows = document.getElementById('myTable').rows.length;
    			if(rows == 1){
    				document.getElementById('myTable').style.display = "none";
    			}
			});
</script>


		<style type="text/css">
			#litevents, #perfarts, #techcomp, #finearts{
				display:none;
			}
			.table td,th{
				text-align: center;
			}
			.table td:hover{
				cursor:pointer;
			}
			#tableCol{
				background: lavender;
			}
		</style>

	</head>
	<BODY background="images/back.jpg">
		<div class="container" style="margin-top:2em;margin-bottom:2em;">
			<div class="row">
				<div class="col-md-3">
					<button onclick="goToNonContDetails()" class="btn btn-md btn-info">Go To Non Contingent Events.</button>
				</div>
				<div class="col-md-7">
					<h1>Contingent Registrations</h1>
				</div>
				<div class="col-md-2">
					<button onclick="logoutToMain()" class="btn btn-md btn-warning">Logout</button>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="col-md-3" style="margin-top:2em;margin-bottom:2em;background:lavender;border-radius:1em;">
				
				<button id="lebutton" style="margin:1em;width:90%;" class="btn btn-success">Literary Events&nbsp;<span class="badge">10 Events</span>&nbsp;&nbsp;<span class="glyphicon glyphicon-chevron-down"></span></button><br>
				<div id="litevents" style="margin:1em;background:;">
					<button onclick="getEventDetails('one4t')" class="btn btn-info" style="margin:0.5em;width:93%;">One4T&nbsp;<span class="badge"><?php $sql = mysqli_query($conn,"SELECT * FROM one4tid WHERE grouptype='1'");	$num = mysqli_num_rows($sql);	echo $num;	?></span></button><br>
					<button onclick="getEventDetails('abstractreflection')" class="btn btn-info" style="margin:0.5em;width:93%;">Abstract Reflection&nbsp;<span class="badge"><?php $sql = mysqli_query($conn,"SELECT * FROM abstractreflectionid WHERE grouptype='1'");	$num = mysqli_num_rows($sql);	echo $num;	?></span></button><br>
					<button onclick="getEventDetails('locusfocus')" class="btn btn-info" style="margin:0.5em;width:93%;">Locus Focus&nbsp;<span class="badge"><?php $sql = mysqli_query($conn,"SELECT * FROM locusfocusid WHERE grouptype='1'");	$num = mysqli_num_rows($sql);	echo $num;	?></span></button><br>
					<button onclick="getEventDetails('superherofactory')" class="btn btn-info" style="margin:0.5em;width:93%;">SuperHero Factory&nbsp;<span class="badge"><?php $sql = mysqli_query($conn,"SELECT * FROM superherofactoryid WHERE grouptype='1'");	$num = mysqli_num_rows($sql);	echo $num;	?></span></button><br>
					<button onclick="getEventDetails('vaadvivad')" class="btn btn-info" style="margin:0.5em;width:93%;">Vaad Vivad&nbsp;<span class="badge"><?php $sql = mysqli_query($conn,"SELECT * FROM vaadvivadid WHERE grouptype='1'");	$num = mysqli_num_rows($sql);	echo $num;	?></span></button><br>
					<button onclick="getEventDetails('twistedchronicles')" class="btn btn-info" style="margin:0.5em;width:93%;">Twisted Chronicles&nbsp;<span class="badge"><?php $sql = mysqli_query($conn,"SELECT * FROM twistedchroniclesid WHERE grouptype='1'");	$num = mysqli_num_rows($sql);	echo $num;	?></span></button><br>
					<button onclick="getEventDetails('faceoff')" class="btn btn-info" style="margin:0.5em;width:93%;">Face Off&nbsp;<span class="badge"><?php $sql = mysqli_query($conn,"SELECT * FROM faceoffid WHERE grouptype='1'");	$num = mysqli_num_rows($sql);	echo $num;	?></span></button><br>
					<button onclick="getEventDetails('poetsalley')" class="btn btn-info" style="margin:0.5em;width:93%;">Poet's Alley&nbsp;<span class="badge"><?php $sql = mysqli_query($conn,"SELECT * FROM poetsalleyid WHERE grouptype='1'");	$num = mysqli_num_rows($sql);	echo $num;	?></span></button><br>
					<button onclick="getEventDetails('shabdasandhan')" class="btn btn-info" style="margin:0.5em;width:93%;">Shabda Sandhan&nbsp;<span class="badge"><?php $sql = mysqli_query($conn,"SELECT * FROM shabdasandhanid WHERE grouptype='1'");	$num = mysqli_num_rows($sql);	echo $num;	?></span></button><br>
					<button onclick="getEventDetails('quizzards')" class="btn btn-info" style="margin:0.5em;width:93%;">Quizzards&nbsp;<span class="badge"><?php $sql = mysqli_query($conn,"SELECT * FROM quizzardsid WHERE grouptype='1'");	$num = mysqli_num_rows($sql);	echo $num;	?></span></button><br>
				</div>
				<button id="pabutton" style="margin:1em;width:90%;" class="btn btn-success">Performing Arts&nbsp;<span class="badge">8 Events</span>&nbsp;&nbsp;<span class="glyphicon glyphicon-chevron-down"></span></button><br>
				<div id="perfarts" style="margin:1em;background:;">
					<button onclick="getEventDetails('streetup')" class="btn btn-info" style="margin:0.5em;width:93%;">Street Up&nbsp;<span class="badge"><?php $sql = mysqli_query($conn,"SELECT * FROM streetupid WHERE grouptype='1'");	$num = mysqli_num_rows($sql);	echo $num;	?></span></button><br>
					<button onclick="getEventDetails('nukkadnatak')" class="btn btn-info" style="margin:0.5em;width:93%;">Nukkad Natak&nbsp;<span class="badge"><?php $sql = mysqli_query($conn,"SELECT * FROM nukkadnatakid WHERE grouptype='1'");	$num = mysqli_num_rows($sql);	echo $num;	?></span></button><br>
					<button onclick="getEventDetails('vogue')" class="btn btn-info" style="margin:0.5em;width:93%;">Vogue&nbsp;<span class="badge"><?php $sql = mysqli_query($conn,"SELECT * FROM vogueid WHERE grouptype='1'");	$num = mysqli_num_rows($sql);	echo $num;	?></span></button><br>
					<button onclick="getEventDetails('syncem')" class="btn btn-info" style="margin:0.5em;width:93%;">Sync Em'&nbsp;<span class="badge"><?php $sql = mysqli_query($conn,"SELECT * FROM syncemid WHERE grouptype='1'");	$num = mysqli_num_rows($sql);	echo $num;	?></span></button><br>
					<button onclick="getEventDetails('mrandmissverve')" class="btn btn-info" style="margin:0.5em;width:93%;">Mr. and Miss Verve&nbsp;<span class="badge"><?php $sql = mysqli_query($conn,"SELECT * FROM mrandmissverveid WHERE grouptype='1'");	$num = mysqli_num_rows($sql);	echo $num;	?></span></button><br>
					<button onclick="getEventDetails('redhun')" class="btn btn-info" style="margin:0.5em;width:93%;">Re Dhun&nbsp;<span class="badge"><?php $sql = mysqli_query($conn,"SELECT * FROM redhunid WHERE grouptype='1'");	$num = mysqli_num_rows($sql);	echo $num;	?></span></button><br>
					<button onclick="getEventDetails('shotsharp')" class="btn btn-info" style="margin:0.5em;width:93%;">Shot Sharp&nbsp;<span class="badge"><?php $sql = mysqli_query($conn,"SELECT * FROM shotsharpid WHERE grouptype='1'");	$num = mysqli_num_rows($sql);	echo $num;	?></span></button><br>
					<button onclick="getEventDetails('dancingtoes')" class="btn btn-info" style="margin:0.5em;width:93%;">Dancing Toes&nbsp;<span class="badge"><?php $sql = mysqli_query($conn,"SELECT * FROM dancingtoesid WHERE grouptype='1'");	$num = mysqli_num_rows($sql);	echo $num;	?></span></button><br>
				</div>
				<button id="fabutton" style="margin:1em;width:90%;" class="btn btn-success">Fine Arts&nbsp;<span class="badge">6 Events</span>&nbsp;&nbsp;<span class="glyphicon glyphicon-chevron-down"></span></button><br>
				<div id="finearts" style="margin:1em;background:;">
					<button onclick="getEventDetails('scrapwrap')" class="btn btn-info" style="margin:0.5em;width:93%;">Scrap Wrap&nbsp;<span class="badge"><?php $sql = mysqli_query($conn,"SELECT * FROM scrapwrapid WHERE grouptype='1'");	$num = mysqli_num_rows($sql);	echo $num;	?></span></button><br>
					<button onclick="getEventDetails('afternoonescapade')" class="btn btn-info" style="margin:0.5em;width:93%;">Afternoon Escapade&nbsp;<span class="badge"><?php $sql = mysqli_query($conn,"SELECT * FROM afternoonescapadeid WHERE grouptype='1'");	$num = mysqli_num_rows($sql);	echo $num;	?></span></button><br>
					<button onclick="getEventDetails('potpainting')" class="btn btn-info" style="margin:0.5em;width:93%;">Pot Painting&nbsp;<span class="badge"><?php $sql = mysqli_query($conn,"SELECT * FROM potpaintingid WHERE grouptype='1'");	$num = mysqli_num_rows($sql);	echo $num;	?></span></button><br>
					<button onclick="getEventDetails('caricature')" class="btn btn-info" style="margin:0.5em;width:93%;">Caricature&nbsp;<span class="badge"><?php $sql = mysqli_query($conn,"SELECT * FROM caricatureid WHERE grouptype='1'");	$num = mysqli_num_rows($sql);	echo $num;	?></span></button><br>
					<button onclick="getEventDetails('facepainting')" class="btn btn-info" style="margin:0.5em;width:93%;">Face Painting&nbsp;<span class="badge"><?php $sql = mysqli_query($conn,"SELECT * FROM facepaintingid WHERE grouptype='1'");	$num = mysqli_num_rows($sql);	echo $num;	?></span></button><br>
					<button onclick="getEventDetails('kalayouth')" class="btn btn-info" style="margin:0.5em;width:93%;">Kala Youth&nbsp;<span class="badge"><?php $sql = mysqli_query($conn,"SELECT * FROM kalayouthid WHERE grouptype='1'");	$num = mysqli_num_rows($sql);	echo $num;	?></span></button><br>
				</div>
				<button id="tcbutton" style="margin:1em;width:90%;" class="btn btn-success">Technical Competitions&nbsp;<span class="badge">8 Events</span>&nbsp;&nbsp;<span class="glyphicon glyphicon-chevron-down"></span></button><br> 
				<div id="techcomp" style="margin:1em;background:;">
					<button onclick="getEventDetails('fuegorapido')" class="btn btn-info" style="margin:0.5em;width:93%;">Fuego Rapido&nbsp;<span class="badge"><?php $sql = mysqli_query($conn,"SELECT * FROM fuegorapidoid WHERE grouptype='1'");	$num = mysqli_num_rows($sql);	echo $num;	?></span></button><br>
					<button onclick="getEventDetails('langaming')" class="btn btn-info" style="margin:0.5em;width:93%;">Lan Gaming&nbsp;<span class="badge"><?php $sql = mysqli_query($conn,"SELECT * FROM langamingid WHERE grouptype='1'");	$num = mysqli_num_rows($sql);	echo $num;	?></span></button><br>
					<button onclick="getEventDetails('admad')" class="btn btn-info" style="margin:0.5em;width:93%;">Ad Mad&nbsp;<span class="badge"><?php $sql = mysqli_query($conn,"SELECT * FROM admadid WHERE grouptype='1'");	$num = mysqli_num_rows($sql);	echo $num;	?></span></button><br>
					<button onclick="getEventDetails('greekolympiad')" class="btn btn-info" style="margin:0.5em;width:93%;">Greek Olympiad&nbsp;<span class="badge"><?php $sql = mysqli_query($conn,"SELECT * FROM greekolympiadid WHERE grouptype='1'");	$num = mysqli_num_rows($sql);	echo $num;	?></span></button><br>
					<button onclick="getEventDetails('pictionary')" class="btn btn-info" style="margin:0.5em;width:93%;">Pictionary&nbsp;<span class="badge"><?php $sql = mysqli_query($conn,"SELECT * FROM pictionaryid WHERE grouptype='1'");	$num = mysqli_num_rows($sql);	echo $num;	?></span></button><br>
					<button onclick="getEventDetails('throttle')" class="btn btn-info" style="margin:0.5em;width:93%;">Throttle&nbsp;<span class="badge"><?php $sql = mysqli_query($conn,"SELECT * FROM throttleid WHERE grouptype='1'");	$num = mysqli_num_rows($sql);	echo $num;	?></span></button><br>
					<button onclick="getEventDetails('geocaching')" class="btn btn-info" style="margin:0.5em;width:93%;">Geocaching&nbsp;<span class="badge"><?php $sql = mysqli_query($conn,"SELECT * FROM geocachingid WHERE grouptype='1'");	$num = mysqli_num_rows($sql);	echo $num;	?></span></button><br>
					<button onclick="getEventDetails('roundrobin')" class="btn btn-info" style="margin:0.5em;width:93%;">Round Robin&nbsp;<span class="badge"><?php $sql = mysqli_query($conn,"SELECT * FROM roundrobinid WHERE grouptype='1'");	$num = mysqli_num_rows($sql);	echo $num;	?></span></button><br>
				</div>
			</div>
			<div class="col-md-1"></div>
			<div id="tableCol" class="col-md-8" style="margin-left:4em;margin-bottom:2em;border-radius:1em;">
				<div id="tableDiv">
					<h3><?php echo "$eventName";?></h3>
					<div class="table-responsive">
						<table id="myTable" class="table table-hover" style="">
	    				<thead>
	      					<tr
	      					>
						        <th>Id</th>
						        <th>Group</th>
						        <th>Full Name</th>
						        <th>Email</th>
						        <th>Phone</th>
						        <th>College</th>
	      					</tr>
	    				</thead>
	    				<tbody title="Click To Contact">
	    					<?php
	    						echo "$queryList";
	    					?>
	    				</tbody>	
	    				<?php echo "$noRegs";?>
					</div>
				</div>
			
			</div>
		</div>
	</BODY>
</html>