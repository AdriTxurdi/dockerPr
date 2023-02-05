<!DOCTYPE html>
<html>
<head>
  <style>
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
    }
    th, td {
      padding: 5px;
    }
  </style>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prueba";

// Crear conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Verificar conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

$sql = "SELECT nombre, apellido FROM usuario";
$result = mysqli_query($conn, $sql);

echo "<table>";
echo "<tr>";
echo "<th>Nombre</th>";
echo "<th>Apellido</th>";
echo "</tr>";

if (mysqli_num_rows($result) > 0) {
    // Mostrar datos de cada fila
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["nombre"]. "</td>";
        echo "<td>" . $row["apellido"]. "</td>";
        echo "</tr>";
    }
} else {
    echo "0 resultados";
}

echo "</table>";

// Cerrar conexión
mysqli_close($conn);
?>

</body>
</html>