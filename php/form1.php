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
                   
                            <form method="post" onsubmit="vacio();">
                              
                                    <table>
                                        <tr>
                                            <th class="none" style="text-align: right;">Nombre:</th>
                                            <td class="none"><input type="text" name="nombref1" id="nombref1"></td>
                                            <td class="none"><h5 id="titulo"></h5></td>
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
                        <th>Nombre</th>
                    </tr>   
                    <tr>
                    <td>
                        <?php 
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