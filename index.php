
<?php
session_start();//开始session必须放在最上面
if(isset($_SESSION['afdgashyrhjnb/.;'])){
    echo "<meta http-equiv=refresh content=\"0;url=loginBack.php\">";
    exit();
}
echo "<body style=\"background-color:lavender\">
 <link href='css2.css'>
 <body background='images/timg.jpg'>
<div class=\"title\">
    <h2 align=\"center\" style='margin: 30px'>欢迎登陆</h2>
</div>
<pre>
<div class=\"forms\" align='center' style='margin: 60px'>
    <form action=\"loginBack.php\" method=\"post\" class=\"excel\" >
            用户名：<input  class=\"in\" type=\"text\" name=\"userName\" style='height: 30px ' autofocus><br>
              密码：<input class=\"in\" type=\"password\" name=\"mainuserPassword\" style='height: 30px '><br>
    <input value=\"提交\" type=\"image\" src=\"images/logo_black.png\" height=\"40\" width=\"48\" alt=\"Submit\">
</form>
</div>
</pre>
<div class=\"a\">
    <a href=\"register.html\">没有账号 点击注册</a>
</div>
</body>";

?>