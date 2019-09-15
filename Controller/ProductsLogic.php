<?php
/**
 * Created by PhpStorm.
 * User: ADM
 * Date: 9/12/2019
 * Time: 11:33 PM
 */

include_once '../DAO/ProductsDAO.php';
include_once '../DTO/Products.php';

$dao = new ProductsDAO();
//$product = new Products('0','','','','',0,0,'','','',0,'');

$listProducts = $dao->getAll();

foreach ($listProducts as $obj){
    $listjson[] = array(
      'maSanPham' => $obj->getMaSanPham(),
      'tenSanPham' => $obj->getTenSanPham(),
      'boNho' => $obj->getboNho(),
      'gia' => $obj->getGia(),
        'idhangsanxuat' => $obj->getIdhangsanxuat(),
        'dongSanPham' => $obj->getDongSanPham(),
        'mau' => $obj->getMau(),
        'soLuong' => $obj->getSoLuong(),
        'camTruoc' => $obj->getCamTruoc(),
        'camSau' => $obj->getCamSau(),
        'dungLuongPin' => $obj->getDungLuongPin(),
        'hinhAnh' => $obj->getHinhAnh()

    );
}
echo json_encode($listjson, JSON_UNESCAPED_UNICODE);
