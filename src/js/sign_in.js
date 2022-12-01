$(document).ready(function () {
    $("#login").click(function () {
        location.replace("login.php")
    });
    $("#signin").click(function () {
        var username = $("#username").val();
        var password = $("#password").val();

        if (username == "")
            alert("Aucun username !");
        else if (password == "")
            alert("Aucun mot de passe!");
        else {
            $.get("./cree_employer.php", { 'username': username, 'password': password },
                function (data) {
                    if (data == "1") {
                        var date = new Date();
                        date.setTime(date.getTime() + (1 * 24 * 60 * 60 * 1000));
                        expires = "; expires=" + date.toUTCString();
                        document.cookie = "manager=" + username + "" + expires;
                        location.replace("create_team.php");
                    } else {
                        alert("Tu as déja un compte ou une erreur interne c'est produite.");
                    }
                });
        }
    });
});