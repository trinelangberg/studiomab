<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PROJECTS</title>
	<meta name="description" content="Project Fisher House in Skagen made by StudioMAB">
    <!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  </head>
  <body>
	  
	  <!-- PHP INCLUDES HEADER NAVIGATION -->
	  
	  <?php $page = 'projects'; include 'includes/header.php';?>
	  
	  <!-- PHP INCLUDES SUB NAVIGATION-->
	  
	   <?php $page = 'fisherhouse'; include 'includes/menu.php';?>
	  
	  	<!-- HEADER START -->
 <nav class="navbar navbar-default">
   <div class="container-fluid">
     <!-- Brand and toggle get grouped for better mobile display -->
     <div class="navbar-header">
       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
       <a class="navbar-brand" href="index.php"> <img src="images/logo2.png" class="img-responsive logo-mediaq" alt="StudioMAB's logo"></a></div>
     <!-- Collect the nav links, forms, and other content for toggling -->
     <div class="collapse navbar-collapse" id="defaultNavbar1">
       <ul class="nav navbar-nav">
		   <li class="dropdown">
          <a href="projects.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PROJECTS <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="cityapartment.php">city apartment</a></li>
            <li><a href="fisherhouse.php">fisher house</a></li>
            <li><a href="kristinelunden.php">kristinelunden</a></li>
            <li><a href="forresthouse.php">forrest house</a></li>
          </ul>
        </li>
         <li><a href="visualisations.php">VISUALISATIONS</a></li>
		  <li><a href="timeline.php">TIMELINE</a></li>
       </ul>
	</div>
     <!-- /.navbar-collapse -->
   </div>
   <!-- /.container-fluid -->
 </nav>
<!-- HEADER END -->
	  
	  <!--PROJECT IMAGES WITH TEXT START -->
	  
	  <div class="container">
	  <div class="img-projects">
		  	  <h1 id="fish-h1">SUMMER HOUSE OF NORTHERN DENMARK</h1>
		  	  <h2 id="fisher-black">rethinking of the old fishermen's houses <br> along the westcoast of Denmark </h2>
			  <img src="images/fisherhouse-black.jpg" alt="Fisher House in black" width="100%">
		  
		      <h2 id="fisher-wood">fisher house in Skagen <br> untreated larch wood surface</h2>
			  <img src="images/fisherhouse-wood.jpg" alt="Fisher House in wood" width="100%">
	  </div>
	</div>
	  
	  <!--PROJECT IMAGES WITH TEXT END -->
	  
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-1.11.3.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="js/bootstrap.js"></script>
  </body>
</html>