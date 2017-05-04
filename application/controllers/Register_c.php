<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_c extends CI_Controller {


    function  __construct() {
        parent::__construct();




        /*  if (!$this->session->userdata('name'))
        {
            redirect('login/logout');
        }*/

    }
	public function index()
	{ 
	
      $this->load->view('welcome_message');
	}

    
	public function load()
	{ ;
      $this->load->view('welcome_message');
	}
    


}
?>