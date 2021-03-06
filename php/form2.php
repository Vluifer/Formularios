<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/stylo.css">
    <script src="../js/funciones.js"></script>
    <script src="../js/validaciones.js"></script>
    <title>Document</title>
</head>
<body>
    
<div class="formulario-color">

    <legend><b><h2>Segundo Formulario</h2></b></legend>

        <aside id="aside">
            <form method="post" name="form2">
             
                        <table class="none">
                            <tr>
                                <th class="none" style="text-align: right;">Codigo:</th>
                                <td class="none"><input type="number" name="codigo" id="codigo"></td>
                            </tr>
                            <tr>
                                <th class="none" style="text-align: right;">Clave:</th>
                                <td class="none"><input type="password" name="clave" id="clave"></td>
                            </tr>
                            <tr>
                                <th class="none" style="text-align: right;">E-mail:</th>
                                <td class="none"><input type="email" name="correo" id="correo"></td>
                            </tr>
                            <tr>
                                <th class="none" style="text-align: right;">Telefono:</th>
                                <td class="none"><input type="tel" name="telefono" id="telefono" maxlength="10"  pattern="[0-9]+"></td>
                            </tr>
                            <tr>
                                <th class="none" style="text-align: right;">Buscar:</th>
                                <td class="none"><input type="search" name="buscar"></td>
                            </tr>
                            <tr><td class="none" colspan="3"><hr></td></tr>
                            <tr>
                                <td class="none"><input type="button" value="enviar" id="enviar" onclick="send(form2)"></td>&nbsp;&nbsp;
                                <td class="none"><input type="reset"></td>
                            </tr>
                        </table>               
            </form>   
        </aside>

        <section id="section1">
 
                    <table class="tabla">
                        <tr>
                            <th>Codigo</th>
                            <th>Clave</th>
                            <th>Correo</th>
                            <th>Telefono</th>
                            <th>Buscar</th>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                 /*Recogemos a trav??s del metodo POST lo que se envia desde el name del formulario,
                                 comprobamos si la variable esta definida y tiene un valor diferente de vacio, en
                                 caso que asi sea se muestra lo envio en una tabla*/
                                       
                                 
                                        if(isset($_POST['codigo']) != '' && $_POST['clave'] != '' && $_POST['correo'] != '' && $_POST['telefono'] != ''){
                                            echo $_POST['codigo'];
                                        }
                                 ?>
                            </td>
                            <td>
                                <?php 
                                        if(isset($_POST['clave']) != '' && $_POST['codigo'] != '' && $_POST['correo'] != '' && $_POST['telefono'] != ''){
                                            echo $_POST['clave'];
                                        } 
                                ?>
                            </td>
                            <td>
                                <?php 
                                        if(isset($_POST['correo']) != '' && $_POST['codigo'] != '' && $_POST['clave'] != '' && $_POST['telefono'] != ''){
                                            echo $_POST['correo'];
                                        }
                                ?>
                            </td>   
                            <td>
                                <?php 
                                    if(isset($_POST['telefono']) != '' && $_POST['codigo'] != '' && $_POST['clave'] != '' && $_POST['correo'] != ''){
                                        echo $_POST['telefono'];
                                    } 
                                ?>
                            </td>
                            <td>
                                <?php 
                                    if(isset($_POST['buscar']) != ''){
                                        echo $_POST['buscar'];
                                    } 
                                ?>
                            </td>
                        </tr>
                    </table>
        </section> 
</div>
</body>
</html>
