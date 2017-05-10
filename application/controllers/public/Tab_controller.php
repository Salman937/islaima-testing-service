<?php
defined("BASEPATH") OR exit ("unathurixed access is not allowd");

/**
* 
*/
class Tab_controller extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
	}

public function index(){

       $data['content'] = "template/home_content";
		$this->load->view('front_common_layout',$data);

}
public function about_mth(){

       $data['content'] = "template/about_content";
		$this->load->view('front_common_layout',$data);

}
public function service_mth(){
   
       $data['content'] = "template/service_content";
		$this->load->view('front_common_layout',$data);

}
public function feature_mth(){

       $data['content'] = "template/feature_content";
		$this->load->view('front_common_layout',$data);

}

public function portfolio_mth(){

       $data['content'] = "template/portfolio_content";
		$this->load->view('front_common_layout',$data);

}
public function price_mth(){

       $data['content'] = "template/price_content";
		$this->load->view('front_common_layout',$data);

}
public function blog_mth(){

       $data['content'] = "template/blog_content";
		$this->load->view('front_common_layout',$data);

}
public function contact_mth(){

       $data['content'] = "template/contact_content";
		$this->load->view('front_common_layout',$data);

}
public function us_mth(){

       $data['content'] = "template/us_content";
		$this->load->view('front_common_layout',$data);

}
}



?>