<?php
# Importa configuraciones
require_once('config.php');

# Conexión con la base de datos
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

# Comprueba la conexión
if ($conn->connect_errno) {
    echo $conn->connect_error;
}

# Escapa caracteres especiales para su uso en una sentencia SQL
$email = $conn->real_escape_string($_POST['login']);
$pwd = $conn->real_escape_string($_POST['password']);

# Cambiar el conjunto de caracteres a utf8
$conn->set_charset("utf8");

# Realiza una consulta
$query = "
    SELECT COUNT(*) FROM accounts
    WHERE email='$email'
    AND pwd='$pwd'
";
$result = $conn->query($query);

# Estado de la consulta
if (!$result) {
    echo $conn->error;
}

# Alamcena la consulta en un arreglo
$row = $result->fetch_row();

# Cierra la consulta
$result->close();

# Resultado de la consulta
if ($row[0] == 1) {
    $query = "
        SELECT CONCAT(users.name, ' ', users.lastname)
        AS fullname
        FROM accounts, users
        WHERE email='$email'
        AND pwd='$pwd'
        AND accounts.user_id = users.user_id
    ";
    
    # Realiza una consulta
    $result = $conn->query($query);
    
    # Resultado de la consulta
    $row = $result->fetch_row();
    
	# Cierra la consulta
	$result->close();
	
    # Imprime un mensaje de bienvenida
    echo "<p>Bienvenido: ".$row[0]."</p>";
} else {
    echo "<p>Usuario no registrado</p>";
}

# Cierra la conexión
$conn->close();