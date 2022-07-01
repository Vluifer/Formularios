<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/stylo.css">
    <script src="../js/validaciones.js"></script>
        <title>Document</title>
</head>
<body>

    <div class="formulario-color" >      
            
            <legend><b><h2>Primer Formulario</h2></b></legend>
            
            <aside id="aside">
                   
                            <form method="post">
                                    <table>
                                        <tr>
                                            <th class="none" style="text-align: right;">Nombre:</th>
                                            <td class="none"><input type="text" name="nombref1" id="nombref1"></td>
                                            <td class="none"><h5 id="titulo"></h5></td>
                                        </tr>
                                     
                                        <tr><td class="none" colspan="3"><hr></td></tr>
                                        <tr>
                                            <td class="none"><input type="submit" value="Enviar" onclick="vacio()"></td>&nbsp;&nbsp;
                                            <td class="none"><input type="reset"></td>
                                        </tr>
                                    </table>
                            </form>         
            </aside>
                
            <section id="section1">                    
                <table class="tabla">
                    <tr>
                        <th>Nombre</th>
                    </tr>   
                    <tr>
                
                    <td>
                        <?php   /*Recogemos a través del metodo POST lo que se envia desde el name del formulario,
                                 comprobamos si la variable esta definida y tiene un valor diferente de vacio, en
                                 caso que asi sea se muestra lo envio en una tabla*/
                                if(isset($_POST['nombref1']) != ''){
                                    echo $_POST['nombref1'];
                                }
                        ?>
                    </td>
                    </tr>
                </table>   
            </section>
    </div>
           
</body>
</html>