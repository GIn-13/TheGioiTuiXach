
<?php
	

	$this->view('frontend/categories/_detail',[
				'category'=>$category,
				'products'=> $products,
				'brands'=>$brands,
				'categories'=>$categories,
			]);
?>	
