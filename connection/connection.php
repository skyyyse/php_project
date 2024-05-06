<?php
class connection
{
    private $host;
    private $user;
    private $password;
    private $database;
    public $conn;
    public function __construct($host = "localhost", $user = "root", $password = "", $database = "project")
    {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->database = $database;
        $this->conn = new mysqli($host, $user, $password, $database);
        if ($this->conn->connect_error) {
            die("" . $this->conn->connect_error);
        }
    }
}