<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/stylo.css">
    <title>Formulario 5</title>
</head>
<body>
<fieldset class="none" style="width:100%; text-align: center;">
    <div class="formulario-color">
        
            <legend><b><h2>Quinto formulario</h2></b></legend>
            <aside id="aside">
                <form action="#" method ="post">
                    <table class="none">
                    <tr>
                        <th class="none" style="text-align: left;">Color:</th>
                        <td class="none"><input type="color" name="color_favorito"></td>
                    </tr>
                    <tr><td class="none" colspan="3"><hr></td></tr>
                    <tr>
                        <th class="none" style="text-align:left;">Cargar archivo: </th>
                        <td class="none"><input type="file" id="myfile" name="myfile" ></td>
                    </tr>
                    <tr><td class="none" colspan="3"><hr></td></tr>
                    <tr>
                        <th class="none" style="text-align:left;">Su estatura: </th>
                        <td class="none"><input type="range" name="estatura" min="100" max="200"
                            step="1" value="5"></td>
                    </tr>
                    <tr><td class="none" colspan="3"><hr></td></tr>
                    <tr>
                    <tr>
                        <td class="none"><input type="submit"></td>&nbsp;&nbsp;
                        <td class="none"><input type="reset"></td>
                    </tr>
                    </table>
                </form>
            </aside>

            <section id="section1">
                    
                    <table class="tabla">
                        <tr>
                            <th>Color</th>
                            <th>Estarura</th>
                        </tr>
                        <tr>
                            <td><?php echo isset($_POST['color_favorito'])?$_POST['color_favorito']:"" ?></td>
                            <td><?php echo isset($_POST['estatura'])?$_POST['estatura']:"" ?></td>   
                        </tr>
                    </table>
                
        </section>
    </div>
    </fieldset>
</body>
</html>