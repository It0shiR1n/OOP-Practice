<?php

    abstract class OperationsConnectDB {
        // Connection with databse arguments
        protected $hostDB;
        protected $nameDB;
        protected $userDB;
        protected $passDB;

         //Getters and Setters for hostDB argument
         public function getHostDB(){
            return $this->hostDB;

        }

        public function setHostDB($hostDB) {
            $this->hostDB = $hostDB;

        }


        // Getters and Setters for nameDB argument
        public function getNameDB() {
            return $this->nameDB;

        }

        public function setNameDB($nameDB) {
            $this->nameDB = $nameDB;

        }


        // Getters and Setters for userDB argument 
        public function getUserDB() {
            return $this->userDB;

        }

        public function setUserDB($userDB) {
            $this->userDB = $userDB;

        }


        // Getters and Setters for passDB argument
        public function getPassDB() {
            return $this->passDB;

        }

        public function setPassDB($passDB) {
            $this->passDB = $passDB;

        }


        #abstract public function connect();        // Connection method to stabilish connection with the database and generate PDO object

    }

    abstract class OperationsInsertDelete {
        
        // Insert item in database arguments 
        protected $pdo;
        protected $sku;
        protected $name;
        protected $price;
        protected $fk_type;
        protected $valueOfType;

        // Delete item in database arguments 
        protected $id_item;


        // Getters and Setters for manipulate PDO
        public function getPdo() {
            return $this->pdo;

        }

        public function setPdo($pdo) {
            $this->pdo = $pdo;

        }


        // Getters and Setters for SKU arguments 
        public function getSKU() {
            return $this->sku;

        }

        public function setSKU($sku) {
            $this->sku = $sku;

        }


        // Getters and Setters for Name arguments 
        public function getName() {
            return $this->name;

        }

        public function setName($name) {
            $this->name = $name;

        }


        // Getters and Setters for Price arguments 
        public function getPrice() {
            return $this->price;

        }

        public function setPrice($price) {
            $this->price = $price;

        }


        // Getters and Setters for foreing key arguments
        public function getFkType() {
            return $this->fk_type;

        }

        public function setFkType($fk_type) {
            $this->fk_type = $fk_type;

        }


        // Getters and Setters for value of type selected in the options 
        public function getValueOfType() {
            return $this->valueOfType;

        }

        public function setValueOfType($valueOfType) {
            $this->valueOfType = $valueOfType;

        }



        // Getters and Setter for id item in database  
        public function getIdItem() {
            return $this->id_item;

        }
        
        public function setIdItem($id_item) {
            $this->id_item = $id_item;

        }

        
        abstract public function insertItems();    // Insert Items in database method 
        abstract public function deleteItems();    // Delete Items in database method 

    }


    abstract class OperationsDataReceive {
        protected $sku;
        protected $name;
        protected $price;
        
        protected $typeSelected;
        
        protected $size;
        protected $weight;

        protected $height;
        protected $width;
        protected $length;


        // SKU getter and setter
        public function getSKU() {
            return $this->sku;

        }

        public function setSKU($sku) {
            if(!empty($sku)){
                $this->sku = $sku;
        
            }else {
                return 1;
               
            }

        }



        // Name getter and setter
        public function getName() {
            return $this->name;

        }

        public function setName($name) {
            if(!empty($name)){
                $this->name = $name;
        
            }else {
                return 1;
        
            }

        }


        // Price getter and setter
        public function getPrice() {
            return $this->price;

        }

        public function setPrice($price) {
            if(!empty($price)){
                $this->price = $price;
        
            }else {
                return 1;
            
            }

        }



        // TypeSelected getter and setter
        public function getTypeSelected() {
            return $this->typeSelected;

        }

        public function setTypeSelected($typeSelected) {
            if(!empty($typeSelected)){
                $this->typeSelected = $typeSelected;

            }else {
                return 1;

            }

        }



        // size getter and setter
        public function getSize() {
            return $this->size;

        }        

        public function setSize($size) {
            if(!empty($size)) {
                $this->size = $size;

            }else {
                return 1;

            }

        }


        // weight getter and setter 
        public function getWeight() {
            return $this->weight;

        }

        public function setWeight($weight) {
            if(!empty($weight)) {
                $this->weight = $weight;

            }else {
                return 1;

            }


        }



        // HxWxL getter and setter 
        public function getHeight() {
            return $this->height;

        }

        public function setHeight($height) {
            if(!empty($height)) {
                $this->height = $height;

            }else {
                return 1;

            }

        }




        public function getWidth() {
            return $this->width;

        }

        public function setWidth($width) {
            if(!empty($width)){
                $this->width = $width;

            }else {
                return 1;

            }

        }




        public function getLength() {
            return $this->length;

        }

        public function setLength($length) {
            if(!empty($length)){
                $this->length = $length;

            }else {
                return 1;

            }

        }


        abstract public function checkErr($err);

    }


    abstract class OperationsMassDelete {
        protected $cards;

        public function getCards(){
            return $this->cards;

        }

        public function setCards($cards){            
            $this->cards = implode(",", $cards);

        }

    }

?>