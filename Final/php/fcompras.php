<?php $re=mysql_query("SELECT * FROM compras");
      $numeroventa=0;
      while ($f=mysql_fetch_array($re)) {
        if ($numeroventa != $f['numeroventa']) {
          echo '<tr><td> Numero de Compra:'.$f['numeroventa'].'</td></tr>';
        }
        $numeroventa=$f['numeroventa'];
        echo '<tr>
            <td><img src="../img/'.$f['imagen'].'" width="100px" height="100px" /></td>
            <td>'.$f['nombre'].'</td>
            <td>'.$f['precio'].'</td>
            <td>'.$f['cantidad'].'</td>
            <td>'.$f['subtotal'].'</td>

        </tr>';
      }
 ?>
