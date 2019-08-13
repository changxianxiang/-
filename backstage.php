<?php
//imagearc("images",100,100,200,200,200,500);
session_start();//开始session必须放在最上面
$link=mysqli_connect("localhost","root","root");
if(!$link){
    echo "link failed";
    exit();
}
if(mysqli_select_db($link,"register")){
}else{
    exit();
}
$name=empty($_POST["userName"])?die("请输入您的用户名"):$_POST["userName"];
$userResult=mysqli_query($link,"select * from information where userName='{$name}' and status='1'");
$rootResult=mysqli_query($link,"select * from information where userName='{$name}' and status='2'");
$admineResult=mysqli_query($link,"select * from admine where userName='{$name}'");
if (preg_match("/\s/", $name))
{
    echo "不能含有空格";
    exit();
}
if(!preg_match("/^[A-Za-z0-9]+$/",$name)){
    echo "用户名不能包含中文和特殊字符！";
    exit();
}
// if (preg_match("/^[\x{4e00}-\x{9fa5}]+$/u",$name)) {
//print("该字符串全部是中文");
//}
if(($userResult->num_rows>0)||($admineResult->num_rows>0)||$rootResult->num_rows>0){//如果该用户已经注册
    echo "您已经注册,正在转跳，请点击确定";
    echo "<meta http-equiv=refresh content=\"2;url=index.php\">";

exit();
}else{//没注册过

    $name=empty($_POST["userName"])?die("请输入您的用户名"):$_POST["userName"];

    $email=empty($_POST["userEmail"])?die("请输入您要绑定的邮箱"):$_POST["userEmail"];

    $identify=empty($_POST["userIdentify"])?die("请您进行身份认证"):$_POST["userIdentify"];

    $school=empty($_POST["userSchool"])?die("选择您的学校"):$_POST["userSchool"];

    $password=empty($_POST["mainuserPassword"])?die("输入您的登陆密码"):$_POST["mainuserPassword"];
    if (preg_match("/\s/", $email)||preg_match("/\s/", $identify)||preg_match("/\s/", $school)||preg_match("/\s/", $password))
    {
        echo "不能含有空格";
        exit();
    }
    if(strlen($password)<=6){
        echo "密码必须大于6位";
    }
    if(preg_match("/^[0-9]+$/",$password)){
        echo "密码不能是纯数字！";
        exit();
    }
    if($_POST["mainuserPassword"]!=$_POST["subuserPassword"]){
        //die("请您确认密码");
        echo "您两次输入的密码不一样";
    }else{
        setcookie("$name", "$name");//cookie
        $_SESSION['$name']=1;
        $sql="insert into information(userName,userEmail,userIdentical,userSchool,userPassword,status)
values ('$name','$email','$identify','$school','$password','1')";//存储该用户信息



        if(mysqli_query($link,"insert into information(userName,userEmail,userIdentical,userSchool,userPassword,status)
values ('$name','$email','$identify','$school','$password','1')")==true){
       echo "注册成功";
       echo "<meta http-equiv=refresh content=\"0;url=index.php\">"
            ?>
        <?php  }else{
            die("注册失败请检查");
            echo "注册失败请检查".$conn->error.PHP_EOL;
            exit();
        }
    }
}
?>
