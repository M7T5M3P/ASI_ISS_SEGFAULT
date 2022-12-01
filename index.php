<!DOCTYPE.html>
<html>
    <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <title>SexInfo</title>

    <body>
        <header>
            <h1>SexInfo</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="register.php">Register</a></li>
                    <li><a href="#jeu">Jeu</a></li>
                    <button type="button" class="btn btn-primary" id="button_connect">Créer une session</button>
                    <button type="button" class="btn btn-success" id="button_connect2">Rejoindre une session</button>
                </ul>
            </nav>
        </header>


        <footer>
            
        </footer>
        
    </body>
    <script type="text/javascript">
        $(document).ready(function(){

            $("#button_connect").click(function(){
                console.log("button créer");
            });

            $("#button_connect2").click(function(){
                console.log("button rejoindre");
            });

        });
</script>

</html>
