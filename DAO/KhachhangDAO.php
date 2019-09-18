<?php
/**
 * Created by PhpStorm.
 * User: ADM
 * Date: 9/15/2019
 * Time: 3:07 PM
 */


include_once '../db/Connection.php';
include_once '../DTO/Khachhang.php';


class KhachhangDAO extends Connection
{
    function signup(Khachhang $khachhang){
        try{
            $flg = false;

            if(null != $khachhang){
                $username = (string)$khachhang->getUsername();
                $password = (string)$khachhang->getPassword();
                
                $query = "INSERT into khachhang (username, password) VALUES ('$username', '$password')";



            }
           
            $this->execNonQuery($query);

            $this->disconnect();
            $objInserted = $this->checkInsertedUser();

            if($objInserted != null)
                $flg = true;

            return $flg;




        }
        catch (PDOException $e){
            echo "Lỗi: ".$e->getMessage();
        }
    }

    private function checkInsertedUser(){
        try{
            $pdo = $this->getPDOObjecT();
            $lastId = $pdo->lastInsertId();

            $query = "SELECT COUNT(*) FROM khachhang WHERE 1 = 1 AND idkhachhang = $lastId";

            $lastObj = $this->execQuery($query);

            return $lastObj;
        }
        catch (PDOException $e){
            echo $e->getMessage();
        }
    }

}