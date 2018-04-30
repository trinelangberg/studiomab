<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TIMELINE</title>
	<meta name="description" content="A timeline over StudioMAB's CEOs important events - both in regard of personal and professional development.">
    <!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">
	 <!-- Stylesheet for timeline from https://www.w3schools.com -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
	<link rel="stylesheet" href="css/style.css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>  
	  
  </head>
  <body>
	  
	  <!-- PHP INCLUDES HEADER NAVIGATION -->
	
	  <?php $page = 'portfolio'; include 'includes/header.php';?>
	  
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
	  
	  
<!-- TIMELINE START -->
<!-- TIMELINE SNIPPET FROM http://freefrontend.com/css-timelines/ -->
	  
	 <img id="info-man" src="images/man-infographics.png" alt="infographic man"> 
<ul class="timeline">
  <li class="timeline-event">
	  <label class="timeline-event-icon"></label>
    <div class="timeline-event-copy">
		<div class="p-dato"><p>2010</p></div>
      <p>Course in Art and Design, Aarhus </p>
    </div>
  </li>
  <li class="timeline-event">
    <label class="timeline-event-icon"></label>
    <div class="timeline-event-copy">
      <div class="p-dato"><p>October 2013</p></div>
      <p>StudioMAB founded by CEO Mathias Brockdorff</p>
	<img class="timeline-img" src="images/Mathias-Brockdorff.jpg" alt="StudioMAB's CEO, Mathias Brockdorff">	
    </div>
  </li>
	<li class="timeline-event">
    <label class="timeline-event-icon"></label>
    <div class="timeline-event-copy">
      <div class="p-dato"><p>July 2013</p></div>
      <p>Bachelor's degree in Architecture, Aarhus Architect School</p>
    </div>
  </li>
  <li class="timeline-event">
    <label class="timeline-event-icon"></label>
    <div class="timeline-event-copy">
      <div class="p-dato"><p>November 2013 - July 2014</p></div>
      <p>Architectual intern at Schmidt Hammer Lassen, Shanghai department</p>
    </div>
  </li>
	<li class="timeline-event">
    <label class="timeline-event-icon"></label>
    <div class="timeline-event-copy">
      <div class="p-dato"><p>February 2015</p></div>
      <p>Wooden House, Center of Aarhus, Fredensgade </p>
    </div>
  </li>
	<li class="timeline-event">
    <label class="timeline-event-icon"></label>
    <div class="timeline-event-copy">
      <div class="p-dato"><p>July 2016</p></div>
      <p>Master's degree in Architectural Heritage and Transformations</p>
    </div>
  </li>
  <li class="timeline-event">
	  <label class="timeline-event-icon"></label>
    <div class="timeline-event-copy">
      <div class="p-dato"><p>August 2016</p></div>
      <p>Architect, Concept Development, at Schmidt Hammer Lassen</p>
    </div>
  </li>
  <li class="timeline-event">
	  <label class="timeline-event-icon"></label>
    <div class="timeline-event-copy">
      <div class="p-dato"><p>October 2016</p></div>
		<p>Fisher House, project <a href="http://www.skagen-nordstrand.dk">Skagen Nordstrand</a></p>
		<img src="images/fisk_05.jpg" alt="Project Fisher House">
    </div>
  </li>
</ul>
	
<!-- TIMELINE END-->
	  
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-1.11.3.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="js/bootstrap.js"></script>
  </body>
</html>