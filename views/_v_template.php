

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title> MAKE MONEY 462</title>
  <link rel="icon" href="favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="/css/style.css">	

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	</head>				
	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>


 

<nav>
			                    <ul>
			                    	
			                    	<?php if($user): ?>
			                    	<?php include_once("template_pageTop.php");?>
			                        <?php else: ?>
			                        <?php include_once("template_pageTop1.php");?>
									<?php endif; ?>

			                    </ul>
</nav>			               
     
</header>
<article>
<div id="pageMiddle">&nbsp;
<body>	
	



	<?php if(isset($content)) echo $content; ?>


	<?php if(isset($client_files_body)) echo $client_files_body; ?>
	
</body>
 </div>
</article>

</div>
<?php include_once("template_pageBottom.php");?>
</html>























