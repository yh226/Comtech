<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Config extends CI_Controller {
	function __construct ()
	{
		parent::__construct();
		$this->load->model('free_m');
		$this->load->model('kehu_m');
		$this->load->library('myclass');
		$this->load->library("session");
		if ($this->session->userdata('username')==''){
			//redirect(site_url('/login'),'location');
			show_error1('您还没有登录','500', '操作提示','/login','1');
			exit;
		}
	}
	public function index($id,$page=1)
	{
		mysql_query("SET NAMES GBK");
		$limit =12;
		$config['uri_segment'] = 3;
		$config['use_page_numbers'] = TRUE;
		$config['base_url'] = site_url('config/index/'.$id);
		$this->db->where('fsid',$id);
		$this->db->from('tb_fenlei');
		$config['total_rows']  = $this->db->count_all_results();
		$config['per_page'] = $limit;
		$config['prev_link'] = '&lt;';
		$config['prev_tag_open'] = '<li class=\'paginItem\'>';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class=\'paginItem current\'><a href=\'#\'>';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class=\'paginItem\'>';
		$config['num_tag_close'] = '</li>';
		$config['next_link'] = '&gt;';
		$config['next_tag_open'] = '<li class=\'paginItem\'>';
		$config['next_tag_close'] = '</li>';
        $config['first_link'] = '&laquo;';
		$config['first_tag_open'] = '<li class=\'paginItem\'>';
		$config['first_tag_close'] = '</li>';
        $config['last_link'] = '&raquo;';
		$config['last_tag_open'] = '<li class=\'paginItem\'>';
		$config['last_tag_close'] = '</li>';
		$config['num_links'] = 3;
		
		$this->load->library('pagination');
		$this->pagination->initialize($config);
		$start = ($page-1)*$limit;
		$data['pagination'] = $this->pagination->create_links();
		$data['page']=$page;
		$data['total_rows']=$config['total_rows'];
		$data['list'] = $this->free_m->get_config_list($id,$start, $limit);
		$this->load->view('taobaocp/fenlei_list',$data);
	}
	
	//录入
	public function add($id='1')
	{
		
		if($_POST){
			if(!$this->input->post('title')){
			show_error1('标题不能为空','500', '操作提示');
			exit;
			}
			if(!$this->input->post('top')){
			show_error1('排序不能为空','500', '操作提示');
			exit;
			}
			if($this->input->post('show')==''){
			show_error1('是否显示不能为空','500', '操作提示');
			exit;
			}
			$str = array(
				'title'=>$this->input->post('title'),
				'top'=>$this->input->post('top'),
				'fsid'=>$id,
				'show'=>$this->input->post('show')
			);
			
			if($this->free_m->add_fenlei($str)){
				//$this->myclass->notice('alert("添加成功！");window.location.href="'.site_url('admin/shuju').'";');
				//print_r($str);
				show_error1('新增分类成功','500', '操作提示');
			}
			exit;
		}
		$data['id']=$id;
		$this->load->view('taobaocp/fenlei_luru',$data);
	}
	public function show($id=0)
	{
		mysql_query("SET NAMES GBK");
		if($_POST){
			if(!$this->input->post('title')){
			show_error1('标题不能为空','500', '操作提示');
			exit;
			}
			if(!$this->input->post('top')){
			show_error1('排序不能为空','500', '操作提示');
			exit;
			}
			if($this->input->post('show')==''){
			show_error1('是否显示不能为空','500', '操作提示');
			exit;
			}
			$str = array(
				'title'=>$this->input->post('title'),
				'top'=>$this->input->post('top'),
				'show'=>$this->input->post('show')
			);
			
			if($this->free_m->update_fenlei($id,$str)){
				//$this->myclass->notice('alert("添加成功！");window.location.href="'.site_url('admin/shuju').'";');
				//print_r($str);
				show_error1('分类修改成功','500', '操作提示');
			}else{
				show_error1('您未做任何修改','500', '操作提示');
			}
			exit;
		}
		$data['fenlei']=$this->free_m->get_fenlei_by_id($id);
		$this->load->view('taobaocp/fenlei_edit',$data);
	}
	
	public function del($id=''){
		echo json_encode(array('id'=>"-1"));
		
	}
	public function password(){
		mysql_query("SET NAMES GBK");
		$id=$this->session->userdata('uid');
		if($_POST){
			if(!$this->input->post('email')){
			show_error1('邮箱不能为空！','500', '操作提示');
			exit;
			}
			if (!$this->myclass->isEmail($this->input->post('email'))){
			show_error1('邮箱格式错误！','500', '操作提示');
			exit;
			}
			if($this->input->post('password')){
			$str = array(
				'email'=>$this->input->post('email'),
				'password'=>md5($this->input->post('password'))
			);
			}else{
			$str = array(
				'email'=>$this->input->post('email')
			);
			}
			if($this->free_m->update_password($id,$str)){
				show_error1('账号修改成功','500', '操作提示');
			}else{
				show_error1('您输入的邮箱和密码和原信息相同','500', '操作提示');
			}
		}
		$data['getuser']=$this->free_m->get_user_by_id($id);
		$this->load->view('taobaocp/getpass',$data);
	}
}