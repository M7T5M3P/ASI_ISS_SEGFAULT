function check_password() {
    $("#password").click(function () {
        var password = $("#password2").val();
        var email = $("#email").val();
        $.get("./check_email_password.php", { 'password': password, 'email': email },
            function (data) {
                if (data == "1") {
                    alert("Connected !");
                    location.replace("../game/game01/game01.php?email=" + email);
                } else {
                    alert("Wrong Password !");
                }
            });
    });
}