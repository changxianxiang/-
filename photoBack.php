<?php
session_start();//开始session必须放在最上面
error_reporting(10);//关闭错误报告
if(!isset($_SESSION['$name'])){
    echo "<a href=\"index.html\">请登陆</a>";
    unset($_SESSION["logout"]);
    exit();
}
$who = $_POST['name'];
$wh = $_POST['nam'];
$dbHost = "localhost";
$link = mysqli_connect("localhost", "root", "root");
if (!$link) {
//    echo "link failed";
    exit();
}
if (mysqli_select_db($link, "register")) {
//    echo "xuanzhe成功";
} else {
//    echo "失败";
    exit();
}
//创建图片表
$sql = "CREATE TABLE photo ( 
 id int(10) unsigned NOT NULL auto_increment primary key,  
 who varchar(100) NOT NULL,
 tmp varchar(110) NOT NULL)";
mysqli_query($link, $sql);
mysqli_query($link, "set name utf8");
var_dump($_FILES['file']);
if ((($_FILES["file"]["type"] == "image/gif")
    || ($_FILES["file"]["type"] == "image/jpeg")
    || ($_FILES["file"]["type"] == "image/pjpeg"))) {
    if ($_FILES["file"]["error"] > 0) {
        echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    } else {
        echo "Upload: " . $_FILES["file"]["name"] . "<br />";
        echo "Type: " . $_FILES["file"]["type"] . "<br />";
        echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
        echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
        $_FILES["file"]["name"]=time().".jpg";
        move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
        echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
        $image = "upload/" . $_FILES["file"]["name"];
        $result = mysqli_query($link, "insert into photo(who,tmp) values('$who','$image')");
        if ($result) {
            echo "图片已存储到数据库";
        } else {
            echo $link->error;
            var_dump($result);
        }

    }
} else {
    echo "Invalid file";
}
echo "<div class=\"forms\">
    <form action=\"loginBack.php\" method=\"post\" class=\"excel\" >
    <input type='hidden' name='whoname' value='$who'>
    <input type='hidden' name='whopwd' value='$wh'>
    <input  class=\"in\" type='submit' value='继续上传图片' name=\"submitimag\" ><br>
</form>
</div>";
?>

