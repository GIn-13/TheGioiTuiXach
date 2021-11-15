<?php
class BrandController extends BaseController
{
	private $brandModel;

	public function __construct()
	{
		$this->loadModel('BrandModel');
		$this->loadModel('ProductModel');
		$this->brandModel=new BrandModel;
		$this->productModel=new ProductModel;
		$this->loadModel('CategoryModel');
		$this->categoryModel=new CategoryModel;
	}
	public function index()
	{
		
		$brands=$this->brandModel->getAll();
		return $this->view('frontend.brands.index',['brands'=>$brands]);
	}
	public function show()
	{
		$brandId =$_GET['id'] ?? null;
	
		$brand=$this->brandModel->findById($brandId);			
		$products=$this->productModel->getByBrandId($brandId,['column'=>'id','type'=> 'ASC']);
		$categories=$this->categoryModel->getAll();
		$brands=$this->brandModel->getAll();
		return $this->view('frontend.brands.show',[				
				'brand'=>$brand,
				'brands'=>$brands,
				'products'=> $products,
				'categories'=>$categories,
			]);
	}
}