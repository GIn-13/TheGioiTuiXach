<?php
class CartController extends BaseController
{
	protected $productModel;
	public function __construct()
	{
		$this->loadModel('ProductModel');
		$this->productModel = new ProductModel;
		$this->loadModel('CategoryModel');
		$this->categoryModel=new CategoryModel;
		$this->loadModel('BrandModel');
		$this->brandModel=new BrandModel;
	}
	public function index()
	{
		$products= $_SESSION['cart'];
		$categories=$this->categoryModel->getAll();
		$brands=$this->brandModel->getAll();
		$this->view('frontend.carts.index',[
			'products'=>$products,
			'categories'=> $categories,
			'brands'=> $brands,
		]);
	}
	public function store()
	{
		$productId=$_GET['id'] ?? null;

		$product=$this->productModel->findById($productId);
		
		if(empty($_SESSION['cart']) || !array_key_exists($productId, $_SESSION['cart'])){
			$product['qty']=1;
			$_SESSION['cart'][$productId]= $product;
		}
		else{
			
			$product['qty']=$_SESSION['cart'][$productId]['qty'] + 1;
			$_SESSION['cart'][$productId]=$product;
		}
		
		header('location:index.php?controller=cart');

	}

	public function delete()
	{
		$productId =$_GET['id']?? null;
		unset($_SESSION['cart'][$productId]);
		header('location:index.php?controller=cart');
	}
}