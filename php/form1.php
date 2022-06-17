<?php 

$nombre = isset($_POST['nombref1']) ? $_POST['nombref1']: '';
 
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
           

            <div id="primer-formulario" >
            
            <fieldset class="field" style="width:100%; text-align: center;">
            <legend><b>Formulario 1</b></legend>
            
            <aside id="aside">
                   
                            <form action="#" method="post">
                              
                                    <table class="none">
                                        <tr>
                                            <th class="none" style="text-align: right;">Nombre:</th>
                                            <td class="none"><input type="text" name="nombref1"></td>
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
                                               <th>Nombre</th>
                                            </tr>   
                                            <tr>
                                                <td>
                                                    <label><?php echo $nombre ?></label>   
                                                </td>
                                            </tr>
                                        </table>
                                
                        

            </section>
            </fieldset>
            </div>
</body>
</html>