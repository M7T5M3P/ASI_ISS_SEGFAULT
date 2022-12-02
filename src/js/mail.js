function check_password() {
    $("#password").click(function () {
        var password = $("#password2").val();
        var email = $("#email").val();
        $.get("./check_email_password.php", { 'password': password, 'email': email },
            function (data) {
                alert(data);
                if (data == "1") {
                    alert("Connected !");
                    location.replace("game/game01?email=" + email);
                } else {
                    alert("Wrong Password !");
                }
            });
    });
}