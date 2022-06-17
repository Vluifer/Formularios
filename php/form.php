<?php

<!-- Segundo formulario -->
<div id="segundo-formulario" style="display:none;" >

<fieldset class="none" style=" text-align: center;">
    <legend><b>Formulario 2</b></legend>

        <aside id="aside">
            <form action="form1.php" method="post">
             
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
            <form  action="form1.php" method="post">
                <fieldset style="width:40%; align:center; text-align: center;">
                    <table  class="none">
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
                </fieldset>
                </div>
            </form>
        </section> 

    </div>
</fieldset>
<!-- Tercer formulario --> 
<div id="tercer-formulario" style="display:none">

<aside id="aside">

<form action="form1.php" method="post">
<fieldset class="field" style="width:40%; text-align: left;">
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
</fieldset>
</form>

</aside>

<section id="section1">
<form action="form1.php" method="post">
                <fieldset style="width:40%; align:center; text-align: center;">
                    <table  class="none">
                        <tr>
                            <th>Genero</th>
                            <th>Leer</th>
                            <th>Tv</th>
                            <th>Cine</th>
                            <th>Jugar</th>
                        </tr>
                        <tr>
                            <td><label"><?php echo $genero ?></label></td>
                            <td><label"><?php echo $leer ?></label></td>
                            <td><label"><?php echo $tv ?></label></td>   
                            <td><label"><?php echo $cine ?></label></td>
                            <td><label"><?php echo $jugar ?></label></td>
                        </tr>
                    </table>
                </fieldset>
</form>
</section>
</div>
</fieldset>










// Segundo formulario
$codigo = isset($_POST['codigo']) ? $_POST['codigo']: '';
$clave = isset($_POST['clave']) ? $_POST['clave']: '';
$correo = isset($_POST['correo']) ? $_POST['correo']: '' ;
$telefono = isset($_POST['telefono']) ? $_POST['telefono']: '' ;
$buscar = isset($_POST['buscar']) ? $_POST['buscar']: '' ;

// Tercer formulario
 $genero = isset($_POST['genero']) ? $_POST['genero']: '';
 $leer = isset($_POST['leer']) ? $_POST['leer']: '';
 $cine = isset($_POST['cine']) ? $_POST['cine']: '';
 $tv = isset($_POST['tv']) ? $_POST['tv']: '';   
 $jugar = isset($_POST['jugar']) ? $_POST['jugar']: ''; 