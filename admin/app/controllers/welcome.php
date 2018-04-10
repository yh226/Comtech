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
        $file_forder = 'uploads/';                      //�ļ�Ŀ¼
        
        $file_name  = date('YmdHis').rand(1000, 9999);  //���ļ���
        
        $config['upload_path'] = FCPATH.$file_forder;           //�ļ�����·��  ������õ���ʵ��·��
        $config['allowed_types'] = 'jpg|jpeg|gif|png|bmp|jpe';  //�����ϴ���ʽ
        $config['max_size'] = '2048000';       
		$config['width']  = '600';                    //�����ϴ���С
        $config['file_name']     = $file_name;                  //��ŵ��ļ���
        
        $this->load->library('upload', $config);
        
        $field_name = 'Filedata';   //�ϴ����ֶ���
        
        if ($this->upload->do_upload($field_name))
        {
            $data   = $this->upload->data();
            
            $img = base_url().$file_forder.$data['file_name'];      //���ظ�SWF AND JQUERY��ʾ��IMAGE��ַ
            
            exit ('FILEID:'.$img);
        }
        
        /*
         * �޸���
         * application/config/mimes.php
         * �޸ĺ������
         * 'bmp'	=>	array('image/bmp', 'application/octet-stream'),
         * 'gif'	=>	array('image/gif', 'application/octet-stream'),
         * 'jpeg'	=>	array('image/jpeg', 'image/pjpeg', 'application/octet-stream'),
         * 'jpg'	=>	array('image/jpeg', 'image/pjpeg', 'application/octet-stream'),
         * 'jpe'	=>	array('image/jpeg', 'image/pjpeg', 'application/octet-stream'),
         * 'png'	=>	array('image/png',  'image/x-png', 'application/octet-stream'),
         * 
         * Ҳ������ÿһ�ָ�ʽ�ﶼ����һ�� 'application/octet-stream'����Ϊ�����ҵĲ��ԣ�SWFUpload�ϴ����ļ�MIMEΪ'application/octet-stream'
         */
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */