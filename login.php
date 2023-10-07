<!doctype html>
<html lang="en">
<head>
  <title>INE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/styles.css">
  <style>

    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900');
    body{
        font-family: 'Poppins', sans-serif;
        font-weight: 300;
        line-height: 1.7;
        color: ##000000;
        background-color: #FFFFFF;
    }
    a:hover {
        text-decoration: none;
    }
    .link {
    color: #000080;
    }
    .link:hover {
    color: #D81B60;
    }
    p {
    font-weight: 500;
    font-size: 14px;
    }
    h4 {
    font-weight: 600;
    }
    h6 span{
    padding: 0 20px;
    font-weight: 700;
    }
    .section{
    position: relative;
    width: 100%;
    display: block;
    }
    .full-height{
    min-height: 100vh;
    }
    [type="checkbox"]:checked,
    [type="checkbox"]:not(:checked){
    display: none;
    }
    .checkbox:checked + label,
    .checkbox:not(:checked) + label{
    position: relative;
    display: block;
    text-align: center;
    width: 60px;
    height: 16px;
    border-radius: 8px;
    padding: 0;
    margin: 10px auto;
    cursor: pointer;
    background-color: #D81B60;
    }
    .checkbox:checked + label:before,
    .checkbox:not(:checked) + label:before{
    position: absolute;
    display: block;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    color: #FFFFFF;
    background-color: #020305;
    font-family: 'unicons';
    content: '\eb4f';
    z-index: 20;
    top: -10px;
    left: -10px;
    line-height: 36px;
    text-align: center;
    font-size: 24px;
    transition: all 0.5s ease;
    }
    .checkbox:checked + label:before {
    transform: translateX(44px) rotate(-270deg);
    }
    .card-3d-wrap {
    position: relative;
    width: 440px;
    max-width: 100%;
    height: 400px;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
    perspective: 800px;
    margin-top: 60px;
    }
    .card-3d-wrapper {
    width: 100%;
    height: 100%;
    position:absolute;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
    transition: all 600ms ease-out; 
    }
    .card-front, .card-back {
    width: 100%;
    height: 110%;
    background-color: #D3D3D3;
    background-image: url('/img/pattern_japanese-pattern-2_1_2_0-0_0_1__ffffff00_000000.png');
    position: absolute;
    border-radius: 6px;
    -webkit-transform-style: preserve-3d;
    }
    .card-back {
    transform: rotateY(180deg);
    }
    .checkbox:checked ~ .card-3d-wrap .card-3d-wrapper {
    transform: rotateY(180deg);
    }
    .center-wrap{
    position: absolute;
    width: 100%;
    padding: 0 30px;
    top: 50%;
    left: 0;
    transform: translate3d(0, -50%, 35px) perspective(100px);
    z-index: 20;
    display: block;
    }
    .form-group{ 
    position: relative;
    display: block;
    margin: 0;
    padding: 0;
    }
    .form-style {
    padding: 13px 20px;
    padding-left: 55px;
    height: 48px;
    width: 100%;
    font-weight: 500;
    border-radius: 4px;
    font-size: 14px;
    line-height: 22px;
    letter-spacing: 0.5px;
    outline: none;
    color: #000000;
    background-color: #FFFFFF;
    border: none;
    -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
    box-shadow: 0 4px 8px 0 rgba(21,21,21,.2);
    }
    .form-style:focus,
    .form-style:active {
    border: none;
    outline: none;
    box-shadow: 0 4px 8px 0 rgba(21,21,21,.2);
    }
    .input-icon {
    position: absolute;
    top: 0;
    left: 18px;
    height: 48px;
    font-size: 24px;
    line-height: 48px;
    text-align: left;
    -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
    }
    .btn{  
    border-radius: 4px;
    height: 44px;
    font-size: 13px;
    font-weight: 600;
    text-transform: uppercase;
    -webkit-transition : all 200ms linear;
    transition: all 200ms linear;
    padding: 0 30px;
    letter-spacing: 1px;
    display: -webkit-inline-flex;
    display: -ms-inline-flexbox;
    display: inline-flex;
    align-items: center;
    background-color: #D81B60 ;
    color: #FFFFFF;
    }
    .btn:hover{  
    background-color: #B71450 ;
    color: #FFFFFF;
    box-shadow: 0 8px 24px 0 rgba(16,39,112,.2);
    }
    [type="checkbox"]:checked,
    [type="checkbox"]:not(:checked){
    display: none;
    }
    #termsCheckbox {
    display: inline-block !important;
    }
    #termsPopup {
    position: fixed;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background-color: rgba(0, 0, 0, 0.5); 
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 25px; 
    }
    #termsContent {
    background-color: #fff;
    width: 80%;
    padding: 20px;
    max-width: 600px;
    max-height: 400px;
    overflow-y: auto;
    text-align: center; 
    border-radius: 15px;
    margin: 0 auto;
    }
    #closeButton {
    background-color: #ff0000; 
    color: #ffffff; 
    position: absolute;
    border: none; 
    border-radius: 50px; 
    padding: 10px 20px; 
    top: 10px;
    right: 10px;
    text-align: center; 
    text-decoration: none; 
    display: inline-block; 
    font-size: 16px;
    margin: 4px 2px; 
    cursor: pointer; 
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }



