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
    function signin(Khachhang $khachhang){
        try{
            if(null != $khachhang){
                $username = (string)$khachhang->getUsername();
                $password = (string)$khachhang->getPassword();
                
                $query = "INSERT into khachhang (username, password) VALUES ('$username', '$password')";

            }
           

            $this->execNonQuery($query);


            $this->disconnect();

        }
        catch (PDOException $e){
            echo "Lỗi: ".$e->getMessage();
        }
    }


}