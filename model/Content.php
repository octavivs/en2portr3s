<?php

namespace en2portr3s\model;

class Content extends Database {

    private $key;
    private $id;
    private $kind;
    private $page_id;

    function __construct() {
        $this->db_name = "en2portr3s";
        $this->key = 'id';
    }

    public function get($key = '') {
        if ($key === '') {
            $this->query = "SELECT * FROM content";
        } else {
            $this->query = 'SELECT * FROM content WHERE ' . $this->key . " = '$key'";
        }
        $this->dql();
        $matches = count($this->rows);
        if ($matches === 0) {
            $this->message = 'Contenido no registrado';
        } else if ($matches === 1) {
            $this->synchronize($this->rows[0]);
            $this->message = 'Contenido encontrado';
        }
        return $this->rows;
    }

    public function searchParam($key) {
        $this->key = $key;
    }

    public function set($content_data) {
        if (array_key_exists('id', $content_data)) {
            $this->get($content_data['id']);
            if ($content_data['id'] != $this->id) {
                $this->synchronize($content_data);
                $this->query = "
                    INSERT INTO content(kind)
                    VALUES('$this->kind')
                ";
                $this->dml();
                $this->message = 'Registro exitoso';
            } else {
                $this->message = 'Ese contenido ya está registrado';
            }
        } else {
            $this->message = 'No se ha registrado el contenido';
        }
    }

    public function edit($content_data) {
        $this->synchronize($content_data);
        $this->query = "
            UPDATE content
            SET kind='$this->kind'
            WHERE id = '$this->id'
        ";
        $this->dml();
        $this->message = 'Contenido modificado';
    }

    public function delete($id) {
        $this->query = "
            DELETE FROM content
            WHERE id = '$id'
        ";
        $this->dml();
        $this->message = 'Contenido eliminado';
    }

    private function synchronize($data) {
        foreach ($data as $propiedad => $valor) {
            $this->$propiedad = $valor;
        }
    }

}
