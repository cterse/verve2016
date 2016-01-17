<?php
	error_reporting(E_ERROR);
	if(!isset($_SESSION))
		session_start();

	$showButton = 0;
	if(isset($_SESSION['collegename'])){
		$showButton = 1;
	}
?>

<!doctype html>
<html>
	<head>
		<?php require("initBootstrap.php");?>

		<style type="text/css">
			#fb{
				display:none;
				position: fixed;
				margin-left: 84%;
				margin-top: 100%;
				box-shadow: 0.1em 0.1em grey;
				text-shadow: 0.1em 0.1em black;
				z-index: 5000;
			}
		</style>

		<script type="text/javascript">
			function changeCollege(){
				location.replace("temporary.php");
			}

			$(document).ready(function(){
				//alert("testing");
				if(document.getElementById("showButtonText").value == 1){
					document.getElementById("fb").style.display = "inline";
					$("#fb").animate({bottom:'10%'},1000);
				}
				
			});
		</script>
	</head>
	<BODY>
		<button onclick="changeCollege()" title="Click To Logout/Change College" name="fb" id="fb" class="btn btn-warning btn-lg"><?php echo($_SESSION["collegename"]);?></button>
		<input id="showButtonText" type="text" value="<?php echo $showButton;?>" style="display:none;">
	</BODY>
</html>