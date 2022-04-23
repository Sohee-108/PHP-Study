<?php
//post로 데이터를 전송하면 $_GET이 아닌 $_POST 로 받아야함
file_put_contents('data/'.$_POST['title'],$_POST['description']);
?>