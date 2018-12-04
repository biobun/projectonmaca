<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Multi_model extends CI_Model {
	public function fetch(
		$select, $tbl, 
		$join = null, 
		$where = null,
		$order = null, 
		$limit = null, 
		$offset = null, 
		$group_by = null
	){
		$this->db->select($select);
		if(!is_null($join)){
			if(count($join) > 0){
				foreach($join as $join_tbl=>$key){
					if(in_array($key[1], array('left', 'right', 'outer', 'inner', 'left outer', 'right outer'))){
						$this->db->join($join_tbl, $key[0], $key[1]);
					}else{
						$this->db->join($join_tbl, $key[0]);
					}
				}
			}
		}
		if(!is_null($where)){$this->db->where($where);}
		
		if(!is_null($order)){
			if(count($order) > 0){
				foreach($order as $by=>$sort){
					$this->db->order_by($by, $sort);
				}
			}
		}
		if(!is_null($limit)){
			if(!is_null($offset)){
				$this->db->limit($limit, $offset);
			}else{
				$this->db->limit($limit);
			}
		}
		if(!is_null($group_by)){
			if(count($group_by) > 0){
				for($g = 0; $g < count($group_by); $g++){
					$this->db->group_by($group_by[$g]);
				}
			}
		}
		return $this->db->get($tbl);
	}
	public function insert($data, $tbl){
		return $this->db->insert($tbl, $data);
	}
	public function update($where, $tbl, $data){
		return $this->db->where($where)
						->update($tbl, $data);
	}
	public function delete($where, $tbl){
		return $this->db->where($where)
						->delete($tbl);
	}
}