<?php

namespace en2portr3s\model;

class Suggestion extends Database {

    private $id;
    private $content;
    private $status;
    private $since;

    function __construct($suggestion_data = []) {
        $this->db_name = "en2portr3s";
        if ($suggestion_data !== []) {
            $this->insert($suggestion_data);
        }
    }

    public function select($id = '') {
        $this->query = "SELECT * FROM suggestion";
        if ($id !== '') {
            $this->query .= " WHERE id = '$id' ";
        }
        $this->retrieve();
        $matches = count($this->rows);
        if ($matches === 0) {
            $this->message = 'Sugerencia no registrada';
        } else if ($matches === 1) {
            $this->synchronize($this->rows[0]);
            $this->message = 'Sugerencia encontrada';
        }
        return $this->rows;
    }

    public function insert($suggestion_data) {
        $this->synchronize($suggestion_data);
        $this->query = "
            INSERT INTO suggestion (content, status)
            VALUES ('$this->content', '$this->status')
        ";
        $this->modify();
        $this->message = 'Sugerencia guardada correctamente';
    }

    public function update($suggestion_data) {
        $this->synchronize($suggestion_data);
        $this->query = "
            UPDATE suggestion
            SET content = '$this->content',
            WHERE id = '$this->id'
        ";
        $this->modify();
        $this->message = 'Sugerencia modificada';
    }

    public function delete($id) {
        $this->query = "
            DELETE FROM suggestion
            WHERE id = '$id'
        ";
        $this->modify();
        $this->message = 'Sugerencia eliminada';
    }

    private function synchronize($data) {
        foreach ($data as $propiedad => $valor) {
            $this->$propiedad = $valor;
        }
    }

}
