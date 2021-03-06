<?php
    class db{
        // 속성
        private $dbhost = 'localhost';
        private $dbuser = 'root';
        private $dbpass = '';
        private $dbname = 'u4bi';

        // 콘텐트
        public function connect(){
            
            $mysql_connect_str = "mysql:host=$this->dbhost;dbname=$this->dbname";
            
            $dbConnection = new PDO($mysql_connect_str, $this->dbuser, $this->dbpass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
            $dbConnection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            return $dbConnection;
        }
    }