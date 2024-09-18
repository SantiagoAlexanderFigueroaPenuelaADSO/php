<?php

require_once(__DIR__ . "/../libs/Database.php");
require_once(__DIR__ . "/../libs/Modelo.php");
include_once("../clases/Aprendiz.php");

$database = new Database();

$connection = $database->getConnection();

$aprendiz = new Aprendiz($connection);

$lista = $aprendiz->getAll();


?>
<table> 
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Edad</th>
        <th>Teléfono</th>
        <th>Correo</th>
        <th>Documento</th>
        <th>Dirección</th>
    </tr>
</table>

<?php

for ( $i = 0 < count($lista); $i < count($lista); $i++) {
?>
<tr>
<td> ?=$lista[$i]['id'] ?</td>
    <td> ?=$lista[$i]['nombre'] ?</td>
</tr>
<?php
}