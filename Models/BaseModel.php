<?php
class BaseModel extends Database
{
	public $connect;

	public function __construct()
	{
		$this->connect=$this->connect();
	}
	public function all($table,$select=['*'],$orderBy =[], $limit=100)
	{

		$columns= implode(',',$select);
		
		$orderByString= implode(' ',$orderBy);

		if($orderByString)
		{
			$sql = "SELECT ${columns} FROM ${table} ORDER BY ${orderByString} LIMIT ${limit}";
		}
		else
		{
			$sql = "SELECT ${columns} FROM ${table} LIMIT ${limit}";
		} 
		$query=$this->_query($sql);

		$data=[];

		while ($row =mysqli_fetch_assoc($query)) {
			array_push($data, $row);
		}

		return $data;
	}
	public function find($table,$id)
	{
		$sql="SELECT * FROM ${table} WHERE id= ${id} LIMIT 1";		
		$query =$this->_query($sql); 

		$data=[];

		while ($row =mysqli_fetch_assoc($query)) {
			array_push($data, $row);
		}

		return $data;
		
	}
	public function store()
	{
		
	}
	public function update()
	{
		
	}
	public function delete()
	{
		
	}
	private function _query($sql)
	{
		return mysqli_query($this->connect, $sql);
	}
	public function getByQuery($sql)
	{
		$query =$this->_query($sql);

		$data =[];

		while ($row =mysqli_fetch_assoc($query)) {
			array_push($data,$row);
		}
		return $data;
	}
}
