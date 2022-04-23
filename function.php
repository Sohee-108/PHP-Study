<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>function</h1>
    <?php
    $str = "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    Ab sed repellendus nesciunt praesentium laudantium ea! 
    Dicta blanditiis expedita doloremque. 
    Modi sed eius doloremque officia? 
    Omnis ipsa quas deserunt possimus dolor!";
    echo $str;
    ?>

    <h2>strlen()</h2> <!-- 문자열 길이 반환 -->
    <?php
    echo strlen($str);
    ?>

    <h2>nl2br</h2> <!-- 자동줄바꿈 -->
    <?php
    echo nl2br($str);
    ?>
</body>
</html>
