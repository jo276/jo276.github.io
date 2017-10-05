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
  <? $currpage="Publications"; include("menu.php"); ?>
  <!-- end #menu -->
     <!-- Insert header -->	
     <? include ("header.html") ?>
     <!-- end #header -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					<div class="post">
                                     <a
    href="http://adsabs.harvard.edu/cgi-bin/nph-abs_connect?db_key=AST&db_key=PRE&qform=AST&arxiv_sel=astro-ph&arxiv_sel=cond-mat&arxiv_sel=cs&arxiv_sel=gr-qc&arxiv_sel=hep-ex&arxiv_sel=hep-lat&arxiv_sel=hep-ph&arxiv_sel=hep-th&arxiv_sel=math&arxiv_sel=math-ph&arxiv_sel=nlin&arxiv_sel=nucl-ex&arxiv_sel=nucl-th&arxiv_sel=physics&arxiv_sel=quant-ph&arxiv_sel=q-bio&sim_query=YES&ned_query=YES&adsobj_query=YES&aut_logic=OR&obj_logic=OR&author=Owen%2C+James+E&object=&start_mon=&start_year=2010&end_mon=&end_year=&ttl_logic=OR&title=&txt_logic=OR&text=&nr_to_return=200&start_nr=1&jou_pick=ALL&ref_stems=&data_and=NO&ar_link=YES&group_and=ALL&start_entry_day=&start_entry_mon=&start_entry_year=&end_entry_day=&end_entry_mon=&end_entry_year=&min_score=&sort=SCORE&data_type=SHORT&aut_syn=YES&ttl_syn=YES&txt_syn=YES&aut_wt=1.0&obj_wt=1.0&ttl_wt=0.3&txt_wt=3.0&aut_wgt=YES&obj_wgt=YES&ttl_wgt=YES&txt_wgt=YES&ttl_sco=YES&txt_sco=YES&version=1">List
    Provided by NASA ADS</a> <p></p>
						<h2 class="title"><a href="#">Peer Reviewed Publications</a></h2>
                  <? include("paper_list.dat");
                  $NP=sizeof($PaperTitle);
                  ?>
						<div class="entry">
                   <ol reversed <? echo "start=$NP"?> >
                    <?                       
                      for ($i=1; $i<=$NP; $i++)
                      {
                       echo "<b><li><a href=\"";
		                 echo $PaperLink[$NP-$i];
                       echo "\">";
                       echo $PaperTitle[$NP-$i];
                       echo "</a></li></b>";
                       echo "<ul><li>";
                       echo $PaperAuthor[$NP-$i];
                       echo "</li><li>";
                       echo $PaperPage[$NP-$i];
                       echo "</li></ul>";
                       }
                       ?> 
                     </ol>
						</div>
					</div>
               <div class="post">
               <h2 class="title"><a href="#">Other</a></h2>
						<div class="entry">
                    <? include("paper_list_other.dat");
                       $NP=sizeof($PaperTitleO);
                    ?>
                    <ol reversed <? echo "start=$NP"?> >
                      <?
                      for ($i=1; $i<=$NP; $i++)
                      {
                       echo "<b><li><a href=\"";
		                 echo $PaperLinkO[$NP-$i];
                       echo "\">";
                       echo $PaperTitleO[$NP-$i];
                       echo "</a></li></b>";
                       echo "<ul><li>";
                       echo $PaperAuthorO[$NP-$i];
                       echo "</li><li>";
                       echo $PaperPageO[$NP-$i];
                       echo "</li></ul>";
                       }


                      ?>
                       </ol>
                  </div>
                  </div>
					
				</div>
				<!-- end #content -->
	<!--			<div id="sidebar">
					<ul>
						<li>
							<ul>
								<li><a href="#">Protoplanetary Discs</a></li>
								<li><a href="#">Star Formation</a></li>
								<li><a href="pub.php">Full Publications List</a></li>
								<li><a href="anim.php">Animations</a></li>
							</ul>
						</li>
						<li>
					</ul>
				</div> -->
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
