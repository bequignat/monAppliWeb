
<?php include 'header.html';  
if (!isset($_GET['page'])) 
  include 'calculatrice.html';  
  else { 
       if($_GET['page']=="nous-contacter") 
     include 'nous-contacter.html';} 
	else { 
		if($GET['page']=="articles") 
			include 'articles.html';} 
include 'footer.html'; ?> 