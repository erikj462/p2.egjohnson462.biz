<?php
class erik_controller extends base_controller {

    public function __construct() {
        parent::__construct();
        
    } 

   

    public function index() {
       echo "This  index page";
        
        echo Time ::now();
    }


    public function test_db(){



/*
      $q = 'INSERT INTO users
            SET first_name = "Albert",
                last_name = "jones"';

          echo $q; 


          $q='UPDATE users
              SET email = "Albert@aol.com"
              WHERE first_name = "Albert"';
 DB:: instance(DB_NAME)->query($q);
*/

/*
$new_user = array(
'first_name'=> 'erik',
 'last_name'=> 'john',
 'email' => 'ej@gmail.com',
    );
     

        DB:: instance(DB_NAME)->insert('users',$new_user);

*/
#echo DB:: instance(DB_NAME)->select_field($q);
/*  not sanitized
$_POST['first_name']

$q = 'SELECT email
      FROM users
      WHERE first_name = "'.$_POST['first_name'].'"';
*/
$_POST['first_name'] = 'erik';
$_POST = DB:: instance(DB_NAME)->sanitize($_POST);

$q = 'SELECT email
      FROM users
      WHERE first_name = "'.$_POST['first_name'].'"';


echo DB:: instance(DB_NAME)->select_field($q);






}



    public function signup() {
        echo "This is the signup page";
    }

    public function login() {
        echo "This is the login page";
    }

    public function create_label($method,$gift_wrap){

        
    }






    public function logout() {
        echo "This  page";
    }

    public function profile($user_name = NUll ) {
     

        #setup View
      $this->template->content = View::instance('v_users_profile');
      $this->template->title="Profile";



        #load client files
    $client_files_head =array(
        '/css/profile.css',
        
        );

      $this->template->client_files_head = Utils:: load_client_files($client_files_head);

    $client_files_body =array(
        '/js/profile.js',
        
        );

      $this->template->client_files_body = Utils:: load_client_files($client_files_body);



      #pass data to the view  
      $this->template->content->user_name = $user_name;    

        #display view
       echo $this->template; 


       //$view = View:: instance("v_users_profile");

       // $view-> user_name = $user_name;

        //echo $view;

        
    }

} # end of the class