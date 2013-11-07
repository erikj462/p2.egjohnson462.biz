<!DOCTYPE html>
<html>
<style type="text/css">
#pageMiddle{
	width: 1000px;
	margin: 0px auto;
	height: 900px;
background-color: white;

}


</style>


<head>
	 		
                


	<title><?php if(isset($title)) echo $title; ?></title>
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
					
	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>

	
	
    
 
<body>	
	
	<?php if(isset($content)) echo $content; ?>

	<?php if(isset($client_files_body)) echo $client_files_body; ?>

<article>

<?php if($user):?>
	
	Hello <?=$user->first_name;?>




<?php else: ?>	
	<h2> Sign up or log in to get started!!!</h2>
	<p>  This blog is the perfect open ressource for all the trading ideas you might have. </p>
	 follow other money makers to view thier stategies 
	
		 <h3>Below is a few discription links of some main topics:</h3> </p>
			<table>
			<tr>
				 <li><a href="http://www.investopedia.com/terms/v/verticalspread.asp"> Vertical Spreads</a></li>
				 <li><a href="http://www.investopedia.com/terms/i/ironcondor.asp"> Iron Condors</a></li>
				 <li><a href="http://www.investopedia.com/terms/c/calendarspread.asp"> Calendar Spread</a></li>
				 <li><a href="http://www.investopedia.com/terms/t/theta.asp"> Theta decay</a> </li>
			
			</tr>
		</table>

		<p>Thanks for stopping by</p>
<?php endif;?>	
</article>

</div>
</body>


