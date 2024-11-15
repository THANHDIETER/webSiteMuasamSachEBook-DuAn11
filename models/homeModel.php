<?php
    class homeModel {
        public $conn;
        function __construct() {
            $this->conn = connectDB();
        }
        
    function allProduct() {
        $sql = "SELECT * FROM product ORDER BY pro_id DESC";
        return $this->conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    function top6Product() {
        $sql = "SELECT * FROM product ORDER BY pro_id DESC LIMIT 6";
        return $this->conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    function findProductById($id) {
        $sql = "SELECT * FROM product WHERE pro_id =1";
        return $this->conn->query($sql)->fetch();
    }
    }
?>