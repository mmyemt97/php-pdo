<?php
/**
 * Created by PhpStorm.
 * User: ADM
 * Date: 9/15/2019
 * Time: 3:03 PM
 */

include_once '../db/Connection.php';

class Khachhang
{
    protected $maKhachHang;
    protected $username;
    protected $password;
    protected $hoKH;
    protected $tenKH;
    protected $sdt;
    protected $diaChi;
    protected $email;
    protected $hinhAnh;

    /**
     * Khachhang constructor.
     * @param $maKhachHang
     * @param $username
     * @param $password
     * @param $hoKH
     * @param $tenKH
     * @param $sdt
     * @param $diaChi
     * @param $email
     * @param $hinhAnh
     */
//    public function __construct($maKhachHang, $username, $password, $hoKH, $tenKH, $sdt, $diaChi, $email, $hinhAnh)
    public function __construct($maKhachHang, $username, $password)
    {
        $this->maKhachHang = $maKhachHang;
        $this->username = $username;
        $this->password = $password;
//        $this->hoKH = $hoKH;
//        $this->tenKH = $tenKH;
//        $this->sdt = $sdt;
//        $this->diaChi = $diaChi;
//        $this->email = $email;
//        $this->hinhAnh = $hinhAnh;
    }

    /**
     * @return mixed
     */
    public function getMaKhachHang()
    {
        return $this->maKhachHang;
    }

    /**
     * @param mixed $maKhachHang
     */
    public function setMaKhachHang($maKhachHang)
    {
        $this->maKhachHang = $maKhachHang;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getHoKH()
    {
        return $this->hoKH;
    }

    /**
     * @param mixed $hoKH
     */
    public function setHoKH($hoKH)
    {
        $this->hoKH = $hoKH;
    }

    /**
     * @return mixed
     */
    public function getTenKH()
    {
        return $this->tenKH;
    }

    /**
     * @param mixed $tenKH
     */
    public function setTenKH($tenKH)
    {
        $this->tenKH = $tenKH;
    }

    /**
     * @return mixed
     */
    public function getSdt()
    {
        return $this->sdt;
    }

    /**
     * @param mixed $sdt
     */
    public function setSdt($sdt)
    {
        $this->sdt = $sdt;
    }

    /**
     * @return mixed
     */
    public function getDiaChi()
    {
        return $this->diaChi;
    }

    /**
     * @param mixed $diaChi
     */
    public function setDiaChi($diaChi)
    {
        $this->diaChi = $diaChi;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
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