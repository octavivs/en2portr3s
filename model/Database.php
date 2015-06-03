<?php

namespace en2portr3s\model;

abstract class Database {

    private static $db_host = 'localhost';
    private static $db_user = 'n2x3_user';
    private static $db_pass = 'En2porTr3$';
    protected $db_name = 'default';
    protected $query;
    protected $rows = array();
    private $connection;
    public $message = 'Hecho';

    /**
     * Método abstracto para recuperar datos de la base de datos
     */
    abstract protected function get($data);

    /**
     * Método abstracto para ingresar datos a la base de datos
     */
    abstract protected function set($data);

    /**
     * Método abstracto para modificar datos en la base de datos
     */
    abstract protected function edit($data);

    /**
     * Método abstracto para eliminar datos de la base de datos
     */
    abstract protected function delete($data);

    /**
     * Conectar a la base de datos
     */
    private function connect() {
        $this->connection = new \mysqli(
                self::$db_host, self::$db_user, self::$db_pass, $this->db_name);
    }

    /**
     * Desconectar la base de datos
     */
    private function disonnect() {
        $this->connection->close();
    }

    /**
     * Ejecutar una consulta del tipo INSERT, DELETE, UPDATE
     */
    protected function dml() {
        $this->connect();
        $this->connection->query($this->query);
        $this->disonnect();
    }

    /**
     * Traer resultados de una consulta del tipo SELECT
     */
    protected function dql() {
        $this->connect();
        $result = $this->connection->query($this->query);
        while ($this->rows[] = $result->fetch_assoc()) {
            
        }
        $result->close();
        $this->disonnect();
        array_pop($this->rows);
    }

}
