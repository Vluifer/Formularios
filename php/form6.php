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
        
        <legend><b><h2>Sexto formulario</h2></b></legend>
            <aside id="aside">
                <form action="#" method="post">
                    <table class="none">
                        <tr>
                            <th class="none" style="text-align:left ;">Estado Civil: </th>
                            <td class="none">
                                <select name="estado_civil" size="1">
                                    <option value="0" selected>Escoja uno...</option>
                                    <option value="casado">Casado</option>
                                    <option value="Soltero">Soltero</option>
                                    <option value="Union libre">Union Libre</option>
                                </select>
                            </td>
                        </tr>
                        <tr><td class="none" colspan="3"><hr></td></tr>
                        <tr>
                        <th class="none" style="text-align:left ;">Idiomas que habla: </th>
                            <td class="none">
                                <select multiple name="idioma[]" size="6">
                                    <option value="Español">Español</option>
                                    <option value="Ingles">Ingles</option>
                                    <option value="Italiano">Italiano</option>
                                    <option value="Portugues">Portugues</option>
                                    <option value="Frances">Frances</option>
                                </select>
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
                            <th>Estado civil</th>
                            <th>Idiomas que habla</th>
                        </tr>
                        <tr>
                            <td><?php echo isset($_POST['estado_civil'])? $_POST['estado_civil']:"" ?></td>
                            <td>
                            <?php
                            /*Se verifica que lo recibido a través del motodo POST sea diferente a null, 
                            en este caso se recorre con un foreach para mostrar todos los posibles resultados en una tabla*/
                            if(isset($_POST['idioma'])!= null){
                                foreach ($_POST['idioma'] as $idioma){
                                    echo $idioma."<br>";
                                }
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
