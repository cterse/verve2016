<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
                         <link rel="shortcut icon" href="images/favicon.ico" />

		<title>VERVE 2016 | GALLERY</title>
		<meta name="description" content="A shading effect for 3D transformed elements" />
		<meta name="keywords" content="css3, transforms, shadow, shading, 3d, box shadow" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" type="image/x-icon" href="../img/logo.ico" />
		<link rel="stylesheet" type="text/css" href="css/events_demo.css" />
		<link rel="stylesheet" type="text/css" href="css/events_component.css" />
			<link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery-1.11.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/events_demo.css" />
	</head>
<body style="background-repeat:no-repeat; background-size:cover; margin-left:1cm;" background="images/back.jpg">

 <div id="top">
<header><br>
<div style="right:auto; height:100px; width:130px; float:left">
<a href="home.php"><img src="images/logo.png" alt="logo" height="100px" width="100px" class="img-rounded"></a></div>
<div style="height:100px; margin-left:190px"><h1  align="center" style="font-size:50px; color:white"><b>VERVE 2016</b><br> <small style="font-size:35px; color:#FFF8DC"> A GENESIS</small></b></h1></div>
<span></span>
</header>
</div>
</div>


<div class="container-fluid">
<div class="wrapper">
				<ul class="stage clearfix">

					<li class="cube">
						<div class="block" onclick="return true">
							<div class="poster"></div>
							<div class="info">
								<header>
									<h1>CELEBRITIES</h1>
								</header>
								<p>
									<a data-toggle="modal" data-target="#celeb">View</a>
								</p>
							</div>
						</div>
					</li>
					
					<li class="cube">
						<div class="block" onclick="return true">
							<div class="poster"></div>
							<div class="info">
								<header>
									<h1>LITERARY ARTS</h1>
								</header>
								<p>
									<a data-toggle="modal" data-target="#la">View</a>
								</p>
							</div>
						</div>
					</li>

					<li class="cube">
						<div class="block" onclick="return true">
							<div class="poster"></div>
							<div class="info">
								<header>
									<h1>PERFORMING ARTS</h1>
								</header>
								<p>
									<a data-toggle="modal" data-target="#pa">View</a>
								</p>
							</div>
						</div>
					</li>

					<li class="cube">
						<div class="block" onclick="return true">
							<div class="poster"></div>
							<div class="info">
								<header>
									<h1>FINE ARTS</h1>
								</header>
								<p>
									<a data-toggle="modal" data-target="#fa">View</a>
								</p>
							</div>
						</div>
					</li>
					
					<li class="cube">
						<div class="block" onclick="return true">
							<div class="poster"></div>
							<div class="info">
								<header>
									<h1>TECHNICAL COMPETITIONS</h1>
								</header>
								<p>
								<a data-toggle="modal" data-target="#tc">View</a>
								</p>
							</div>
						</div>
					</li>
					
					<li class="cube">
						<div class="block" onclick="return true">
							<div class="poster"></div>
							<div class="info">
								<header>
								<h1>TECHNICAL FUN EVENTS</h1>
								</header>
								<p>
							<a data-toggle="modal" data-target="#tfe">View</a>
								</p>
							</div>
						</div>
					</li>
					
					<li class="cube">
						<div class="block" onclick="return true">
							<div class="poster"></div>
							<div class="info">
								<header>
									<h1>SPORTSMANIA</h1>
								</header>
								<p>
									<a data-toggle="modal" data-target="#spt">View</a>
								</p>
							</div>
						</div>
					</li>
					
					<li class="cube">
						<div class="block" onclick="return true">
							<div class="poster"></div>
							<div class="info">
								<header>
									<h1>FUN EVENTS</h1>
								</header>
								<p>
								<a data-toggle="modal" data-target="#fe">View</a>
								</p>
							</div>
						</div>
					</li>
					
					<li class="cube">
						<div class="block" onclick="return true">
							<div class="poster"></div>
							<div class="info">
								<header>
									<h1>WORKSHOP</h1>
								</header>
								<p>
									<a data-toggle="modal" data-target="#wrk">View</a>
								</p>
							</div>
						</div>
					</li>
		</ul>

		</div><!-- wrapper -->

