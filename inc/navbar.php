<?php 
    session_start(); 
    error_reporting(E_PARSE);
    if(!isset($_SESSION['contador'])){
        $_SESSION['contador'] = 0;
    }
?>

<section id="container-carrito-compras">
    <div class="container"> 
            <div class="row">    
                <a><img src="imagenes/ds.png"> Samsung J7</a>
                <a><img src="imagenes/ds.png"> Xiaomi mi 8</a>
                <a><img src="imagenes/ds.png"> Moto G6 play</a> 
               
                <a><img src="imagenes/ds.png"> Huawei Mate 20</a>
                <a><img src="imagenes/ds.png"> Xiaomi Redmi 6</a>
                <a><img src="imagenes/ds.png"> Moto E5</a>
               
                <a><img src="imagenes/ds.png"> Samsung S9</a>
                <a><img src="imagenes/ds.png"> Motorola One</a>
                <a><img src="imagenes/ds.png"> Huawei Y5</a>
               
                <a><img src="imagenes/ds.png"> Nokia 5</a>
                <a><img src="imagenes/ds.png"> Sony Xperia XA</a>
                <a><img src="imagenes/ds.png"> LG Q9</a>
            </div>
    </div>
</section>

<nav id="navbar-auto-hidden">
        <div class="row hidden-xs">
            <div class="col-xs-4">    
                <div class="col-xs-2">  
                    <a href="#" class="table-cell-td carrito-button-nav all-elements-tooltip" data-toggle="tooltip" data-placement="bottom">
                        <img src="imagenes/disp.png">
                    </a>
                </div>
            </div>
            <div class="col-xs-8">
                <div class="contenedor-tabla pull-right">
                    <div class="contenedor-tr">
                        <a href="#" class="table-cell-td">Comparar</a>
                        <a href="#" class="table-cell-td">Usuario 1</a>
                        <a href="#" class="table-cell-td">Usuario 2</a> 
                        <a href="#" class="table-cell-td">Usuario 3</a>
                        <a href="#" class="table-cell-td">Usuario 4</a>
                    </div>
                </div>
            </div>
        </div>
</nav>