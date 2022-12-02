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
<body style="background-color: Plum;">
    <h1 class="position-absolute top-0 end-0 m-3"><u>Score</u> <span id="score" class="badge bg-secondary ">200</span></h1>
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
    <svg xmlns="http://www.w3.org/2000/svg" style="position:absolute; bottom:0;" viewBox="0 0 1440 320"><path fill="#e7008a" fill-opacity="0.64" d="M0,64L12,90.7C24,117,48,171,72,192C96,213,120,203,144,197.3C168,192,192,192,216,186.7C240,181,264,171,288,176C312,181,336,203,360,208C384,213,408,203,432,170.7C456,139,480,85,504,69.3C528,53,552,75,576,96C600,117,624,139,648,170.7C672,203,696,245,720,229.3C744,213,768,139,792,106.7C816,75,840,85,864,90.7C888,96,912,96,936,85.3C960,75,984,53,1008,42.7C1032,32,1056,32,1080,80C1104,128,1128,224,1152,250.7C1176,277,1200,235,1224,208C1248,181,1272,171,1296,176C1320,181,1344,203,1368,186.7C1392,171,1416,117,1428,90.7L1440,64L1440,320L1428,320C1416,320,1392,320,1368,320C1344,320,1320,320,1296,320C1272,320,1248,320,1224,320C1200,320,1176,320,1152,320C1128,320,1104,320,1080,320C1056,320,1032,320,1008,320C984,320,960,320,936,320C912,320,888,320,864,320C840,320,816,320,792,320C768,320,744,320,720,320C696,320,672,320,648,320C624,320,600,320,576,320C552,320,528,320,504,320C480,320,456,320,432,320C408,320,384,320,360,320C336,320,312,320,288,320C264,320,240,320,216,320C192,320,168,320,144,320C120,320,96,320,72,320C48,320,24,320,12,320L0,320Z"></path></svg>
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

        var Q1 = null;
        var R1 = null;
        var R2 = null;
        var R3 = null;
        var status = 0;
        var response = 0;
        var score = 0;

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
                Q1 = tab['question'];
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

        $.ajax({
            url: "./get_score.php",
            success: function(data) {
                $("#score").text(data);
                score = data;
            }
        });

        $("#check").click(function(){

            $.ajax({
                url: "./check.php",
                success: function(data) {
                    var tab = JSON.parse (data);
                    $("#question").text(tab['question']);
                    Q1 = tab['question'];
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


            $.ajax({
                type: "post",
                url:  "verif.php",
                data: {
                    'question' : Q1,
                    'reponse' : response,
                    'score' : score,
                }
            });



            $.ajax({
                url: "./get_score.php",
                success: function(data) {
                    $("#score").text(data);
                    score = data;
                }
            });
        });
    });
</script>
</html>