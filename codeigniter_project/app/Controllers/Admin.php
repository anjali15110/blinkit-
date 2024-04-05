<?php

namespace App\Controllers;
use App\Models\CategoryModel;
use App\Models\UserModel;
use App\Models\ProductModel;
use App\Models\SubcategoryModel;
use App\Config\Services;


class Admin extends BaseController
{
	
	//---- start construct -------
	public function __construct()
	{
		$this->categorymodel = new CategoryModel();
		$this->usermodel = new Usermodel();
		$this->productmodel = new ProductModel();
		$this->subcategorymodel = new SubcategoryModel();
	}
	//---- end construct -------
	
	
	//---- start category function -------
	public function category()
	{
		if(!session()->get('adminlogin')){
            return redirect()->to('/webadmin/login'); 
        }
		return view('admin/category');
	}
	
	public function addcategory(){
		if(! session()->get('adminlogin')){
            return redirect()->to('/webadmin/login'); 
        }
		$img = $this->request->getFile('img_name');
		$rand = rand(1000, 9999);
		//print_r($img);
		$img->move(ROOTPATH .'public/admin/cat_images','category-'.$rand.'.jpg');
		$data = [
			'category_name' => $this->request->getPost('category'),
			'category_image' => $img->getName(),
			'created_at' =>	date('Y-m-d H:i:s'),
			'updated_at' =>	date('Y-m-d H:i:s'),
			'deleted_at' => date('Y-m-d H:i:s')
		];
		$insert = $this->categorymodel->addinsert($data);
		if($insert == 1){
			return redirect()->to(base_url('webadmin/category'));
		}
	}

	public function catedit($id){
		$editdata['update'] = $this->categorymodel->editdata($id);
		return view('admin/edit_category', $editdata);
	}
	
	public function editcategory(){
		$catdata = $this->request->getPost('image');
		//unlink(ROOTPATH .'public/admin/cat_images/'.$catdata);
		$img = $this->request->getFile('img_name');
		if($img->isValid())
		{
			$img->move(ROOTPATH .'public/admin/cat_images',$catdata,true);
		}
		
		$catid = $this->request->getPost('catid');
		$data = [
			'category_image' => $catdata,
			'category_name' => $this->request->getPost('category'),
			'updated_at' =>	date('Y-m-d H:i:s'),
		];
	
		$edicat = $this->categorymodel->editdcat($data, $catid);
		if($edicat == 1){
			return redirect()->to(base_url('webadmin/category'));
		}
	}
	
	//---- end category function -------
	
	
	//---- start subcategory function -------
	
	public function subcategory(){
		if(! session()->get('adminlogin')){
            return redirect()->to('/webadmin/login'); 
        }
		$getscategory['categorydata'] = $this->categorymodel->getcategory();
		return view('admin/subcategory',$getscategory);
	}
	
	public function addsubcategory(){
		if(! session()->get('adminlogin')){
            return redirect()->to('/webadmin/login'); 
        }
		$subimage = $this->request->getFile('sub_image');
		//print_r($subimage);
		$rand = rand(1000, 9999);
		$name = 'subcategory-'.$rand.'.jpg';
		$subimage->move(ROOTPATH .'public/admin/sub_images',$name);
		
		//die();
		$subdata = $this->request->getVar();
		$subdata['sub_image'] = $subimage->getName();
		$subdata['status'] = 1;
		$subdata['created_at'] = date('Y-m-d H:i:s');
		$subdata['updated_at'] = date('Y-m-d H:i:s');
		$subdata['deleted_at'] = date('Y-m-d H:i:s');
		$addsubcategory = $this->subcategorymodel->addsubcategory($subdata);
		if($addsubcategory == 1){
			return redirect()->to(base_url('webadmin/subcategory'));
		}
	}
	
	public function subcatedit($id){
		$array = [];
		$array['categorydata'] = $this->categorymodel->getcategory();
		$array['update'] = $this->subcategorymodel->editsubcategory($id);
		$count = 0;
		foreach($array['categorydata'] as $items){
			if($items['id'] == $array['update']['categoryid']){
				$array['categorydata'][$count]['selected'] = true;
			}else{
				$array['categorydata'][$count]['selected'] = false;
			}
			$count++;
		}
		return view('admin/edit_subcategory', $array);
	}
	
