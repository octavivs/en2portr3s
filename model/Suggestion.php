<?php

namespace en2portr3s\model;

class Suggestion extends Database {

    private $id;
    private $content;
    private $status;
    private $since;
    private $buzon;

    function __construct() {
        $this->db_name = "en2portr3s";
    }

    public function get($id = '') {
        $result = $this->query = "SELECT * FROM suggestion";
        while ($filas = $result->fetch_assoc()) {
            $this->buzon[] = $filas;
        }
        $this->dql();
        return $this->buzon;
    }

    public function set($user_data) {
        $this->synchronize($user_data);
        $this->query = "
            INSERT INTO suggestion (content, status)
            VALUES ('$this->content', '$this->status')
        ";
        $this->dml();
        $this->message = 'Sugerencia guardada correctamente';
    }

    public function edit($user_data = []) {
        $this->synchronize($user_data);
        $this->query = "
            UPDATE suggestion
            SET content = '$this->content',
            WHERE buzon = '$this->buzon'
        ";
        $this->dml();
        $this->message = 'Sugerencia modificada';
    }

    /*
     * Falta moduficar esta parte para eliminar el mensaje de la tabla buzon.
     */
    public function delete($content = '') {
        $this->query = "
            DELETE FROM suggestion
            WHERE id = '$content'
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
