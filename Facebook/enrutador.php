<?php
    // Capturar los datos del formulario
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Conectarse a la base de datos
    $conn = mysqli_connect("127.0.0.1", "root", "Jefe955+", "Facebook");
  
    // Verificar conexión
    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    // Escribir la consulta para almacenar los datos
    $sql = "INSERT INTO usuarios (username, password) VALUES ('$username', '$password')";

    // Ejecutar la consulta
    if (mysqli_query($conn, $sql)) {
        echo "Datos almacenados correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Cerrar la conexión
    mysqli_close($conn);
?>