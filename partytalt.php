<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>är bananer och äpplen frukt?</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<?php
try {

    $banan_ar_frukt = true;
    $apple_ar_frukt = true;

    if ($apple_ar_frukt==true){
        echo 'äpplen är frukt <br>';
           
    }
    if($banan_ar_frukt == true){
        echo 'banan är frukt';
    }

    
}catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}

?>
</body>
</html>

iuasbgdciuabsciuabsc