function new_user() {
    $("#signin").click(function () {
        var password = $("#password").val();
        var email = $("#email").val();

        //user.php ? username = mathys & email=tmp4 & avatar=tmp3 & password=tyo & signin=2 & tmp_pwd=
        $.get("./user.php", { 'username': '', 'password': password, 'email': email, 'avatar': '', 'signin': 1 },
            function (data) {
                alert(data);
                if (data == "1") {
                    location.replace("game/game01/game01.php");
                } else {
                    alert("Tu as fait une erreur ou une erreur interne c'est produite.");
                }
            });
    });
}