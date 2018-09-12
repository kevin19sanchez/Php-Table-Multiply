<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tabla de multiplicar</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    
</head>
<body>
   <article>
   <fieldset>
    <form action="tablaMultiplicar.php" method="POST" id="formu">
       <h3> Ingrese el numero: </h3>
        <input type="number" name="name" id="name"/>
        <input class="btn btn-success" type="submit" name="Ver tabla" id="Ver tabla" value="Ver tabla"/>
    </form>
    <br>
    <?php
        if(isset($_POST['name'])):
        $table = isset($_POST['name']) ? $_POST['name'] : 0;
        
       for($i=1;$i<=10;$i++){
           $result = $table*$i;
           echo "<p> $table x $i = $result </p>";
       }
       endif;
    ?>
    </fieldset>
    </article>
</body>
</html>