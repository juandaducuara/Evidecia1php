<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="" method="GET">
     	 <h2>Formulario de division</h2>

	    <label >Primer numero que desea dividir:</label>
      	<input type="number"  name="num1" required maxlength=8>

	    <label >Segundo numero que desea dividir:</label>
      	<input type="number"  name="num2" required maxlength=8>
        <input type="submit" value="Enviar">
		<input type="reset" value="Limpiar">
    </form>
    <?php
        $num1=$_REQUEST['num1'];
        $num2=$_REQUEST['num2'];
        $resultado = $num1/$num2;

        echo "<h3>".$num1 ." / ". $num2." = ". $resultado."</h3>"; 

    ?>
</body>
</html>