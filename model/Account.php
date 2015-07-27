<?php

namespace en2portr3s\model;

class Account extends Database {

    private $id;
    private $username;
    private $pass;
    private $kind;
    private $status;
    private $since;
    private $person_id;

    function __construct($register_data = []) {
        $this->db_name = "en2portr3s";
        if ($register_data !== []) {
            $this->insert($register_data);
        }
    }

    public function select($username = '') {
        $this->query = "SELECT * FROM account";
        if ($username !== '') {
            $this->query .= " WHERE username = '$username' ";
        }
        $this->retrieve();
        $matches = count($this->rows);
        if ($matches === 0) {
            $this->message = 'Usuario no encontrado';
        } else if ($matches === 1) {
            $this->synchronize($this->rows[0]);
            $this->message = 'Usuario encontrado';
        }
        return $this->rows;
    }

    public function insert($register_data) {
        if (array_key_exists('username', $register_data)) {
            $this->select($register_data['username']);
            if (empty($this->username)) {
                $this->synchronize($register_data);
                $this->query = "
                    INSERT INTO account(username, pass, person_id)
                    VALUES('$this->username', '$this->pass', '$this->person_id')
                ";
                $this->modify();
                $this->select($this->username);
                $this->message = 'Registro exitoso';
            } else {
                $this->message = 'El usuario ya existe';
            }
        } else {
            $this->message = 'No se ha registrado al usuario';
        }
    }

    public function update($register_data) {
        if (array_key_exists('username', $register_data)) {
            $this->select($register_data['username']);
            if (!empty($this->username)) {
                $this->synchronize($register_data);
                $this->query = "
                    UPDATE account
                    SET username = '$this->username',
                        pass = '$this->pass',
                        kind = '$this->kind',
                        status = '$this->status',
                    WHERE username = '$this->username'
                ";
                $this->modify();
                $this->message = 'Usuario modificado';
            } else {
                $this->message = 'El usuario no existe';
            }
        } else {
            $this->message = 'No se ha modificado la información del usuario';
        }
    }

    public function delete($username) {
        $this->select($username);
        if (!empty($this->username)) {
            $this->query = "
                DELETE FROM account
                WHERE username = '$username'
            ";
            $this->modify();
            $this->message = 'Usuario eliminado';
        } else {
            $this->message = 'El usuario no existe';
        }
    }

    public function isRegistered($username, $password) {
        $this->select($username);
        $first_step = $this->username === $username;
        $second_step = $this->pass === $password;
        return $first_step && $second_step;
    }

    public function isAdmin($username, $password) {
        $first_step = $this->isRegistered($username, $password);
        $second_step = $this->kind === 'admin';
        return $first_step && $second_step;
    }

    /**
     * Sincroniza los datos de la clase con la tabla en la base de datos.
     */
    private function synchronize($data) {
        foreach ($data as $propiedad => $valor) {
            $this->$propiedad = $valor;
        }
    }

}
