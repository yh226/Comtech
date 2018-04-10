<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct ()
	{
		parent::__construct();
		$this->load->model('free_m');
		$this->load->model('kehu_m');
		$this->load->library("session");
		$this->load->library("column");
		//if ($this->session->userdata('username')==''){
			//redirect(site_url('/login'),'location');
			//show_error1('您还没有登录，请先登录','500', '云满客 - 领先的客户管理软件。',site_url('login'),'1');
			//exit;
		//}
	}
	public function index()
	{
		if ($this->session->userdata('username')==''){
			$this->load->view('/taobaocp/yunmanke');
		}else{
			$this->load->view('/taobaocp/home');
		}
	}
	
	public function top()
	{
		if ($this->session->userdata('username')==''){
		exit;
		}
		mysql_query("SET NAMES GBK");
		$data['toplist']=$this->free_m->get_topnav_list();
		$this->load->view('taobaocp/top',$data);
		//$this->load->view('/taobaocp/top',$data);
	}
	public function bottom()
	{
		if ($this->session->userdata('username')==''){
		exit;
		}
		mysql_query("SET NAMES GBK");
		$data['cp']='';
		$this->load->view('taobaocp/bottom',$data);
		//$this->load->view('/taobaocp/top',$data);
	}
	
	public function left($id="1")
	{
		if ($this->session->userdata('username')==''){
		exit;
		}
		mysql_query("SET NAMES GBK");
		$data['toptitle']=$this->free_m->get_top_title($id);
		$data['id']=$id;
		$data['fulist']=$fulist =$this->free_m->get_left_fu_list($id);
		$arr=array();
		foreach($fulist as $k=>$v){
                $arr[$k]['ftitle']=$v['title'];
				$arr[$k]['fid']=$v['id'];
				$arr[$k]['zilist']=$this->free_m->get_left_zi_list($v['id']);
				
		}
		$data['arr']=$arr;
		$this->load->view('taobaocp/left',$data);
		//$this->load->view('/taobaocp/left_'.$id);
	}
	
	public function right()
	{
		if ($this->session->userdata('username')==''){
		exit;
		}
		mysql_query("SET NAMES GBK");
		$this->load->view('/taobaocp/right');
	}
}
