<!--==============================================
 PRODUCTOS 
================================================-->

<?php
    $url = Ruta::ctrRuta();
?> 

<section class="product wow zoomIn delay-1s" id="tienda">
    <div class="p-heading">
        <h3>Llegadas de <font>Mo</font>da</h3>
    </div>

    <div class="product-container">

        <?php
            $productos = ControladorProductos::ctrMostrarProductos(); 

            foreach ($productos as $key => $value) {
                echo '
                    <div class="p-box">
                        <img alt="1" src="'.$url.'assets/img/product/'.$value["imagen"].'.jpg" />
                        <p>'.$value["nombre"].'</p>
                        <a class="price" href="#">$'.$value["precio"].'</a>
                        <a class="buy-btn" href="#">Añadir al carrito</a>
                    </div>
                ';
            }
        ?>
        
    </div>
</section>