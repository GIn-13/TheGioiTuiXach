
<?php

class Database
{
    public $connect = NULL;
    private $server = 'localhost:3306';
    private $dbName = 'thegioituixach';
    private $user = 'root';
    private $password = '';
        
        // Hàm kết nối CSDL
    public function connect()
    {
        $connect = new mysqli($this->server, $this->user, $this->password, $this->dbName);

        mysqli_set_charset($connect,"utf8");
        if(mysqli_connect_errno()===0){
            return $connect;
        }
        else return false;
        
    }
        // Hàm đóng kết nối CSDL
        public function closeDatabase()
    {
        if ($this->connect) {
            $this->connect->close();
        }
    }
}
?>