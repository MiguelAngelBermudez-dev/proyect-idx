<?php
function sanitize_input($data) {
    $data = trim($data);  // Elimina espacios al inicio y al final
    $data = stripslashes($data);  // Elimina las barras invertidas
    $data = htmlspecialchars($data);  
    // Eliminar comandos potenciales
    $data = preg_replace('/[\;\|\&\$\(\)\>\<\%\^\`]/', '', $data);
    return $data;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitizar la entrada
    $comando = sanitize_input($_POST["comando"]);

    // Muestra el comando sanitizado
    echo "<h2>Comando recibido:</h2>";
    echo "<strong><p>" . $comando . "</p></strong>";

   
}
?>




