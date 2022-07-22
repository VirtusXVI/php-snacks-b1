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
    // Snack 5
    // Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
    ?>
    <div style="border:1px solid grey">
        <?php for($i = 0 ; $i < count($db['teachers']); $i++){ ?>
        <p>
            <?php echo $db['teachers'][$i]['name']; 
            echo " " . $db['teachers'][$i]['lastname']; 
            ?>
        </p>
        <?php } ?>
    </div>
    <div style="border:1px solid green">
        <?php for($i = 0 ; $i < count($db['pm']); $i++){ ?>
        <p>
            <?php echo $db['pm'][$i]['name']; 
            echo " " . $db['pm'][$i]['lastname']; 
            ?>
        </p>
        <?php } ?>
    </div>
</body>
</html>