<?php

namespace en2portr3s\registrados\controller;

use en2portr3s\registrados\library\View;
use en2portr3s\model\Person;
use en2portr3s\model\Account;

class RegistroController {

    private $person_args = array(
        'first_name' => array(
            'filter' => FILTER_SANITIZE_STRING,
            'flags' => FILTER_FLAG_STRIP_LOW,
        ),
        'last_name' => array(
            'filter' => FILTER_SANITIZE_STRING,
            'flags' => FILTER_FLAG_STRIP_LOW,
        ),
        'email' => FILTER_SANITIZE_EMAIL,
        'phone' => FILTER_SANITIZE_NUMBER_INT,
        'birthdate' => FILTER_SANITIZE_STRING,
    );
    private $register_args = array(
        'username' => FILTER_SANITIZE_EMAIL,
        'pass' => array(
            'filter' => FILTER_CALLBACK,
            'flags' => FILTER_FORCE_ARRAY,
            'options' => 'self::sanitizePassword'
        )
    );

    public function indexAction() {
        return new View('registro');
    }

    public function saveAction() {
        $person_data = filter_input_array(INPUT_POST, $this->person_args);

        $person = new Person($person_data);

        if ($person->message === 'Persona agregada exitosamente') {
            $register_data = filter_input_array(INPUT_POST, $this->register_args);
            $register_data['person_id'] = $person->getId();

            $register = new Account($register_data);

            return $register->message;
        }

        return $person->message;
    }

    static function sanitizePassword($value) {
        $pattern = '/^([a-z0-9@#$%]{8,16})$/i';
        $matches = [];
        preg_match($pattern, $value, $matches);
        return isset($matches[0]) ? $matches[0] : '';
    }

}
