<?php
class ProductController extends BaseController
{
	private $productModel;

	public function __construct()
	{
		$this->loadModel('ProductModel');
		$this->productModel=new ProductModel;
		$this->loadModel('CategoryModel');
		$this->categoryModel=new CategoryModel;
		$this->loadModel('BrandModel');
		$this->brandModel=new BrandModel;
	}
	public function index()
	{		
		$selectColumns=['id','name','price'];

		$oderBys=['column'=>'id','type'=>'ASC'];

		$limits=12;
		$productlist = $this->productModel->getAll($selectColumns,$oderBys,$limits);

		return $this->view('frontend.products.index',['pageTitle'=>"chi tiet san pham",'productlist'=>$productlist,]);
	}
	public function show()
	{		
		$productId =$_GET['id'] ?? null;
		
		$productInfo=$this->productModel->findById($productId);
		$categories=$this->categoryModel->getAll();
		$brands=$this->brandModel->getAll();
				
		return $this->view('frontend.products.show',[
				'productInfo'=> $productInfo,
				'categories'=> $categories,
				'brands'=> $brands,
			]);
	}
}