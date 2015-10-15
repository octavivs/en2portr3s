<?php

namespace en2portr3s\admin\library;

/**
 * PHPMailer exception handler
 * @package PHPMailer
 */
class phpmailerException extends \Exception {

    /**
     * Prettify error message output
     * @return string
     */
    public function errorMessage() {
        $errorMsg = '<strong>' . $this->getMessage() . "</strong><br />\n";
        return $errorMsg;
    }

}
