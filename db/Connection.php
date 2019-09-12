<?php
/**
 * Created by PhpStorm.
 * User: ADM
 * Date: 9/12/2019
 * Time: 10:57 PM
 */

class Connection
{
    private $host="localhost:3306";
    private $db="mobilestore";
    private $user="root";
    private $password="";
    private $charset="charset=utf8";

    function connect(){
        try{
            $conn = new PDO("mysql:host=$this->host; dbname=$this->db; $this->charset", $this->user, $this->password);

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            echo "Kết nối thành công";
            return $conn;

        }catch (PDOException $e){
            echo "Kết nối thất bại: ".$e->getMessage();
        }
    }

    function disconnect(){
        $conn = null;

        return $conn;
    }

    function execQuery($query){
        $conn = $this->connect() or die('Không thể kết nối đến DataProviderMain');

        $result = $conn->prepare($query);

        if(!$result){
            die('Câu truy vấn sai');
        }

        $this->disconnect();

        return $result;
    }
}