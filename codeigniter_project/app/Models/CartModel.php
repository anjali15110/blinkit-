<?php

namespace App\Models;
use CodeIgniter\Model;

class CartModel extends Model
{
	protected $table = 'cart';
	protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;
	
	protected $allowedFields = ['product_id', 'product_image', 'product_name', 'price', 'quantity'];
	
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
	
	public function insertcarts($data)
	{
		$db = db_connect();
		$run = $db->table('cart')->insert($data);
		return $run;
	}
	
	public function getcart()
	{
		$db = db_connect();
		$fetch = $db->table('cart')->get()->getResultArray();
		return $fetch[0];
	}
	
	public function deletecart($id){
		$db = db_connect();
		$delete = $db->table('cart')->where('cart_id', $id)->delete();
		return $delete;
	}
	
	public function updatecart($data, $id){
		$db = db_connect();
		$update = $db->table('cart')->where('product_id', $id)->update($data);
		//print_r($update);
		return $update;
	}
	
	
	public function getcarts($id)
	{
		$db = db_connect();
		$fetch = $db->table('cart')->where('localstrval', $id)->get()->getResultArray();
		//print_r($fetch);
		return $fetch;
	}
	
	public function deletedcart($data){
		$db = db_connect();
		$data = $db->table('cart')->where('localstrval', $data)->delete();
		return $data;
	}

		
	
}