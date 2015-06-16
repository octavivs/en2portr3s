<div>
    <h1>Login Required</h1>
    <p>You must log in to access this area of the site.</p>
    <form method = "post" action = "<?= $_SERVER['PHP_SELF'] ?>" >
        <input type = "text" name = "uid" id = "uid" placeholder = "Username" required = "required" />
        <input type = "password" name = "pwd" id = "pwd" placeholder = "Password" required = "required" />
        <input type = "submit" value = "Log in" />
    </form>
</div>
