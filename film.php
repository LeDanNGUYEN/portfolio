<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Liste de films</h2>

    <?php
    $user = "root";
    $pass="";
    $pdo = new PDO('mysql:host=localhost;dbname=portfolio', $user, $pass);

    echo "Hello World";

    $req = "SELECT * FROM film order by film_ID";
    $res = $pdo->query($req);
    $data = $res->fetch(PDO::FETCH_ASSOC);

    foreach($data as $line){
        echo $line;
    }


    ?>

    
</body>
</html>