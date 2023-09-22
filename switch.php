<?php

$motor = $_GET ['Honda Metik'];
switch($motor){
    case "Honda metik ";
    echo "saya punya motor honda metik.";
    break;

    case "Yamaha Beat" :
        echo "saya punya motor yamaha beat.";
    break;
    case "Zusuki" :
        echo "saya punya motor zusuki.";
    break;
    default:
    echo "saya belum punya motor";
    break;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method ="get">
        <select name="motor" id ="">
            <option value="Honda metik">Honda Metik</option>
            <option value="Yamaha Beat">Yamaha Beat</option>
            <option value="Zusuki">Zusuki</option>
            <option value="Belum Ada">Belum Ada</option>

        </select>
        <button type ="submit" >Cek Motor</button>
    </form>



</body>
</html>