<?php
session_start();//开始session必须放在最上面
if($_SESSION['afdgashyrhjnb/;']==1){
    echo "您无权查看";
    echo "<meta http-equiv=refresh content=\"2;url=index.php\">";
    exit();
}
include_once "head.php";
$pageSize=6;//一页显示的条数
$link=mysqli_connect("localhost","root","root");
if(!$link){
    echo "link failed";
    exit();
}
if(mysqli_select_db($link,"register")){
}else{
    exit();
}
$sql="select * from photo ";
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
$sqlOne="select * from photo LIMIT $starRow,$pageSize";
$resultOne=mysqli_query($link,$sqlOne);
//echo $resultOne;
echo "<table border='1' class='table' align='center' cellpadding='2'>";
echo "<tr>";
echo "<th>";
echo "name";
echo "</th>";
echo "<th>";
echo "image";
echo "</th>";
echo "</tr>";
while($arr=mysqli_fetch_row($resultOne)){

    // echo $arr[1];
    echo "<tr>";
    echo "<td style='text-align: right'>";
    echo "<span style='color: #a31515'>$arr[1]</span>";
    echo "</td>";
    echo "<td style='text-align: center'>";
    echo "<img src=$arr[2] height='80px' width='100px'>";
    echo "</td>";
    echo "</tr>";
}
echo "<tr>";
echo "<td colspan='2' align='center'>";
echo "分页 ";
for($i=1;$i<=$pages;++$i){
    echo "<a href='fenshowphoto.php?nowPage=$i'>$i   <a>";
}
//echo "<a href='dengLuBack.php?nowPage=3'>1<a>";
echo "</td>";
echo "</tr>";
echo "</table>";