<?php
Class crudApplication{
    private $conn;
    public function __construct(){
        $dbhost='localhost';
        $dbuser= 'root';
        $dbpass= 'BabuNiH@492';
        $dbName = 'crudApplication';

        $this->conn = mysqli_connect($dbhost,$dbuser,$dbpass, $dbName);
    }
}


?>