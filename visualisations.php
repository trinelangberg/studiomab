<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VISUALISATIONS</title>
	  <meta name="description" content="Visualisations of architectual projects made by StudioMAB">
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

	  	  <?php $page = 'visualisations'; include 'includes/header.php';?>
	  
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
	  	 <div class="img-visualisations">
		  	 <h1 id="visualisations-h1">VISUALISATIONS MADE BY STUDIOMAB</h1>
			  <img src="images/thewoodshop.jpg" alt="Visualisation of the Wood Shop" width="100%">
		      <img src="images/thefashion-boutique.jpg" alt="Visualisation of the Fashion Boutique" width="100%">
		      <img src="images/thefrontalview.jpg" alt="Visualisation frontal view" width="100%">
		   	  <img src="images/block-building.jpg" alt="Visualisation of a block building" width="100%">
		      <img src="images/block-building2.jpg" alt="Visualisation of a block building from the side" width="100%"> 
		      <img src="images/arrival.jpg" alt="Visualisation of arrival place" width="100%">
		      <img src="images/worldsquare.jpg" alt="Visualisation of World Square" width="100%">
		      <img src="images/soccerfield.jpg" alt="Visualisation of a soccerfield" width="100%">
		      <img src="images/plaza.jpg" alt="Visualisation of Plaza" width="100%">
	  </div>
		  </div>
	  
	   <!--PROJECT IMAGES WITH TEXT END -->
		  
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-1.11.3.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="js/bootstrap.js"></script>
  </body>
</html>