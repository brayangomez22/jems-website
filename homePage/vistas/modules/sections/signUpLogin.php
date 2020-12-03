<!--==============================================
 SIGN UP AND LOGIN  
================================================-->

<?php
    $url = Ruta::ctrRuta();
?>

<div class="containerSignUpLogin">
    <div class="forms-container">
        <div class="signin-signup">
            <!--==============================================
            SIGN IN  
            ================================================-->

            <form action="#" class="sign-in-form">
                <h2>iniciar sesión</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Nombre de usuario" />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Contraseña" />
                </div>
                <input type="submit" value="iniciar sesión" class="btn solid" />

                <p class="social-text">O inicie sesión con plataformas sociales</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </form>

            <!--==============================================
            SIGN UP  
            ================================================-->

            <form action="#" class="sign-up-form">
                <h2 class="title-text">Regístrate</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" id="regUser" name="regUser" placeholder="Nombre de usuario" />
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="email" id="regEmail" name="regEmail" placeholder="Correo Electrónico"/>
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="regPassword" name="regPassword" placeholder="Contraseña" />
                </div>

                <input type="submit" class="btn" value="Regístrate" />

                <p class="social-text">O regístrese con las plataformas sociales</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>

    <!--==============================================
      PANELS
    ================================================-->

    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
                <h3>Nuevo aquí ?</h3>
                <p>
                Regístrate para que seas un miembro mas de esta grandiosa comunidad, no te arrepentirás.
                </p>
                <button class="btn transparent" id="sign-up-btn">
                Regístrate
                </button>
            </div>
            <img src="<?php $url; ?>assets/img/log.svg" class="image" alt="" />
        </div>

        <div class="panel right-panel">
            <div class="content">
                <h3>Eres uno de nosotros ?</h3>
                <p>
                Genial, ingresa de inmediato para que te enteres de lo ultimo que esta surgiendo en esta grandiosa comunidad.
                </p>
                <button class="btn transparent" id="sign-in-btn">
                iniciar sesión
                </button>
            </div>
            <img src="<?php $url; ?>assets/img/register.svg" class="image" alt="" />
        </div>
    </div>
</div>