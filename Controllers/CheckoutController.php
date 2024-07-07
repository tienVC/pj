<?php
require_once("Models/checkout.php");
require_once("Models/sale.php");
class CheckoutController
{
    var $checkout_model;
    var $sale_model;

    public function __construct()
    {
        $this->checkout_model = new Checkout();
        $this->sale_model = new Sale();
    }
    function list()
    {
        if (isset($_SESSION['login'])) {
            $data_danhmuc = $this->checkout_model->danhmuc();

            $data_chitietDM = array();

            for ($i = 1; $i <= count($data_danhmuc); $i++) {
                $data_chitietDM[$i] = $this->checkout_model->chitietdanhmuc($i);
            }

            $count = 0;
            if (isset($_SESSION['sanpham'])) {
                foreach ($_SESSION['sanpham'] as $value) {
                    $count += $value['ThanhTien'];
                }
            }
            require_once('Views/index.php');
        } else {
            header('location: ?act=taikhoan');
        }
    }
    function  save()
    {
        $sale = 0;
        if (isset($_POST['MaKhuyenMai']) && !empty($_POST['MaKhuyenMai'])) {
            $maKm = $this->sale_model->getKM($_POST['MaKhuyenMai']);

            if ($maKm) {
                $sale = $maKm[0]['GiaTriKM'];
            }
        }

        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ThoiGian =  date('Y-m-d H:i:s');

        $count = 0;
        if (isset($_SESSION['sanpham'])) {
            foreach ($_SESSION['sanpham'] as $value) {
                $count += $value['ThanhTien'];
            }
        }

        $_SESSION['magiamgia'] = $sale;
        $total = $count - $sale;
        $total = ($total < 0) ? 0 : $total;

        $data = array(
            'MaND' => $_SESSION['login']['MaND'],
            'NgayLap' => $ThoiGian,
            'NguoiNhan' =>    $_POST['NguoiNhan'],
            'SDT' => $_POST['SDT'],
            'DiaChi' => $_POST['DiaChi'],
            'TongTien' => $total,
            'TrangThai'  =>  '0',
            'KhuyenMai' => $sale
        );
        $this->checkout_model->save($data);
    }
    function order_complete()
    {
        $data_danhmuc = $this->checkout_model->danhmuc();

        $data_chitietDM = array();

        for ($i = 1; $i <= count($data_danhmuc); $i++) {
            $data_chitietDM[$i] = $this->checkout_model->chitietdanhmuc($i);
        }
        $count = 0;
        if (isset($_SESSION['sanpham'])) {
            foreach ($_SESSION['sanpham'] as $value) {
                $count += $value['ThanhTien'];
            }
        }
        require_once('Views/index.php');
    }
}
