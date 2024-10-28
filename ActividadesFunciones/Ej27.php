Desarrollar una función que tenga tres parámetros: un nombre de usuario, una
contraseña y un límite de intentos. La función solicita un nombre de usuario y una
contraseña dentro del número de intentos permitidos. Si el nombre de usuario es el
usuario pasado como parámetro y la contraseña es la que se pasa como parámetro
retorna Verdadero, Falso en caso contrario. Por defecto el nombre de usuario es
usuario y la contraseña es abcd1234@. <br>

<?php

// Función que solicita nombre de usuario y contraseña dentro del número de intentos permitidos
function login($nombreUsuario = "usuario", $contrasena = "abcd1234@", $intentos) { // Valores por defecto
    $intentosRealizados = 0; // Inicializa el contador de intentos
    while ($intentosRealizados < $intentos) { // Mientras no se exceda el número de intentos
        $intentosRealizados++; // Incrementa el contador de intentos
        // Solicita el nombre de usuario y la contraseña
        $nombreUsuarioIngresado = $_POST['nombreUsuario'] ?? ''; // Si no se ha enviado el formulario, asigna un valor vacío
        $contrasenaIngresada = $_POST['contrasena'] ?? ''; // Si no se ha enviado el formulario, asigna un valor vacío
        // Verifica si las credenciales son correctas
        if ($nombreUsuarioIngresado == $nombreUsuario && $contrasenaIngresada == $contrasena) { // Si las credenciales son correctas
            return true;
        }
    }
    return false;
}

// Parámetros de prueba
$nombreUsuario = "usuario";
$contrasena = "abcd1234@";
$intentos = 3;

// Llama a la función login y muestra el resultado
if ($_SERVER['REQUEST_METHOD'] === 'POST') { // Si se ha enviado el formulario 
    if (login($nombreUsuario, $contrasena, $intentos)) { // Si las credenciales son correctas
        echo "Usuario logueado";
    } else {
        echo "Usuario no logueado";
    }
}
?>
    
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form method="post">
        <label for="nombreUsuario">Nombre de Usuario:</label>
        <input type="text" id="nombreUsuario" name="nombreUsuario" required><br>
        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
