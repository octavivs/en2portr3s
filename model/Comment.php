<?php

namespace en2portr3s\model;

class Comment extends Database {

    private $first_name;
    private $last_name;
    private $email;
    private $content;

    function __construct() {
        $this->db_name = "en2portr3s";
    }

    public function get($email = '') {
        if ($email != '') {
            $this->query("
                SELECT first_name, last_name, email, content
                FROM comment
                WHERE email = '$email'
            ");
            $this->dql();
        }
        if (count($this->rows) === 1) {
            foreach ($this->rows[0] as $propiedad => $valor) {
                $this->$propiedad = $valor;
            }
            $this->message = 'Usuario encontrado';
        } else {
            $this->message = 'Usuario no encontrado';
        }
    }

    public function set($user_data) {
        /*if (array_key_exists('email', $user_data)) {
            /*$this->get($user_data['email']);
            if ($user_data['email'] != $this->email) {*/
                foreach ($user_data as $campo => $valor) {
                    $campo = $valor;
                }
                $this->query = "
                    INSERT INTO comment
                    (first_name, last_name, email, content)
                    VALUES
                    ('$first_name', '$last_name', '$email', '$content')
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
        foreach ($user_data as $campo => $valor) {
            $campo = $valor;
        }
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

}
