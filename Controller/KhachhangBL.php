<?php
/**
 * Created by PhpStorm.
 * User: ADM
 * Date: 9/15/2019
 * Time: 3:18 PM
 */

include_once '../DTO/Khachhang.php';
include_once '../DAO/KhachhangDAO.php';



$username = $_POST['txtUsername'];
$password = $_POST['txtPassword'];

$dao = new KhachhangDAO();
$khachhang = new Khachhang(0,'','');

$khachhang->setUsername($username);
$khachhang->setPassword($password);

$signin = $dao->signin($khachhang);

