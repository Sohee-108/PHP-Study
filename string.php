<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>String & String Operator</h1>
    <?php 
echo "Hello world";
?>
    <br>
    <?php
echo "Hello 'w'orld"; 
echo 'Hello "w"orld';
?>
    <br>
    <?php
echo 'Hello \"w\"orld';
?>

    <h2>concatenation operator</h2>
    <?php 
    echo "Hello "."world"; // . 좌항과 우항을 결합하는 연산자
    ?>
    <h2>String length function</h2>
    <?php 
    echo strlen("Hello world"); // strlen - 문자의 길이 계산
    ?>
</body>

</html>