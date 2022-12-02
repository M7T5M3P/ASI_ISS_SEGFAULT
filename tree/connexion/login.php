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
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $sex_info->get_CSS() ?>" media="screen"/>
</head>
<body>
    <div class="return_btn">
        <a href = '../index.html'>
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
     <path fill="#219EBC" fill-opacity="1" d="M0,192L26.7,197.3C53.3,203,107,213,160,197.3C213.3,181,267,139,320,144C373.3,149,427,203,480,213.3C533.3,224,587,192,640,192C693.3,192,747,224,800,229.3C853.3,235,907,213,960,176C1013.3,139,1067,85,1120,106.7C1173.3,128,1227,224,1280,229.3C1333.3,235,1387,149,1413,106.7L1440,64L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z" style="--darkreader-inline-fill: #007acc;"></path>
                       </svg>
            <div class="login-portal__interface">
                    <div class='login-portal__interface--message'>
                        <h1>Login</h1>
                    </div>
                    <div class='login-portal__interface--input'>
                        <div class="login-portal__interface--input--email">
                            <label for="email-input">
                                <svg class="login-portal__interface--input--email--icon">
                                     <use xlink:href="<?php echo $sex_info->get_ICONS() ?>sprite.svg#icon-envelope"></use>
                                </svg>
                            </label>
                            <input class='login-portal__interface--input--email--input' id='email' type='email' name='email' placeholder='Nickname' required>
                        </div>
                        <div class="login-portal__interface--input--password">
                            <label for="password-input">
                                <svg class="login-portal__interface--input--password--icon">
                                     <use xlink:href="<?php echo $sex_info->get_ICONS() ?>sprite.svg#icon-lock-closed"></use>
                                </svg>
                            </label>
                            <input class='login-portal__interface--input--password--input' id='password' type='password' name='password' placeholder='Password' required>
                        </div>
                        <div class="login-portal__interface--input--submit">
                            <input class='login-portal__interface--input--submit-btn' type='submit' name='login' value='Login'>
                        </div>
                    </div>
                    <div class='login-portal__interface--options'>
                        <a class='login-portal__interface--options--forgotPassword' href='forgotPassword.php'>Forgot Password</a><br>
                        <a class='login-portal__interface--options--createAccount' href='createAccount.php'>Create an Account</a><br>
                    </div>   
                </div>
         </div>
     </div>
</body>
</html>
