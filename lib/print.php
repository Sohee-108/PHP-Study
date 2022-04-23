<?php
    function print_title(){
        if(isset($_GET['id'])){
            echo htmlspecialchars($_GET['id']);
            }else {
                echo "WELCOME";
            }
    }

    function print_description(){
        if(isset($_GET['id'])){
            echo $_GET['id'];
            echo "<br>";
            echo basename("data/".$_GET['id']); //부모 디렉토리를 감춤
            echo "<br>";
            $basename = basename($_GET['id']);
            echo htmlspecialchars(file_get_contents("./data/".$basename));}
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
                $title = htmlspecialchars($list[$i]);
            //scandir은 .과 ..의 디렉토리도 포함
                if($list[$i] != '.'){ 
                    if($list[$i] != '..'){
                        echo "<li><a href=\"index.php?id=$title\">$title</a></li>\n";
                    }
            }
            $i = $i+1;
        }
    }
?>