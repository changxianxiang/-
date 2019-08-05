<?php
//imagearc("images",100,100,200,200,200,500);
session_start();//开始session必须放在最上面
$conn=new mysqli("localhost","root","root","register");//创建数据库连接
if($conn->connect_error){
    echo "连接失败".$conn->connect_error;
}else{
    //echo "连接成功";
}
$sql="create database if not exists register";//创建一个数据库register
if($conn->query($sql)==true){
  //  echo "create databas successf";
}
//创建数据表
$sql="create table  information (
id int NOT NULL AUTO_INCREMENT primary key ,
userName varchar(20) not null,
userEmail varchar(20) not null,
userIdentical varchar(20) not null,
userSchool varchar(20) not null,
userPassword varchar(20) not null
)";
if($conn->query($sql)==true){
   // echo "create table successful";
}
$name=empty($_POST["userName"])?die("请输入您的用户名"):$_POST["userName"];
$password=empty($_POST["mainuserPassword"])?die("输入您的登陆密码"):$_POST["mainuserPassword"];
$sql = "select * from information where userName='{$name}'";
$arr = mysqli_query($link,"select * from information where userName='{$name}'");
if($arr->num_rows>0){
           //如果该用户已经注册
echo "您已经注册请";
echo " <a href=\"index.php\">登陆</a>";
exit();
}else{//没注册过
    $name=empty($_POST["userName"])?die("请输入您的用户名"):$_POST["userName"];
    $email=empty($_POST["userEmail"])?die("请输入您要绑定的邮箱"):$_POST["userEmail"];
    $identify=empty($_POST["userIdentify"])?die("请您进行身份认证"):$_POST["userIdentify"];
    $school=empty($_POST["userSchool"])?die("选择您的学校"):$_POST["userSchool"];
    $password=empty($_POST["mainuserPassword"])?die("输入您的登陆密码"):$_POST["mainuserPassword"];
    if($_POST["mainuserPassword"]!=$_POST["subuserPassword"]){
        die("请您确认密码");
    }else{
        setcookie("$name", "$name");//cookie
        $_SESSION['$name']=1;
        $sql="insert into information(userName,userEmail,userIdentical,userSchool,userPassword,status)
values ('$name','$email','$identify','$school','$password','1')";//存储该用户信息

        if($conn->query($sql)==true){
            //echo "注册成功";
            ?>
            <form action="index.html" method="get">
<!--                <input type="submit" value="去登陆" name="back"/>-->
            </form>
        <?php  }else{
            echo "注册失败请检查".$conn->error.PHP_EOL;
            exit();
        }
    }
}
echo "<meta http-equiv=refresh content=\"0;url=index.php\">";
?>
