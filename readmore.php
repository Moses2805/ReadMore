<?php

$text = "Bu metn cox boyukdur ve men metnin yarisinin gorunmesini istemirem";

// "Read more" buttonuna klik edilib edilmemesini gosteren kod hissesi;
if(!isset($_POST["button_readMore"])){
    $number = 30;   
}else{
    $number = strlen($text);
}

// -------------------------------------------------------------------

// Verilmis texti parcalamaq ucun istifade edilen kod hissesi
function split($text, $number, $seperator = "..."){
    if(strlen($text) > $number){
        return $text = substr($text, 0, $number).$seperator;
    }
    return $text;
}

// -------------------------------------------------------------------

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        
        <h2><?php echo split($text, $number) ?></h2>

        <!-- Verilmis metni kesmek ucun olcu parametrinin($number) olcusune gore buttonun gorunub gorunmemesini yoxlayan kod hissesi -->
        <form action="" method="POST">
            <?php
                if(!(strlen($text) <= $number)){
            ?>
                <input type="submit" name="button_readMore" value="Read More">
            <?php
                }
            ?>
        <!-- ------------------------------------------------------------------------------------------------------------------------ -->

        </form>

</body>
</html>