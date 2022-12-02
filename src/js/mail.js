function check_password() {
    $("#password").click(function () {
        alert("hi");
        var password = $("#password2").val();
        var email = $("#email").val();
        alert(password + email);
        $.get("./check_email_password.php", { 'password': password, 'email': email },
            function (data) {
                if (data == "1") {
                    alert("Connected !");
                    location.replace("game/game01?email=" + email);
                } else {
                    alert("Wrong Password !");
                }
            });
    });
}