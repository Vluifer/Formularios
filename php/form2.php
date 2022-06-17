<?php

$codigo = isset($_POST['codigo']) ? $_POST['codigo']: '';
$clave = isset($_POST['clave']) ? $_POST['clave']: '';
$correo = isset($_POST['correo']) ? $_POST['correo']: '' ;
$telefono = isset($_POST['telefono']) ? $_POST['telefono']: '' ;
$buscar = isset($_POST['buscar']) ? $_POST['buscar']: '' ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/stylo.css">
    <script src="../js/funciones.js"></script>
    <title>Document</title>
</head>
<body>
    

<div id="segundo-formulario">

<fieldset class="none" style=" text-align: center;">
    <legend><b>Formulario 2</b></legend>

        <aside id="aside">
            <form action="#" method="post">
             
                        <table class="none">
                            <tr>
                                <th class="none" style="text-align: right;">Codigo:</th>
                                <td class="none"><input type="number" name="codigo"></td>
                            </tr>
                            <tr>
                                <th class="none" style="text-align: right;">Clave:</th>
                                <td class="none"><input type="password" name="clave"></td>
                            </tr>
                            <tr>
                                <th class="none" style="text-align: right;">E-mail:</th>
                                <td class="none"><input type="email" name="correo"></td>
                            </tr>
                            <tr>
                                <th class="none" style="text-align: right;">Telefono:</th>
                                <td class="none"><input type="tel" name="telefono"></td>
                            </tr>
                            <tr>
                                <th class="none" style="text-align: right;">Buscar:</th>
                                <td class="none"><input type="search" name="buscar"></td>
                            </tr>
                            <tr><td class="none" colspan="3"><hr></td></tr>
                            <tr>
                                <td class="none"><input type="submit"></td>&nbsp;&nbsp;
                                <td class="none"><input type="reset"></td>
                            </tr>
                        </table>
               
            </form>   
        </aside>

        <section id="section1">
           
                
                    <table>
                        <tr>
                            <th>Codigo</th>
                            <th>Clave</th>
                            <th>Correo</th>
                            <th>Telefono</th>
                            <th>Buscar</th>
                        </tr>
                        <tr>
                            <td><label"><?php echo $codigo ?></label></td>
                            <td><label"><?php echo $clave ?></label></td>
                            <td><label"><?php echo $correo ?></label></td>   
                            <td><label"><?php echo $telefono ?></label></td>
                            <td><label"><?php echo $buscar ?></label></td>
                        </tr>
                    </table>
        </section> 

    </div>

</body>
</html>
