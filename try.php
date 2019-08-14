<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Title</title>
    <link rel="stylesheet" href="bootstrap-paginator-master/css/bootstrap.css">
</head>
<body>
<table class="table table-border table-hover">
    <thead>
    <tr>
        <th>序号</th>
        <th>姓名</th>
        <th>性别</th>
        <th>年龄</th>
    </tr>
    </thead>
    <tbody>
    </tbody>
</table>
<div class="page">
    <ul class="pagination"></ul>
</div>
<script type="text/template" id="tableTemp">
    <%for(let i = 0; i < item.length; i++){%>
    <tr>
        <td><%=(item[i].page * item[i].pageSize )+ i + 1%></td>
        <td><%=item[i].name%></td>
        <td><%=item[i].gender%></td>
        <td><%=item[i].age%></td>
    </tr>
    <%}%>
</script>
</body>
</html>
<!--使用bootstrap插件必须使用引入jquery,因为bootstrap是基于jquery开发的-->
<script src="jquery-1.10.2.js"></script>
<!--bootstrap插件-->
<script src="bootstrap-paginator-master/lib/bootstrap.js"></script>
<!--分页插件-->
<script src="bootstrap-paginator-master/lib/bootstrap-paginator.js"></script>
<!--模板插件-->
<script src="bootstrap-paginator-master/lib/template-native.js"></script>
<script>
    let currentPage = 1;
    let pageSize = 3;
    function render() {
        $.ajax({
            url: "./setPage.php",
            data: {
                page: currentPage,
                pageSize: pageSize
            },
            dataType: "json",
            success: function (result) {
                // 将数据渲染到页面
                $("tbody").html(template("tableTemp",{item:result}))
                // 调用分页函数.参数:当前所在页, 总页数(用总条数 除以 每页显示多少条,在向上取整), ajax函数
                setPage(5,100, render)
            }
        })
    }
    render()

    /**
     *
     * @param pageCurrent 当前所在页
     * @param pageSum 总页数
     * @param callback 调用ajax
     */
    function setPage(pageCurrent, pageSum, callback) {
        $(".pagination").bootstrapPaginator({
            //设置版本号
            bootstrapMajorVersion: 3,
            // 显示第几页
            currentPage: pageCurrent,
            // 总页数
            totalPages: pageSum,
            //当单击操作按钮的时候, 执行该函数, 调用ajax渲染页面
            onPageClicked: function (event,originalEvent,type,page) {
                // 把当前点击的页码赋值给currentPage, 调用ajax,渲染页面
                currentPage = page
                callback && callback()
            }
        })
    }
</script>
<ul class="pagination">
    <li class="disabled"><a href="#">&laquo;</a></li>
    <li class="active"><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a href="#">&raquo;</a></li>
</ul>