<!-- Modal -->
<div id="celeb" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">CELEBRITIES</h4>
      </div>
      <div class="modal-body">
        <div id="cel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#cel" data-slide-to="0" class="active"></li>
    <li data-target="#cel" data-slide-to="1"></li>
    <li data-target="#cel" data-slide-to="2"></li>
    <li data-target="#cel" data-slide-to="3"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img_chania.jpg" alt="Chania">
    </div>
    <div class="item">
      <img src="img_flower2.jpg" alt="Flower">
    </div>
  </div>
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#cel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#cel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div id="la" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">LITERARY ARTS</h4>
      </div>
      <div class="modal-body">
        <div id="lit" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#lit" data-slide-to="0" class="active"></li>
    <li data-target="#lit" data-slide-to="1"></li>
    <li data-target="#lit" data-slide-to="2"></li>
    <li data-target="#lit" data-slide-to="3"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img_chania.jpg" alt="Chania">
    </div>
    <div class="item">
      <img src="img_flower2.jpg" alt="Flower">
    </div>
  </div>
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#lit" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#lit" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div id="pa" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">PERFORMING ARTS</h4>
      </div>
      <div class="modal-body">
        <div id="perf" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#perf" data-slide-to="0" class="active"></li>
    <li data-target="#perf" data-slide-to="1"></li>
    <li data-target="#perf" data-slide-to="2"></li>
    <li data-target="#perf" data-slide-to="3"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img_chania.jpg" alt="Chania">
    </div>
    <div class="item">
      <img src="img_flower2.jpg" alt="Flower">
    </div>
  </div>
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#perf" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#perf" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div id="fa" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">FINE ARTS</h4>
      </div>
      <div class="modal-body">
        <div id="fine" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#fine" data-slide-to="0" class="active"></li>
    <li data-target="#fine" data-slide-to="1"></li>
    <li data-target="#fine" data-slide-to="2"></li>
    <li data-target="#fine" data-slide-to="3"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img_chania.jpg" alt="Chania">
    </div>
    <div class="item">
      <img src="img_flower2.jpg" alt="Flower">
    </div>
  </div>
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#fine" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#fine" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div id="fe" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">FUN EVENTS</h4>
      </div>
      <div class="modal-body">
        <div id="fun" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#fun" data-slide-to="0" class="active"></li>
    <li data-target="#fun" data-slide-to="1"></li>
    <li data-target="#fun" data-slide-to="2"></li>
    <li data-target="#fun" data-slide-to="3"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img_chania.jpg" alt="Chania">
    </div>
    <div class="item">
      <img src="img_flower2.jpg" alt="Flower">
    </div>
  </div>
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#fun" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#fun" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div id="tc" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">TECHNICAL COMPETITIONS</h4>
      </div>
      <div class="modal-body">
        <div id="techc" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#techc" data-slide-to="0" class="active"></li>
    <li data-target="#techc" data-slide-to="1"></li>
    <li data-target="#techc" data-slide-to="2"></li>
    <li data-target="#techc" data-slide-to="3"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img_chania.jpg" alt="Chania">
    </div>
    <div class="item">
      <img src="img_flower2.jpg" alt="Flower">
    </div>
  </div>
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#techc" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#techc" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div id="tfe" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">TECHNICAL FUN EVENTS</h4>
      </div>
      <div class="modal-body">
        <div id="techfe" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#techfe" data-slide-to="0" class="active"></li>
    <li data-target="#techfe" data-slide-to="1"></li>
    <li data-target="#techfe" data-slide-to="2"></li>
    <li data-target="#techfe" data-slide-to="3"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img_chania.jpg" alt="Chania">
    </div>
    <div class="item">
      <img src="img_flower2.jpg" alt="Flower">
    </div>
  </div>
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#techfe" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#techfe" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div id="spt" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">SPORTSMANIA</h4>
      </div>
      <div class="modal-body">
        <div id="spt" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#spt" data-slide-to="0" class="active"></li>
    <li data-target="#spt" data-slide-to="1"></li>
    <li data-target="#spt" data-slide-to="2"></li>
    <li data-target="#spt" data-slide-to="3"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img_chania.jpg" alt="Chania">
    </div>
    <div class="item">
      <img src="img_flower2.jpg" alt="Flower">
    </div>
  </div>
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#spt" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#spt" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div id="wrk" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">WORKSHOP</h4>
      </div>
      <div class="modal-body">
         <div id="wshop" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#wshop" data-slide-to="0" class="active"></li>
    <li data-target="#wshop" data-slide-to="1"></li>
    <li data-target="#wshop" data-slide-to="2"></li>
    <li data-target="#wshop" data-slide-to="3"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img_chania.jpg" alt="Chania">
    </div>
    <div class="item">
      <img src="img_flower2.jpg" alt="Flower">
    </div>
  </div>
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#wshop" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#wshop" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      </div>
    </div>
  </div>
</div>
</div><!-- container -->
</body>
</html>
