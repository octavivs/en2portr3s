<?php

namespace en2portr3s\admin\model;

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

   public function get($id = '') {
              $this->query = "SELECT * FROM question";
            $this->dql();
             return $this->rows;   
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

    public function delete($id = '') {
        $this->query = "DELETE FROM question WHERE id = '$id'";
        $this->dml();
        $this->message = 'Pregunta eliminada';
    }

    private function synchronize($data) {
        foreach ($data as $propiedad => $valor) {
            $this->$propiedad = $valor;
        }
    }

}
