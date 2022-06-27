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
    
    <legend><b><h2>Formulario siete</h2></b></legend>
        <aside id="aside">
            <form action="#" method="post">
                <table class="none">
                    <tr>
                        <th class="none">Comentario: </th>
                        <td class="none">
                            <textarea name="comentario" cols="50" rows="5" placeholder="ingrese su comentario"></textarea>
                        </td>
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
                <table class="tabla">
                        <tr>
                            <th>Comentario</th>
                        </tr>
                        <tr>
                            <td>
                            <?php
                            if(isset($_POST['comentario']) != ''){
                                echo $_POST['comentario'];
                            }
                              ?>
                              </td>
                        </tr>
                </table>         
        </section> 
</div>
</fieldset>    
</body>
</html>