<li>
	<h2>Recent Papers</h2>
		   <ul>
		    <? 
                      include("paper_list.dat");
		      $NP=sizeof($PaperTitle);
		      for ($i=1; $i<=4; $i++)
		       {
		         echo "<li><a href=\"";
		         echo $PaperLink[$NP-$i];
			 echo "\">";
			 echo $PaperTitle[$NP-$i];
			 echo "</a></li>";
                       }
	             ?> 
		   </ul>
</li>
<li>

