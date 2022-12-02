function new_user() {
    $("#signin").click(function () {
        var username = $("#username").val();
        var password = $("#password").val();
        var avatar = $("#avatar").val();
        var email = $("#email").val();

        //user.php ? username = mathys & email=tmp4 & avatar=tmp3 & password=tyo & signin=2 & tmp_pwd=
        $.get("./user.php", { 'username': username, 'password': password, 'email': email, 'avatar': avatar, 'signin': 0 },
            function (data) {
                $.get("./check_mail.php", { 'username': username, 'password': data, 'email': email, },
                    function (data) {
                        location.replace("./mail.php?username=" + username + "&email=" + email);
                    });
            });
    });
}