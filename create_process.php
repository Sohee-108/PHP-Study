<?php
file_put_contents('data/'.$_POST['title'], $_POST['description']);
//Redirection
header('Location: /index.php?id='.$_POST['title']);
?>