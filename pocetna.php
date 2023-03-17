<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <?php {
            $page=$_GET['page'];
            if($page=="pocetna" || !isset($page)){
            require_once("pocetna.html");
            }
            else if($page=="kontakt"){
            require_once("kontakt.php");
        } ?> 
    </body>
</html>