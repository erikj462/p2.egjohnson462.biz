<?php
class users_controller extends base_controller {

    public function __construct() {
        parent::__construct();
        
    } 

   

    public function index() {
       $this->template->content = View::instance('v_users_index');


        echo $this->template;
    }

    public function signup() {
   
        #Set up view
        $this->template->content = View::instance('v_users_signup');

        #Render the view
        echo $this->template;
    }
   public function p_signup(){

    $_POST['created']   = Time::now();
    $_POST['password']  = sha1(PASSWORD_SALT.$_POST['password']);
    $_POST['token']     = sha1(TOKEN_SALT.$_POST['email'].Utils::generate_random_string());


    

    DB::instance(DB_NAME)->insert_row('users',$_POST);

/*
supposed to send them to login page!!!
    Router::redirect('/users/login');
*/    header('Location:/users/login');


   }

    public function login() {
        $this->template->content = View::instance('v_users_login');

        echo $this->template;
    }

public function p_login(){
    
    $_POST['password']  = sha1(PASSWORD_SALT.$_POST['password']);

    $q = 
        'SELECT token
        FROM users
        WHERE email ="'.$_POST['email'].'"
        AND password = "'.$_POST['password'].'"';
//echo $q;




  $token = DB::instance(DB_NAME)->select_field($q);

  #success
  if ($token) {

    setcookie('token',$token, strtotime('+1 year'),'/');
   Router::redirect("/users");
  } 
   # fail.
    else {

     Router::redirect("/users/login");
      
    }

  }



    public function create_label($method,$gift_wrap){

        
    }


    public function logout() {
        

      $new_token = sha1(TOKEN_SALT.$this->user->email.Utils::generate_random_string());
      $data = Array("token" => $new_token);
      DB :: instance(DB_NAME)->update ('users', $data, 'WHERE user_id ='. $this->user ->user_id);


      setcookie('token', '', strtotime('-1 year'), "/");
      Router::redirect('/');



    }






    public function profile($user_name = NUll ) {
     

      if(!$this->user){

        //Router:: redirect('/');
        die ('Members only. <a href="/users/login">Login</a>' );

      }



        #setup View
      $this->template->content = View::instance('v_users_profile');
      $this->template->title="Profile";



        #load client files
    $client_files_head = Array(
        '/css/profile.css',
        
        );

      $this->template->client_files_head = Utils:: load_client_files($client_files_head);

    $client_files_body = Array(
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