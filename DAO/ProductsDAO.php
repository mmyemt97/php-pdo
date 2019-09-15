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
            $listProducts = array();

            $query="SELECT * FROM sanpham WHERE 1 = 1";
            $stmt = $conn->prepare($query);

            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            foreach ($stmt as $item){

                $maSanPham = $item['idsanpham'];
                $tenSanPham = $item['ten_sp'];
                $boNho = $item['bo_nho'];
                $gia = $item['gia'];
                $idhangsanxuat= $item['idhangsanxuat'];
                $dongSanPham= $item['dong_sp'];
                $mau= $item['mausac'];
                $soLuong= $item['so_luong'];
                $camTruoc= $item['cam_truoc'];
                $camSau= $item['cam_sau'];
                $dungLuongPin= $item['dung_luong_pin'];
                $hinhAnh= $item['hinh_anh'];

                $product = new Products($maSanPham, $tenSanPham, $idhangsanxuat, $dongSanPham, $mau, $gia, $soLuong, $camTruoc, $camSau, $dungLuongPin, $boNho, $hinhAnh);

                array_push($listProducts, $product);
            }
            $conn = $this->disconnect();

            return $listProducts;

        }
        catch (PDOException $e){
            // rollback - insert/update/delete , transaction ( giao dịch)

            echo "Lỗi: ".$e->getMessage();

        }
    }
}