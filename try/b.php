<?php
session_start();//开始session必须放在最上面
include_once "head.php";
$name= $_SESSION['afdgashyrhjnb/.;'];
$password=$_SESSION['sadfasdgo86.,'];
echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Title</title>
<style>
    .box{
        position:fixed;
        right: 300px;
    }
</style>
</head>
<body>
<link rel=\"stylesheet\" href=\"dist/dropzone.css\" />
<script src=\"dist/min/dropzone.min.js\"></script>
<script src=\"dist/dropzone-amd-module.js\"></script>
<script src=\"dist/min/dropzone-amd-module.min.js\"></script>
<link rel=\"stylesheet\" href=\"dist/basic.css\">
<link rel=\"stylesheet\" href=\"dist/min/basic.min.css\">
<link rel=\"stylesheet\" href=\"dist/min/dropzone.min.css\">
<script src=\"dropzone.js\"></script>
<script>
    var myDropzone = new Dropzone(\"#dropz\", {
        url: \"photoBack.php\", // 文件提交地址
        method: \"post\",  // 也可用put
        paramName: \"file\", // 默认为file
        maxFiles: 1,// 一次性上传的文件数量上限
        maxFilesize: 10, // 文件大小，单位：MB
        acceptedFiles: \".jpg,.gif,.png,.jpeg\", // 上传的类型
        addRemoveLinks: true,
        parallelUploads: 6,// 一次上传的文件数量
        //previewsContainer:\"#preview\", // 上传图片的预览窗口
        dictDefaultMessage: '拖动文件至此或者点击上传',
        dictMaxFilesExceeded: \"您最多只能上传6个文件！\",
        dictResponseError: '文件上传失败!',
        dictInvalidFileType: \"文件类型只能是*.jpg,*.gif,*.png,*.jpeg。\",
        dictFallbackMessage: \"浏览器不受支持\",
        dictFileTooBig: \"文件过大上传文件最大支持，最大10mb.\",
        dictRemoveLinks: \"删除文件\",
        dictCancelUpload: \"取消\",
        init: function () {
            this.on(\"addedfile\", function (file) {
                // 上传文件时触发的事件
            });
            this.on(\"success\", function (file, data) {
                alert(\"success\");
            });
            this.on(\"error\", function (file, data) {
                // 上传失败触发的事件
            });
            this.on(\"removedfile\", function (file) {
                // 删除文件时触发的方法
            });
        }
    });
</script>
<form action='photoBack.php' method='post' enctype='multipart/form-data' class='dropzone' type='hidden'>
    <input type='hidden' name='name' value='$name'>
    <input type='hidden' name='nam' value='$password'>
   
    
</form>
</body>
</html>";
?>



