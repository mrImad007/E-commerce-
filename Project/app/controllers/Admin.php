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
        $category = $this->CrudModel->category();
        $data= [
            'products' => $products
        ];
        $data2 = [
            // 'id' => $category->id,
            // 'name' => $category->name,
            // 'descr' => $category->description
            'category' => $category
        ];
        $this->view('Templates/Dashboard',$data,$data2);
    }

    //------------------------------------------------------
    public function showcat(){
        $category = $this->CrudModel->category();
        $data= [
            'category' => $category
        ];
        $this->view('Templates/AddProd',$data);
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
                // 'id' => $category->id,
                // 'name' => $category->name,
                // 'descr' => $category->description
                'category' => $category
            ];
            
            $this->view('Templates/UpdateProd',$data,$data2);
        }else{
            echo "oups something went wrong, try again";        
        }
    }

    //------------------------------------------------------
    public function add(){
        
        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            $image = $_FILES['image']['name'];
            $uploaded = $_FILES['image']['tmp_name'];
            $file_destination ='/Applications/XAMPP/xamppfiles/htdocs/ElectroSite/public/images/upload';
            move_uploaded_file($uploaded, $file_destination."/".$image);
            
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
            echo "Id not provided";
        }
    }

    //------------------------------------------------------Category Management
    public function forms(){
        $this->view('Templates/addCat');
    }

    //------------------------------------------------------
    public function updtform(){
        $id = $_POST['id'];
        
        $category = $this->CrudModel->singleCategory($id);

        $data = [
            'name' => $category->name,
            'descr' => $category->description,
            'image' => $category->image
        ];

        $this->view('Templates/UpdateCat', $data);

    }
    //------------------------------------------------------
    public function addCat(){
        
        if(isset($_POST['name']) && isset($_POST['descr'])){

            $data = [
                'name' => $_POST['name'],
                'descr' => $_POST['descr'],
                'image' => $_FILES['image']['name']
            ];

            

            $this->CrudModel->addCategory($data);

            header('Location:'.URLROOT.'ElectroSite/public/Admin/show');
        }
    }

    //------------------------------------------------------
    public function updateCat(){
        if(isset($_POST['name']) && isset($_POST['descr'])){

            $data = [
                'name' => $_POST['name'],
                'descr' => $_POST['descr'],
                'image' => $_FILES['image']['name']
            ];

            $this->CrudModel->updateCategory($data);

            header('Location:'.URLROOT.'ElectroSite/public/Admin/show');
        }
    }

    //------------------------------------------------------
    public function deleteCat(){
        if(isset($_POST['id'])){
            $id = $_POST['id'];
            $this->CrudModel->deleteCategory($id);
            header('Location:'.URLROOT.'ElectroSite/public/Admin/show');
        }else{
            echo "Id not provided";
        }
    }
    
}


?>