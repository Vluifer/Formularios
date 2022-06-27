<?php
$fecha = isset($_POST['fecha']) ? $_POST['fecha']:'';
$fechacompleta= isset($_POST['fechacompleta']) ? $_POST['fechacompleta']:'';
$mes = isset($_POST['mes']) ?$_POST['mes']:''; 
$hora= isset ($_POST['hora']) ?$_POST['hora']:'';
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
    <legend><b><h2>Cuarto formulario</h2></b></legend>            
                <aside id="aside">
                    <form action="#" method="post">
                    
                        <table class="none"> 
                        <tr>
                            <th class="none" style="text-align: left;">Fecha:</th>
                            <td class="none"><input type="date" name="fecha"></td>
                        </tr>
                        <tr>
                            <th class="none" style="text-align: left;">Fecha y Hora:</th>
                            <td class="none"><input type="datetime" name="fechacompleta"></td>
                        </tr>
                        <tr>
                            <th class="none" style="text-align: left;">Mes:</th>
                            <td class="none"><input type="month" name="mes"></td>
                        </tr>
                        <tr>
                            <th class="none" style="text-align: left;">Hora:</th>
                            <td class="none"><input type="time" name="hora"></td>
                        </tr> 
                        <tr><td class="none" colspan="3"><hr></td></tr>
                            <tr>
                                <td class="none"><input type="submit" name></td>&nbsp;&nbsp;
                                <td class="none"><input type="reset"></td>
                            </tr>
                        </table>
                    
                    </form>
                </aside>
        

        <section id="section1">
                    <table class="tabla">
                        <tr>
                            <th>Fecha</th>
                            <th>Fecha y Hora</th>
                            <th>Mes</th>
                            <th>Hora</th>
                        </tr>
                        <tr>
                            <td><label"><?php echo $fecha ?></label></td>
                            <td><label"><?php echo $fechacompleta ?></label></td>
                            <td><label"><?php echo $mes ?></label></td>   
                            <td><label"><?php echo $hora ?></label></td>
                        </tr>
                    </table>
                
        </section>
    </div>
    </fieldset>
</body>
</html>