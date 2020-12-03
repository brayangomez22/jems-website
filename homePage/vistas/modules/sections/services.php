<!--==============================================
 SERVICIOS 
================================================-->

<?php
    $url = Ruta::ctrRuta();
?> 

<section class="services wow zoomIn delay-1s" id="servicios">
    <div class="s-heading">
        <h1>Ser<font color="#4a90e2">vic</font>ios</h1>
        <p>Ofrecemos los mejores servicios de su clase para nuestros clientes</p>
    </div>

    <!--==============================================
     BOX SERVICES
    ================================================-->	
    <div class="s-box-container">

        <?php
            $servicios = ControladorServicios::ctrMostrarServicios(); 

            foreach ($servicios as $key => $value) {
                echo '
                    <div class="s-box">
                        <div class="bar"></div>
                        <img alt="1" src="'.$url.'assets/img/services/'.$value["icono"].'.png" />
                        <h1>'.$value["nombre"].'</h1>
                        <p>'.$value["texto"].'</p>
                        <a class="s-btn" href="#">Más</a>
                    </div>
                ';
            }
        ?>
        
    </div>
</section>

<!--==============================================
 CONTACT ME 
================================================-->

<div class="contact-me wow zoomIn delay-1s">
    <p>Te podemos servir en algo que necesites ?</p>
    <button>Contáctanos</button>
</div>