<?php

namespace en2portr3s\model;

class Question extends Database {

    private $id;
    private $first_name;
    private $last_name;
    private $email;
    private $content;
    private $status;
    private $since;

    function __construct($question_data = []) {
        $this->db_name = "en2portr3s";
        if ($question_data !== []) {
            $this->insert($question_data);
        }
    }

    public function select($id = '') {
        $this->query = "SELECT * FROM question";
        if ($id !== '') {
            $this->query .= " WHERE id = '$id' ";
        }
        $this->retrieve();
        $matches = count($this->rows);
        if ($matches === 0) {
            $this->message = 'Pregunta no encontrada';
        } else if ($matches === 1) {
            $this->synchronize($this->rows[0]);
            $this->message = 'Pregunta encontrada';
        }
        return $this->rows;
    }

    public function insert($question_data) {
        $this->synchronize($question_data);
        $this->query = "
            INSERT INTO question (first_name, last_name, email, content, status)
            VALUES ('$this->first_name', '$this->last_name', '$this->email', '$this->content', '$this->status')
        ";
        $this->modify();
        $this->message = 'Pregunta guardada correctamente';
    }

    public function update($question_data) {
        $this->synchronize($question_data);
        $this->query = "
            UPDATE question
            SET first_name = '$this->nombre',
                last_name = '$this->apellido',
                email = '$this->email',
                content = '$this->content',
                status = '$this->status'
            WHERE email = '$this->email'
        ";
        $this->modify();
        $this->message = 'Pregunta modificada';
    }

    public function delete($id) {
        $this->query = "DELETE FROM question WHERE id = '$id'";
        $this->modify();
        $this->message = 'Pregunta eliminada';
    }

    private function synchronize($data) {
        foreach ($data as $propiedad => $valor) {
            $this->$propiedad = $valor;
        }
    }

}
