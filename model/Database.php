<?php

namespace en2portr3s\model;

abstract class Database {

    private static $db_host = 'localhost';
    private static $db_user = 'n2x3_user';
    private static $db_pass = 'En2porTr3$';
    private static $db_enc = 'utf8';
    protected $db_name = 'default';
    protected $query;
    protected $rows = [];
    private $connection;
    public $message = 'Hecho';

    /**
     * Método abstracto para recuperar datos de la base de datos
     */
    abstract protected function select($data);

    /**
     * Método abstracto para ingresar datos a la base de datos
     */
    abstract protected function insert($data);

    /**
     * Método abstracto para modificar datos en la base de datos
     */
    abstract protected function update($data);

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
        $this->connection->set_charset(self::$db_enc);
    }

    /**
     * Desconectar la base de datos
     */
    private function disconnect() {
        $this->connection->close();
    }

    /**
     * Ejecutar una consulta del tipo INSERT, DELETE, UPDATE
     */
    protected function modify() {
        $this->connect();
        $this->connection->query($this->query);
        $this->disconnect();
    }

    /**
     * Traer resultados de una consulta del tipo SELECT
     */
    protected function retrieve() {
        $this->connect();
        $result = $this->connection->query($this->query);
        $this->rows = $result->fetch_all(MYSQLI_ASSOC);
        $result->free();
        $this->disconnect();
    }

    /**
     * Escapa caracteres para su posterior utilización en alguna consulta.
     */
    protected function escape($data) {
        if (is_string($data)) {
            return $this->connection->real_escape_string($data);
        } else if (is_array($data)) {
            $encoded = [];
            foreach ($data as $item) {
                $encoded[] = $this->connection->real_escape_string($item);
            }
            return $encoded;
        } else {
            return false;
        }
    }

}
