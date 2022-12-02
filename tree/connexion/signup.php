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
    <link rel="stylesheet" type="text/css" href="<?php echo $sex_info->get_CSS() ?>" media="screen" />
    <script src='./src/js/sign_in.js'></script>
</head>

<body>
    <div class="return_btn">
        <a href='/index.html'>
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
            <form method='post'>
                <div class="login-portal__interface">
                    <div class='login-portal__interface--message'>
                        <h1>Signup</h1>
                    </div>
                    <div class='login-portal__interface--input'>
                        <div class="login-portal__interface--input--avatar">
                            <label for="email-input">
                                <svg class="login-portal__interface--input--avatar--icon">
                                    // <use xlink:href="../img/sprint.svg#icon-envelope-o"></use>
                                </svg>
                            </label>
                            <input class='login-portal__interface--input--avatar--input' id='avatar' type='text'
                                name='avatar' placeholder='Avatar' required>
                        </div>
                        <div class="login-portal__interface--input--email">
                            <label for="email-input">
                                <svg class="login-portal__interface--input--email--icon">
                                    // <use xlink:href="../img/sprint.svg#icon-envelope-o"></use>
                                </svg>
                            </label>
                            <input class='login-portal__interface--input--email--input' id='email' type='email'
                                name='email' placeholder='Email' required>
                        </div>
                        <div class="login-portal__interface--input--username">
                            <label for="email-input">
                                <svg class="login-portal__interface--input--username--icon">
                                    // <use xlink:href="../img/sprint.svg#icon-envelope-o"></use>
                                </svg>
                            </label>
                            <input class='login-portal__interface--input--username--input' id='username' type='text'
                                name='username' placeholder='Username' required>
                        </div>
                        <div class="login-portal__interface--input--password">
                            <label for="password-input">
                                <svg class="login-portal__interface--input--password--icon">
                                    // <use xlink:href="../img/sprint.svg#icon-lock1"></use>
                                </svg>
                            </label>
                            <input class='login-portal__interface--input--password--input' id='password' type='password'
                                name='password' placeholder='Password' required>
                        </div>
                        <div class="login-portal__interface--input--submit">
                            <input class='login-portal__interface--input--submit-btn' type='submit' name='login'
                                value='Login'>
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