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