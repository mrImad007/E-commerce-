<?php

class Database {
    

        private $host = "localhost;port=3306;dbname=";
        private $user = 'imad';
        private $pass = 'halimabouroud4316';
        private $dbname = "ElectroSite";
        
        protected $pdo;
        protected $stmt;
        protected $error;

        public function __construct() {
            // set DSN
            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
            $option = array(
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );
            
            // create PDO instance
            try {
                $this->pdo = new PDO($dsn, $this->user, $this->pass,$option);
            } catch (PDOException $e) {
                $this->error = $e->getMessage();
                echo $this->error;
            }
        }

     // prepare statement with query
    public function prepare($sql){
        $this->stmt = $this->pdo->prepare($sql);
    }

    public function exe(){
        $this->stmt->execute();
    }

     public function query($sql) {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
    }

    // prepare statement with query
    public function prpExe($sql) {
        $this->stmt = $this->pdo->prepare($sql);
        return $this->stmt->execute();
    }



    //binding 
    public function bind($param, $value, $type = null) {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }

        $this->stmt->bindValue($param, $value, $type);
    }

    // excute the prepared statement
    public function execute() {
        return $this->stmt->execute();
    }

    // get result set as array of object
    public function resultSet() {
        $this->execute();
        $products = $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        return $products;
    }

    // get result set as array of object
    public function single() {
        $this->execute();
        $products = $this->stmt->fetch(PDO::FETCH_OBJ);
        return $products;
    }

    public function beginTransaction() {
        $this->pdo->beginTransaction();
    }
    public function lastInserId() {
        return $this->pdo->lastInsertId();
    }
    public function commit() {
        return $this->pdo->commit();
    }
}

?>