<?php
include 'autoloader.php';

use en2portr3s\admin\library\Request;
use en2portr3s\admin\model\Account;

session_start();

$received_url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
$url = empty($received_url) ? "" : $received_url;

$request = new Request($url);
$account = new Account();

if (isset($_POST['uid']) && isset($_POST['pwd'])) {
    $uid = filter_input(INPUT_POST, 'uid', FILTER_SANITIZE_EMAIL);
    $pwd = filter_input(INPUT_POST, 'pwd', FILTER_SANITIZE_EMAIL);
    echo "POST = $uid ($pwd)";
    $_SESSION['uid'] = $uid;
    $_SESSION['pwd'] = $pwd;
    $request->execute();
    exit;
} else if (isset($_SESSION['uid']) && isset($_SESSION['pwd'])) {
    $uid = $_SESSION['uid'];
    $pwd = $_SESSION['pwd'];
    echo "SESSION = $uid ($pwd)";
    $request->execute();
    exit;
}
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

        <script type="text/javascript" src="view/scripts/vendor/modernizr.js"></script>
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

        <script type="text/javascript" src="view/scripts/vendor/jquery.js"></script>
        <script type="text/javascript" src="view/scripts/vendor/fastclick.js"></script>
        <script type="text/javascript" src="view/scripts/vendor/foundation.js"></script>
        <script>
            $(document).foundation();
        </script>
        <script type="text/javascript" src="view/scripts/app.js"></script>
    </body>
</html>