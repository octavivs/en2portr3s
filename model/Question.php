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

    function __construct() {
        $this->db_name = "en2portr3s";
    }

    public function get($email = '') {
        if ($email != '') {
            $this->query = "SELECT * FROM question WHERE email = '$email'";
            $this->dql();
        }
        if (count($this->rows) === 1) {
            $this->synchronize($this->rows[0]);
            $this->message = 'Pregunta encontrada';
        } else {
            $this->message = 'Pregunta no encontrada';
        }
    }

    public function set($user_data) {
        $this->synchronize($user_data);
        $this->query = "
            INSERT INTO question (first_name, last_name, email, content, status)
            VALUES ('$this->first_name', '$this->last_name', '$this->email', '$this->content', '$this->status')
        ";
        $this->dml();
        $this->message = 'Pregunta guardada correctamente';
    }

    public function edit($user_data = []) {
        $this->synchronize($user_data);
        $this->query = "
            UPDATE question
            SET first_name = '$this->nombre',
                last_name = '$this->apellido',
                email = '$this->email',
                content = '$this->content',
                status = '$this->status'
            WHERE email = '$this->email'
        ";
        $this->dml();
        $this->message = 'Pregunta modificada';
    }

    public function delete($email = '') {
        $this->query = "DELETE FROM question WHERE email = '$email'";
        $this->dml();
        $this->message = 'Pregunta eliminada';
    }

    private function synchronize($data) {
        foreach ($data as $propiedad => $valor) {
            $this->$propiedad = $valor;
        }
    }

}
