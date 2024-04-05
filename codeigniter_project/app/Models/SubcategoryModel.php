<?php

namespace App\Models;
use CodeIgniter\Model;

class SubcategoryModel extends Model
{
	protected $table = 'subcategory';
	protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;
	
	protected $allowedFields = ['sub_image'];
	
	protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
	
	public function addsubcategory($post)
	{
		$db = db_connect();
		$run = $db->table('subcategory')->insert($post);
		return $run;
	}

	public function getsubcategory(){
		$db = db_connect();
		$data = $db->table('subcategory')->get()->getResultArray();
		return $data;
	}

	public function editsubcategory($id){
		$db = db_connect();
		$edit = $db->table('subcategory')->where('id', $id)->get()->getResultArray();
		return $edit[0];
	}
	
	public function editsubcat($edit, $id){
		$db = db_connect();
		$subdata = $db->table('subcategory')->where('id', $id)->update($edit);
		return $subdata;
	}
	
	public function subcatid($id){
		$db = db_connect();
		$data = $db->table('subcategory')->where('categoryid', $id)->get()->getResultArray();
		return $data;
		
	}
	
	public function subcategory($catsubid){
		$db = db_connect();
		$data = $db->table('subcategory')->where('categoryid', $catsubid)->get()->getResultArray();
		// echo '<pre>';
		// print_r($data);
		// echo '</pre>';
		return $data;
	}
	
	
	public function subdetail($id){
		$db = db_connect();
		$data = $db->table('subcategory')->where('id', $id)->get()->getResultArray();
		return $data[0];
		
	}
	
}