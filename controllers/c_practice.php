<?php


class practice_controller extends base_controller {


echo("hello")

   public function index(){
		echo APP_PATH'<br>';
		echo Doc_Root;

		

		    	$imageObj = new Image('http://placekitten.com/1000/1000');

		    	$imageObj-> resize(200,200);

		    	$imageObj-> display();

   }
    
   public function test2(){

   	Time ::now();
   }
    

}

