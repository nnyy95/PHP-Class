<?php

$s = 1;

for ($i=0;$i<=10;$i++){
    if($i >4) break;
    $s = $s + $i;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php echo $s; ?>
</body>
</html>