<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Är bananer och äpplen frukt?</title>
    <meta name="description" content="Bananer och äpplen smakar gött">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<?php


    $banan_ar_frukt = true;
    $apple_ar_frukt = true;

    if ($apple_ar_frukt==true){
        echo '<img src="bilder/apple.jpg" alt="Äpple" height="40%" width="40%">';
        echo 'äpplen är frukt <br>';
           
    }
    if($banan_ar_frukt == true){
        echo '<img src="bilder/banan.jpg" alt="Banan" height="40%" width="40%">';
        echo 'banan är frukt';
    }

?>
</body>
</html>

