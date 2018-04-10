<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    public function __construct() {
        parent::__construct();
        
        $this->load->helper('url');
    }
	public function index()
	{
        $data['upload_url']     = site_url('welcome/upload');
		$this->load->view('/taobaocp/welcome_message', $data);
	}
    
    public function upload()
    {
        $file_forder = 'uploads/';                      //文件目录
        
        $file_name  = date('YmdHis').rand(1000, 9999);  //新文件名
        
        $config['upload_path'] = FCPATH.$file_forder;           //文件保存路径  这儿我用的是实际路径
        $config['allowed_types'] = 'jpg|jpeg|gif|png|bmp|jpe';  //允许上传格式
        $config['max_size'] = '2048000';       
		$config['width']  = '600';                    //允许上传大小
        $config['file_name']     = $file_name;                  //存放的文件名
        
        $this->load->library('upload', $config);
        
        $field_name = 'Filedata';   //上传表单字段名
        
        if ($this->upload->do_upload($field_name))
        {
            $data   = $this->upload->data();
            
            $img = base_url().$file_forder.$data['file_name'];      //返回给SWF AND JQUERY显示的IMAGE地址
            
            exit ('FILEID:'.$img);
        }
        
        /*
         * 修改了
         * application/config/mimes.php
         * 修改后的如下
         * 'bmp'	=>	array('image/bmp', 'application/octet-stream'),
         * 'gif'	=>	array('image/gif', 'application/octet-stream'),
         * 'jpeg'	=>	array('image/jpeg', 'image/pjpeg', 'application/octet-stream'),
         * 'jpg'	=>	array('image/jpeg', 'image/pjpeg', 'application/octet-stream'),
         * 'jpe'	=>	array('image/jpeg', 'image/pjpeg', 'application/octet-stream'),
         * 'png'	=>	array('image/png',  'image/x-png', 'application/octet-stream'),
         * 
         * 也就是在每一种格式里都加了一个 'application/octet-stream'，因为经过我的测试，SWFUpload上传的文件MIME为'application/octet-stream'
         */
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */