<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sys extends CI_Controller {
	function __construct ()
	{
		parent::__construct();
		$this->load->model('free_m');
		$this->load->model('kehu_m');
		$this->load->library('myclass');
		$this->load->library("session");
		if ($this->session->userdata('username')==''){
			//redirect(site_url('/login'),'location');
			show_error1('����û�е�¼','500', '������ʾ','/login','1');
			exit;
		}
	}
	public function index($page=1)
	{
		$this->load->view('taobaocp/sys');
	}
	
}