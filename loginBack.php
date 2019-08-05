<?php
session_start();//开始session必须放在最上面
echo "<script src=\"../bower_components/jquery/dist/jquery.min.js\"></script>
<script src=\"../bower_components/bootstrap/dist/js/bootstrap.min.js\"></script>
  <script type=\"text/javascript\" nonce=\"75c5c8b6c36a4693a5d78593e6b\" src=\"//local.adguard.org?ts=1563927408270&amp;type=content-script&amp;dmn=localhost:63342&amp;css=1&amp;js=1&amp;gcss=1&amp;rel=1&amp;rji=1\"></script>
<script type=\"text/javascript\" nonce=\"75c5c8b6c36a4693a5d78593e6b\" src=\"//local.adguard.org?ts=1563927408270&amp;name=AdGuard%20Popup%20Blocker&amp;name=AdGuard%20Assistant&amp;name=AdGuard%20Extra&amp;type=user-script\"></script><link rel=\"stylesheet\" href=\"../../bower_components/bootstrap/dist/css/bootstrap.min.css\">
  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"../../bower_components/font-awesome/css/font-awesome.min.css\">
  <!-- Ionicons -->
  <link rel=\"stylesheet\" href=\"../../bower_components/Ionicons/css/ionicons.min.css\">
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"../../dist/css/AdminLTE.min.css\">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel=\"stylesheet\" href=\"../../dist/css/skins/_all-skins.min.css\">
  <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
  <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">
<script src=\"../../bower_components/jquery/dist/jquery.min.js\"></script>
<!-- Bootstrap 3.3.7 -->
<script src=\"../../bower_components/bootstrap/dist/js/bootstrap.min.js\"></script>
<!-- FastClick -->
<script src=\"../../bower_components/fastclick/lib/fastclick.js\"></script>
<!-- AdminLTE App -->
<script src=\"../../dist/js/adminlte.min.js\"></script>
<!-- AdminLTE for demo purposes -->
<script src=\"../../dist/js/demo.js\"></script>";
echo "<body style=\"background-color:lavender\">";
echo "<link href='css.css'>";
$dbHost="localhost";
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
$stat=0;
$statu=0;
$GLOBALS['z']=11;
mysqli_query($link,"set name utf8");
$sql="select * from information ";
$result=mysqli_query($link,"select * from information");
$xx="xxx";
$_GET['$xx']=1;
if(!isset($_SESSION['$name'])&empty($_POST["userName"])){
    echo "<form action='index.html' method='post' style='color: bisque'class='qdl'>
    <input type='hidden' name='namex' value='$name'>
    <br />
    <input type='submit' name='submit' value='请登录' />
</form>";
    exit();
}

