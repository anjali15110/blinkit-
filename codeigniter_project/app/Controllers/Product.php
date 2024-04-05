<?php

namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use App\Models\ProductModel;
class Product extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
	 
	public function __construct()
	{
		$this->productmodel = new ProductModel();
	}
	 
    public function index()
    {
		$getdata = $this->productmodel->getproduct();
		//print_r($getdata);
		
		$arr = [];
		foreach($getdata as $item){
			
			$innerarr = [
				"id"	=> $item['id'],
				"category"	=> $item['category'],
				"product_name"	=> $item['product_name'],
				"price"	=> $item['price'],
			];
					
			array_push($arr, $innerarr);
		}
		//print_r($arr);
		return $this->respond($arr);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        //
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }
}
