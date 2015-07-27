<?php

namespace en2portr3s\model;

use en2portr3s\model\Content;

class Page extends Database {

    private $id;
    private $label;
    private $since;
    private $modified;

    function __construct($label = '') {
        $this->db_name = "en2portr3s";
        if ($label !== '') {
            $this->insert($label);
        }
    }

    public function select($label = '') {
        $this->query = "SELECT * FROM page";
        if ($label !== '') {
            $this->query .= " WHERE label = '$label' ";
        }
        $this->retrieve();
        $matches = count($this->rows);
        if ($matches === 0) {
            $this->message = 'Página web no registrada';
        } else if ($matches === 1) {
            $this->synchronize($this->rows[0]);
            $this->message = 'Página web encontrada';
        }
        return $this->rows;
    }

    public function getContent() {
        $content = new Content();
        $content->searchParam('page_id');
        if ($this->id === '') {
            return $content->select();
        } else {
            return $content->select($this->id);
        }
    }

    public function insert($label) {
        if ($label !== '') {
            $this->select($label);
            if (empty($this->label)) {
                $this->label = $label;
                $this->query = "
                    INSERT INTO page(label)
                    VALUES('$this->label')
                ";
                $this->modify();
                $this->select($label);
                $this->message = 'Registro exitoso';
            } else {
                $this->message = 'La página ya está registrada';
            }
        } else {
            $this->message = 'No se ha registrado la página';
        }
    }

    public function update($page_data) {
        if (array_key_exists('id', $page_data)) {
            $this->select($page_data['id']);
            if (!empty($this->id)) {
                $this->synchronize($page_data);
                $this->query = "
                    UPDATE page
                    SET label='$this->label'
                    WHERE id = '$this->id'
                ";
                $this->modify();
                $this->message = 'Página modificada';
            } else {
                $this->message = 'La página no está registrada';
            }
        } else {
            $this->message = 'No se ha modificado la página';
        }
    }

    public function delete($label) {
        if ($label !== '') {
            $this->select($label);
            if (!empty($this->label)) {
                $this->query = "
                    DELETE FROM page
                    WHERE id = '$this->id'
                ";
                $this->modify();
                $this->message = 'Página eliminada';
            } else {
                $this->message = 'La página no está registrada';
            }
        } else {
            $this->message = 'No se ha eliminado la página';
        }
    }

    /**
     * Sincroniza los datos de la clase con la tabla en la base de datos.
     */
    private function synchronize($data) {
        foreach ($data as $propiedad => $valor) {
            $this->$propiedad = $valor;
        }
    }

}
