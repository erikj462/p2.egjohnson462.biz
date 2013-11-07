
<style type="text/css">
#pageMiddle{
	width: 1000px;
	margin: 0px auto;
	height: 900px;
background-color: white;

}


</style>

<article>



<h2>Log in</h2><br><br><br><br>

<form method ='POST' action='/users/p_login'>


	<p> Please enter you email address</p>
	<input type='email' name= 'email' required="required"/>
	 <br><br><br><br>
	<p> Please enter you password</p>
	<input type='password' name= 'password'required="required"/> <br><br><br>


	<input type='submit' value='Log in'>

	


</form>
	</article>
<?php
//echo "<pre>";
//print_r($_POST);
//echo "</pre>";



