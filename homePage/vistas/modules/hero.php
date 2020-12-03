<!--==============================================
 HERO 
================================================-->

<?php
    $url = Ruta::ctrRuta();
    $urlBlog = Ruta::ctrRutaBlog();
?> 

<!--==============================================
 NAVBAR 
================================================-->

<nav class="navbar">
    <div class="inner-width">
         <!--logo------------->
        <div class="logo">
            <a href="#"><font>JE</font>MS</a>
        </div>
        <button class="menu-toggler">
        <span></span>
        <span></span>
        <span></span>
        </button>
        <div class="navbar-menu">
            <a href="#">Home</a>
            <a href="#nosotros">Nosotros</a>
            <a href="#servicios">Servicios</a>
            <a href="#tienda">Tienda</a>
            <a href="#contacto">Contacto</a>
            <a href="<?php echo $urlBlog; ?>" target="_blank">Blog</a>
            <a href="signUpLogin">iniciar sesión</a>
            <a href="signUpLogin">Registrarse</a>
        </div>
    </div>
</nav>

<!--main-section--------------->
<section class="main">
    <!--img--------->
    <div class="m-img wow zoomIn delay-1s">
        <img alt="" style="width:100%;margin-right:-120px;" src="<?php echo $url; ?>assets/img/home.svg" />    
    </div>

    <!--text------------>
    <div class="m-text wow zoomIn delay-1s">
        <h1>So<font>mos</font>tu</h1>
        <h2>Mejor<font> Opción</font></h2>
        <!--btn------------>
        <a class="m-btn" href="#contacto">Contactanos</a>
    </div>

    <!--social-------->
    <div class="social wow zoomIn delay-1s">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
    </div>
</section>