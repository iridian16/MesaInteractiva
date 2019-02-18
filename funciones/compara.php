<?php
 include '../library/configServer.php';
 include '../library/consulSQL.php';
 sleep(4);

$actual=ejecutarSQL::consultar("select compara from usuarioactual where 1");
$row = mysql_fetch_row($actual);
echo $row[0];

 if($row[0]==0){
    $cambia=ejecutarSQL::consultar("update usuarioactual set compara=1 where 1");
    echo "0";
 }else{
     $cambia=ejecutarSQL::consultar("update usuarioactual set compara=0 where 1");
    echo "1";
 }
?>
