<?php
class CategoryModel extends BaseModel
{
	const TABLE='category';

	public function getAll($select=['*'],$orderBy =[],$limit=100)
	{
		return $this->all(self::TABLE,$select,$orderBy ,$limit);
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