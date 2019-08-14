<?php
            session_start();//开始session必须放在最上面
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Fixed Layout</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
<!-- the fixed layout is not compatible with sidebar-mini -->
<body class="hold-transition skin-blue fixed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Admin</b>LTE</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success">4</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 4 messages</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li><!-- start message -->
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                            </div>
                                            <h4>
                                                Support Team
                                                <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                </ul>
                            </li>
                            <li class="footer"><a href="#">See All Messages</a></li>
                        </ul>
                    </li>
                    <!-- Notifications: style can be found in dropdown.less -->
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning">10</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 10 notifications</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#">View all</a></li>
                        </ul>
                    </li>
                    <!-- Tasks: style can be found in dropdown.less -->
                    <li class="dropdown tasks-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-flag-o"></i>
                            <span class="label label-danger">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 9 tasks</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Design some buttons
                                                <small class="pull-right">20%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">20% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">View all tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                            <span class="hidden-xs">Alexander Pierce</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                <p>
                                    Alexander Pierce - Web Developer
                                    <small>Member since Nov. 2012</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Alexander Pierce</p>
                    <form action='goBack.php' method='post' class='tcdl' id='formid'>
                        <input type='hidden' name='namex' value='$name'>
                        <br />
                        <input type='submit' style="color: #0b58a2" name='submit' value='退出登录' />
                    </form>
                </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                        <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
                    </ul>
                </li>
                <li class="treeview active">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>选项</span>
                        <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href="fenshowphoto.php"><i class="fa fa-circle-o"></i> 分页查看图片</a></li>
                        <li><a href="changePower.php"><i class="fa fa-circle-o"></i> 修改用户权限</a></li>
                        <li><a href="try/b.php"><i class="fa fa-circle-o"></i> 上传图片</a></li>
                    </ul>
                </li>
                <li>

                        <i class="fa fa-th"></i> <span><li><a href="writeArtaicle.php"><i class="fa fa-circle-o"></i> 写文章</a></li>
                <li><a href="showArticals.php"><i class="fa fa-circle-o"></i> 看文章</a></li></span>
                        <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>

                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-pie-chart"></i>
                        <span>Charts</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
                        <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
                        <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
                        <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-laptop"></i>
                        <span>UI Elements</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
                        <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
                        <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
                        <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
                        <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
                        <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-edit"></i> <span>Forms</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
                        <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
                        <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-table"></i> <span>Tables</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                        <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
                    </ul>
                </li>
                <li>
                    <a href="pages/calendar.html">
                        <i class="fa fa-calendar"></i> <span>Calendar</span>
                        <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
                    </a>
                </li>
                <li>
                    <a href="pages/mailbox/mailbox.html">
                        <i class="fa fa-envelope"></i> <span>Mailbox</span>
                        <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-folder"></i> <span>Examples</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
                        <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
                        <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
                        <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
                        <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
                        <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
                        <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
                        <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
                        <li><a href="pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-share"></i> <span>Multilevel</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                        <li class="treeview">
                            <a href="#"><i class="fa fa-circle-o"></i> Level One
                                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                                <li class="treeview">
                                    <a href="#"><i class="fa fa-circle-o"></i> Level Two
                                        <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                    </ul>
                </li>
                <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
                <li class="header">LABELS</li>
                <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
                <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
                <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Fixed Layout
                <small>Blank example to the fixed layout</small>
            </h1>
            <?php
//            session_start();//开始session必须放在最上面
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
                echo "<form action='index.php' method='post' style='color: bisque'class='qdl'>
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

                    $_SESSION['afdgashyrhjnb/;']=2;
                    $_SESSION['afdgashyrhjnb/.;']=$name;
                    $_SESSION['sadfasdgo86.,']=$password;

                    setcookie("$name", "$name");
                }
                elseif($admineResult->num_rows>0){//草鸡管理员登陆
                    $_SESSION['$name']=3;

                    $_SESSION['afdgashyrhjnb/;']=3;
                    $_SESSION['afdgashyrhjnb/.;']=$name;
                    $_SESSION['sadfasdgo86.,']=$password;
                    setcookie("$name", "$name");
                }
                else{//用户登陆
                    $sql = "select * from information where userName='{$name}'";
                    $arr = mysqli_query($link,"select * from information where userName='{$name}'");
                    $row=mysqli_fetch_array($arr,MYSQLI_NUM);//mysql中的值不能直接输出要转化
                    if($name==$row[1]){
                        if($password==$row[5]){
                            $_SESSION['$name']=1;

                            $_SESSION['afdgashyrhjnb/;']=1;
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
                            $_SESSION['afdgashyrhjnb/;']=1;
                        $_SESSION['$name']=1;
                        $_SESSION['afdgashyrhjnb/.;']=$name;
                        $_SESSION['sadfasdgo86.,']=$password;
                    }
                }
            }else if (!empty($_GET["nowPage"])&isset($_SESSION['$name'])){

                $_SESSION['afdgashyrhjnb/;']=1;
                $_SESSION['afdgashyrhjnb/.;']=$name;
                $_SESSION['sadfasdgo86.,']=$password;

            }else{
                echo "<form action='index.php' method='post' style='color: bisque'class='qdl'>
    <input type='hidden' name='namex' value='$name'>
    <br />
    <input type='submit' name='submit' value='请登录啊' />
</form>";
            }
            if(!isset($_SESSION['afdgashyrhjnb/.;'])){
                echo "<meta http-equiv=refresh content=\"0;url=index.php\">";
                exit();
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
                echo "<h1 style='color: #a31515'>权限</h1>";
                echo "</th>";
                while($arr=mysqli_fetch_row($resultOne)){
                    // echo $arr[1];
                    echo "<tr>";

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
                    echo "<span style='color: #9A0000'>$arr[1]</span>";
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
            echo "<!-- jQuery 3 -->
<script src=\"bower_components/jquery/dist/jquery.min.js\"></script>
<!-- Bootstrap 3.3.7 -->
<script src=\"bower_components/bootstrap/dist/js/bootstrap.min.js\"></script>
<!-- Slimscroll -->
<script src=\"bower_components/jquery-slimscroll/jquery.slimscroll.min.js\"></script>
<!-- FastClick -->
<script src=\"bower_components/fastclick/lib/fastclick.js\"></script>
<!-- AdminLTE App -->
<script src=\"dist/js/adminlte.min.js\"></script>
<!-- AdminLTE for demo purposes -->
<script src=\"dist/js/demo.js\"></script>";
            ?>

            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Layout</a></li>
                <li class="active">Fixed</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box">
                <!-- /.box-body -->
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.0
        </div>
        <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
        reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">Recent Activity</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-user bg-yellow"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                                <p>New phone +1(800)555-1234</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                                <p>nora@example.com</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-file-code-o bg-green"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                                <p>Execution time 5 seconds</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Custom Template Design
                                <span class="label label-danger pull-right">70%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Update Resume
                                <span class="label label-success pull-right">95%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Laravel Integration
                                <span class="label label-warning pull-right">50%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Back End Framework
                                <span class="label label-primary pull-right">68%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                    <h3 class="control-sidebar-heading">General Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Report panel usage
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Some information about this general settings option
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Allow mail redirect
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Other sets of options are available
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Expose author name in posts
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Allow the user to show his name in blog posts
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <h3 class="control-sidebar-heading">Chat Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Show me as online
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Turn off notifications
                            <input type="checkbox" class="pull-right">
                        </label>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Delete chat history
                            <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                        </label>
                    </div>
                    <!-- /.form-group -->
                </form>
            </div>
            <!-- /.tab-pane -->
        </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>



