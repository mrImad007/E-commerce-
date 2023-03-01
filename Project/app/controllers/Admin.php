<?php

class Admin extends Controller{

    //------------------------------------------------------
    private $CrudModel;
    private $pdo;

    //------------------------------------------------------
    public function __construct()
    {
        $this->pdo = new Database;
        $this->CrudModel = $this->model('Dash');
    }

    //------------------------------------------------------
    public function show(){
        $products = $this->CrudModel->read();
        $data= [
            'products' => $products
        ];
        $this->view('Templates/Dashboard',$data);
    }

    //------------------------------------------------------
    public function showcat(){
        $category = $this->CrudModel->category();
        $data= [
            'category' => $category
        ];
        $this->view('Templates/Addforms',$data);
    }

    //------------------------------------------------------
    public function single(){
        if(isset($_POST['productId'])){
            $id = $_POST['productId'];
            $product = $this->CrudModel->lonely($id);
            $category = $this->CrudModel->category();

            $data= [
                'id' => $product->id,
                'image' => $product->image,
                'label' => $product->label,
                'codeBarre' => $product->codeBarre,
                'buyP' => $product->buyP,
                'sellP' => $product->sellP,
                'finalP' => $product->finalP,
                'category_name' => $product->name,
                'description' => $product->description
            ];

            $data2 = [
                'category' => $category
            ];
            
            $this->view('Templates/Updateforms',$data,$data2);
        }else{
            echo "oups something went wrong, try again";        
        }
    }

    //------------------------------------------------------
    public function add(){
        
        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            $image = $_FILES['image']['name'];
            $uploaded = $_FILES['image']['tmp_name'];
            $file_destination = '../images/upload/' . $image;
            


            if(move_uploaded_file($uploaded, $file_destination)){
                die('web');
            }else{
                die('zeb');
            }

            $data = [
                'label' => $_POST['label'],
                'code' => $_POST['code'],
                'buy' => $_POST['buyP'],
                'sell' => $_POST['sellP'],
                'final' => $_POST['finalP'],
                'desc' => $_POST['desc'],
                'cat' => $_POST['category'],
                'img' => $_FILES['image']['name'],
                'color' => $_POST['color'],
            ];
            
            if ($this->CrudModel->addProduct($data)) {
                header('Location:'.URLROOT.'ElectroSite/public/Admin/show');
            } else {
                die('something wrong!!!!');
            }
            
        }else{
            echo "oups something went wrong, try again";
        }
    }

    //------------------------------------------------------
    public function update(){
        if(isset($_POST['productId'])){
            $id = $_POST['productId'];
            if(isset($_POST['label']) && isset($_POST['code']) && isset($_POST['buyP']) && isset($_POST['sellP']) && isset($_POST['finalP']) && isset($_POST['desc']) && isset($_POST['category']) && isset($_POST['image'])){

                $label = $_POST['label'];
                $code = $_POST['code'];
                $buy = $_POST['buyP'];
                $sell = $_POST['sellP'];
                $final = $_POST['finalP'];
                $desc = $_POST['desc'];
                $cat = $_POST['category'];
                $img = $_POST['image'];
                
                $this->CrudModel->updateProduct($id,$label,$code,$buy,$sell,$final,$cat,$desc,$img);
                
                header('Location:'.URLROOT.'ElectroSite/public/Admin/show');
            }else{
                echo "oups something went wrong, try again";
            }
        }else{
            echo "oups something went wrong, there no id";
        }
    }

    //------------------------------------------------------
    public function delete(){
        if(isset($_POST['productId'])){
            $id = $_POST['productId'];
            $this->CrudModel->deleteProduct($id);
            header('Location:'.URLROOT.'ElectroSite/public/Admin/show');
        }else{
            echo "normale le le lle le";
        }
    }

    //------------------------------------------------------
    public function addcat(){
        if(isset($_POST['name']) && isset($_POST['description']) && $_FILES['image']['name']){

            $data = [
                'name' => $_POST['name'],
                'desc' => $_POST['description'],
                'img' => $_FILES['image']['name']
            ];
            
        }
    }
    
}


?>