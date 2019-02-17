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
        $var = 0;
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
        
        if($var==1){
            echo '
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">  
                        <div class="col-xs-7">      
                            <div id="estilo1">Texto<br>dfsdfs</div>
                            <div id="estilo2">Texto 2</div> 
                        </div
                        </div>
                    </div
                </div>
            ';
        } 
        else if($var==2){
            echo '
                <a> hay 2</a>
            ';  
        }
    ?>
    </div>
</body>
</html>