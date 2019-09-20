<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Git out of here</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<?php
try {

    $banan_ar_frukt = false;
    $apple_ar_frukt = false;

    if ($apple_ar_frukt==true){
        echo 'äpplen är frukt';   
    }
    if($banan_ar_frukt == true){
        echo 'banan är frukt';
    }

    
}catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
/*
Git out of here!
Syftet med denna hemsida är att visa om en banan eller äpple är en frukt
(Kan det bli bättre än ovan????)
*/
?>
</body>
</html>
