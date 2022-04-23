<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>While</h1>
    <?php
    echo '1<br>';
    echo '2<br>';
    echo '3<br>';
    ?>
    <br>
    <?php
    $i = 1;
    while($i<4){
        echo $i.'<br>';
        $i = $i+1;
    }

    ?>
</body>
</html>