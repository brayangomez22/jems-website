<!--watches------------------->

<?php
    $url = Ruta::ctrRuta();
?> 

<section class="product wow zoomIn delay-1s">
    <div class="p-heading">
        <h3>Lo<font> último</font> en tecnología</h3>
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

<!--==============================================
 SUSCRIBIRSE 
================================================-->

<section class="subcribe-container wow zoomIn delay-1s">
    <h3>Suscríbase para recibir notificaciones de nuevos productos</h3>
    <div class="subcribe-input">
        <input placeholder="Eample@gmail.com" type="email" />
        <a class="subcribe-btn" href="#">Enviar</a>
    </div>
</section>