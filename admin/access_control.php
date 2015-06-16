<?php

session_start();

if (isset($_POST['uid']) && isset($_POST['pwd'])) {
    $uid = filter_input(INPUT_POST, 'uid', FILTER_SANITIZE_EMAIL);
    $pwd = filter_input(INPUT_POST, 'uid', FILTER_VALIDATE_REGEXP, '/^([a-z0-9@#$%]{8,16})$/i');
    echo "POST = $uid and $pwd";
    include '';
} else if (isset($_SESSION['uid']) && isset($_SESSION['pwd'])) {
    $uid = $_SESSION['uid'];
    $pwd = $_SESSION['pwd'];
    echo "SESSION = $uid and $pwd";
}

/*
if (!isset($uid)) {
    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <title>Please Log In for Access</title>
            <meta charset="UTF-8">
            <link rel="stylesheet" type="text/css" href="login.css" />
        </head>
        <body>
            <section class="container">
                <section id="content">
                    <h1>Login Required</h1>
                    <p>You must log in to access this area of the site.</p>
                    <p>
                    <form method="post" action="<?= $_SERVER['PHP_SELF'] ?>" >
                        <section>
                            <input type="text" name="uid" id="uid" placeholder="Username" required="required" />
                        </section>
                        <section>
                            <input type="password" name="pwd" id="pwd" placeholder="Password" required="required" />
                        </section>
                        <section>
                            <input type="submit" value="Log in" />
                        </section>
                    </form>
                    </p>
                </section><!-- content -->
            </section><!-- container -->
        </body>
    </html>
    <?php
    exit;
}

$_SESSION['uid'] = $uid;
$_SESSION['pwd'] = $pwd;

$Database->connect("localhost", "root", "", "dittos_moda");
$result = $Database->query("select * from administradores where id_admin = '$uid' and pwd_admin = '$pwd'");

if ($Database->num_rows($result) == 0) {
    unset($_SESSION['uid']);
    unset($_SESSION['pwd']);
    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <title> Access Denied </title>
            <meta charset="UTF-8" />
        </head>
        <body>
            <h1> Access Denied </h1>
            <p>
                Your user ID or password is incorrect, or you are not a
                registered user on this site. To try logging in again, click
                <a href="<?= $_SERVER['PHP_SELF'] ?>">here</a>.
            </p>
        </body>
    </html>
    <?php
    exit;
}
*/