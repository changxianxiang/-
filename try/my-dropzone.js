// //disable autodiscover
//
// Dropzone.autoDiscover = false;
//
// var myDropzone = new Dropzone("#dropzone", {
//     url: "./upload.php",
//     method: "POST",
//     paramName: "file",
//     autoProcessQueue : false,
//     acceptedFiles: "image,.jpg,.png,.bmp",
//     maxFiles: 4,
//     maxFilesize: 8, // MB
//     uploadMultiple: true,
//     parallelUploads: 100, // use it with uploadMultiple
//     createImageThumbnails: true,
//     thumbnailWidth: 120,
//     thumbnailHeight: 120,
//     addRemoveLinks: true,
//     timeout: 180000,
//     dictRemoveFileConfirmation: "Are you Sure?", // ask before removing file
//     // Language Strings
//     dictFileTooBig: "File is to big ({{filesize}}mb). Max allowed file size is {{maxFilesize}}mb",
//     dictInvalidFileType: "Invalid File Type",
//     dictCancelUpload: "Cancel",
//     dictRemoveFile: "Remove",
//     dictMaxFilesExceeded: "Only {{maxFiles}} files are allowed",
//     dictDefaultMessage: "Drop files here to upload",
// });
//
// myDropzone.on("addedfile", function(file) {
//     //console.log(file);
// });
//
// myDropzone.on("removedfile", function(file) {
//     // console.log(file);
// });
//
// // Add mmore data to send along with the file as POST data. (optional)
// myDropzone.on("sending", function(file, xhr, formData) {
//     formData.append("dropzone", "1"); // $_POST["dropzone"]
// });
//
// myDropzone.on("error", function(file, response) {
//     console.log(response);
// });
//
// // on success
// myDropzone.on("successmultiple", function(file, response) {
//     // get response from successful ajax request
//     console.log(response);
//     // submit the form after images upload
//     // (if u want yo submit rest of the inputs in the form)
//     document.getElementById("dropzone-form").submit();
// });
//
//
// /**
//  *  Add existing images to the dropzone
//  *  @var images
//  *
//  */
//  /*
// var images = [
// 	{name:"image_1.jpg", url: "example/image1.jpg", size: "12345"},
// 	{name:"image_2.jpg", url: "example/image2.jpg", size: "12345"},
// 	{name:"image_2.jpg", url: "example/image2.jpg", size: "12345"},
// ]
//
// for(let i = 0; i < images.length; i++) {
//
//     let img = images[i];
//     //console.log(img.url);
//
//     // Create the mock file:
//     var mockFile = {name: img.name, size: img.size, url: img.url};
//     // Call the default addedfile event handler
//     myDropzone.emit("addedfile", mockFile);
//     // And optionally show the thumbnail of the file:
//     myDropzone.emit("thumbnail", mockFile, img.url);
//     // Make sure that there is no progress bar, etc...
//     myDropzone.emit("complete", mockFile);
//     // If you use the maxFiles option, make sure you adjust it to the
//     // correct amount:
//     var existingFileCount = 1; // The number of files already uploaded
//     myDropzone.options.maxFiles = myDropzone.options.maxFiles - existingFileCount;
//
// }
// */
// // button trigger for processingQueue
// var submitDropzone = document.getElementById("submit-dropzone");
// submitDropzone.addEventListener("click", function(e) {
//     // Make sure that the form isn't actually being sent.
//     e.preventDefault();
//     e.stopPropagation();
//
//     if (myDropzone.files != "") {
//         // console.log(myDropzone.files);
//         myDropzone.processQueue();
//     } else {
// 	// if no file submit the form
//         document.getElementById("dropzone-form").submit();
//     }
//
// });

var myDropzone = new Dropzone("#dropz", {
    url: "photoBack.php", // 文件提交地址
    method: "post",  // 也可用put
    paramName: "file", // 默认为file
    maxFiles: 6,// 一次性上传的文件数量上限
    maxFilesize: 10, // 文件大小，单位：MB
    acceptedFiles: ".jpg,.gif,.png,.jpeg", // 上传的类型
    addRemoveLinks: true,
    parallelUploads: 1,// 一次上传的文件数量
    //previewsContainer:"#preview", // 上传图片的预览窗口
    dictDefaultMessage: '拖动文件至此或者点击上传',
    dictMaxFilesExceeded: "您最多只能上传6个文件！",
    dictResponseError: '文件上传失败!',
    dictInvalidFileType: "文件类型只能是*.jpg,*.gif,*.png,*.jpeg。",
    dictFallbackMessage: "浏览器不受支持",
    dictFileTooBig: "文件过大上传文件最大支持，最大10mb.",
    dictRemoveLinks: "删除文件",
    dictCancelUpload: "取消",
    init: function () {
        this.on("addedfile", function (file) {
            // 上传文件时触发的事件
        });
        this.on("success", function (file, data) {
            // 上传成功触发的事件
        });
        this.on("error", function (file, data) {
            // 上传失败触发的事件
        });
        this.on("removedfile", function (file) {
            // 删除文件时触发的方法
        });
    }
});
