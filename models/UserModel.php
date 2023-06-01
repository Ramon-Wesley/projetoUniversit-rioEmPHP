<?php
require_once "./configuration/Connect.php";
class UserModel
{
    private $tableName;
    private $connection;

    public function __construct()
    {
        //$this->connection = Connect::connection_database();
        $this->tableName = "usuario";
    }

    public function getAll()
    {
        $data = array();
        $resultQuery = $this->connection->query("SELECT * FROM usuario");
        $data = $resultQuery->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
}
