<html>
	<head>
		<title>Success!</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">		
		<script src="js/jquery-1.11.3.min.js"></script>
		<link rel="stylesheet" type="text/css" href="font-awesome-4.4.0/css/font-awesome.min.css">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

		<style type="text/css">
			#success_image{
				margin-left: 7em;
				margin-top: 5em;
			}
			#continue_button{
				margin-left: 9.4em;
				margin-top: 1em;
				margin-bottom: 2em;
			}
			#success_message{

			}
		</style>
		<script type="text/javascript">
			function goBack(){
				window.history.go(-2);
			}
		</script>
	</head>
	<BODY background="images/back.jpg">
		<div class="row" style="margin-top:3em;">
			<div class="col-md-4"></div>
			<div class="col-md-4" style="background:#ccff99;border-radius:2em;">
				<img id="success_image" src="images/check-tick-approved-okay-round-green-button-icon.png" height="250" width="250">
				<p style="text-align:center;margin-left:;font-size:1.7em;margin-top:1em;" id="succcess_message">REGISTRATION SUCCESSFUL!</p>
				<h4 style="margin-left:;text-align:center;">Your response had been recorded.</h4>
				<h4 style="text-align:center;">We'll send you a confirmation mail in few days.</h4>
				<button id="continue_button" onclick="goBack()" class="btn btn-success btn-lg">Continue</button>
			</div>
		</div>
	</BODY>
</html>