<?php
unlink('data/'.basename($_POST['id'])); //보안처리
header('Location: /index.php');
?>