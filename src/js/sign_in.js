function new_user() {
    $("#signin").click(function () {
        alert("hi");
        var username = $("#username").val();
        var password = $("#password").val();
        var avatar = $("#avatar").val();
        var email = $("#email").val();

        //user.php ? username = mathys & email=tmp4 & avatar=tmp3 & password=tyo & signin=2 & tmp_pwd=
        $.get("./user.php", { 'username': username, 'password': password, 'email': email, 'avatar': avatar, 'signin': 0 },
            function (data) {
                alert(data);
                if (data == "1") {
                    location.replace("game/game01/game01.php");
                } else {
                    alert("Tu as déja un compte ou une erreur interne c'est produite.");
                }
            });
    });
}