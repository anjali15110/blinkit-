<?php

namespace App\Models;
use CodeIgniter\Model;

class ProductModel extends Model
{
	protected $table = 'product';
	protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;
	
	protected $allowedFields = ['name', 'price', 'unit', 'features', 'description', 'disclaimer'];
	
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
	
	public function addinsert($data){
		$db = db_connect();
		$run = $db->table('product')->insert($data);
		return $run;
	}
	
	public function getproduct(){
		$db = db_connect();
		$get = $db->table('product')->get()->getResultArray();
		return $get;
	}
	
	public function editproduct($id){
		$db = db_connect();
		$edit = $db->table('product')->where('id', $id)->get()->getResultArray();
		return $edit[0];
	}
	
	public function updateproducts($productdata){
		$db = db_connect();
		$gets = $db->table('product')->where(['id'=>$productdata['id']])->update($productdata);
		return $gets;
	}
	
	public function productdatas($catid){
		$db = db_connect();
		$gets = $db->table('product')->where('category', $catid)->get()->getResultArray();
		return $gets;
	}
	
	public function productdetail($detailid){
		$db = db_connect();
		$data = $db->table('product')->where('id', $detailid)->get()->getResultArray();
		return $data[0];
	}
	
	public function productsubdata($catid, $subid){
		$db = db_connect();
		$data = $db->table('product')->where(['subcat'=>$subid, 'category'=>$catid])->get()->getResultArray();
		// echo '<pre>';
		// print_r($data);
		// echo '</pre>';
		return $data;
	}
	
	public function getproducts($id){
		$db = db_connect();
		$data = $db->table('product')->where('id', $id)->get()->getResultArray();
		return $data[0];
	}
	
	public function getproductbyid($id){
		$db = db_connect();
		$edit = $db->table('product')->where('id != ',$id)->get()->getResultArray();
		return $data;
	}
	
}