<?php
class Kehu_m extends Ci_Model
{
	function __construct ()
	{
		parent::__construct();
	}
	public function check_select($pid)
	{
		mysql_query("SET NAMES GBK");
		$this->db->select('*');
		$this->db->order_by('top','asc');
		$query = $this->db->get_where('tb_fenlei',array('fsid'=>$pid,'show'=>'1'));
		return $query->result_array();
	}
	public function check_kehunumber($pid)
	{
		mysql_query("SET NAMES GBK");
		$this->db->select('*');
		$this->db->order_by('id','asc');
		$query = $this->db->get_where('tb_kehu',array('tb_khlx'=>$pid));
		return $query->num_rows();
	}
	public function get_kehu_list ($page,$limit)
	{
		$this->db->select('*');
		$this->db->order_by('id','desc');
		$this->db->limit($limit,$page);
		$query = $this->db->get('tb_kehu');
		if($query->num_rows() > 0){
			return $query->result_array();
		}	
    }
	public function get_yewu_list ($page,$limit)
	{
		$this->db->select('*');
		$this->db->order_by('id','desc');
		$this->db->limit($limit,$page);
		$query = $this->db->get('tb_yewu');
		if($query->num_rows() > 0){
			return $query->result_array();
		}	
    }
	public function get_yewu_list1 ($page,$limit,$id)
	{
		$this->db->select('*');
		$this->db->where(array('khid'=>$id));
		$this->db->order_by('id','desc');
		$this->db->limit($limit,$page);
		$query = $this->db->get('tb_yewu');
		if($query->num_rows() > 0){
			return $query->result_array();
		}	
    }
	public function get_skehu_list ($lx='tb_khmc',$title='',$khlx='0')
	{
		$this->db->select('*');
		
			//$this->db->where();
		if ($khlx!='0'){
			$this->db->where(array('tb_khlx'=>$khlx));
		}
		$this->db->like($lx, $title, 'both'); 
		$this->db->order_by('id','desc');
		$query = $this->db->get('tb_kehu');
		if($query->num_rows() > 0){
			return $query->result_array();
		}	
    }
	
	public function get_syewu_list ($khid='',$cpmc='',$dqrq1='',$dqrq2='')
	{
		$this->db->select('*');
		if ($khid!=''){
			$this->db->where(array('khid'=>$khid));
		}
		if ($cpmc!=''){
			$this->db->like('cpmc', $cpmc, 'both'); 
		}
		if ($dqrq1!=''){
			$this->db->where('dqrq >=',$dqrq1);
		}
		if ($dqrq2!=''){
			$this->db->where('dqrq <=',$dqrq2);
		}
		$this->db->order_by('id','desc');
		$query = $this->db->get('tb_yewu');
		if($query->num_rows() > 0){
			return $query->result_array();
		}	
    }
	
	public function add_kehu($data)
    {
		mysql_query("SET NAMES GBK");
    	$this->db->insert('tb_kehu',$data);
    	return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
    }
	public function add_yewu($data)
    {
		mysql_query("SET NAMES GBK");
    	$this->db->insert('tb_yewu',$data);
    	return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
    }
	public function update_kehu($id, $data){
		$this->db->where('id',$id);
  		$this->db->update('tb_kehu', $data); 
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}
	public function update_yewu($id, $data){
		$this->db->where('id',$id);
  		$this->db->update('tb_yewu', $data); 
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}
	public function get_kehu_by_id($id)
    {
		$query = $this->db->get_where('tb_kehu',array('id'=>$id));
		
		if($query->num_rows>0){
			return $query->row_array();
		} 
    }
	public function get_yewu_by_id($id)
    {
		$query = $this->db->get_where('tb_yewu',array('id'=>$id));
		
		if($query->num_rows>0){
			return $query->row_array();
		} 
    }
	public function select_khname($id)
    {
		$query = $this->db->get_where('tb_kehu',array('id'=>$id));
		
		//if($query->num_rows>0){
			return $query->result_array();
		//}
    }
	function del_kehu($id)
	{
		$this->db->where('id', $id)->delete('tb_kehu');
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}
	function del_yewu($id)
	{
		$this->db->where('id', $id)->delete('tb_yewu');
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}
}