	public function editsubcategory(){
		$subimagename = $this->request->getPost('subimage');
		$subimage = $this->request->getFile('sub_image');
		print_r($subimage);
		//die();
		if($subimage->isValid())
		{
			$subimage->move(ROOTPATH .'public/admin/sub_images',$subimagename,true);
		}
		
		$subid = $this->request->getPost('subid');
		$data = [
			'categoryid' => $this->request->getPost('categoryid'),
			'sub_image' => $subimagename,
			'sub_name' => $this->request->getPost('sub_name'),
			'updated_at' =>	date('Y-m-d H:i:s'),
		];
	
		$edicat = $this->subcategorymodel->editsubcat($data, $subid);
		if($edicat == 1){
			return redirect()->to(base_url('webadmin/subcategory'));
		}
	}
	
	
	//---- end subcategory function -------
	
	//---- start user function -------
	public function user()
	{
		if(! session()->get('adminlogin')){
            return redirect()->to('/webadmin/login'); 
        }
		return view('admin/user');
	}
	
	public function addadmin()
	{
		if(! session()->get('adminlogin')){
            return redirect()->to('/webadmin/login'); 
        }
		$data = $this->request->getVar();
		$data['Status'] = 1;
		$data['Type'] = 'admin';
		$data['created_at'] = date('Y-m-d H:i:s');
		$data['updated_at'] = date('Y-m-d H:i:s');
		$data['deleted_at'] = date('Y-m-d H:i:s');
		$userinsert = $this->usermodel->insertdata($data);
		if($userinsert == 1){
			return redirect()->to(base_url('webadmin/user'));
		}		
	}
	
	public function useredit($id){
		$useredit['update'] = $this->usermodel->edituser($id);
		return view('admin/edit_user', $useredit);
	}
	
	public function edituser(){
		$id = $this->request->getPost('id');
		$data = $this->request->getVar();
		$data['updated_at'] = date('Y-m-d H:i:s');
		
		$updateuser = $this->usermodel->usereditdata($data, $id);
		if($updateuser == 1){
			return redirect()->to(base_url('/webadmin/user_table/edit/'.$id));
		}
		
	}
	//---- end user function -------
	
	
	//---- start product function -------
	public function product(){
		if(! session()->get('adminlogin')){
            return redirect()->to('/webadmin/login'); 
        }
		$getscategory['categorydata'] = $this->categorymodel->getcategory();
		$getproducts['productdata'] = $this->productmodel->getproduct();
		return view('admin/product', $getscategory + $getproducts);
	}
	
	public function addproduct()
	{	
		if(! session()->get('adminlogin')){
            return redirect()->to('/webadmin/login'); 
        }
		$multiplefile = $this->request->getFileMultiple('productimg');
		if ($multiplefile) 
		{
			$count = 1;
			$arr = [];
			foreach ($multiplefile as $item) 
			{
				$rand = rand(1000, 9999);
				$filename = 'product'.$count.'-'.$rand.'.jpg';
				$item->move(ROOTPATH .'public/admin/product_image/', $filename);
				$count++;
				array_push($arr, $filename);					
			}
				$join = implode(',', $arr);
				
				$data = $this->request->getVar();
				$data['status'] = 1;
				$data['productimg'] = $join;
				$data['created_at'] = date('Y-m-d H:i:s');
				$data['updated_at'] = date('Y-m-d H:i:s');
				$data['deleted_at'] = date('Y-m-d H:i:s');
				$productinsert = $this->productmodel->addinsert($data);
		}
		return redirect()->to(base_url('/webadmin/product'));	
	}
	
	
	public function productedit($id){
		$arr = [];
		$arr['update'] = $this->productmodel->editproduct($id);
		$arr['categorydata'] = $this->categorymodel->getcategory();
		$arr['subcategorydata'] = $this->subcategorymodel->getsubcategory();
		$catcount = 0;
		foreach($arr['categorydata'] as $item){
			if($item['cid'] == $arr['update']['category']){
				$arr['categorydata'][$catcount]['selected'] = true;
			} else {
				$arr['categorydata'][$catcount]['selected'] = false;
			}
			$catcount++;
		}
		$subcount = 0;
		foreach($arr['subcategorydata'] as $items){
			if($items['id'] == $arr['update']['subcat']){
				$arr['subcategorydata'][$subcount]['selected'] = true;
			} else {
				$arr['subcategorydata'][$subcount]['selected'] = false;
			}
			$subcount++;
		}
		return view('admin/edit_product', $arr);
	}
	
