<?php
/**
 * Created by PhpStorm.
 * User: ADM
 * Date: 9/12/2019
 * Time: 11:11 PM
 */

include_once '../db/Connection.php';
include_once '../DTO/Products.php';


class ProductsDAO extends Connection
{
    function getAll(){
        try{
            $conn = $this->connect();

            $query="SELECT * FROM sanpham WHERE 1 = 1";
            $stmt = $conn->prepare($query);

            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_ASSOC);

            return $stmt;

        }
        catch (PDOException $e){
            echo "Lỗi: ".$e->getMessage();
        }

        $conn = $this->disconnect();
    }
}