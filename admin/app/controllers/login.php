<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct ()
	{
		parent::__construct();
		$this->load->model('free_m');
		$this->load->library('myclass');
		$this->load->library("session");
	}

	public function index()
	{
		if($_POST){
			$username = $this->input->post('username',true);
			$password = $this->input->post('password',true);
			if($username=='' or $password==''){
				echo "-1";
				return FALSE;
			}
			$user = $this->free_m->check_login($username, $password);
			if(count($user)){
				if ($user['username']==''){
						//echo "-1";
					echo json_encode(array('id'=>"-1"));
					return FALSE;
				}
				$data1 = array('lastlogin' => time());
				$this->db->update('tb_admin', $data1); 
				//更新session
				$this->session->set_userdata(array ('uid' => $user['uid'], 'username' => $user['username'], 'lastlogin' => $user['lastlogin'], 'email' => $user['email']) );
				echo json_encode(array('id'=>"0",'url'=>site_url("/home")));
			} else {
				echo json_encode(array('id'=>"-1"));
			}
		}else{
			$this->load->view('/taobaocp/login');
		}
	}
	public function loginout()
	{
		$this->session->sess_destroy();
		$this->load->helper('cookie');
		delete_cookie('uid');
		delete_cookie('username');
		delete_cookie('lastlogin');
		delete_cookie('email');
		//Header("Location: /index.php/admin/login");
		show_error1('您已经成功退出!','500', '操作提示',site_url("/login"),'1');
		exit;
	}
}