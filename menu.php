<div id="menu">
	<ul>
	<?
         include("make_list.php");


	  $menulist[0] = "Home";         $addresslist[0] = "index.php";
	  $menulist[1] = "Publications"; $addresslist[1] = "pub.php";
	  $menulist[2] = "CV";           $addresslist[2] = "cv.pdf";
#	  $menulist[3] = "Teaching";     $addresslist[3] = "teaching.php";       
#	  $menulist[4] = "Contact";      $addresslist[4] = "contact.php";
	  
	  $lengthmenu=sizeof($menulist);
	  
          for ($i=0; $i<=$lengthmenu; $i +=1)
           { if ($menulist[$i]==$currpage)
              {echo "<li class=\"current_page_item\"><span><a href=\"";
               echo $addresslist[$i];
               echo "\">"; echo $menulist[$i]; echo "</a></span></li>";
              }
             else {write_list($menulist[$i],$addresslist[$i]);}             
           }
	      
	 ?>
	</ul>
</div>
