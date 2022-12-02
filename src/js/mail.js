function new_user() {

    $("#password").click(function () {
        var password = $("#password").val();
        var email = $("#email").val();
        $.get("./check_email_password.php", { 'password': password },
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