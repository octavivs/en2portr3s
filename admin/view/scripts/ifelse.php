<?php


$first_name = $_POST['first_name'];
$mail = $_POST['email'];
$select = $_POST['respuesta'];

if($select == 'eliminar'){
        
        $id = $_POST['id'];
        $question = new Question();
         $question->delete($id);
       echo $question->message;
    }else{
        
    }
