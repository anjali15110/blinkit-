<?php

namespace App\Models;
use CodeIgniter\Model;

class Curd_Model extends Model
{
	public function get_all($select,$table,$where, $orderby, $order = null)
	{
		$builder = $this->db->table($table);
		$builder->select($select);
		if(isset($where) && count($where) > 0 )
		{
			$builder->where($where);
		}
		$builder->orderBy($orderby,$order);
		$query = $builder->get();
		return $query->getResult();
	}
	
	
	public function get_1($select = true, $table = true, $where = 1)
	{
		$builder = $this->db->table($table);
		$builder->where($where);
		$builder->select($select);
		$query = $builder->get();
		return  $query->getRow();
	}
	
}