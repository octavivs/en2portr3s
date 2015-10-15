<?php

namespace en2portr3s\admin\controller;

use en2portr3s\admin\library\View;
use en2portr3s\model\Content;

class ContenidoController {

    private $content_args = array(
        'id' => FILTER_SANITIZE_NUMBER_INT,
        'kind' => array(
            'filter' => FILTER_SANITIZE_STRING,
            'flags' => FILTER_FLAG_STRIP_LOW,
        )
    );
    private $name_val = array(
        'name' => array(
            'filter' => FILTER_SANITIZE_STRING,
            'flags' => FILTER_FLAG_STRIP_LOW,
        ),
        'value' => array(
            'filter' => FILTER_SANITIZE_STRING,
            'flags' => FILTER_FLAG_STRIP_LOW,
        )
    );

    public function indexAction() {
        return new View('contenido');
    }

    public function updateAction() {
        $remaining_data = filter_input_array(INPUT_POST, $this->name_val);
        $name = $remaining_data['name'];

        $content_data = filter_input_array(INPUT_POST, $this->content_args);
        $content_data[$name] = $remaining_data['value'];

        $content = new Content();
        $content->update($content_data);

        return $content->message;
    }

    public function uploadAction() {
        if (isset($_FILES["image"]) && $_FILES["image"]["error"] == UPLOAD_ERR_OK) {
            $file_name = $_FILES["image"]["name"];
            $temporal_file_location = $_FILES["image"]["tmp_name"];
            $upload_route = '../view/img/';

            if (move_uploaded_file($temporal_file_location, $upload_route . $file_name)) {
                return $upload_route . $file_name;
            } else {
                return 'Error';
            }
        } else {
            return 'Error';
        }
    }

}
