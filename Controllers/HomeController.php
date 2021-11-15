<?php
class HomeController extends BaseController
{
	private $homeModel;
	private $categoryModel;
	private $brandModel;
	private $productModel;
	public function __construct()
	{
		$this->loadModel('ProductModel');
		$this->productModel=new ProductModel;
		$this->loadModel('HomeModel');		
		$this->HomeModel=new HomeModel;
		
		$this->loadModel('CategoryModel');
		$this->categoryModel=new CategoryModel;
		$this->loadModel('BrandModel');
		$this->brandModel=new BrandModel;
	}
	public function index()
	{
		
		$categories=$this->categoryModel->getAll();
		$brands=$this->brandModel->getAll();
		$products=$this->productModel->getByBrandId(1,['column'=>'id','type'=> 'ASC']);
		$products2=$this->productModel->getByBrandId(3,['column'=>'id','type'=> 'ASC']);
		return $this->view('frontend.homes.index',[
				'categories'=> $categories,
				'brands'=> $brands,
				'products'=> $products,
				'products2'=> $products2,
			]);
	}
	
}