<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Diminishing  
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20110227

Modified by JO: 09/2011
PhP by JO: 11/2011

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>James' research page</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="shortcut icon" href="images/icon.ico" >
</head>
<body>
<div id="wrapper">
  
  <!-- Insert Menu -->
  <? $currpage="Research"; include("menu.php"); ?>
  <!-- end #menu -->
     <!-- Insert header -->	
     <? include ("header.html") ?>
     <!-- end #header -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					<div class="post">
						<h2 class="title"><a href="#">Research</a></h2>
						<div class="entry">
						I'm currently involved in several studies investigating theoretical problems in star and planet formation.
                  </div>
                  <h3 class="title">Protoplanetary Discs</h4>
                  <div class="entry">

                  </div>
					</div>
				</div>
				<!-- end #content -->
				<div id="sidebar">
					<ul>
						<li>
							<ul>
                        <li><a href="#">Exoplanets</a></li>
								<li><a href="#">Protoplanetary Discs</a></li>
								<li><a href="#">Star Formation</a></li>
								<li><a href="pub.php">Full Publications List</a></li>
								<li><a href="anim.php">Animations</a></li>
							</ul>
						</li>
						<li>
					</ul>
				</div>
				<!-- end #sidebar -->
				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
	</div>
	<!-- end #page -->
</div>
<? include ("footer.html") ?>
</body>
</html>
