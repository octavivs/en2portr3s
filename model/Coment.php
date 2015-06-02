<?php

namespace en2portr3s\model;

class Coment extends Database {

    private $first_name;
    private $last_name;
    private $email;
    private $mensaje;

    function __construct() {
        $this->db_name = "en2portr3s";
    }

    public function get($email = '') {
        if ($email != '') {
            $this->query("
                SELECT first_name, last_name, email, mensaje
                FROM comentarios
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
        if (array_key_exists('email', $user_data)) {
            $this->get($user_data['email']);
            if ($user_data['email'] != $this->email) {
                foreach ($user_data as $campo => $valor) {
                    $campo = $valor;
                }
                $this->query = "
                    INSERT INTO comentarios
                    (first_name, last_name, email, mensaje)
                    VALUES
                    ('$first_name', '$last_name', '$email', '$mensaje')
                ";
                $this->dml();
                $this->mensaje = 'mensaje guardado correctamente';
            } else {
                $this->mensaje = 'error al guardar mensaje';
            }
        } else {
            $this->mensaje = 'No se ha agregado el mensaje';
        }
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
                phone='$mensaje',
            WHERE email = '$email'
        ";
        $this->dml();
        $this->mensaje = 'comentarios modificados';
    }

    public function delete($user_email='') {
        $this->query = "
            DELETE FROM comentarios
            WHERE email = '$email'
        ";
        $this->dml();
        $this->mensaje = 'comentario  eliminado';
    }

}
