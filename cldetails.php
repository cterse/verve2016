<!doctype html>
<html>
	<head>
		<title>CL Details</title>
		<meta name="viewport" content="width=device-width, initial-scale:1.0">

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
				location.href = "eventscont.php";
			}
		</script>
		
	</head>
	<body background="images/back.jpg">
		<?php require("floatingButton.php");?>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<div style="margin-top:2em;margin-bottom:2em;">
					<div style="background:lavender;padding:2em;padding-top:0.3em;margin:1em;border-radius:2em;">
						<h2 style="text-align:center;">CL Details</h2>
						<h3>Name: </h3>
						<h3>College: </h3>
						<h3>Other: </h3>
					</div>
					<div style="background:lavender;padding:2em;padding-top:0.3em;margin:1em;border-radius:2em;">
						<h2 style="text-align:center;">ACL Details</h2>
						<h3>Name: </h3>
						<h3>College: </h3>
						<h3>Other: </h3>
					</div>
					<button onclick="goToEvents()" class="btn btn-info btn-lg" style="margin-left:35%;margin-top:;">Proceed To Events</button>
				</div>
			</div>
		</div>
		
	</body>
</html>