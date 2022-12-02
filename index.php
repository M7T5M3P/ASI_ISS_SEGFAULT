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
         <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <title>SexInfo</title>
<body>
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
                <div class="navigation__visible--right">
                    <label for="navi-toggle">
                         <svg class="navigation__visible--right--icon">
                              <use xlink:href="<?php echo $sex_info->get_ICONS() ?>sprite.svg#icon-triangle-down"></use>
                         </svg>
                    </label>
                </div>
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

        
            <div class="main">
                <div class="vih">
                    <div class="title_vih">
                        <h3>Le VIH:</h3>
                    </div>
                    <div class="info_vih">
                        Le VIH est le virus de l’immunodéficience humaine.
                        La particularité du VIH est qu’il s’attaque aux cellules du système immunitaire, en particulier aux lymphocytes T CD4. Ce sont des cellules qui protègent le corps contre les attaques des maladies et autres infections.
                    </div>
                </div>
                <div class="title_A">
                    <h4>L'Hépatite A:</h4>
                </div>

                <div class="info_A">
                L’hépatite A est une maladie infectieuse aigüe du foie provoquée par un virus (VHA). Elle se transmet principalement par voie féco-orale ou alimentaire. Elle se distingue aussi de l’hépatite B ou C par le fait qu’elle ne devient jamais chronique.
                </div>

                <div class ="title_B">
                    <h4>L'Hépatite B:</h4>
                </div>

                <div class ="info_B">
                L’hépatite B est une infection hépatique potentiellement mortelle causée par le virus de l’hépatite B (VHB). Il s’agit d’un problème majeur de santé publique. Le VHB peut aussi provoquer des infections chroniques et entraîne un risque important de décès par cirrhose ou cancer du foie pour les personnes exposées.
                </div>

                <div class ="title_C">
                    <h4>L'Hépatite C:</h4>
                </div>

                <div class ="info_C">
                L'hépatite C se traduit par une inflammation, plus ou moins détectable, au niveau du foie.  Il existe différentes variétés de VHC : on recense six groupes ou génotypes, numérotés de 1 à 6. Ces groupes sont plus ou moins sensibles aux traitements.
                </div>

</div>       
            <footer class="footer">
                <div class="footer-Azur">
                    Pour parler de sa différence appelez Ligne Azur.org au <br>
                    0 810 20 30 40 <br>(Service 0,06 € /min + prix appel)
                </div>

                <div class="footer-hépatites">
                    Si vous aviez des questions à propos des hépatites n'hésitez pas à appeler Hépatites Info Service au <br>
                    0 800 845 800 <br> (Service et appel gratuits, 7j/7, de 08h00 à 23h00)
                </div>

                <div class="footer-sida">
                    Vous pouvez notamment appeler Sida Info Service.org au <br>
                    0 800 840 800 <br> (Appel confidentiel, anonyme et gratuit) 
                </div>

                <div class="footer-medical">
                    Ou bien appelez un professionnel médical au <br>
                    0 810 630 515 <br>
                </div>

                <div class="footer-copyrigth">
                    Copyrigth © SexInfo.com
                </div>
            </footer>
    </body>

</html>
