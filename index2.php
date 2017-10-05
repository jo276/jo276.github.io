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
<title>James Owen's Homepage</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="shortcut icon" href="images/icon.ico" >
</head>
<body>
<div id="wrapper">
  
  <!-- Insert Menu -->
  <? $currpage="Home"; include("menu.php"); ?>
  <!-- end #menu -->
     <!-- Insert header -->	
     <? include ("header.html") ?>
     <!-- end #header -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					<div class="post">
						<h2 class="title"><a href="#">Welcome to James' Homepage </a></h2>
						<div class="entry">
						  <? 
                                                    include ("bio.txt"); 
                                                   ?>
						</div>
					</div>
					
				</div>
				<!-- end #content -->
				<div id="sidebar">
					<ul>
						<? include("NewPapers.php") ?>
						<li>
							<!-- <h2>Research Areas</h2>
							<ul>
                        <li><a href="#">Exoplanets</a></li>
								<li><a href="#">Protoplanetary Discs</a></li>
								<li><a href="#">Star Formation</a></li>
							</ul>
                     -->
						</li>
                  <li>
                  <h2>Contact</h2>
                  <ul>
                  <li>E-mail: jowen -at- cita.utoronto.ca</li>
                  <li>Phone: +1 416-978-6857</li> 
                  <li><a href="https://twitter.com/AstroOwen" class="twitter-follow-button" data-show-count="false" data-dnt="true">Follow @AstroOwen</a>
    <script>!function(d,s,id)
{
   var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
   if(!d.getElementById(id))
   {
      js=d.createElement(s);
      js.id=id;
      js.src=p+'://platform.twitter.com/widgets.js';
      fjs.parentNode.insertBefore(js,fjs);
   }
}
(document, 'script', 'twitter-wjs');
</script></li>
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
