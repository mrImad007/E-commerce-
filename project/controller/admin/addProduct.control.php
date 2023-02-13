<?php
    include('../../model/addProduct.model.php');
    class addingProduct extends addProduct{
        public function adding(){
            
            $id = $_POST['id'];
            $label = $_POST['label'];
            $code = $_POST['codeBarre'];
            $buy = $_POST['buyPrice'];
            $sell = $_POST['sellPrice'];
            $final = $_POST['finalPrice'];
            $desc = $_POST['description'];
            $cat = $_POST['category'];
            $img = $_POST['image'];

            if(isset($id)&&isset($label)&&isset($code)&&isset($buy)&&isset($sell)&&isset($final)&&isset($desc)&&isset($cat)&&isset($img)){

                $exe = new addProduct;
                $exe->addproduct($id,$label,$code,$buy,$sell,$final,$desc,$cat,$img);

                header('Location: ../../../../view/dashboard.php');
            }

        }
    }
$check = new addingProduct;
$check->adding();

?>