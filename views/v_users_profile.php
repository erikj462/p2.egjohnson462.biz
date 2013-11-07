
<style type="text/css">
#pageMiddle{
	width: 1000px;
	margin: 0px auto;
	height: 900px;
background-color: white;

}


</style>
<?php if(isset($user)): ?>
      <h1>This is the profile for <?=$user->first_name?></h1>
<?php else: ?>
      <h1>No useer specified</h1>
<?php endif; ?>


	
