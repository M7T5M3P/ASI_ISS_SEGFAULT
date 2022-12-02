<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - tmp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
</head>
<body style="background-color: rgb(30, 59, 106);">
    <div class="card" style="width: 22%;margin-left: 39%; margin-top: 10%">
        <div class="card-body">
            <h5 class="card-title">Ajout d'entrée</h5>
            <input type="text" class="form-control" id="question" placeholder="Question" aria-label="Question" aria-describedby="basic-addon1">
        </div>
        <input type="text" id="R1" class="form-control mt-1" placeholder="Reponse vraie" aria-label="Reponse vraie" aria-describedby="basic-addon1">
        <input type="text" id="R2" class="form-control mt-1" placeholder="Reponse 2" aria-label="Reponse 2" aria-describedby="basic-addon1">
        <input type="text" id="R3" class="form-control mt-1" placeholder="Reponse 3" aria-label="Reponse 3" aria-describedby="basic-addon1">
        <input type="text" id="xp" class="form-control mt-1" placeholder="Xp" aria-label="Xp" aria-describedby="basic-addon1">
        <button type="button" id="check" class="btn btn-success m-1">Valider</button>
    </div>
</body>
<script>
    $(document).ready(function(){
        $("#check").click(function(){
            var Q1 = document.getElementById("question").value;
            var R1 = document.getElementById("R1").value;
            var R2 = document.getElementById("R2").value;
            var R3 = document.getElementById("R3").value;
            var XP = document.getElementById("xp").value;
            console.log(Q1 + R1 + R2 + R3 + XP);

            // $.post('./push.php', {question:Q1, rep1:R1, rep2:R2, rep1:R3, xp:XP}, function());
            $.ajax({
                type: "post",
                url:  "push.php",
                data: {
                    'question' : Q1,
                    'rep1' : R1,
                    'rep2' : R2,
                    'rep3' : R3,
                    'xp' : XP,
                }
            });

            document.getElementById("question").value = "";
            document.getElementById("R1").value = "";
            document.getElementById("R2").value = "";
            document.getElementById("R3").value = "";
            document.getElementById("xp").value = "";
        });
    });
</script>
</html>