<?php

namespace en2portr3s\model;

class Person extends Database {

    private $first_name;
    private $last_name;
    private $email;
    private $phone;
    private $address;
    private $birthdate;

    function __construct() {
        $this->db_name = "en2portr3s";
    }

    public function get($email = '') {
        if ($email != '') {
            $this->query("
                SELECT first_name, last_name, email, phone, address, birthdate
                FROM person
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
                    INSERT INTO usuarios
                    (first_name, last_name, email, phone, address, birthdate)
                    VALUES
                    ('$first_name', '$last_name', '$email', '$phone', '$address','$birthdate')
                ";
                $this->dml();
                $this->mensaje = 'Usuario agregado exitosamente';
            } else {
                $this->mensaje = 'El usuario ya existe';
            }
        } else {
            $this->mensaje = 'No se ha agregado al usuario';
        }
    }

    public function edit($user_data = []) {
        foreach ($user_data as $campo => $valor) {
            $campo = $valor;
        }
        $this->query = "
            UPDATE person
            SET first_name='$nombre',
                last_name='$apellido',
                email='$email',
                phone='$phone',
                address='$address',
                birthdate='$birthdate'
            WHERE email = '$email'
        ";
        $this->dml();
        $this->mensaje = 'Usuario modificado';
    }

    public function delete($user_email='') {
        $this->query = "
            DELETE FROM person
            WHERE email = '$email'
        ";
        $this->dml();
        $this->mensaje = 'Usuario eliminado';
    }

}
