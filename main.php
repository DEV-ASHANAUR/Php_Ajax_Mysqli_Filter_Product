<?php
    class Main{
        //connection property
        protected $host = 'localhost';
        protected $user = 'root';
        protected $pass = '';
        protected $db = 'filter_product';
        //query propery
        protected $con;
        protected $sql;
        protected $result;
        //database connection
        public function __construct()
        {
            if(!isset($this->con)){
                $this->con = new mysqli($this->host,$this->user,$this->pass,$this->db);
                if(!$this->con){
                    echo "connect Error".$this->con->connect_error;
                }
            }
            return $this->con;
        }
        public function brand(){
            $this->sql = "SELECT DISTINCT(product_brand) FROM `product` WHERE product_status = '1' ORDER BY product_id DESC";
            $this->result = $this->con->query($this->sql);
            if($this->result){
                return $this->result;
            }else{
                return false;
            }
        }
        public function ram(){
            $this->sql = "SELECT DISTINCT(product_ram) FROM `product` WHERE product_status = '1' ORDER BY product_id DESC";
            $this->result = $this->con->query($this->sql);
            if($this->result){
                return $this->result;
            }else{
                return false;
            }
        }
        public function Storage(){
            $this->sql = "SELECT DISTINCT(product_storage) FROM `product` WHERE product_status = '1' ORDER BY product_id DESC";
            $this->result = $this->con->query($this->sql);
            if($this->result){
                return $this->result;
            }else{
                return false;
            }
        }
        //destroy database connection 
        public function __destruct(){
            $this->con->close();
        }
    }
    //$obj = new Main();


?>