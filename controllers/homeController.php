

<?php
    require_once 'models/homeModel.php';
    class homeController{
        public $homeModel;
        function __construct(){
            $this->homeModel=new homeModel();
        }
        function home(){
            $product = $this->homeModel->allProduct();
           include "views/home.php";
        }
        //rtgyhujkl
        // function detail($id){
        //     $productOne=$this->homeModel->findProductById($id);
        //     require_once 'views/detail.php';
        // }
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