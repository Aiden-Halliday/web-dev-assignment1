<?php
    class database{
        private $host = 'localhost';

        private $username = 'root';

        private $password = 'mysql';

        private $database = 'assignment-1'; 
        protected $connection;
        public function __construct(){
            if(!isset($this->connection)){
                $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
                if(!$this->connection){ //if connection cannot be established
                    echo "<p>Cannot connect to the database</p>";
                    exit();
                }
            }
            return $this->connection;
        }
    }
?>