<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Är bananer och äpplen frukt?</title>
    <meta name="description" content="bananer">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<?php


    $banan_ar_frukt = true;
    $apple_ar_frukt = true;

    if ($apple_ar_frukt==true){
        echo '<img src="bilder/apple.jpg" alt="Äpple">';
        echo 'äpplen är frukt <br>';
           
    }
    if($banan_ar_frukt == true){
        echo '<img src="bilder/banan.jpg" alt="Banan">';
        echo 'banan är frukt';
    }



    


    //Kommer det ske en conflict?



}catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}


?>
</body>
</html>