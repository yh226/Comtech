<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kehu extends CI_Controller {
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
	public function index($page=1)
	{
		mysql_query("SET NAMES GBK");
		$limit =12;
		$config['uri_segment'] = 3;
		$config['use_page_numbers'] = TRUE;
		$config['base_url'] = site_url('kehu/index/');
		$config['total_rows'] = $this->db->count_all('tb_kehu');
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
		$data['list'] = $this->kehu_m->get_kehu_list($start, $limit);
		$this->load->view('taobaocp/kehu_list',$data);
	}
	//客户列表
	public function list_luru($page=1)
	{
		mysql_query("SET NAMES GBK");
		$limit =10;
		$config['uri_segment'] = 3;
		$config['use_page_numbers'] = TRUE;
		$config['base_url'] = site_url('kehu/list_luru/');
		$config['total_rows'] = $this->db->count_all('tb_kehu');
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
		$data['list'] = $this->kehu_m->get_kehu_list($start, $limit);
		$this->load->view('taobaocp/kehu_list_luru',$data);
	}
	
	//录入
	public function luru()
	{
		
		if($_POST){
			if(!$this->input->post('khmc')){
			show_error1('客户名称不能为空','500', '操作提示');
			exit;
			}
			if(!$this->input->post('khllr')){
			show_error1('客户联络人不能为空','500', '操作提示');
			exit;
			}
			$str = array(
				'tb_khmc'=>$this->input->post('khmc'),
				'tb_dwmc'=>$this->input->post('dwmc'),
				'tb_khllr'=>$this->input->post('khllr'),
				'tb_sj'=>$this->input->post('sj'),
				'tb_qq'=>$this->input->post('qq'),
				'tb_sshy'=>$this->input->post('sshy'),
				'tb_khdh'=>$this->input->post('khdh'),
				'tb_email'=>$this->input->post('email'),
				'tb_wfllr'=>$this->input->post('wfllr'),
				'tb_address'=>$this->input->post('address'),
				'tb_khlx'=>$this->input->post('khlx'),
				'tb_content'=>$this->input->post('content'),
				'tb_khxz'=>$this->input->post('khxz'),
				'tb_khly'=>$this->input->post('khly'),
				'tb_ssqy'=>$this->input->post('ssqy'),
				'tb_hy'=>$this->input->post('hy'),
				'tb_xyzt'=>$this->input->post('xyzt'),
				'tb_http'=>$this->input->post('http'),
				'tb_admin'=>$this->session->userdata('uid')
			);
			
			if($this->kehu_m->add_kehu($str)){
				//$this->myclass->notice('alert("添加成功！");window.location.href="'.site_url('admin/shuju').'";');
				//print_r($str);
				show_error1('新增客户成功','500', '操作提示');
			}
			exit;
		}
		$this->load->view('taobaocp/kehu_luru');
	}
	public function show($id=0)
	{
		mysql_query("SET NAMES GBK");
		if($_POST){
			if(!$this->input->post('khmc')){
			show_error1('客户名称不能为空','500', '操作提示');
			exit;
			}
			if(!$this->input->post('khllr')){
			show_error1('客户联络人不能为空','500', '操作提示');
			exit;
			}
			$str = array(
				'tb_khmc'=>$this->input->post('khmc'),
				'tb_dwmc'=>$this->input->post('dwmc'),
				'tb_khllr'=>$this->input->post('khllr'),
				'tb_sj'=>$this->input->post('sj'),
				'tb_qq'=>$this->input->post('qq'),
				'tb_sshy'=>$this->input->post('sshy'),
				'tb_khdh'=>$this->input->post('khdh'),
				'tb_email'=>$this->input->post('email'),
				'tb_wfllr'=>$this->input->post('wfllr'),
				'tb_address'=>$this->input->post('address'),
				'tb_khlx'=>$this->input->post('khlx'),
				'tb_content'=>$this->input->post('content'),
				'tb_khxz'=>$this->input->post('khxz'),
				'tb_khly'=>$this->input->post('khly'),
				'tb_ssqy'=>$this->input->post('ssqy'),
				'tb_hy'=>$this->input->post('hy'),
				'tb_xyzt'=>$this->input->post('xyzt'),
				'tb_http'=>$this->input->post('http'),
				'tb_admin'=>$this->session->userdata('uid')
			);
			
			if($this->kehu_m->update_kehu($id,$str)){
				//$this->myclass->notice('alert("添加成功！");window.location.href="'.site_url('admin/shuju').'";');
				//print_r($str);
				show_error1('客户资料修改成功','500', '操作提示');
			}else{
				show_error1('您未做任何修改','500', '操作提示');
			}
			exit;
		}
		$data['ywlist'] = $this->kehu_m->get_yewu_list1('0','8',$id);
		$data['kehu']=$this->kehu_m->get_kehu_by_id($id);
		$this->load->view('taobaocp/kehu_edit',$data);
	}
	public function select(){
		mysql_query("SET NAMES GBK");
		if($_POST){
			if(!$this->input->post('cxlx')){
			show_error1('系统出错！','500', '操作提示');
			exit;
			}
			
			switch ($this->input->post('cxlx'))
			{
				case '1':
					$vodty='tb_khmc';
					break;
				case '2':
					$vodty='tb_dwmc';
					break;
				case '3':
					$vodty="tb_khllr";
					break;
				case '4':
					$vodty="tb_sj";
					break;
			}
			$data['list'] = $this->kehu_m->get_skehu_list($vodty,$this->input->post('title'),$this->input->post('khlx'));
		}else{
		$data['list'] ='';
		}
		$this->load->view('taobaocp/kehu_select',$data);
	}
	public function del($id=''){
		if($this->kehu_m->del_kehu($id)){
			echo json_encode(array('id'=>"0",'url'=>site_url($this->input->post('url'))));
		}else{
			echo json_encode(array('id'=>"-1"));
		}
		
	}
}