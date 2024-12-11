<?php include_once 'controller.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Ingreso</title>
    <style>
      body{
        background-color: #ccc;
      }
      </style>
</head>
<body>
    <h1>Formulario de Ingreso de Comando</h1>
    <form action="controller.php" method="post">
        <label for="comando">Ingrese un comando (solo texto):</label>
        <input type="text" id="comando" name="comando" required>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
