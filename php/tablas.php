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
    <div class="formulario-color">
<section id="sectablas">  
    <table class="tabla">
        <tr>
            <th>Item</th><th>Precio</th>
        </tr>
        <tr>
            <td>Table</td><td>$210</td>
        </tr>
        <tr>
            <td>Smart Watch</td><td>$79</td>
        </tr>
    </table>
     <br/>
    <table class="tabla" style="width: 150px;">
        <caption><b>Informe de Productos</b></caption>
        <tr>
            <th>Item</th><th>Precio</th>
        </tr>
        <tr>
            <td>Tablet</td><td>$210</td>
        </tr>
    </table>
    <br/>
    <table class="tabla" summary="Informe academico">
        <thead>
            <tr>
                <th rowspan="2" scope="col">Sem. I</th>
                <th colspan="3" scope="col">Luifer Villa Lozano</th>
            </tr>
            <tr>
                <th scope="col">Asignatura</th>
                <th scope="col">Nota</th>
                <th scope="col">Credito</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th scope="col" colspan="2">Promedio:</th>
                <th scope="col">4,7</th>
                <th scope="col"></th>
            </tr>
            <tr>
                <th scope="col" colspan="3">Total:</th>
                <th scope="col">11</th>
            </tr>
        </tfoot>
        <tbody>
            <tr>
                <th>1).</th><td scope="row">Calculo</td><td>4.7</td><td>3</td>
            </tr>
            <tr>
                <th>2).</th><td scope="row">Programación</td><td>5.0</td><td>4</td>
            </tr>
            <tr>
                <th>3).</th><td scope="row">Redes</td><td>4.5</td><td>4</td>
            </tr>
        </tbody>
    </table>
</section>
</div>
</body>
</html>