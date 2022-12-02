<?php
include "./get_path.php";
$sex_info = new parse_ini();
?>
<!DOCTYPE.html>
<html>
    <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="<?php echo $sex_info->get_CSS() ?>" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <title>SexInfo</title>
<body style="background-color: GhostWhite;">
      <nav class='navigation'>
            <input type="checkbox" class="navigation__checkbox" id="navi-toggle">
            <div class="navigation__visible">
                <div class="navigation__visible--left">
                    <a href="/index.php" class="navigation__logo">
                        <img class="navigation__logo--img" src="<?php echo $sex_info->get_LOGOIMG() ?>" alt="">
                    </a>
                </div>
                <div class="navigation__visible--slogan">
                    &#8220;Votre premier pas contre le SIDA.&#8221;
                    <div class="navigation__visible--slogan--author">- Our Managing Director -</div>
                </div>
                <label for="navi-toggle">
                    <svg class="login-portal__interface--input--email--icon">
                         <use xlink:href="<?php echo $sex_info->get_ICONS() ?>sprite.svg#icon-triangle-down"></use>
                    </svg>
                </label>
            </div>
            <div>
            </div>
    </nav>
    <header>
        <div class="logo">
            <img src="logo.png">
        </div>
        <div class="title">
            <h1>SexInfo</h1>
        </div>
        <div class="nav_bar">
            <div class="head-top">
            <nav>
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="login.php" id="login">Inscription</a></li>
                    <li><a href="register.php" id="register">Connexion</a></li>
                    <li><a href="#jeu">Jeu</a></li>
                    <li><a href="#Contact">Contactez-nous</a></li>
                    <button type="button" class="btn btn-primary" id="create_session">Créer une session</button>
                    <button type="button" class="btn btn-success" id="button_connect2">Rejoindre une session</button>
                </ul>
            </nav>
        </div>
    </header>

    <style>
        #list_of_card {
            /* background-color: blue; */
            width: 100%;
            height: 50%;
        }

        #list_of_widget {
            /* background-color: red; */
            width: 100%;
        }

        #game_page {
            width: 100%;
            background: #DDA0DD;
            height: 100%;
            margin-top: 5%;
        }
    </style>

    <div id="list_of_card">
        <div class="card d-inline-block" style="width: 25%; height: 100%; margin-left: 6%;display:block;">
            <h2 class="card-header">L'Hépatite A:</h2>
            <div class="card-body">
                <h3 class="card-text">L’hépatite A est une maladie infectieuse aigüe du foie provoquée par un virus (VHA). Elle se transmet principalement par voie féco-orale ou alimentaire. Elle se distingue aussi de l’hépatite B ou C par le fait qu’elle ne devient jamais chronique.</h3>
            </div>
        </div>
        <div class="card d-inline-block" style="width: 25%; height: 100%; margin-left: 6%;display:block;">
            <h2 class="card-header">L'Hépatite B:</h2>
            <div class="card-body">
                <h3 class="card-text">L’hépatite B est une infection hépatique potentiellement mortelle causée par le virus de l’hépatite B (VHB). Il s’agit d’un problème majeur de santé publique. Le VHB peut aussi provoquer des infections chroniques et entraîne un risque important de décès par cirrhose ou cancer du foie pour les personnes exposées.</h3>
            </div>
        </div>
        <div class="card d-inline-block" style="width: 25%; height: 100%; margin-left: 6%;display:block;">
            <h2 class="card-header">L'Hépatite C:</h2>
            <div class="card-body">
                <h3 class="card-text">L'hépatite C se traduit par une inflammation, plus ou moins détectable, au niveau du foie. Il existe différentes variétés de VHC : on recense six groupes ou génotypes, numérotés de 1 à 6. Ces groupes sont plus ou moins sensibles aux traitements.</h3>
            </div>
        </div>
    </div>

    <div id="list_of_widget" style="margin-top: 8rem;">
        <div class="card d-inline-block" style="width: 18rem; margin-left:14rem">
        <div class="card-body">
            <h5 class="card-title">Azur.org</h5>
            <h6 class="card-subtitle mb-2 text-muted">(Service 0,06 € /min + prix appel)</h6>
            <p class="card-text">Pour parler de sa différence appelez Ligne Azur.org.</p>
            <a href="tel:+33 810 20 30 40" class="card-link">0 810 20 30 40</a>
            <a href="Azur.org" class="card-link">Azur.org</a>
        </div>
        </div>

        <div class="card d-inline-block" style="width: 18rem;margin-left:14rem">
        <div class="card-body">
            <h5 class="card-title">Hépatites Info Service</h5>
            <h6 class="card-subtitle mb-2 text-muted">(Service et appel gratuits, 7j/7, de 08h00 à 23h00)</h6>
            <p class="card-text">Si vous aviez des questions à propos des hépatites n'hésitez pas à appeler.</p>
            <a href="tel:+33 800 845 800" class="card-link">0 800 845 800</a>
        </div>
        </div>

        <div class="card d-inline-block" style="width: 18rem;margin-left:14rem">
        <div class="card-body">
            <h5 class="card-title">Sida Info Service.org</h5>
            <h6 class="card-subtitle mb-2 text-muted">(Appel confidentiel, anonyme et gratuit)</h6>
            <p class="card-text">Sida Info Service est cette année au cœur du défi. Pourquoi ? Tout simplement parce que la lutte contre le VIH n'est pas finie.</p>
            <a href="tel:+33 800 840 800" class="card-link">0 800 840 800</a>
            <a href="https://www.sida-info-service.org/" class="card-link">Service.org</a>
        </div>
        </div>

        <div class="card d-inline-block" style="width: 18rem;margin-left:14rem">
        <div class="card-body">
            <h5 class="card-title">Professionnel médical</h5>
            <a href="tel:+33 810 630 515" class="card-link">0 810 630 515</a>
        </div>
        </div>

        <div id="game_page">
            <h1 class="position-absolute top-0 end-0 m-3"><u>Score</u> <span id="score" class="badge bg-secondary ">200</span></h1>
            <div class="card" style="width: 22%;margin-left: 39%; margin-top: 10%">
                <div class="card-body">
                    <h5 class="card-title">Quiz</h5>
                    <p class="card-text"><span id="question"></span></p>
                </div>
                <button type="button" id="R1" class="button_r btn btn-primary m-1">R1</button>
                <button type="button" id="R2" class="button_r btn btn-primary m-1">R2</button>
                <button type="button" id="R3" class="button_r btn btn-primary m-1">R3</button>
                <button type="button" id="check" class="btn btn-success m-1 visually-hidden">Valider</button>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" style="position:absolute; top:180%;" viewBox="0 0 1440 320"><path fill="#e7008a" fill-opacity="0.64" d="M0,64L12,90.7C24,117,48,171,72,192C96,213,120,203,144,197.3C168,192,192,192,216,186.7C240,181,264,171,288,176C312,181,336,203,360,208C384,213,408,203,432,170.7C456,139,480,85,504,69.3C528,53,552,75,576,96C600,117,624,139,648,170.7C672,203,696,245,720,229.3C744,213,768,139,792,106.7C816,75,840,85,864,90.7C888,96,912,96,936,85.3C960,75,984,53,1008,42.7C1032,32,1056,32,1080,80C1104,128,1128,224,1152,250.7C1176,277,1200,235,1224,208C1248,181,1272,171,1296,176C1320,181,1344,203,1368,186.7C1392,171,1416,117,1428,90.7L1440,64L1440,320L1428,320C1416,320,1392,320,1368,320C1344,320,1320,320,1296,320C1272,320,1248,320,1224,320C1200,320,1176,320,1152,320C1128,320,1104,320,1080,320C1056,320,1032,320,1008,320C984,320,960,320,936,320C912,320,888,320,864,320C840,320,816,320,792,320C768,320,744,320,720,320C696,320,672,320,648,320C624,320,600,320,576,320C552,320,528,320,504,320C480,320,456,320,432,320C408,320,384,320,360,320C336,320,312,320,288,320C264,320,240,320,216,320C192,320,168,320,144,320C120,320,96,320,72,320C48,320,24,320,12,320L0,320Z"></path></svg>

        </div>
    </div>
    </body>

</html>
