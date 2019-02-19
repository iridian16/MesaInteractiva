<?php
 include '../library/configServer.php';
 include '../library/consulSQL.php';
 sleep(4);
      
$consulta=ejecutarSQL::consultar("update usuarioactual set categoria=1 where 1");

?>
