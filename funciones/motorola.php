<?php
 include '../library/configServer.php';
 include '../library/consulSQL.php';
 sleep(4);

$actual=ejecutarSQL::consultar("select numUsuario from usuarioactual where 1");
$compa=ejecutarSQL::consultar("select compara from usuarioactual where 1");

$row1 = mysql_fetch_row($actual);
echo $row1[0];
$row2 = mysql_fetch_row($compa);
echo $row2[0];

 if($row2[0]==0){
    $cambia=ejecutarSQL::consultar("update usuarios set celular1=3 where id=$row1[0]");
 }else{
    $cambia=ejecutarSQL::consultar("update usuarios set celular2=3 where id=$row1[0]");
 }
?>
