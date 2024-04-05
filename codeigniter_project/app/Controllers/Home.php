<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\CategoryModel;
use App\Models\ProductModel;
use App\Models\SubcategoryModel;
use App\Models\CartModel;
use App\Models\BookModel;

class Home extends BaseController
{
	//---- start construct -------
	public function __construct()
	{
		$this->categorymodel = new CategoryModel();
		$this->usermodel = new Usermodel();
		$this->productmodel = new ProductModel();
		$this->subcategorymodel = new SubcategoryModel();
		$this->cartmodel = new CartModel();
		$this->bookmodel = new BookModel();
    }
	//---- end construct -------
	
	//---- start homepage function -------
	public function homepage()
    {
		$getcategory['category'] = $this->categorymodel->getcategory();
		$getcategory['catonedata'] = $this->categorymodel->catonedata();
		$getcategory['cattwodata'] = $this->categorymodel->cattwodata();
		$getcategory['product'] = $this->productmodel->getproduct();
		$getcategory['cart'] = $this->cartmodel->getcart();
		
		$getcategory['curdmodel'] = $this->curd_model->get_all('*','product', array(),'id','ASC');
		
		return view('files/homepage', $getcategory);	
    }
	//---- start homepage function -------
	
	
	
	
	 public function listtwo($id)
	{
		$getcategory['catdata'] = $this->categorymodel->catdata($id);
		$getcategory['cart'] = $this->cartmodel->getcart();
		$array['products'] = $this->productmodel->productdatas($id);
		return view('files/list_two', $array);
	}
	
	 public function listone($catid=null, $subid=null)
    {	
		$catid = data_decode($catid);
	
		$array = [];
		//$array['category'] = $this->categorymodel->getcategory();
		$array['categories'] = $this->categorymodel->getcategories();
		$array['catdata'] = $this->categorymodel->categories($catid);
		$array['cart'] = $this->cartmodel->getcart();
		$array['subcategory'] = $this->subcategorymodel->subcategory($catid);
		if($subid == null){
			$array['products'] = $this->productmodel->productdatas($catid);
		} else {
			$array['products'] = $this->productmodel->productsubdata($catid, $subid);
		}
		
		//print_r($array['products']);
		
		//
		//print_r($array);
		return view('files/list_one', $array);
    }
	
	
	 public function detailpage($subid)
    {
		$subid = data_decode($subid);
		$array['subdetail'] = $this->subcategorymodel->subdetail($subid);
		$array['productdetail'] = $this->productmodel->productdetail($subid);
        return view('files/detailpage', $array);
    }
	
	public function cart(){
		$session['session'] = $this->session->get('adminlogin');
		//$getcart['cart'] = $this->cartmodel->getcart();
		return view('files/cart', $session);
	}
	
	
	public function update_cart(){
		$product_id = $this->request->getPost('product_id');
		
		$data = [
		'total_price' => $this->request->getPost('total_price'),
		'quantity' => $this->request->getPost('quantity')
		];
		
		$updatecart = $this->cartmodel->updatecart($data, $product_id);
	}
	
	
	public function cartshow(){
		$cartdata = $this->request->getVar('cart');
		$carts['cart'] = $this->cartmodel->getcarts($cartdata);
		
		echo json_encode($carts);
		
		//return view('files/cart', $carts);
	}
	
	public function bookdata(){
		//print_r($this->session->get('userlogin'));
		if(!$this->session->get('userlogin')){
			echo 1;
        }else{
			$sessiondata = $this->session->get('userlogin');
			$book = $this->request->getVar('book');		
			$cartdata = $this->cartmodel->getcarts($book);
			$index = 0;
			$sessionid = $sessiondata['id'];
			$token = bin2hex(random_bytes(12));
			echo $sessionid;
			foreach($cartdata as $data)
			{
				$book = $cartdata[$index];
				$bookdata = [
					'userid' => $sessionid,
					'productid' => $book['product_id'],
					'productname' => $book['product_name'],
					'price' => $book['price'],
					'quantity' => $book['quantity'],
					'total' => $book['total_price'],
					'token' => $token,
					'created_at' => date('Y-m-d'),
					'updated_at' => date('Y-m-d'),
					'deleted_at' => date('Y-m-d')
				];
				$insert = $this->bookmodel->insertbook($bookdata);
				$index++;
				
			}
		}
		
	}
	
	public function cartdelete($id){
		$deletecart = $this->cartmodel->deletecart($id);
		if($deletecart == 1){
			return redirect()->back();
		}
	}
	
	public function registration(){
		return view('files/registration');
	}
	
	public function adduser(){
		$data = $this->request->getVar();
		$data['Status'] = 1;
		$data['Type'] = 'user';
		$data['created_at'] = date('Y-m-d H:i:s');
		$data['updated_at'] = date('Y-m-d H:i:s');
		$data['deleted_at'] = date('Y-m-d H:i:s');
		$userinsert = $this->usermodel->insertdata($data);
		if($userinsert == 1){
			return redirect()->to(base_url('/registration'));
		}
	}


	public function insertcart(){
		$cart = $this->request->getVar();
		$cart['created_at'] = date('Y-m-d');
		$cart['updated_at'] = date('Y-m-d');
		$cart['deleted_at'] = date('Y-m-d');
		$insert = $this->cartmodel->insertcarts($cart);
		if($insert == 1){
			return redirect()->back();
		}	
	}
	
	public function userlogin(){
		return view('files/userlogin');
	}
	
	public function check_userlogin(){
			
			$data = $this->request->getVar();
			
			$getloginuser = $this->usermodel->getlogin($data);
			
			if($getloginuser['Type'] == 'user'){
				
				$user_data = array(
					'id' => $getloginuser['Id'],
					'name' => $getloginuser['Name'],
					'email' => $getloginuser['Email'],
				);
				
				 $this->session->set('userlogin', $user_data); 
				
				return redirect()->to(base_url('/'));
			}else{
				return redirect()->to(base_url('/userlogin'));
			}
		}
		
		public function bookproduct($id){
			$id = $id;
			//$sub = substr($token,0,24);
			//print_r($id);
			$arr['bookdata'] = $this->bookmodel->getdata($id);
			//$userid = $arr['userid'];
			$arr['userdata'] = $this->usermodel->getuser($id);
			return view('files/bookproduct', $arr);
		}
		
		public function deletecart(){
			$data = $this->request->getVar('data');
			//echo $data;
			$cart = $this->cartmodel->deletedcart($data);
		}
		
	
}