if(empty($_GET["nowPage"])){

      if(!isset($_SESSION['afdgashyrhjnb/.;'])&!isset($_SESSION['sadfasdgo86.,'])){
          $name=empty($_POST["userName"])?die("请输入您的用户名"):$_POST["userName"];
          $password=empty($_POST["mainuserPassword"])?die("输入您的登陆密码"):$_POST["mainuserPassword"];
      }else{
          $name= $_SESSION['afdgashyrhjnb/.;'];
          $password=$_SESSION['sadfasdgo86.,'];
      }
$userSQL="select * from information where userName='{$name}' and status=1";//普通用户
    $rootSQL="select * from information where userName='{$name}' and status=2";//管理员
      $admineSQL="select * from admine where userName='{$name}'";//草鸡管理员
    $userResult=mysqli_query($link,"select * from information where userName='{$name}' and status='1'");
    $rootResult=mysqli_query($link,"select * from information where userName='{$name}' and status='2'");
    $admineResult=mysqli_query($link,"select * from admine where userName='{$name}'");
    if($rootResult->num_rows>0){//管理员登陆
        $_SESSION['$name']=2;
        //var_dump($rootResult);
        //var_dump($admineResult);
        echo "<form action='goBack.php' method='post' class='tcdl'>
    <input type='hidden' name='namex' value='$name'>
    <br />
    <input type='submit' name='submit' value='退出登录' />
</form>";
        $_SESSION['afdgashyrhjnb/.;']=$name;
        $_SESSION['sadfasdgo86.,']=$password;
        setcookie("$name", "$name");
    }
    elseif($admineResult->num_rows>0){//草鸡管理员登陆
        $_SESSION['$name']=3;
        echo "<form action='goBack.php' method='post' class='tcdl'>
    <input type='hidden' name='namex' value='$name'>
    <br />
    <input type='submit' name='submit' value='退出登录' />
</form>";
        $_SESSION['afdgashyrhjnb/.;']=$name;
        $_SESSION['sadfasdgo86.,']=$password;
        setcookie("$name", "$name");
    }
    else{//用户登陆
        echo "adfasdf";
        $sql = "select * from information where userName='{$name}'";
        $arr = mysqli_query($link,"select * from information where userName='{$name}'");
        $row=mysqli_fetch_array($arr,MYSQLI_NUM);//mysql中的值不能直接输出要转化
        if($name==$row[1]){
            if($password==$row[5]){
                $_SESSION['$name']=1;
                echo "<form action='goBack.php' method='post' class='tcdl'>
    <input type='hidden' name='namex' value='$name'>
    <br />
    <input type='submit' name='submit' value='退出登录' />
</form>";
                $_SESSION['afdgashyrhjnb/.;']=$name;
                $_SESSION['sadfasdgo86.,']=$password;

                setcookie("$name", "$name");
            }else{
                echo "密码输入错误";
                exit();
            }
        }else if($arr->num_rows<=0){
            echo "您还未注册";
            echo "<form action='register.html' method='post'>
    <input type='hidden' name='namex' value='$name' class='qzc'>
    <br />
    <input type='submit' name='submit' value='去注册' />
</form>";            exit();
        }else if(isset($_COOKIE['$name'])&!isset($_SESSION['$name'])){
            echo "<form action='goBack.php' method='post' class='tcdl'>
    <input type='hidden' name='namex' value='$name'>
    <br />
    <input type='submit' name='submit' value='退出登录' />
</form>";
            $_SESSION['afdgashyrhjnb/.;']=$name;
            $_SESSION['sadfasdgo86.,']=$password;
        }
    }
}else if (!empty($_GET["nowPage"])&isset($_SESSION['$name'])){
    echo "<form action='goBack.php' method='post' class='tcdl'>
    <input type='hidden' name='namex' value='$name'>
    <br />
    <input type='submit' name='submit' value='退出登录' />
</form>";
    $_SESSION['afdgashyrhjnb/.;']=$name;
    $_SESSION['sadfasdgo86.,']=$password;

}else{
    echo "<form action='index.html' method='post' style='color: bisque'class='qdl'>
    <input type='hidden' name='namex' value='$name'>
    <br />
    <input type='submit' name='submit' value='请登录' />
</form>";
}
if(isset($_SESSION['$name'])& $_SESSION['$name']==2){//管理员
    setcookie("user", '$nowpage', time()+3600);
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
        echo "<td>";
        echo $arr[1];
        echo "</td>";
        echo "<td>";
        echo "<img src=$arr[2]>";
        echo "</td>";
        echo "</tr>";
    }
    echo "<tr>";
    echo "<td colspan='2' align='center'>";
    echo "分页 ";
    for($i=1;$i<=$pages;++$i){
        echo "<a href='loginBack.php?nowPage=$i'>$i   <a>";
    }
//echo "<a href='dengLuBack.php?nowPage=3'>1<a>";
    echo "</td>";
    echo "</tr>";
    echo "</table>";
}elseif (isset($_SESSION['$name'])& $_SESSION['$name']==3){ //草鸡管理员
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

    echo "<table border='1' class='table' align='center' cellpadding='2'>";
    echo "<tr>";
    echo "<th>";
    echo "name";
    echo "</th>";
    echo "<th>";
    echo "权限";
    echo "</th>";
    echo "</tr>";
    while($arr=mysqli_fetch_row($resultOne)){
        // echo $arr[1];
        echo "<tr>";
        echo "<td>";
        echo $arr[1];
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
    <form action=\"loginBack.php\" method=\"post\" class=\"excel\" >
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
}
else if(isset($_SESSION['$name'])& $_SESSION['$name']==1){//用户
    echo "<form action='photoBack.php' method='post' enctype='multipart/form-data' class='sctp'>
    <label for='file'>Filename:</label>
    <input type='hidden' name='name' value='$name'>
    <input type='hidden' name='nam' value='$password'>
    <input type='file' name='file' id='file' />
    <br />
    <input type='submit' name='submit' value='Submit' />
</form>";
    $sql="select * from photo where who='{$name}'";
    $result=mysqli_query($link,$sql);
    $record=mysqli_num_rows($result);//总记录条数
    echo "<table border='1' class='table' align='center' cellpadding='2'>";
    echo "<tr>";
    echo "<th>";
    echo "name";
    echo "</th>";
    echo "<th>";
    echo "image";
    echo "</th>";
    echo "</tr>";
    while($arr=mysqli_fetch_row($result)){
        echo "<tr>";
        echo "<td>";
        echo $arr[1];
        echo "</td>";
        echo "<td>";
        echo "<img src=$arr[2]>";
        echo "</td>";
        echo "</tr>";
    }
    echo "<tr>";
    echo "</tr>";
    echo "</table>";
}
echo "</body>";
?>