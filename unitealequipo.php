<?php


$message = '';

        if(isset($_POST["submit"]))
        {

            /////File Upload

            // In PHP versions earlier than 4.1.0, $HTTP_POST_FILES should be used instead
            // of $_FILES.

            $uploaddir = 'uploads/';
            $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

            
            if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
                $message = '<div class="alert alert-success span-md-12">El formulario se cargo correctamente</div>';
		
            } else {
                $message = '<div class="alert alert-danger span-md-12">Hubo un error, intente nuevamente a la brevedad</div>';
            }

            


            ////// Email


            require_once("class.phpmailer.php");
            require_once("class.smtp.php");



            $mail_body = array($_POST['nombre'], $_POST['email'] , $_POST['edad'], $_POST['areadeinteres']);
            $new_body = 
            '
                <table border="1" width="100%" cellpadding="5" cellspacing="5">
                    <tr>
                        <td width="30%">Nombre</td>
                        <td width="70%">'. $mail_body[0] .'</td>
                    </tr>
                    <tr>
                        <td width="30%">Email</td>
                        <td width="70%">'. $mail_body[1] .'</td>
                    </tr>
                    <tr>
                        <td width="30%">Edad</td>
                        <td width="70%">'. $mail_body[2] .'</td>
                    </tr>
                    
                    <tr>
                        <td width="30%">Area de interes</td>
                        <td width="70%">'. $mail_body[3] .'</td>
                    </tr>
                    
                </table>
            ';
            
            //"Nombre: " . $mail_body[0] . "\r\n" . ", Email " . $mail_body[1] . "\r\n" . " Edad: " . $mail_body[2] . "\r\n" . " area de interes: " . $mail_body[3];



            $d=strtotime("today"); 

            $subj = 'Nuevo formulario Unite al equipo '. date("Y-m-d h:i:sa", $d);

            $mail = new PHPMailer(); // create a new object


            //$mail->IsSMTP(); // enable SMTP
            $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only ,false = Disable 
            $mail->Host = "c1660155.ferozo.com";
            $mail->Port = '465';
            $mail->SMTPAuth = true; // enable 
            $mail->SMTPSecure = true;
            $mail->IsHTML(true);
            $mail->Username = "no-reply@c1660155.ferozo.com"; //from@domainname.com
            $mail->Password = "Rp1*FXk9eI";
            $mail->SetFrom("empleo@salvajebakery.com.ar", "Unite al equipo");
            $mail->Subject = $subj;
            $mail->Body    = $new_body;

            $mail->AddAttachment($uploadfile);

            $mail->AltBody = 'Upload';
            $mail->AddAddress("empleo@salvajebakery.com.ar");
             if($mail->Send())								//Send an Email. Return true on success or false on error
	{
		header("Location:/unite-exito.php");
		unlink($path);
	}
	else
	{
		$message = '<div class="alert alert-danger span-md-12">Hubo un error, intente nuevamente a la brevedad</div>';
	}

        }



?>
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


    <meta charset="UTF-8">
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

    <div class="main-work-with-us">
        <div class="display-flex display-flex-center display-flex-column container">
<?php print_r($message); ?>
            <div class="grid-doce">
                
                <form method="POST"  class="span-md-6-from-4 transparent-form" enctype="multipart/form-data" >
                    <p class="bold">Unite al equipo</p>
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <input name="nombre" type="nombre" class="form-control" id="workWithUsInputName" placeholder="Nombre*">
                        </div>
                        <div class="form-group col-md-4">
                            <input name="edad" type="number" class="form-control" id="workWithUsInputEdad" placeholder="Edad*">
                        </div>
                    </div>
                    <div class="form-group">
                        <input name="email" type="email" class="form-control" id="workWithUsInputEmail" placeholder="Email*">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <select name="areadeinteres" id="workWithUsInputAreaDeInteres" class="form-control" >
                                <option class="form-styled-option" disabled selected hidden>Área de interes*</option>
                                <option>Cajero/a</option>
                                <option>Mesero/a</option>
                                <option>Cocina</option>
                                <option>Panadero/a</option>
                                <option>Otro</option>
                            </select>
                        </div>
                        <div class="custom-file col-md-4">
                            
                            <input name="userfile" type="file" accept=".doc,.docx, .pdf" class="custom-file-input" id="customFile">

                            <label class="custom-file-label" for="customFile">Adjunta tu CV (PDF)</label>
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-light">Enviar</button>
                </form>
            </div>
        </div>
    </div>


        
    </body>
    </html>