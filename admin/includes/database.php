<?php
require_once("new_config.php");
class Database
{
    private $connection;

    function __construct()
    {
     $this->open_db_connection(); 
    }
    public function open_db_connection()
    {
        $this->connection=mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if (mysqli_connect_errno()) {
          die("数据连接失败"); 
        }else{
          echo "数据库连接成功";
        }
    }


    public function query($sql){
      $result=mysqli_query($this->connection,$sql);
     
      return $result;
    }

    public function confirm_query($result){
       if(!$result){
        die("SQL语句错误");
      }else{
        echo "语句没有错误";
      }
    }

    public static function find_this_query($sql){
      global $database;
      $result_set=$database->query($sql);
      return $result_set;
    }

    public function escape_string($string){
      $escaped_string=mysqli_real_escape_string($this->connection,$string);
      return $escaped_string;
    }
}
$database=new Database();
// $database->open_db_connection();