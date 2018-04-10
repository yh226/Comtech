<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Yewu extends CI_Controller {
	function __construct ()
	{
		parent::__construct();
		$this->load->model('free_m');
		$this->load->model('kehu_m');
		$this->load->library('myclass');
		$this->load->library("session");
		$this->load->helper('url');
		if ($this->session->userdata('username')==''){
			//redirect(site_url('/login'),'location');
			show_error1('����û�е�¼','500', '������ʾ','/login','1');
			exit;
		}
	}
	public function index($page=1)
	{
		mysql_query("SET NAMES GBK");
		$limit =12;
		$config['uri_segment'] = 3;
		$config['use_page_numbers'] = TRUE;
		$config['base_url'] = site_url('yewu/index/');
		$config['total_rows'] = $this->db->count_all('tb_yewu');
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
		$data['list'] = $this->kehu_m->get_yewu_list($start, $limit);
		$this->load->view('taobaocp/yewu_list',$data);
	}
	public function add()
	{
		if($_POST){
			if(!$this->input->post('khid')){
			show_error1('����ѡ��ͻ�','500', '������ʾ');
			exit;
			}
			if(!$this->input->post('ktrq')){
			show_error1('��ͨʱ�䲻��Ϊ��','500', '������ʾ');
			exit;
			}
			
			if(!$this->input->post('dqrq')){
			show_error1('����ʱ�䲻��Ϊ��','500', '������ʾ');
			exit;
			}
			
			
			$str = array(
				'khid'=>$this->input->post('khid'),
				'cpmc'=>$this->input->post('cpmc'),
				'ktrq'=>$this->input->post('ktrq'),
				'dqrq'=>$this->input->post('dqrq'),
				'txrq'=>$this->input->post('txrq'),
				'cbjg'=>$this->input->post('cbjg'),
				'xsjg'=>$this->input->post('xsjg'),
				'content'=>$this->input->post('content'),
				'userid'=>$this->session->userdata('uid')
			);
			
			if($this->kehu_m->add_yewu($str)){
				//$this->myclass->notice('alert("��ӳɹ���");window.location.href="'.site_url('admin/shuju').'";');
				//print_r($str);
				show_error1('����ҵ��ɹ�','500', '������ʾ');
			}
			exit;
		}
		$this->load->view('taobaocp/yewu_luru');
	}
	public function show($id=0)
	{
		mysql_query("SET NAMES GBK");
		if($_POST){
			if(!$this->input->post('khid')){
			show_error1('����ѡ��ͻ�','500', '������ʾ');
			exit;
			}
			if(!$this->input->post('ktrq')){
			show_error1('��ͨʱ�䲻��Ϊ��','500', '������ʾ');
			exit;
			}
			if(!$this->input->post('dqrq')){
			show_error1('����ʱ�䲻��Ϊ��','500', '������ʾ');
			exit;
			}
			$str = array(
				'khid'=>$this->input->post('khid'),
				'cpmc'=>$this->input->post('cpmc'),
				'ktrq'=>$this->input->post('ktrq'),
				'dqrq'=>$this->input->post('dqrq'),
				'txrq'=>$this->input->post('txrq'),
				'cbjg'=>$this->input->post('cbjg'),
				'xsjg'=>$this->input->post('xsjg'),
				'content'=>$this->input->post('content')
			);
			
			if($this->kehu_m->update_yewu($id,$str)){
				//$this->myclass->notice('alert("��ӳɹ���");window.location.href="'.site_url('admin/shuju').'";');
				//print_r($str);
				show_error1('ҵ���޸ĳɹ�','500', '������ʾ');
			}else{
				show_error1('��δ���κ��޸�','500', '������ʾ');
			}
			exit;
		}
		$data['kehu']=$this->kehu_m->get_yewu_by_id($id);
		$this->load->view('taobaocp/yewu_edit',$data);
	}
	public function select()
	{
		mysql_query("SET NAMES GBK");
		if($_POST){
			$khid=$this->input->post('khid');
			$cpmc=$this->input->post('title');
			$dqrq1=$this->input->post('dqrq1');
			$dqrq2=$this->input->post('dqrq2');
			$data['list'] = $this->kehu_m->get_syewu_list($khid,$cpmc,$dqrq1,$dqrq2);
		}else{
		$data['list'] ='';
		}
		$this->load->view('taobaocp/yewu_select',$data);
	}
	public function del($id=''){
		if($this->kehu_m->del_yewu($id)){
			echo json_encode(array('id'=>"0",'url'=>site_url($this->input->post('url'))));
		}else{
			echo json_encode(array('id'=>"-1"));
		}
		
	}
}