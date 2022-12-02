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
    <script src='<?php echo $sex_info->get_JS() ?>sign_in.js'></script>
</head>

<body>
    <div class="return_btn">
        <a href='/index.php'>
            <svg class=return_btn__icon>
                <use xlink:href="<?php echo $sex_info->get_ICONS() ?>sprite.svg#icon-chevron-left"></use>
            </svg>
        </a>
    </div>
    <div class="login">
        <div class="login-portal">
            <div class="login-portal__header">
                <span>Sex Info</span>
            </div>
     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#219EBC" fill-opacity="1" d="M0,128L26.7,138.7C53.3,149,107,171,160,165.3C213.3,160,267,128,320,117.3C373.3,107,427,117,480,149.3C533.3,181,587,235,640,256C693.3,277,747,267,800,224C853.3,181,907,107,960,90.7C1013.3,75,1067,117,1120,154.7C1173.3,192,1227,224,1280,213.3C1333.3,203,1387,149,1413,122.7L1440,96L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z" style="--darkreader-inline-fill: #007acc;"></path>
</svg>
            <form onsubmit="event.preventDefault(); new_user(); return false;">
                <div class="login-portal__interface">
                    <div class=' login-portal__interface--message'>
                        <h1>Sign In</h1>
                    </div>
                    <div class='login-portal__interface--input'>
                        <div class="login-portal__interface--input--avatar">
                            <label for="avatar">
                                <svg class="login-portal__interface--input--avatar--icon">
                                    <use xlink:href="<?php echo $sex_info->get_ICONS() ?>sprite.svg#icon-camera"></use>
                                </svg>
                            </label>
                            <input class='login-portal__interface--input--avatar--input' id='avatar' type='text'
                                name='avatar' placeholder='Avatar' required>
                        </div>
                        <div class="login-portal__interface--input--email">
                            <label for="emailt">
                                <svg class="login-portal__interface--input--email--icon">
                                     <use xlink:href="<?php echo $sex_info->get_ICONS() ?>sprite.svg#icon-envelope"></use>
                                </svg>
                            </label>
                            <input class='login-portal__interface--input--email--input' id='email' type='email'
                                name='email' placeholder='Email' required>
                        </div>
                        <div class="login-portal__interface--input--username">
                            <label for="username">
                                <svg class="login-portal__interface--input--username--icon">
                                     <use xlink:href="<?php echo $sex_info->get_ICONS() ?>sprite.svg#icon-user"></use>
                                </svg>
                            </label>
                            <input class='login-portal__interface--input--username--input' id='username' type='text'
                                name='username' placeholder='Username' required>
                        </div>
                        <div class="login-portal__interface--input--password">
                            <label for="password-input">
                                <svg class="login-portal__interface--input--password--icon">
                                     <use xlink:href="<?php echo $sex_info->get_ICONS() ?>sprite.svg#icon-lock-closed"></use>
                                </svg>
                            </label>
                            <input class='login-portal__interface--input--password--input' id='password' type='password'
                                name='password' placeholder='Password' required>
                        </div>
                        <div class="login-portal__interface--input--submit">
                            <input class='login-portal__interface--input--submit-btn' type='submit' name='signin'
                                value='Sign In' id='signin'>
                        </div>
                    </div>
                    <div class='login-portal__interface--options'>
                        <a class='login-portal__interface--options--forgotPassword' href='forgotPassword.php'>Forgot
                            Password</a><br>
                        <a class='login-portal__interface--options--createAccount' href='sign_in.php'>Create an
                            Account</a><br>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
