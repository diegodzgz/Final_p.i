<?php
$resultado=mysql_query("select *from producto");
  while ($row=mysql_fetch_array($resultado)) {
    echo '
    <tr>
      <td>
        <input type="hidden" value="'.$row[0].'">'.$row[0].'
        <input type="hidden" class="imagen" value="'.$row[3].'">
      </td>
      <td><input type="text" class="nombre" value="'.$row[1].'"> </td>
      <td><input type="text" class="descripcion" value="'.$row[2].'"> </td>
      <td><input type="text" class="precio" value="'.$row[4].'"> </td>
      <td><input type="text" class="almacen" value="'.$row[5].'"> </td>
      <td><input type="text" class="origen" value="'.$row[6].'"> </td>
      <td><input type="text" class="deporte" value="'.$row[7].'"> </td>
      <td><input type="text" class="marca" value="'.$row[8].'"> </td>
      <td><button class="eliminar" data-id="'.$row[0].'"> Eliminar </button></td>
      <td><button class="modificar" data-id="'.$row[0].'"> Modificar </button></td>
    </tr>
    ';
  }
 ?>
