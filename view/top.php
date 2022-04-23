<!-- require하면 좀더 명시적이지만 중복적으로 호출이 됨. 
    require_once를 사용하면 한번 사용 후 호출하지 않기때문에 중복호출을 방지-->
<?php 
require_once('lib/print.php');
?> 

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>
        <?php
        print_title();
        ?>
    </title>
</head>
<body>
    <h1><a href="index.php">WEB</a></h1>
    <?php
    print_list();
    ?>
    </ol>