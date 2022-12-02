<?php
    include "../../../get_path.php";
    $sex_info = new parse_ini();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game01</title>
    <link rel="stylesheet" href=<?php echo $sex_info->get_CSS() . "game01.css"; ?>>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
</head>
<body>
    <div class="card" style="width: 22%;margin-left: 39%; margin-top: 10%">
        <div class="card-body">
            <h5 class="card-title">Quiz</h5>
            <p class="card-text"><span id="question"></span></p>
        </div>
        <button type="button" id="R1" class="button_r btn btn-primary m-1">R1</button>
        <button type="button" id="R2" class="button_r btn btn-primary m-1">R2</button>
        <button type="button" id="R3" class="button_r btn btn-primary m-1">R3</button>
        <button type="button" id="check" class="btn btn-success m-1 visually-hidden">Valider</button>
    </div>
</body>
<script type="text/javascript">
    $(document).ready(function(){
        function shuffle(array) {
            let currentIndex = array.length,  randomIndex;

            while (currentIndex != 0) {
                randomIndex = Math.floor(Math.random() * currentIndex);
                currentIndex--;
                [array[currentIndex], array[randomIndex]] = [array[randomIndex], array[currentIndex]];
            }
            return array;
        }

        var R1 = null;
        var R2 = null;
        var R3 = null;
        var status = 0;
        var response = 0;

        $("#R1").click(function(){
            response = R1;
            if (!status) {
                $("#check").removeClass("visually-hidden");
                status = 1;
                $(".button_r").removeClass("btn-outline-primary");
                $(".button_r").addClass("btn-primary");
                $("#R1").removeClass("btn-primary");
                $("#R1").addClass("btn-outline-primary");
                console.log("status : " + status + " response : " + response);
            } else {
                $("#check").addClass("visually-hidden");
                $("#R1").removeClass("btn-outline-primary");
                $("#R1").addClass("btn-primary");
                status = 0;
                response = null;
                console.log("status : " + status + " response : " + response);
            }
        });

        $("#R2").click(function(){
            response = R2;
            if (!status) {
                $("#check").removeClass("visually-hidden");
                status = 1;
                $(".button_r").removeClass("btn-outline-primary");
                $(".button_r").addClass("btn-primary");
                $("#R2").removeClass("btn-primary");
                $("#R2").addClass("btn-outline-primary");
                console.log("status : " + status + " response : " + response);
            } else {
                $("#check").addClass("visually-hidden");
                $("#R2").removeClass("btn-outline-primary");
                $("#R2").addClass("btn-primary");
                status = 0;
                response = null;
                console.log("status : " + status + " response : " + response);
            }
        });

        $("#R3").click(function(){
            response = R3;
            if (!status) {
                $("#check").removeClass("visually-hidden");
                status = 1;
                $(".button_r").removeClass("btn-outline-primary");
                $(".button_r").addClass("btn-primary");
                $("#R3").removeClass("btn-primary");
                $("#R3").addClass("btn-outline-primary");
                console.log("status : " + status + " response : " + response);
            } else {
                $("#check").addClass("visually-hidden");
                $("#R3").removeClass("btn-outline-primary");
                $("#R3").addClass("btn-primary");
                status = 0;
                response = null;
                console.log("status : " + status + " response : " + response);
            }
        });

        $.ajax({
            url: "./check.php",
            success: function(data) {
                var tab = JSON.parse (data);
                $("#question").text(tab['question']);
                var array = [tab['reponse01'], tab['reponse02'], tab['reponse03']];
                shuffle(array);
                $("#R1").text(array[0]);
                $("#R2").text(array[1]);
                $("#R3").text(array[2]);
                R1 = array[0];
                R2 = array[1];
                R3 = array[2];
                $("#Validate").addClass('disabled');
            }
        });

        $("#check").click(function(){
            $.ajax({
                url: "./check.php",
                success: function(data) {
                    var tab = JSON.parse (data);
                    $("#question").text(tab['question']);
                    var array = [tab['reponse01'], tab['reponse02'], tab['reponse03']];
                    shuffle(array);
                    $("#R1").text(array[0]);
                    $("#R2").text(array[1]);
                    $("#R3").text(array[2]);
                    R1 = array[0];
                    R2 = array[1];
                    R3 = array[2];
                    $(".button_r").removeClass("btn-outline-primary");
                    $(".button_r").addClass("btn-primary");
                    $("#check").addClass("visually-hidden");
                    status = 0;
                    response = 0;
                }
            });
        });
    });
</script>
</html>