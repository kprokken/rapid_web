<!DOCTYPE html>
<html>
<head>
	<title>Hollywood Fitness Home Page</title>
	<meta charset="utf-8">
	  <link href="stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
	  <link href="stylesheets/print.css" media="print" rel="stylesheet" type="text/css" />
  <!--[if IE]
      <link href="/stylesheets/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
  ![endif]-->

	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="js/jquery.transit.js"></script>
	<script src="js/script.js"></script>
	
	 <script>
		$(".slideshow > div:gt(0)").hide();

			setInterval(function() { 
			  $('.slideshow > div:first')
			    .fadeOut(6000)
			    .next()
			    .fadeIn(6000)
			    .end()
			    .appendTo('.slideshow');
			},  6000);
	</script>

</head>
<body>

	<div class="wrapper">

		<div class="header_area">
			<h1>This is the Home Page!!</h1>
			<?php include "header.php"; 
				?>
		</div>	

			<!-- <div class="content_area"> -->

				<!-- <div class="row">
					<div class="large-1 column">		
						<div class="slideshow">
				  			<div class="small-4 large-4 columns">
				  				<img src="images/fitness.jpg" alt="one" width="100%"/>
				  			</div>
		  			
			  				<div class="7day">
			  					<img src="images/plank.jpg" alt="two" width="100%"/>
			  				</div>

			  				<div class="blog">
			  					<img src="images/smiling.jpg" alt="three" width="100%"/>
			  				</div>

			  			</div> -->

						<div class="row">
							<div class="small-3 columns">
								<div class="justabox1">
									<p>spans 3 columns.</p>
								</div>
							<div class="small-9 columns">
								<div class="justabox2">
									<p>spans 9 columns.</p>
								</div>
							</div>
							</div>
						</div>

		  			<!-- </div>	
				</div> -->	<!--close slider section--> 	
			</div>

		<div class="footer_area">
			<?php include "footer.php";
			?>
		</div>
	
	</div>

</body>
</html>