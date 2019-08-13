<?php
session_start();//开始session必须放在最上面
require "head.php";
$x=$_GET['id'];
if(!$_SESSION['afdgashyrhjnb/;']){
    echo "您无权查看";
    echo "<meta http-equiv=refresh content=\"2;url=index.php\">";
    exit();
}
$pageSize=10;//一页显示的条数
$link=mysqli_connect("localhost","root","root");
if(!$link){
    echo "link failed";
    exit();
}
if(mysqli_select_db($link,"register")){
}else{
    exit();
}

setcookie("user", '$nowpage', time()+3600);
$sql="select * from articals";
$result=mysqli_query($link,$sql);
$record=mysqli_num_rows($result);//总记录条数
$pages=ceil($record/$pageSize);//总页数
if(empty($_GET["nowPage"])){
    $nowPage=1;//现在的页面
    $_SESSION["adfdfadsfdhykj"]=1;
    $starRow=0;//开
}else{
    $nowPage=(int)$_GET["nowPage"];
    if($nowPage>$pages||$nowPage<1){
        $nowPage= $_SESSION["adfdfadsfdhykj"];
    }else{
        $_SESSION["adfdfadsfdhykj"]=$nowPage;
    }
    $starRow=($nowPage-1)*$pageSize;//开始行号
}
//构建分页的sql语句
$sqlOne="select * from articals";
$resultOne=mysqli_query($link,$sqlOne);
//echo $resultOne;
echo "<div class='aaaaa'>";
echo "<table border='1' class='table' align='center' cellpadding='2'>";
echo "<tr>";
echo "<th style='text-align: center'>";
echo "<h1 style='color: #a31515'>编号</h1>";
echo "</th>";
echo "<th>";
echo "<h1 style='color: #a31515'>文章</h1>";
echo "</th>";
echo "</tr>";
while($arr=mysqli_fetch_row($resultOne)){
    // echo $arr[1];
    echo "<tr>";
    echo "<td style='text-align: center'>";
    echo "<span style='color: #a31515'>$arr[0]</span>";
    echo "</td>";

    echo "<td>";
    echo "<a href='showarticalsbackstage.php?id=$arr[0]'>$arr[3]<a>";
    echo "</td>";
    echo "</tr>";
}
echo "<tr>";
echo "<td colspan='2' align='center'>";

//echo "<a href='dengLuBack.php?nowPage=3'>1<a>";
echo "</td>";
echo "</tr>";
echo "</table>";
echo "</div>";