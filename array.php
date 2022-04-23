<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Array</h1>
    <?php
    $name = array('egoing','Leeze','sangwoo');
    echo $name[0].'<br>';
    echo $name[1].'<br>';
    echo $name[2].'<br>';
    var_dump(count($name)); //숫자를 리턴
    echo '<br>';
    array_push($name,"jaeyoung");
    var_dump($name);
    ?>
</body>
</html>