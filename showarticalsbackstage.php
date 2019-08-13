<?php
session_start();//开始session必须放在最上面
require "head.php";
$id=$_GET['id'];
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
$sqlOne="select * from articals where id='{$id}'";
$resultOne=mysqli_query($link,$sqlOne);
echo "<div class='aaaaa'>";
echo "<table border='1' class='table' align='center' cellpadding='2'>";
echo "<tr>";
echo "<th style='text-align: center'>";
echo "<h1 style='color: #a31515'>作者</h1>";
echo "</th>";
echo "<th>";
echo "<h1 style='color: #a31515'>作者：$arr[2] 时间：$arr[6] 类型：$arr[5] </h1>";echo "</th>";
echo "</tr>";
while($arr=mysqli_fetch_row($resultOne)){
    // echo $arr[1];
    $count=$arr[6]+1;
    mysqli_query($link,"update articals set count ='{$count}'  where id='{$id}'");
    echo "<tr>";
    echo "<td style='text-align: center'>";
    echo "<span style='color: #a31515'>$arr[0]</span>";
    echo "</td>";

    echo "<td>";
    echo "$arr[1]";
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

