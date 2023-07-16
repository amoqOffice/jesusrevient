<?php
    if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === "off") {
        $location = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        header('HTTP/1.1 301 Moved Permanently');
        header('Location: ' . $location);
        exit;
    }
    
    $url = $_SERVER['HTTP_REFERER'];
    $baseURL = rtrim($url, basename($url));

    if(isset($_POST['email'])) {
        // Chemin vers le fichier JSON
        $cheminFichier = 'assets/email_saved.json';

        // Données à insérer dans le fichier JSON
        $nouvelleDonnee = array(
            'email' => $_POST['email'],
        );

        if (filesize('assets/email_saved.json') == 0) {
            $first_record = [ $nouvelleDonnee ];

            $data_to_save = $first_record;
        } 
        else {
            $old_records = json_decode(file_get_contents('assets/email_saved.json'));

            array_push($old_records, $nouvelleDonnee);

            $data_to_save = $old_records; 
        }

        if(!file_put_contents('assets/email_saved.json', json_encode($data_to_save, JSON_PRETTY_PRINT, LOCK_EX))) {
            echo "<script>alert('Fichier denregistrement non trouvé');</script>";
        }
        else {
            echo "<script>alert('Votre email a été bien enregistré');</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="JESUS-REVIENT TV">

    <link href="assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link rel="stylesheet" href="<?= $baseURL ?>assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="<?= $baseURL ?>assets/css/animate.min.css">
    <link rel="stylesheet" href="<?= $baseURL ?>assets/css/style.css" type="text/css">
    <link rel="icon" href="<?= $baseURL ?>assets/img/favicon.ico" type="image/x-icon">
    <meta name="description" content="JESUS-REVIENT.TV EST UNE CHAÎNE CHRÉTIENNE QUI SONNE LA TROMPETTE DE LA REPENTANCE À TOUTE LA TERRE.">

    <title>JESUS REVIENT TV</title>

    <style>
        body { background-color: #f3f3f3; }
        
        .animate__fadeIn {
            animation-duration: 2s
        }
        
        .fa {
            color: #fff;
        }

        .btn {
            height: 100%;
            width: 3.5rem;
            margin-left: -20px !important;
            background: black;
        }

        /* Style pour le défilement vers le bas en mode responsive */
        @media (max-width: 768px) {
        html, body {
            overflow-x: hidden;
        }
        
        body {
            scroll-behavior: smooth;
        }
        
        .page-wrapper {
            transform: translateZ(0);
            overflow-y: scroll;
            -webkit-overflow-scrolling: touch;
        }
    }
    </style>

    <script>
        var colors = ['255,103,103', '97,223,255', '255,232,88', '141,255,139'];
    </script>

</head>

<body>
    <video autoplay loop muted>
        <source src="assets/videos/background_video.webm" type="video/mp4">
        Votre navigateur ne supporte pas la lecture de vidéos.
    </video>

    <div class="page-wrapper">
        <div class="content-wrapper">
            <div class="content-main animate">
                <div class="container">
                    <div class="animate__animated animate__bounceInDown">
                        <h1 class="font-size-80" style="margin-bottom: 7px; color: #fff;">Soyez prêts !</h1>
                        <h2 class="opacity-60" style="color: #fff; margin-top: 6px;">Quelque chose de puissant est sur le point d'arriver.</h2>
                    </div>
                    
                    <div class="center count-down animate__animated animate__fadeIn" style="color: #fff; margin: 20px 0px 30px 0px;" data-countdown-year="2023" data-countdown-month="08" data-countdown-day="26"></div>
                    
                    <div class="animate__animated animate__bounceInUp">
                        <p style="opacity: 1; color: #fff; font-size: 18px;">En attendant la finalisation de notre site web, veuillez indiquer votre adresse e-mail ci-dessous pour recevoir des informations dès notre retour.</p>

                        <div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1">
                            <form class="form" method="post" action="" style="margin-top: 0px;">
                                <div class="input-group">
                                    <input type="email" id="user_email" class="form-control" name="email" placeholder="Votre adresse e-mail" required>
                                    <span class="input-group-btn">
                                        <button class="btn" type="submit" title="Cliquer pour envoyer"><i class="fa fa-arrow-right"></i></button>
                                    </span>
                                </div>
                                <p style="opacity: 1; font-weight: bold; color: #fff; margin-top: 2%; margin-bottom: 5px; opacity: 80%;">*Seule votre adresse e-mail, aucun spam ne sera envoyé.</p>

                                <p>
                                    <div class="social-icons ">
                                        <a target="_blank" href="https://wa.me/+22997253539"><i class="fa fa-whatsapp"></i></a>
                                        <a target="_blank" href="https://www.facebook.com/groupejesusrevient"><i class="fa fa-facebook"></i></a>
                                        <a target="_blank" href="https://www.youtube.com/@jesusrevienttv"><i class="fa fa-youtube"></i></a>
                                        <a target="_blank" href="https://t.me/jesusrevient_tv"><i class="fa fa-telegram"></i></a>
                                        <a target="_blank" href="https://bit.ly/3D0VgDo"><i class="fa fa-television"></i></a>
                                    </div>
                                </p>
                                <p>
                                    <img src="<?= $baseURL ?>assets/img/LOGO_JR.png" width="30%" height="30%" alt="" srcset="">
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="background-wrapper">
                <canvas id="background-content"></canvas>
            </div>
        </div>
    </div>

    <script  src="<?= $baseURL ?>assets/js/jquery-2.2.1.min.js"></script>
    <script  src="<?= $baseURL ?>assets/bootstrap/js/bootstrap.min.js"></script>

    <script  src="<?= $baseURL ?>assets/js/jquery.plugin.min.js"></script>

    <script  src="<?= $baseURL ?>assets/js/jquery.countdown.min.js"></script>
    <script  src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenLite.min.js"></script>
    <script  src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/easing/EasePack.min.js"></script>
    <script  src="<?= $baseURL ?>assets/js/exploding-triangles.js"></script>
    <script  src="<?= $baseURL ?>assets/js/custom.js"></script>
</body>
</html>
