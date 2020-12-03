<?php
    $url = Ruta::ctrRuta();
?>

<!--==============================================
 CONTACT  
================================================-->

<div class="s-heading">
    <h1>Con<font color="#4a90e2">tac</font>to</h1>
</div>

<div class="contact mt-5 wow zoomIn delay-1s" id="contacto">
    <span class="big-circle"></span>
    <img src="<?php echo $url; ?>assets/img/contact/shape.svg" class="square" alt=""/>

    <div class="form">
        <div class="contact-info">
            <h3 class="title">Mantengámonos en contacto</h3>
            <p class="text">
                Si tienes algo en lo que te podemos ayudar, <br>
                no olvides en contactarnos 😏.
            </p>

            <div class="info">
                <div class="information">
                    <img src="<?php echo $url; ?>assets/img/contact/location.svg" class="icon" alt="" />
                    <p>Colombia/Medellin (Barrio --) Cr 36 BB # 105-56</p>
                </div>
                <div class="information">
                    <img src="<?php echo $url; ?>assets/img/contact/email.svg" class="icon" alt="" />
                    <p>JEMS@gmail.com</p>
                </div>
                <div class="information">
                    <img src="<?php echo $url; ?>assets/img/contact/phone.svg" class="icon" alt="" />
                    <p>123-456-789</p>
                </div>
            </div>

            <div class="social-media">
                <p>Conectate con nosotros:</p>
                <div class="social-icons">
                <a href="#">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                </div>
            </div>
        </div>

        <div class="contact-form">
            <span class="circle one"></span>
            <span class="circle two"></span>

            <form action="index.html" autocomplete="off">
                <h3 class="title">Contáctanos</h3>
                <div class="input-container">
                    <input type="text" name="name" class="inputContact" placeholder="Nombre de pila"/>
                </div>
                <div class="input-container">
                    <input type="email" name="email" class="inputContact" placeholder="Correo"/>
                </div>
                <div class="input-container">
                    <input type="tel" name="phone" class="inputContact" placeholder="Teléfono"/>
                </div>
                <div class="input-container textarea">
                    <textarea name="message" class="inputContact" placeholder="Mensaje"></textarea>
                </div>
                <input type="submit" value="Enviar" class="btn" />
            </form>
        </div>
    </div>
</div>