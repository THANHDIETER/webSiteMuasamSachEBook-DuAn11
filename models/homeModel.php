<?php
    class homeModel {
        public $conn;
        function __construct() {
            $this->conn = connectDB();
        }
        
    function allProduct() {
        try {
            $sql = "SELECT * FROM `products`";
            $data = $this->conn->query($sql)->fetchAll();
            // Convert mảng databse sang ob
            foreach ($data as $value) {
                $ob = new Book();
                $ob->id = $value['id'];
                $ob->ten = $value['ten'];
                $ob->danhmuc = $value['danh_muc_id'];
                $ob->nha_xuat_ban = $value['nha_san_xuat_id'];
                $ob->img = $value['img'];
                $ob->gia = $value['gia'];
                $ob->mota = $value['mo_ta'];
                $ob->luotban = $value['luot_ban'];
                $danhsach [] = $ob;
            }
            return $danhsach;
        } catch (Exception $err) {
            echo "<h1>";
            echo "Lỗi hàm all trong model: " . $err->getMessage();
            echo "</h1>";
        }
        
        
    }

    function top6Product() {
        $sql = "SELECT * FROM product ORDER BY pro_id DESC LIMIT 6";
        return $this->conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    function findProductById($id) {
        $sql = "SELECT * FROM product WHERE pro_id =$id";
        return $this->conn->query($sql)->fetch();
    }
    }
?>