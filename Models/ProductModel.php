
<?php
class ProductModel extends BaseModel
{
	const TABLE='product';

	public function getAll($select=['*'],$orderBy =[],$limit=100)
	{
		$select=['id','name','price','image'];
		return $this->all(self::TABLE,$select,$orderBy ,$limit);
	}

	public function getByCategoryId($categoryId,$orderBy =[],$limit=100)
	{
		$orderByString= implode(' ',$orderBy);
		$sql = "SELECT id,name,price,image FROM ". self::TABLE." WHERE category_id=${categoryId} ORDER BY ${orderByString} LIMIT ${limit}";
		return $this->getByQuery($sql);
	}
	public function getByBrandId($brandId,$orderBy =[],$limit=100)
	{
		$orderByString= implode(' ',$orderBy);
		$sql = "SELECT id,name,price,image FROM ". self::TABLE." WHERE brand_id=${brandId} ORDER BY ${orderByString} LIMIT ${limit}";
		return $this->getByQuery($sql);
	}
	public function findById($id)
	{
		return $this->find(self::TABLE,$id);
	}
	public function delete()
	{
		return __METHOD__;
	}

}