</style>
</head>
<body>
    
	<div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
                        <img src="image/logo-ine.png" alt="Descripción de la imagen">
						<h6 class="mb-0 pb-3"><span>Iniciar sesión</span><span>Registrarse</span></h6>
			          	<input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
			          	<label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
                                <div class="card-front">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-4 pb-3">Iniciar sesión</h4>
                                            <form id="loginForm" action="iniciarsesion.php" method="post">
                                                <div class="form-group">
                                                    <input id="emaillogin" type="email" class="form-style" placeholder="Correo electrónico" name="email">
                                                    <i class="input-icon uil uil-at"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input id="passwordlogin" type="password" class="form-style" placeholder="Contraseña" name="password">
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>
                                                <button type="submit" class="btn mt-4">Iniciar sesión</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                  <div class="card-back">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-3 pb-3">Registro</h4>
                                            <form id="registerForm" action="registro.php" method="post"> 
                                                <div class="form-group">
                                                    <input id="name" type="text" class="form-style" placeholder="Nombre y Apellido" name="nombre_apellido">
                                                    <i class="input-icon uil uil-user"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input id="phone" type="tel" class="form-style" placeholder="Celular" name="tel">
                                                    <i class="input-icon uil uil-phone"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input id="email" type="email" class="form-style" placeholder="Correo electrónico" name="email">
                                                    <i class="input-icon uil uil-at"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input id="password" type="password" class="form-style" placeholder="Contraseña" name="password">
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="checkbox" id="termsCheckbox" name="terms">
                                                    <label for="termsCheckbox">Acepto los</label> <a href="#" id="termsLink">Términos y condiciones</a>
                                                </div>
                                                <button type="submit" class="btn mt-4">Registrarse</button>
                                            </form>
                                            <div id="termsPopup" style="display: none;">
                                            <div id="termsContent">
                                                <p><a href="https://www.ine.mx/wp-content/uploads/2023/09/DESPEN_Estatuto_INE_CG162_2020.pdf" target="_blank">Estatuto del Servicio Profesional Electoral Nacional y del Personal de la Rama Administrativa:</a> Este documento parece contener información sobre las condiciones de trabajo para el personal del INE.</p>
                                                
                                                <p><a href="https://repositoriodocumental.ine.mx/xmlui/bitstream/handle/123456789/141068/CGex202207-20-ap-6.pdf" target="_blank">Acuerdo INE/CG581/2022:</a> Este acuerdo establece los plazos y términos para el uso del Padrón Electoral y las Listas Nominales de Electores para los Procesos Electorales Locales 2022-2023.</p>
                                                
                                                <p><a href="https://bing.com/search?q=t%c3%a9rminos+y+condiciones+del+INE" target="_blank">Carta de Términos y Condiciones para utilizar la Firma Electrónica Avanzada:</a> Esta carta establece los términos y condiciones para utilizar la Firma Electrónica Avanzada en los actos que se realicen en el INE.</p>
                                                
                                                <p><a href="https://www.ine.mx/wp-content/uploads/2017/07/CGex201706-28-ap-10-a1.pdf" target="_blank">Lineamientos que establecen los plazos, términos y condiciones para la actualización del Padrón Electoral:</a> Estos lineamientos establecen los plazos, términos y condiciones para la actualización del Padrón Electoral.</p>
                                                
                                                <p><a href="https://igualdad.ine.mx/sobre-este-sitio-web/terminos-y-condiciones/" target="_blank">Términos y condiciones - Igualdad de Género y No Discriminación:</a> Este sitio web del INE contiene información sobre los términos y condiciones relacionados con la igualdad de género y la no discriminación.</p>
                                            </div>
                                                    <button id="closeButton">Cerrar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

			      			</div>
			      		</div>
			      	</div>
		      	</div>
	      	</div>
	    </div>
	</div>

    <script>
    document.getElementById('loginForm').addEventListener('submit', function(event) {
        var email = document.getElementById('emaillogin').value;
        var password = document.getElementById('passwordlogin').value;
        if (!email || !password) {
            alert('Por favor, completa todos los campos.');
            event.preventDefault();
            event.stopPropagation();
        }
    });
    document.getElementById('registerForm').addEventListener('submit', function(event) {
        event.preventDefault();
        event.stopPropagation();

        setTimeout(function() {
            var name = document.getElementById('name').value;
            var phone = document.getElementById('phone').value;
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;
            var terms = document.getElementById('termsCheckbox').checked;

            var passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;

            if (name === "" || phone === "" || email === "" || password === "" || !terms) {
                alert('Por favor, completa todos los campos.');
            } else if (!passwordRegex.test(password)) {
                alert('La contraseña debe tener al menos 8 caracteres y contener mayúsculas, minúsculas y números.');
            } else {
                document.getElementById('registerForm').submit();
            }
        }, 100);
    });

    // Función para mostrar los términos y condiciones
    document.getElementById('termsLink').addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById('termsPopup').style.display = 'flex';
    });

    document.getElementById('closeButton').addEventListener('click', function() {
        document.getElementById('termsPopup').style.display = 'none';
    });
    </script>
    <!-- Funcion para desplegar la card de los terminos y condiciones -->
    <script>
        document.getElementById('termsLink').addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById('termsPopup').style.display = 'flex';
    });

    document.getElementById('closeButton').addEventListener('click', function() {
        document.getElementById('termsPopup').style.display = 'none';
    });


    </script>

</body>
</html>
