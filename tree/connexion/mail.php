<?php
    include "../../get_path.php";
    $sex_info = new parse_ini();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sex Info</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $sex_info->get_CSS() ?>" media="screen" />
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
    <script src='<?php echo $sex_info->get_JS() ?>mail.js'></script>
</head>

<body>
    <div class="return_btn">
        <a href='/index.php'>
            <svg class=return_btn__icon>
                <use xlink:href="<?php echo $sex_info->get_ICONS() ?>/sprite.svg#icon-chevron-left"></use>
            </svg>
        </a>
    </div>
    <div class="login">
        <div class="login-portal">
            <div class="login-portal__header">
                <span>Sex Info</span>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#219EBC" fill-opacity="1"
                    d="M0,192L26.7,197.3C53.3,203,107,213,160,197.3C213.3,181,267,139,320,144C373.3,149,427,203,480,213.3C533.3,224,587,192,640,192C693.3,192,747,224,800,229.3C853.3,235,907,213,960,176C1013.3,139,1067,85,1120,106.7C1173.3,128,1227,224,1280,229.3C1333.3,235,1387,149,1413,106.7L1440,64L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z"
                    style="--darkreader-inline-fill: #007acc;"></path>
            </svg>

            <div class="login-portal__interface">
                <div class='login-portal__interface--message'>
                    <h1>Login</h1>
                </div>
                <form onsubmit="event.preventDefault(); check_password(); return false;">
                    <div class='login-portal__interface--input'>
                        <div class="login-portal__interface--input--email">
                            <label for="email-input">
                                <svg class="login-portal__interface--input--email--icon">
                                    <use xlink:href="<?php echo $sex_info->get_ICONS() ?>sprite.svg#icon-envelope">
                                    </use>
                                </svg>
                            </label>
                            <input class='login-portal__interface--input--email--input' id='password2' type='password'
                                name='password' placeholder='Secret Password' required>
                        </div>
                    </div>
                    <input type="hidden" id="email" value=<?php echo $_GET["email"]?> />
                    <div class="login-portal__interface--input--submit">
                        <input class='login-portal__interface--input--submit-btn' type='submit' name='signin'
                            value='Se connecter' id='password'>
                    </div>
            </div>
        </div>
        </form>
    </div>
    </div>
</body>

</html>