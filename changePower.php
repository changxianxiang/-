<?php
session_start();//开始session必须放在最上面
include_once "head.php";
if($_SESSION['afdgashyrhjnb/;']!=3){
    echo "您无权查看";
    echo "<meta http-equiv=refresh content=\"2;url=index.php\">";
    exit();
}
$pageSize=2;//一页显示的条数
$link=mysqli_connect("localhost","root","root");
if(!$link){
    echo "link failed";
    exit();
}
if(mysqli_select_db($link,"register")){
}else{
    exit();
}
if(!empty($_POST['changeWho'])){
    if($_POST['selectStatus']=="管理员"){
        mysqli_query($link,"update information set status = 2 where userName='{$_POST['changeWho']}'");
    }else{
        mysqli_query($link,"update information set status = 1 where userName='{$_POST['changeWho']}'");
    }
}
setcookie("user", '$nowpage', time()+3600);
$sql="select * from information";
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
$sqlOne="select * from information";
$resultOne=mysqli_query($link,$sqlOne);
//echo $resultOne;
echo "<div class='aaaaa'>";
echo "<table border='1' class='table' align='center' cellpadding='2'>";
echo "<tr>";
echo "<th style='text-align: center'>";
echo "<h1 style='color: #a31515'>用户姓名</h1>";
echo "</th>";
echo "<th>";
echo "<h1 style='color: #a31515'>权限</h1>";
echo "</th>";
echo "</tr>";
while($arr=mysqli_fetch_row($resultOne)){
    // echo $arr[1];
    echo "<tr>";
    echo "<td style='text-align: center'>";
    echo "<span style='color: #a31515'>$arr[1]</span>";
    echo "</td>";
    if($arr[6]==2){
        $stat="管理员";
        $statu="普通用户";
    }else{
        $stat ="普通用户";
        $statu="管理员";
    }
    echo "<td>";
    echo "<div class=\"forms\">
    <form action='changePower.php' method=\"post\" class=\"excel\" >
    <input type='hidden' name='whoname' value='$name'>
    <input type='hidden' name='whopwd' value='$password'>
    <input type='hidden' name='changeWho' value='$arr[1]'>
    
  <select name=\"selectStatus\">
        <option>$stat</option>
        <option>$statu</option>
    </select><br>
    <input  class=\"in\" type='submit' value='修改用户权限' name=\"submitimag\" ><br>
</form>
</div>";
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