

<?php
    require_once 'models/homeModel.php';
    class homeController{
        public $homeModel;
        function __construct(){
            $this->homeModel=new homeModel();
        }
        function home(){
            $product=$this->homeModel->top6product();
            require_once 'views/home.php';
        }
        
        function detail($id){
            $productOne=$this->homeModel->findProductById($id);
            require_once 'views/detail.php';
        }
        function product(){
            
        }
        function cart(){
           
        }
        function login(){
           
        }
        function logout(){
            
        }
        
    }
?>