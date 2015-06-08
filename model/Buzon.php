<?php
namespace en2portr3s\model;

class Buzon extends Database {
	private $buzon;
	private $content;
	private $state;
        
	function __construct() {
        $this->db_name = "en2portr3s";
    }

	public function get($id = ''){
            
	$consulta=$result=$this->query = "
                SELECT *
                FROM buzon 
                    ";
    while($filas=$consulta->fetch_assoc()){
		$this->buzon[]=$filas;
    }
    	 $this->dql();
	return $this->buzon;
	}
        
	
	public function set($user_data) {
         $this->synchronize($user_data);        
                   $this->query = "
                    INSERT INTO buzon
                    (content,state)
                    VALUES
                    ('$this->content','$this->state')
                   ";
                
                 $this->dml();
                $this->message = 'mensaje guardado correctamente';
    }
	
        public function edit($user_data = []) {
        $this->synchronize($user_data);  
        $this->query = "
            UPDATE comentarios
            SET content='$content',
            WHERE buzon = '$buzon'
        ";
        $this->dml();
        $this->message = 'comentarios modificados';
    }
/*falta moduficar esta parte para eliminar el mensaje de la tabla buzon	
	*/
	public function delete($content='') {
        $this->query = "
            DELETE FROM buzon
            WHERE id = '$content'
        ";
        $this->dml();
        $this->message = 'sugerencia eliminada';
    }	
	
	     private function synchronize($data) {
        foreach ($data as $propiedad => $valor) {
            $this->$propiedad = $valor;
        }
    }
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

