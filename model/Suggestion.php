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
            $this->set($suggestion_data);
        }
    }

    public function get($id = '') {
        if ($id === '') {
            $this->query = "SELECT * FROM suggestion";
        } else {
            $this->query = "SELECT * FROM suggestion WHERE id = '$id'";
        }
        $this->dql();
        $matches = count($this->rows);
        if ($matches === 0) {
            $this->message = 'Sugerencia no registrada';
        } else if ($matches === 1) {
            $this->synchronize($this->rows[0]);
            $this->message = 'Sugerencia encontrada';
        } else {
            return $this->rows;
        }
    }

    public function set($suggestion_data) {
        $this->synchronize($suggestion_data);
        $this->query = "
            INSERT INTO suggestion (content, status)
            VALUES ('$this->content', '$this->status')
        ";
        $this->dml();
        $this->message = 'Sugerencia guardada correctamente';
    }

    public function edit($suggestion_data) {
        $this->synchronize($suggestion_data);
        $this->query = "
            UPDATE suggestion
            SET content = '$this->content',
            WHERE id = '$this->id'
        ";
        $this->dml();
        $this->message = 'Sugerencia modificada';
    }

    public function delete($id) {
        $this->query = "
            DELETE FROM suggestion
            WHERE id = '$id'
        ";
        $this->dml();
        $this->message = 'Sugerencia eliminada';
    }

    private function synchronize($data) {
        foreach ($data as $propiedad => $valor) {
            $this->$propiedad = $valor;
        }
    }

}
