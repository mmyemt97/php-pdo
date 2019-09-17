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

    function Login(Khachhang $kh){
        try{
            $conn = $this->connect();
            $query = "SELECT username FROM khachhang WHERE 1 = 1 "
                    ." AND username = ? AND password = ?";

            $stmt = $conn->prepare($query);
            $stmt->bindParam(1, $kh->getUsername(), PDO::PARAM_STR, 255);
            $stmt->bindParam(2, $kh->getPassword(), PDO::PARAM_STR, 255);
            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_ASSOC);

            foreach ($stmt as $item){
                $username = $item['username'];
                $user = new Khachhang(0, $username, '');
            }

            return $user;
        }
        catch (PDOException $e){
           error_log("Error: ".$e->getMessage());
        }
    }

    function checkDuplicate(Khachhang $kh){
        try{

        }
        catch (PDOException $e){
            error_log("Error: ".$e->getMessage());
        }
    }
}