<?php
/**
 * Created by PhpStorm.
 * User: ADM
 * Date: 9/12/2019
 * Time: 11:33 PM
 */

include_once '../DAO/ProductsDAO.php';
include_once '../DTO/Products.php';



function getAll(){
    $dao = new ProductsDAO();
    $resultGetAll = $dao->getAll();
    foreach ($resultGetAll as $item){
        $result = $item['ten_sp'].' - '.$item['dong_sp'].' - '.$item['bo_nho'].'GB - '.$item['gia'];

        echo $result;
    }
}

