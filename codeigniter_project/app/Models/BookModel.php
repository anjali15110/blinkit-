<?php

namespace App\Models;
use CodeIgniter\Model;

class BookModel extends Model
{
	protected $table = 'book';
	protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;
	
	protected $allowedFields = ['userid', 'productid', 'productname', 'price', 'quantity', 'total'];
	
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
	
	public function insertbook($data)
	{
		$db = db_connect();
		$run = $db->table('book')->insert($data);
		return $run;
	}
	
	public function getdata($token){
		$db = db_connect();
		$data = $db->table('book')->where('userid', $token)->get()->getResultArray();
		return $data;
	}

}