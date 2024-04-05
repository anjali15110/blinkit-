<?php

namespace App\Models;
use CodeIgniter\Model;

class CategoryModel extends Model
{
	protected $table = 'category';
	protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;
	
	protected $allowedFields = ['category_image'];
	
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
	
	public function addinsert($post)
	{
		$db = db_connect();
		$run = $db->table('category')->insert($post);
		//print_r ($post);
		return $run;
	}
	
	public function getcategory(){
		$db = db_connect();
		$data = $db->table('category')->get()->getResultArray();
		return $data;
	}
	
	public function getcategories(){
		$db = db_connect();
		$data = $db->query('SELECT * FROM category LIMIT 0,7')->getResultArray();
		return $data;
	}
	
	public function editdata($id){
		//echo $id;
		$db = db_connect();
		$edit = $db->table('category')->where('cid', $id)->get()->getResultArray();
		return $edit[0];
	}
	
	public function categories($id){
		$db = db_connect();
		$data = $db->table('category')->where('cid', $id)->get()->getResultArray();
		return $data[0];
	}
	
	public function editdcat($edit, $id){
		$db = db_connect();
		$editcatdata = $db->table('category')->where('cid', $id)->update($edit);
		return $editcatdata;
	}
	
	public function catonedata(){
		$db = db_connect();
		$builder = $db->table('category');
		$builder->select('*');
		$builder->join('product', 'category.cid = product.category');
		$builder->where('category', '1');
		$query = $builder->get()->getResultArray();

		return $query;
	}
	
	public function cattwodata(){
		$db = db_connect();
		$builder = $db->table('category');
		$builder->select('*');
		$builder->join('product', 'category.cid = product.category');
		$builder->where('category', '2');
		$query = $builder->get()->getResultArray();

		return $query;
	}
	
	public function catdata($id){
		$db = db_connect();
		$builder = $db->table('category');
		$builder->select('*');
		$builder->join('product', 'category.cid = product.category');
		$builder->where('category', $id);
		$query = $builder->get()->getResultArray();

		return $query;
	}
	
	
}