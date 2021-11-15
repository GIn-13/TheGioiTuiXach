<?php
class CategoryController extends BaseController
{
	private $categoryModel;

	public function __construct()
	{
		$this->loadModel('CategoryModel');
		$this->loadModel('ProductModel');
		$this->categoryModel=new CategoryModel;
		$this->productModel=new ProductModel;
		$this->loadModel('BrandModel');
		$this->brandModel=new BrandModel;
	}
	public function index()
	{
		
		$categories=$this->categoryModel->getAll();
		return $this->view('frontend.categories.index',['categories'=>$categories]);
	}
	public function show()
	{
		$categoryId =$_GET['id'] ?? null;
		if($categoryId==0)
		{
			$category=$this->categoryModel->findById($categoryId);
			$products=$this->productModel->getAll(['*'],['column'=>'id','type'=> 'ASC']);
		}
		else
		{
			//$categoriesMenu=$this->categoryModel->getCategoryForMenu();
			$category=$this->categoryModel->findById($categoryId);
			$products=$this->productModel->getByCategoryId($categoryId,['column'=>'id','type'=> 'ASC'],12);
		}
		$brands=$this->brandModel->getAll();
		$categories=$this->categoryModel->getAll();
		return $this->view('frontend.categories.show',[
				//'menus'=>$categoriesMenu,
				'category'=>$category,
				'products'=> $products,
				'brands'=>$brands,
				'categories'=>$categories,
			]);
	}
}