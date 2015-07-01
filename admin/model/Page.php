<?php

namespace en2portr3s\admin\model;

class Page {

    private $id;
    private $label;
    private $since;
    private $modified;

    function __construct() {
        $this->db_name = "en2portr3s";
    }

    public function get($id = '') {
        if ($id === '') {
            $this->query = "SELECT * FROM page";
        } else {
            $this->query = "SELECT * FROM page WHERE id = '$id'";
        }
        $this->dql();
        $matches = count($this->rows);
        if ($matches === 0) {
            $this->message = 'Página web no registrada';
        } else if ($matches === 1) {
            $this->synchronize($this->rows[0]);
            $this->message = 'Página web encontrada';
        } else {
            return $this->rows;
        }
    }

    public function set($page_data) {
        if (array_key_exists('id', $page_data)) {
            $this->get($page_data['id']);
            if ($page_data['id'] != $this->id) {
                $this->synchronize($page_data);
                $this->query = "
                    INSERT INTO page(label)
                    VALUES('$this->label')
                ";
                $this->dml();
                $this->message = 'Registro exitoso';
            } else {
                $this->message = 'La página ya está registrada';
            }
        } else {
            $this->message = 'No se ha registrado la página';
        }
    }

    public function edit($page_data) {
        $this->synchronize($page_data);
        $this->query = "
            UPDATE page
            SET label='$this->label'
            WHERE id = '$this->id'
        ";
        $this->dml();
        $this->message = 'Página modificada';
    }

    public function delete($id) {
        $this->query = "
            DELETE FROM page
            WHERE id = '$id'
        ";
        $this->dml();
        $this->message = 'Página eliminada';
    }

    private function synchronize($data) {
        foreach ($data as $propiedad => $valor) {
            $this->$propiedad = $valor;
        }
    }

}
