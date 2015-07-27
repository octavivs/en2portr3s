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

    public function select($key = '') {
        $this->getImages($key);
        $images_array = $this->rows;
        $this->getText($key);
        $this->rows = array_merge($this->rows, $images_array);
        array_multisort($this->rows);
        $matches = count($this->rows);
        if ($matches === 0) {
            $this->message = 'Contenido no registrado';
        } else if ($matches === 1) {
            $this->synchronize($this->rows[0]);
            $this->message = 'Contenido encontrado';
        }
        return $this->rows;
    }

    public function getImages($key = '') {
        $this->query = "
            SELECT content.id, image.url, image.alt, image.since, image.modified
            FROM content JOIN image ON content.id = image.content_id
        ";
        if ($key !== '') {
            $this->query .= " WHERE content.$this->key = '$key' ";
        }
        $this->retrieve();
        $matches = count($this->rows);
        if ($matches === 0) {
            $this->message = 'Imagen no registrada';
        } else if ($matches === 1) {
            $this->synchronize($this->rows[0]);
            $this->message = 'Imagen encontrada';
        }
        return $this->rows;
    }

    public function getText($key = '') {
        $this->query = "
            SELECT content.id, text_entry.body, text_entry.lang_code, text_entry.since, text_entry.modified
            FROM content JOIN text_entry ON content.id = text_entry.content_id
        ";
        if ($key !== '') {
            $this->query .= " WHERE content.$this->key = '$key' ";
        }
        $this->retrieve();
        $matches = count($this->rows);
        if ($matches === 0) {
            $this->message = 'Imagen no registrada';
        } else if ($matches === 1) {
            $this->synchronize($this->rows[0]);
            $this->message = 'Imagen encontrada';
        }
        return $this->rows;
    }

    public function searchParam($key) {
        $this->key = $key;
    }

    public function insert($content_data) {
        if (array_key_exists('id', $content_data)) {
            $this->select($content_data['id']);
            if ($content_data['id'] != $this->id) {
                $this->synchronize($content_data);
                $this->query = "
                    INSERT INTO content(kind)
                    VALUES('$this->kind')
                ";
                $this->modify();
                $this->message = 'Registro exitoso';
            } else {
                $this->message = 'Ese contenido ya está registrado';
            }
        } else {
            $this->message = 'No se ha registrado el contenido';
        }
    }

    public function update($content_data) {
        $this->synchronize($content_data);
        $this->query = "
            UPDATE content
            SET kind='$this->kind'
            WHERE id = '$this->id'
        ";
        $this->modify();
        $this->message = 'Contenido modificado';
    }

    public function delete($id) {
        $this->query = "
            DELETE FROM content
            WHERE id = '$id'
        ";
        $this->modify();
        $this->message = 'Contenido eliminado';
    }

    private function synchronize($data) {
        foreach ($data as $propiedad => $valor) {
            $this->$propiedad = $valor;
        }
    }

}
