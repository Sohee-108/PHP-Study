<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Function</h1>
    <h2>Basic</h2>
    <?php
        function basic(){
            print("Nulla ad nisi sit est quis excepteur tempor. <br>");
            print("Tempor aliquip voluptate ex ut nisi cillum voluptate esse nulla consequat aliqua minim sunt nisi. <br>");
        }

        basic();
    ?>
    <h2>parameter &amp; argument</h2>
    <?php
    function add($left, $right){
        print($left+$right);
        print("<br>");
    }

    add(2,4);
    add(4,6);
    ?>
    <h2>return</h2>
    <?php 
    function add2($left, $right){
        return $left+$right; //리턴을 하는 순간 함수 종료
    }

    print(add2(2,4));
    file_put_contents('result.txt',add2(2,4)); //파일 생성
    // email('egoing@egoing.net',add2(2,4));
    // upload('egoing.net',add2(2,4));
    ?>
</body>
</html>