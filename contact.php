<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CONTACT</title>
	<meta name="description" content="StudioMAB's contact page - address, phonenumber and email">
    <!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">
	 <!-- Stylesheet for social icons from https://www.w3schools.com -->
	 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
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
	  <?php $page = 'contact'; include 'includes/header.php';?>
	  
	  	<!-- PHP INCLUDES CONTACT FORM -->
	  
	   <?php include 'includes/contactformular.php';?>
	  
	  	  <!-- HEADER START -->
 <nav class="navbar navbar-default">
   <div class="container-fluid">
     <!-- Brand and toggle get grouped for better mobile display -->
     <div class="navbar-header">
       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
       <a class="navbar-brand" href="index.php"> <img src="images/logo2.png" class="img-responsive logo-mediaq" alt="StudioMAB's"></a></div>
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
	  

	  <div class="container">
		  <div class="row">
			  <!-- CONTACT FORM START -->
			  <div class="col-md-4 col-md-offset-2" id="contact">
					  <p>Feel free to contact us!</p>
						  <div class="form-group">
							  <input type="text" autofocus required placeholder="Full Name" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($_POST['name']); ?>"> 
							  <?php echo "<p class='text-danger'>$errName</p>";?>
						  </div>
						  <div class="form-group">
							  <input type="email" autofocus required placeholder="E-mail" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($_POST['email']); ?>">
							  <?php echo "<p class='text-danger'>$errEmail</p>";?>
						  </div>
						  <div class="form-group">
							  <textarea class="form-control" autofocus required placeholder="Message" id="msg" name="msg" cols="30" rows="10"><?php echo htmlspecialchars($_POST['message']);?> </textarea>
							  <?php echo "<p class='text-danger'>$errMsg</p>";?>
						  </div>
						  <div class="btn-group">
							  <input type="submit" name="submit" class="btn btn-primary" value="Send" id="submit">	
						  </div>
				  			<div class="form-group">
								<div class="col-sm-10 col-sm-offset-2">
									<?php echo $result; ?>	
								</div>
							</div>
			 		 </div>
			  
	<!-- CONTACT FORM END -->		  
			  
			 <!-- CONTACT INFORMATION AND SOCIAL MEDIA START -->
			  
			  <div class="col-md-6 contact-icon">
					  <div class="row ikon">
						  <p><i class="fa fa-map-marker"></i>Stenkærvej 9, 8752 Østbirk, DK</p>
						  </div> 
					  <div class="row ikon">
					  <p><i class="fa fa-phone"></i>+45 40 61 66 74</p>
						  </div>
					  <div class="row ikon">
				     <p><i class="fa fa-envelope"></i>mdbrockdorff@live.dk</p> 
						  </div>
				  <hr>
				  <div class="row">
				      <a target="_blank" href="https://www.facebook.com/Studio-MAB-606121629500254/?ref=br_rs"><i class="fa fa-facebook"></i> </a>
					  <a target="_blank" href="https://www.instagram.com/mbrockdorff/"> <i class="fa fa-instagram"></i></a>
					  <a target="_blank" href="https://www.pinterest.dk/MBrockdorff/?eq=mathias%20b&etslf=NaN"> <i class="fa fa-pinterest"></i></a>
					  <a target="_blank" href="https://dk.linkedin.com/in/mathias-daniel-brockdorff-6017a28a"> <i class="fa fa-linkedin"></i></a>
				  </div>
			      </div>
			  	 <!-- CONTACT INFORMATION AND SOCIAL MEDIA START -->
			  </div>
		  </div>
		  
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-1.11.3.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="js/bootstrap.js"></script>
  </body>
</html>