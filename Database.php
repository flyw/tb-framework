<?php
/**
 * Created by PhpStorm.
 * User: yuan
 * Date: 2019-02-21
 * Time: 17:05
 */

class Database
{
    protected $conn = null;
    function __construct()
    {
        $this->conn = new mysqli('127.0.0.1', 'root', 'root', 'afc');
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    protected function query($sql) {
        $queryResult = $this->conn->query($sql);
        $result = [];
        if ($queryResult->num_rows > 0) {
            // output data of each row
            while($row = $queryResult->fetch_assoc()) {
                $result[] = $row;
            }
        }
        return $result;
    }
    protected function insert($sql) {
        $this->conn->query($sql);
    }
    protected function update($sql) {
        $this->conn->query($sql);
    }
}
