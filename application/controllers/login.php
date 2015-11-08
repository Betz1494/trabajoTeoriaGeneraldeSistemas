<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		if(isset($_POST['password'])){
		$this->load->model('usuarios_model');
		//$this->load-view('welcome_message');
       if($this->usuarios_model->login($_POST['login'],$_POST['password'])){
         redirect('welcome');

        }	
        else{
        	redirect('welcome_message');
        }	
	}
	$this->load->view('welcome_message');
  }
}
