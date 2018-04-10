<?php
class Free_m extends Ci_Model
{
	function __construct ()
	{
		parent::__construct();
	}
	function check_username($username){
		$query = $this->db->get_where('tb_admin',array('username'=>$username,'systemkey'=>md5($username)));
		if($query->num_rows>0){
			return $query->row_array();
		} else
		{
			echo json_encode(array('id'=>"-1"));
			exit;
		}
	}
	function check_email($username){
		$query = $this->db->get_where('tb_admin',array('email'=>$username));
		if($query->num_rows>0){
			return $query->row_array();
		} else
		{
			echo json_encode(array('id'=>"-1"));
			exit;
		}
	}
	function check_login($username,$password){
		if (!$this->myclass->isEmail($username)){
			$query = $this->check_username($username);
		}else{
			$query = $this->check_email($username);
		}
		$password = md5($password);
		if($query['password']==$password){
			$this->db->where('uid', @$query['uid']);
			return $query;
		} else {
			echo json_encode(array('id'=>"-1"));
			exit;
		}
		
	}
	public function get_topnav_list()
	{
		$this->db->select('*');
		$this->db->order_by('id','asc');
		$this->db->where(array('show'=>'1','tid'=>'1'));
		$query = $this->db->get('tb_column');
		if($query->num_rows() > 0){
			return $query->result_array();
		}	
    }
	
	public function get_left_fu_list ($id)
	{
		$this->db->select('*');
		$this->db->where(array('show'=>'1','tid'=>'2','gid'=>$id));
		$this->db->order_by('top','asc');
		$query = $this->db->get('tb_column');
		//if($query->num_rows() > 0){
			return $query->result_array();
		//}
    }
	public function get_left_zi_list ($fid)
	{
		$this->db->select('*');
		$this->db->where('show','1');
		$this->db->where('gid',$fid);
		$this->db->order_by('top','asc');
		$query = $this->db->get('tb_column');
		if($query->num_rows() > 0){
			return $query->result_array();
		}
    }
	public function get_top_title($id)
    {
		$query = $this->db->get_where('tb_column',array('id'=>$id));
		
		if($query->num_rows>0){
			return $query->row_array();
		} 
    }
	public function get_config_list ($id,$page,$limit)
	{
		$this->db->select('*');
		$this->db->where(array('fsid'=>$id));
		$this->db->order_by('top','asc');
		$this->db->limit($limit,$page);
		$query = $this->db->get('tb_fenlei');
		if($query->num_rows() > 0){
			return $query->result_array();
		}	
    }
	public function get_fenlei_by_id($id)
    {
		$query = $this->db->get_where('tb_fenlei',array('id'=>$id));
		
		if($query->num_rows>0){
			return $query->row_array();
		} 
    }
	public function get_user_by_id($id)
    {
		$query = $this->db->get_where('tb_admin',array('uid'=>$id));
		if($query->num_rows>0){
			return $query->row_array();
		} 
    }
	public function add_fenlei($data)
    {
		mysql_query("SET NAMES GBK");
    	$this->db->insert('tb_fenlei',$data);
    	return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
    }
	public function update_fenlei($id, $data){
		$this->db->where('id',$id);
  		$this->db->update('tb_fenlei', $data); 
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}
	public function update_password($id, $data){
		$this->db->where('uid',$id);
  		$this->db->update('tb_admin', $data); 
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}
}