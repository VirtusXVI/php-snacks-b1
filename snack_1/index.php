<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //  Snack 1
        // Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
        // Olimpia Milano - Cantù | 55-60
        $games = [
            ["homeTeam" => "Olimpia Milano",
            "guestTeam" => "Cantu",
            "score" => "55-60"],
            ["homeTeam" => "Olimpia Milano1",
            "guestTeam" => "Cantu1",
            "score" => "31-12"],
            ["homeTeam" => "Olimpia Milano2",
            "guestTeam" => "Cantu2",
            "score" => "10-5"],
            ["homeTeam" => "Olimpia Milano3",
            "guestTeam" => "Cantu3",
            "score" => "30-26"]
        ];
    ?>
    <ul>
        <?php for($i = 0;$i < count($games);$i++) {?>
        <li><?php echo $games[$i]["homeTeam"] ?> - <?php echo $games[$i]["guestTeam"]?> | <?php echo $games[$i]["score"] ?></li>
        <?php } ?>
    </ul>
</body>
</html>