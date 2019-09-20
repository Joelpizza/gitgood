<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Git out of here</title>
            <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>
<body>
<img src="bilder/espresso.jpg">
<?php
try {

    $banan_ar_frukt = false;
    $apple_ar_frukt = false;

    if ($apple_ar_frukt==true){
        
         echo 'äpplen är frukt';
        
    }
    else{
        echo 'äpplen är slavar';
    }
    if($banan_ar_frukt == true){
        echo 'banan är frukt';
    }
    else{
        echo 'banan är bär';
    }
    
}catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
?>
</body>
</html>
<?php
error_log('nu har vi kört denna X antal gånger',3,'error.log');
/*
Git out of here!
Syftet med denna hemsida är att visa om en banan eller äpple är en frukt
(Kan det bli bättre än ovan????)
*/
?>