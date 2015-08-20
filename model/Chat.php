<?php

namespace en2portr3s\model;

class Chat extends Database {

    private $id;
    private $id_usu;
    private $content;
    
    function __construct($question_data = []) {
        $this->db_name = "en2portr3s";
        if ($chat_data !== []) {
            $this->insert($chat_data);
        }
    }
 
        
    
    public function select($id_men = '') {
        $this->synchronize($id_men);
        $this->query = "SELECT * FROM chat WHERE id_usu = '$id_usu' ORDER BY id AS";
            $this->dql();
       
    }

    public function insert($chat_data ) {
       $this->synchronize($chat_data );
        $this->query = "
            INSERT INTO chat (id_usu, content, id_para)
            VALUES ('$this->id_usu', '$this->content', '$this->id_para')
        ";
        $this->dml();
        $this->message = 'Pregunta guardada correctamente';
    }

    public function update() {
        
    }

    public function delete($id) {
        $this->query = "DELETE FROM chat WHERE id = '$id_usu'";
        $this->modify();
        $this->message = 'mensaje eliminado';
    }

    private function synchronize($data) {
        foreach ($data as $propiedad => $valor) {
            $this->$propiedad = $valor;
        }
    }

}
