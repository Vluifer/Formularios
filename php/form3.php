<?php

$genero = isset($_POST['genero']) ? $_POST['genero']: '';
$leer = isset($_POST['leer']) ? $_POST['leer']: '';
$cine = isset($_POST['cine']) ? $_POST['cine']: '';
$tv = isset($_POST['tv']) ? $_POST['tv']: '';   
$jugar = isset($_POST['jugar']) ? $_POST['jugar']: ''; 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/stylo.css">
    <title>Document</title>
</head>
<body>

<fieldset class="none" style="width:100%; text-align: center;">
<div class="formulario-color">
<legend><b><h2>Tercer formulario</h2></b></legend>

<aside id="aside">

<form action="#" method="post">

    <table class="none">
        <tr>
            <th class="none" style="text-align: left;">Genero:</th>
            <td class="none">
                Masculino: <input type="radio" name="genero" value="Masculino" checked>
                <br>
                Femenino: <input type="radio" name="genero" value="Femenino">
            </td>
        </tr>
        <tr><td class="none" colspan="3"><hr></td></tr>
        <tr>
            <th class="none" style="text-align:left;">Hobbies:&nbsp; </th>
            <td class="none">
                Leer: <input type="checkbox" name="leer" value="leer">
                <br>
                Cine: <input type="checkbox" name="cine" value="cine">
                <br>
                Tv:   <input type="checkbox" name="tv" value="tv">
                <br>
                Jugar: <input type="checkbox" name="jugar" value="jugar">
            </td>
        </tr>
        <tr><td class="none" colspan="3"><hr></td></tr>
        <tr>
            <td class="none"><input type="submit" name="hobbie"></td>&nbsp;&nbsp;
            <td class="none"><input type="reset"></td>
        </tr>
    </table>
</form>
</aside>


        <section id="section1">
                    <table class="tabla">
                        <tr>
                            <th>Genero</th>
                            <th>Leer</th>
                            <th>Tv</th>
                            <th>Cine</th>
                            <th>Jugar</th>
                        </tr>
                        <tr>
                            <td><?php echo $genero ?></td>
                            <td><?php echo $leer ?></td>
                            <td><?php echo $tv ?></td>   
                            <td><?php echo $cine ?></td>
                            <td><?php echo $jugar ?></td>
                        </tr>
                    </table>
                
        </section>
</div>
</fieldset>
</body>
</html>