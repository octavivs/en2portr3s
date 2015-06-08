<?php

namespace en2portr3s\model;

class Comment extends Database {

    private $first_name;
    private $last_name;
    private $email;
    private $content;
    private $state;

    function __construct() {
        $this->db_name = "en2portr3s";
    }

    public function get($email = '') {
        if ($email != '') {
            $this->query = "
                SELECT first_name, last_name, email, content, state
                FROM comment
                WHERE email = '$email'
            ";
            $this->dql();
        }
        if (count($this->rows) === 1) {
            $this->synchronize($this->rows[0]);  
               $this->message = 'Usuario encontrado';
        } else {
            $this->message = 'Usuario no encontrado';
        }
    }

    public function set($user_data) {
        /*if (array_key_exists('email', $user_data)) {
            /*$this->get($user_data['email']);
            if ($user_data['email'] != $this->email) {*/
         $this->synchronize($user_data);        
        
                $this->query = "
                    INSERT INTO comment
                    ( first_name, last_name, email, content,state)
                    VALUES
                    ('$this->first_name','$this->last_name','$this->email','$this->content','$this->state')
                   ";
                $this->dml();
                $this->message = 'mensaje guardado correctamente';
                  
              /*  } else {
                $this->message = 'error al guardar mensaje';
            }
        } else {
            $this->message = 'No se ha agregado el mensaje';
        }*/
    }

    public function edit($user_data = []) {
        $this->synchronize($user_data);  
        $this->query = "
            UPDATE comentarios
            SET first_name='$nombre',
                last_name='$apellido',
                email='$email',
                content='$content',
            WHERE email = '$email'
        ";
        $this->dml();
        $this->message = 'comentarios modificados';
    }

    public function delete($user_email='') {
        $this->query = "
            DELETE FROM comentarios
            WHERE email = '$email'
        ";
        $this->dml();
        $this->message = 'comentario  eliminado';
    }

     private function synchronize($data) {
        foreach ($data as $propiedad => $valor) {
            $this->$propiedad = $valor;
        }
    }
}
