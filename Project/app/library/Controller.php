<?php

class Controller {

    public function model($model){
        require_once('../app/model/'.$model.'.php');
        return new $model();
    }

    public function view($view, $data = [],$data2 = []){
        
        if(file_exists('../app/view/'.$view.'.php')){
            require_once('../app/view/'.$view.'.php');
        }else{
            die('view does not exsit !');
        }
    }
}