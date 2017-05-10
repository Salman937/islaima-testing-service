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

       $data['content'] = "public/content";
		$this->load->view('front_common_layout',$data);

}
public function about_mth(){

       $data['content'] = "public/about";
		$this->load->view('front_common_layout',$data);

}
public function service_mth(){
       $data['content'] = "public/services";
		$this->load->view('front_common_layout',$data);

}
public function feature_mth(){

       $data['content'] = "public/content";
		$this->load->view('front_common_layout',$data);

}
public function typography_mth(){

       $data['content'] = "public/typography";
		$this->load->view('front_common_layout',$data);

}

public function portfolio_mth(){

       $data['content'] = "public/portfolio";
		$this->load->view('front_common_layout',$data);

}
public function price_mth(){

       $data['content'] = "public/price";
		$this->load->view('front_common_layout',$data);

}
public function blog_mth(){

       $data['content'] = "public/blog";
		$this->load->view('front_common_layout',$data);

}
public function contact_mth(){

       $data['content'] = "public/contact";
		$this->load->view('front_common_layout',$data);

}
public function us_mth(){

       $data['content'] = "public/content";
		$this->load->view('front_common_layout',$data);

}
}



?>