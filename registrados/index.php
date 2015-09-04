<?php

namespace en2portr3s\registrados;

use en2portr3s\registrados\library\Request;
use en2portr3s\model\Account;

spl_autoload_register(function ($qualified_class_name) {
    $vendor_name = "en2portr3s";
    $prefix = '';

    if (__NAMESPACE__) {
        $this_namespace = str_replace($vendor_name . '\\', '', __NAMESPACE__);
        $this_array = explode('\\', $this_namespace);
        for ($index = 0; $index < count($this_array); $index++) {
            $prefix .= '../';
        }
    }

    $class_name_position = strripos($qualified_class_name, '\\') + 1;
    $class_name = substr($qualified_class_name, $class_name_position);
    $namespaces = str_replace(array($vendor_name . '\\', $class_name), '', $qualified_class_name);
    $route = str_replace('\\', '/', $namespaces);

    //echo $prefix . $route . $class_name . ".php" . '<br />' . PHP_EOL;
    require $prefix . $route . $class_name . ".php";
});

session_start();

if (isset($_POST['uid']) && isset($_POST['pwd'])) {
    $uid = filter_input(INPUT_POST, 'uid', FILTER_SANITIZE_EMAIL);
    $pwd = filter_input(INPUT_POST, 'pwd', FILTER_SANITIZE_EMAIL);
    //echo "POST = $uid ($pwd)" . '<br />';
    $_SESSION['uid'] = $uid;
    $_SESSION['pwd'] = $pwd;
} else if (isset($_SESSION['uid']) && isset($_SESSION['pwd'])) {
    $uid = $_SESSION['uid'];
    $pwd = $_SESSION['pwd'];
    //echo "SESSION = $uid ($pwd)" . '<br />';
} else {
    ?>
    <!DOCTYPE html>
    <!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
    <html>
        <head>
            <meta charset="utf-8" />
            <!-- If you delete this meta tag World War Z will become a reality -->
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />

            <meta name="author" content="José Octavio Sánchez Contreras" />
            <meta name="author" content="Juan Daniel Gutiérrez Torres" />

            <title>Login page</title>

            <!-- Foundation framework, used to do responsive the website -->
            <link rel="stylesheet" type="text/css" href="view/css/normalize.css" />
            <link rel="stylesheet" type="text/css" href="view/css/foundation.css" />

            <!-- Override default settings in framework -->
            <link rel="stylesheet" type="text/css" href="view/css/app.css" />

            <script type="text/javascript" src="view/js/vendor/modernizr.js"></script>
        </head>
        <body>
            <div class="large-4 medium-8 small-11 small-centered columns">
                <div class="login-box">
                    <div class="row">
                        <div class="large-12 columns">
                            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                                <h3 class="text-center">Login Required</h3>
                                <p class="text-justify">You must log in to access this area of the site.</p>
                                <div class="row">
                                    <div class="large-12 columns">
                                        <input type="text" name="uid" placeholder="Username" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="large-12 columns">
                                        <input type="password" name="pwd" placeholder="Password" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="large-12 large-centered columns">
                                        <input type="submit" class="button expand" value="Log In"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <script type="text/javascript" src="view/js/vendor/jquery.js"></script>
            <script type="text/javascript" src="view/js/vendor/fastclick.js"></script>
            <script type="text/javascript" src="view/js/vendor/foundation.js"></script>
            <script>
                $(document).foundation();
            </script>
            <script type="text/javascript" src="view/js/app.js"></script>
        </body>
    </html>
    <?php
    exit;
}

$account = new Account();

if (!$account->isAdmin($uid, $pwd)) {
    unset($_SESSION['uid']);
    unset($_SESSION['pwd']);
    ?>
    <!DOCTYPE html>
    <!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
    <html>
        <head>
            <meta charset="utf-8" />
            <!-- If you delete this meta tag World War Z will become a reality -->
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />

            <meta name="author" content="José Octavio Sánchez Contreras" />
            <meta name="author" content="Juan Daniel Gutiérrez Torres" />

            <title>Login page</title>

            <!-- Foundation framework, used to do responsive the website -->
            <link rel="stylesheet" type="text/css" href="view/css/normalize.css" />
            <link rel="stylesheet" type="text/css" href="view/css/foundation.css" />

            <!-- Override default settings in framework -->
            <link rel="stylesheet" type="text/css" href="view/css/app.css" />

            <script type="text/javascript" src="view/js/vendor/modernizr.js"></script>
        </head>
        <body>
            <div class="large-4 medium-8 small-11 small-centered columns">
                <div class="login-error">
                    <h3>Access Denied</h3>
                    <p>
                        Your user ID or password is incorrect, or you are not a
                        registered user on this site. To try logging in again, click
                        <a href="<?= $_SERVER['PHP_SELF'] ?>">here</a>.
                    </p>
                </div>
            </div>

            <script type="text/javascript" src="view/js/vendor/jquery.js"></script>
            <script type="text/javascript" src="view/js/vendor/fastclick.js"></script>
            <script type="text/javascript" src="view/js/vendor/foundation.js"></script>
            <script>
                $(document).foundation();
            </script>
            <script type="text/javascript" src="view/js/app.js"></script>
        </body>
    </html>
    <?php
    exit;
}

$received_url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
$url = empty($received_url) ? "contenido" : $received_url;

$request = new Request($url);
$request->execute();
