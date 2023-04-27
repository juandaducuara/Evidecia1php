<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Bienvenido al programa</h2>
    <form action="" method="post">
        <label>Digite la opcion que desea</label>
        <select name="opcion">
            <option > Seleccione opcion</option>
            <option value="datosUsuario"> Ingresar datos usuario</option>
            <option value="suma"> Suma</option>
            <option value="resta"> Resta</option>
            <option value="multiplicacion"> Multiplicación</option>
            <option value="division"> División</option>
        </select>
        <input type="submit" value="Enviar">       
    </form>


</body>
</html>
<?php
    $opcion="";
    $opcion=$_REQUEST['opcion'];    
    switch ($opcion) {
        case 'datosUsuario':
            header('Location:  formulario.php');
            break;
        case 'suma':
            header('Location:  suma.php');
            break;
        case 'resta':
            header('Location:  resta.php');
            break;
        case 'multiplicacion':
            header('Location:  multiplicacion.php');
            break;
        case 'division':
            header('Location:  division.php');
            break;        
        default:
            echo "Ingrese opcion correcta";
            break;
    }