	public function editproduct()
	{	
		if(! session()->get('adminlogin')){
            return redirect()->to('/webadmin/login'); 
        }
		$product = $this->request->getPost('image');
		$explode = explode(',', $product);
		$multiplefile = $this->request->getFileMultiple('productimg');
		
		if ($multiplefile) 
		{	
			$seprate = 0;
			$count = 1;
			$arr = [];

			foreach ($multiplefile as $item) 
			{
				$name = $explode[$seprate];
				
				if($item->isValid())
				{
					//new image//
					if(count($arr) == count($explode))
					{
						$rand = rand(1000, 9999);
						$filename = 'product'.$count.'-'.$rand.'.jpg';
						$item->move(ROOTPATH .'public/admin/product_image/', $filename);
						$count++;
						array_push($arr, $filename);
					}
					//new image//
					
					//update image//
					else{		
						$item->move(ROOTPATH .'public/admin/product_image/', $name, true);
						array_push($arr, $name);
					}
					//update image//
				}	
				$count++;
				$seprate++;				
			}
			
				$str = "";
				if(count($arr) > count($explode)){
					$str = join(',', $arr);
				} else {
					$str = join(',', $explode);
				}
				
				$data = $this->request->getVar();
				$data['productimg'] = $str;
				$data['updated_at'] = date('Y-m-d H:i:s');
				
				unset($data['image']);
				
				$updateddata = $this->productmodel->updateproducts($data);
				return redirect()->to(base_url('/webadmin/product'));
		}	
	}
	
	public function productsubcat(){
		if(! session()->get('adminlogin')){
            return redirect()->to('/webadmin/login'); 
        }
		$categoryid = $this->request->getPost('category');
		$subdata = $this->subcategorymodel->subcatid($categoryid);
		echo json_encode($subdata);
	}
	
	//---- end product function -------
	
	//---- start login -----
		
		public function login(){
			return view('/admin/login');
		}
		
		
		public function checklogin(){
			
			$data = $this->request->getVar();
			
			$getloginadmin = $this->usermodel->getlogin($data);
			
			if($getloginadmin['Type'] == 'admin'){
				
				$admin_data = array(
					'id' => $getloginadmin['Id'],
					'name' => $getloginadmin['Name'],
					'email' => $getloginadmin['Email'],
				);
				
				 $this->session->set('adminlogin', $admin_data); 
				
				return redirect()->to(base_url('/webadmin/category'));
			}else{
				return redirect()->to(base_url('/webadmin/login'));
			}
		}
		
		
	//---- end login -----
	
	//---table----
	public function category_table(){
		if(! session()->get('adminlogin')){
            return redirect()->to('/webadmin/login'); 
        }
		$getscategory['categorydata'] = $this->categorymodel->getcategory();
		return view('admin/category_table', $getscategory);
	}
	
	public function subcategory_table(){
		if(! session()->get('adminlogin')){
            return redirect()->to('/webadmin/login'); 
        }
		$getsubcategory['subcategorydata'] = $this->subcategorymodel->getsubcategory();
		return view('admin/subcategory_table', $getsubcategory);
	}
	
	public function user_table(){
		if(! session()->get('adminlogin')){
            return redirect()->to('/webadmin/login'); 
        }
		$getsuser['userdata'] = $this->usermodel->getuserdata();
		return view('admin/user_table', $getsuser);
	}
	
	public function product_table(){
		if(! session()->get('adminlogin')){
            return redirect()->to('/webadmin/login'); 
        }
		// $getsproduct['productdata'] = $this->productmodel->getproduct();
		// return view('admin/product_table', $getsproduct);
		$data['getsproduct'] = $this->curd_model->get_all('*','product',array(),'id','ASC');
		$category = $this->curd_model->get_all('*','category', array(),'cid','ASC');
		foreach($category as $cat)
		{
			$data['category'][$cat->cid] = $cat;
			
		}
		return view('admin/product_table',$data);
	}
	
	public function logout(){
		session()->remove('adminlogin'); 
		return redirect()->to('/webadmin/login');
	}
}
