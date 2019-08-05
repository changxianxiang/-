<?php
session_start();//开始session必须放在最上面
$conn=new mysqli("localhost","root","root","register");//创建数据库连接
if($conn->connect_error){
    echo "连接失败".$conn->connect_error;
}else{
    //echo "连接成功";
}
//echo "<script>
//window.alert(886);
//</script>";
$name=$_POST['namex'];
unset($_SESSION['afdgashyrhjnb/.;']);
unset($_SESSION['$name']);
unset($_SESSION['sadfasdgo86.,']);
echo "<meta http-equiv=refresh content=\"0;url=index.php\">"
?>