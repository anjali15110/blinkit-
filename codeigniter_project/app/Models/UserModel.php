<?php 

namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
	public function __construct (){
	  //parent::__construct ();
	
	}
	
	protected $table      = 'users';
    protected $primaryKey = 'Id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['Name', 'Email'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
	
	
	public function insertdata($post){
		$db = db_connect();
		$insert = $db->table('users')->insert($post);
		return $insert;
		//print_r($insert);
		
	}
	
	public function getuserdata(){
		$db = db_connect();
		//$run = $db->query('select * from users');
		$run = $db->table('users')->get();
		return $run->getResultArray();
		
		//return "kapil";
		
	}
	
	public function edituser($id){
		//echo $id;
		$db = db_connect();
		$run = $db->table('users')->where('Id', $id)->get()->getResultArray();
		//print_r($run);
		return $run[0];
	}
	
	public function usereditdata($editdata, $id){
		//print_r($editdata);
		$db = db_connect();
		$run = $db->table('users')->where('Id', $id)->update($editdata);
		return $run;
	}
	
	public function getlogin($data){
		$db = db_connect();
		$run = $db->table('users')->where(['Email'=>$data['email'], 'Password'=>$data['password']])->get()->getResultArray();
		return $run[0];
	}
	
	public function getuser($id){
		$db = db_connect();
		$data = $db->table('users')->where('Id', $id)->get()->getResultArray();
		return $data;
	}
	
	
}
?>