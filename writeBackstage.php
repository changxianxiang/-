
<?php
session_start();//开始session必须放在最上面
$article=$_POST['editor1'];
$classical=$_POST['classical'];
$title=$_POST['title'];
$name=$_SESSION['afdgashyrhjnb/.;'];
$time=date("Y-m-d");
$count=0;
if (!isset($_SESSION['afdgashyrhjnb/;'])) {
    echo "您无权查看";
    echo "<meta http-equiv=refresh content=\"2;url=index.php\">";
    exit();
}
$link = mysqli_connect("localhost", "root", "root");
if (!$link) {
    echo "link failed";
    exit();
}
if (mysqli_select_db($link, "register")) {
} else {
    exit();
}
//echo $article;
//echo $classical;
//echo $title;
//echo $name;
$result = mysqli_query($link, "insert into articals(artical,who,title,classion,time,count) 
values('$article','$name','$title','$classical','$time','$count')");
if ($result) {
    echo "上传成功";
} else {
    echo $link->error;
    var_dump($result);
}
