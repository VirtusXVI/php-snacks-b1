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
    // Snack 6
    // Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.
    $students = [
        [
            "name" => "Marco",
            "lastname" => "Verdi",
            "grades" => [1, 2, 9]
        ],
        [
            "name" => "Giovanni",
            "lastname" => "Rossi",
            "grades" => [5, 6, 7]
        ],
        [
            "name" => "Paolo",
            "lastname" => "Gialli",
            "grades" => [1, 3, 5, 6, 8]
        ],
        [
            "name" => "Enzo",
            "lastname" => "Blu",
            "grades" => [1, 3, 4, 7, 9]
        ],
    ];
    ?>
    <?php for($i = 0; $i < count($students); $i++) {?>
    <div>
        <span><?php echo $students[$i]["name"]; ?></span>
        <span><?php echo " " .  $students[$i]["lastname"];  ?></span>
        <span><?php echo " " .  array_sum($students[$i]["grades"]) / count($students[$i]["grades"]);  ?></span>
    </div>
    <?php } ?>
</body>
</html>