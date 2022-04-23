<?php
    function print_title(){
        if(isset($_GET['id'])){
            echo $_GET['id'];
            }else {
                echo "WELCOME";
            }
    }

    function print_description(){
        if(isset($_GET['id'])){
            echo file_get_contents("./data/".$_GET['id']);}
            else{
                echo "Hello, PHP";
            }
    }

    function print_list(){
    //data 디렉토리에 있는 파일의 목록을 가져온 후, li와 a 태그를 이용해서 글목록 만들기
    $list = scandir('data'); //디렉토리를 스캔
    $i = 0;
    ?>
    <ol>
        <?php 
            while($i<count($list)){
            //scandir은 .과 ..의 디렉토리도 포함
                if($list[$i] != '.'){ 
                    if($list[$i] != '..'){
                        ?>
                        <li><a href="index.php?id=<?=$list[$i]?>"><?=$list[$i]?></a></li>
                        <?php
                    }
            }
            $i = $i+1;
        }
    }
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
    
    <a href="create.php">Create</a>
    <?php 
    if(isset($_GET['id'])){
    ?> 
    <a href="update.php?id=<?=$_GET['id']?>">Update</a> 
    <?php
    }?>
    <form action="update_process.php" method="post">
        <input type="hidden" name="old_title" value="<?=$_GET['id']?>">
        <p><input type="text" name="title" placeholder="Title" value="<?php print_title() ?>"></p>
        <p><textarea name="description" placeholder="Description"><?php print_description() ?></textarea></p>
        <p><input type="submit"></p>
    </form>
</body>

</html>