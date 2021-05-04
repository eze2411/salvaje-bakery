<!DOCTYPE html>
<html lang="es">
<head>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-91788258-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-91788258-3');
</script>


<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Salvaje Bakery</title>

    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="img/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="img/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/xsmall.css">
    <link rel="stylesheet" type="text/css" href="css/small.css">
    <link rel="stylesheet" type="text/css" href="css/medium.css">
    <link rel="stylesheet" type="text/css" href="css/large.css">
    <link rel="stylesheet" type="text/css" href="css/xlarge.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&display=swap" rel="stylesheet">
    
    <script type="text/javascript" src="js/jQuery-3.4.1.js"></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script src="https://kit.fontawesome.com/b8ef73fba4.js" crossorigin="anonymous"></script>
    

</head>
<body class="bootstrap-overwrites">
    <?php include 'navbar.html'; ?>

    <div class="main-contacto">
        <div class="display-flex display-flex-center display-flex-column">
            <?php print_r($msg); ?>
            <div class="grid-doce container">

                <div class="contacto-formulario span-md-7-from-2">
                    <form action="contactocode.php" method="POST" class="transparent-form">
                        <div class="form-group">
                            <input required type="name" name="name" class="form-control" id="contactoInputName" required="" placeholder="Nombre*">
                        </div>
                        <div class="form-group">
                            <input required type="email" name="email" class="form-control" id="contactoInputEmail" required="" aria-describedby="emailHelp" placeholder="Email*">
                        </div>
                        <div class="form-group">
                            <textarea required type="text" name="message" class="form-control" id="contactoInputMessage" required=""  placeholder="¿En que podemos ayudarte?" rows="9"></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-light">Enviar</button>
                        <span style="color:#fff;font-size: 12px; margin-left:20px"><em>*Datos obligatorios</em></span>
                    </form>
                </div>
                <div class="contacto-datos span-md-3">
                    <p><i class="fas fa-map-marker-alt"></i> Av. Dorrego 1829 - CABA</p>
                    <p><i class="far fa-calendar-alt"></i> Martes a Domingo</p>
                    <p><i class="far fa-clock"></i> 08:00 a 20:00 hs. </p>
                    <p><i class="fas fa-phone-alt"></i> Tel: +54 11 2474-3573</p>
                    <p><a style="color:#fff;" href="mailto:info@salvajebakery.com.ar" target="_blank">info@salvajebakery.com.ar</a></p>
                </div>
            </div>
        </div>
    </div>


        
    </body>
    </html>