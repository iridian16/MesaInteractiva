<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio</title>
    <?php include './inc/link.php'; ?>
</head>
<body id="container-page-index">
    <?php 
        include './inc/navbar.php';
        include './library/configServer.php';
        include './library/consulSQL.php';
    ?>
    <?php
        echo '
            <font color="white">
            <div>
            <br><br><br><br><br>
        ';
        
        $var=0;
        $actual=ejecutarSQL::consultar("select SUM(status) from usuarios where 1");
        $row = mysql_fetch_row($actual);
        $var=$row[0];

        if($var==0){
            echo '
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">  
                            <div align="center">
                                <br><br><br><br><br><br>
                                <font color="#97bbb9" size="50">
                                Mesa Interactiva
                            </div>
                        </div>
                    </div
                </div>
            ';
        } 
        else if($var==1){
            echo '
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12" style="height:440px" id="estilo1">
                            <div style="height:440px" id="estilo2" >
                                Espacio para 1 usuario
                            </div> 
                        </div>
                    </div
                </div>
            ';
        } 
        else if($var==2){
            echo '
                <div class="container">
                    <div class="row">
                        <div class="col-xs-6" style="height:440px" id="estilo1">
                            <div style="height:440px; width:555px;" id="estilo2" >
                                Espacio para usuario 1
                            </div> 
                        </div>
                        <div class="col-xs-6" style="height:440px" id="estilo1">
                            <div style="height:440px; width:555px;" id="estilo2" >
                                Espacio para usuario 2
                            </div> 
                        </div>
                    </div
                </div>
            ';  
        }
        /* 3 o 4 Usuarios*/
        else{
            echo '
                <div class="container">
                    <div class="row">
                        <div class="col-xs-6" style="height:440px" id="estilo1">
                            <div style="height:220px; width:555px;" id="estilo2" >
                                Espacio para usuario 1
                            </div> 
                            <div style="height:220px; width:555px;" id="estilo3" >
                                Espacio para usuario 3
                            </div> 
                        </div>
                        <div class="col-xs-6" style="height:440px" id="estilo1">
                            <div style="height:220px; width:555px;" id="estilo3" >
                                Espacio para usuario 2
                            </div> 
                            <div style="height:220px; width:555px;" id="estilo2" >
                                Espacio para usuario 4
                            </div> 
                        </div>
                    </div
                </div>
            ';  
        }
    ?>
    </div>
</body>
</html>