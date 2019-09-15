<?php
/**
 * Created by PhpStorm.
 * User: ADM
 * Date: 9/12/2019
 * Time: 11:08 PM
 */

class Products
{
    private $maSanPham;
    private $tenSanPham;
    private $idhangsanxuat;
    private $dongSanPham;
    private $mau;
    private $gia;
    private $soLuong;
    private $camTruoc;
    private $camSau;
    private $dungLuongPin;
    private $boNho;
    private $hinhAnh;

    /**
     * Products constructor.
     * @param $maSanPham
     * @param $tenSanPham
     * @param $hang
     * @param $dongSanPham
     * @param $mau
     * @param $gia
     * @param $soLuong
     * @param $camTruoc
     * @param $camSau
     * @param $dungLuongPin
     * @param $boNho
     * @param $hinhAnh
     */
    public function __construct($maSanPham, $tenSanPham, $idhangsanxuat, $dongSanPham, $mau, $gia, $soLuong, $camTruoc, $camSau, $dungLuongPin, $boNho, $hinhAnh)
    {
        $this->maSanPham = $maSanPham;
        $this->tenSanPham = $tenSanPham;
        $this->idhangsanxuat = $idhangsanxuat;
        $this->dongSanPham = $dongSanPham;
        $this->mau = $mau;
        $this->gia = $gia;
        $this->soLuong = $soLuong;
        $this->camTruoc = $camTruoc;
        $this->camSau = $camSau;
        $this->dungLuongPin = $dungLuongPin;
        $this->boNho = $boNho;
        $this->hinhAnh = $hinhAnh;
    }

    /**
     * @return mixed
     */
    public function getMaSanPham()
    {
        return $this->maSanPham;
    }

    /**
     * @param mixed $maSanPham
     */
    public function setMaSanPham($maSanPham)
    {
        $this->maSanPham = $maSanPham;
    }

    /**
     * @return mixed
     */
    public function getTenSanPham()
    {
        return $this->tenSanPham;
    }

    /**
     * @param mixed $tenSanPham
     */
    public function setTenSanPham($tenSanPham)
    {
        $this->tenSanPham = $tenSanPham;
    }

    /**
     * @return mixed
     */
    public function getIdhangsanxuat()
    {
        return $this->idhangsanxuat;
    }

    /**
     * @param mixed $idhangsanxuat
     */
    public function setIdhangsanxuat($idhangsanxuat)
    {
        $this->idhangsanxuat = $idhangsanxuat;
    }


    /**
     * @return mixed
     */
    public function getDongSanPham()
    {
        return $this->dongSanPham;
    }

    /**
     * @param mixed $dongSanPham
     */
    public function setDongSanPham($dongSanPham)
    {
        $this->dongSanPham = $dongSanPham;
    }

    /**
     * @return mixed
     */
    public function getMau()
    {
        return $this->mau;
    }

    /**
     * @param mixed $mau
     */
    public function setMau($mau)
    {
        $this->mau = $mau;
    }

    /**
     * @return mixed
     */
    public function getGia()
    {
        return $this->gia;
    }

    /**
     * @param mixed $gia
     */
    public function setGia($gia)
    {
        $this->gia = $gia;
    }

    /**
     * @return mixed
     */
    public function getSoLuong()
    {
        return $this->soLuong;
    }

    /**
     * @param mixed $soLuong
     */
    public function setSoLuong($soLuong)
    {
        $this->soLuong = $soLuong;
    }

    /**
     * @return mixed
     */
    public function getCamTruoc()
    {
        return $this->camTruoc;
    }

    /**
     * @param mixed $camTruoc
     */
    public function setCamTruoc($camTruoc)
    {
        $this->camTruoc = $camTruoc;
    }

    /**
     * @return mixed
     */
    public function getCamSau()
    {
        return $this->camSau;
    }

    /**
     * @param mixed $camSau
     */
    public function setCamSau($camSau)
    {
        $this->camSau = $camSau;
    }

    /**
     * @return mixed
     */
    public function getDungLuongPin()
    {
        return $this->dungLuongPin;
    }

    /**
     * @param mixed $dungLuongPin
     */
    public function setDungLuongPin($dungLuongPin)
    {
        $this->dungLuongPin = $dungLuongPin;
    }

    /**
     * @return mixed
     */
    public function getBoNho()
    {
        return $this->boNho;
    }

    /**
     * @param mixed $boNho
     */
    public function setBoNho($boNho)
    {
        $this->boNho = $boNho;
    }

    /**
     * @return mixed
     */
    public function getHinhAnh()
    {
        return $this->hinhAnh;
    }

    /**
     * @param mixed $hinhAnh
     */
    public function setHinhAnh($hinhAnh)
    {
        $this->hinhAnh = $hinhAnh;
    }



}