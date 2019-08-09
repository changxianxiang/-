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
    url: "photoBack.php", // �ļ��ύ��ַ
    method: "post",  // Ҳ����put
    paramName: "file", // Ĭ��Ϊfile
    maxFiles: 6,// һ�����ϴ����ļ���������
    maxFilesize: 10, // �ļ���С����λ��MB
    acceptedFiles: ".jpg,.gif,.png,.jpeg", // �ϴ�������
    addRemoveLinks: true,
    parallelUploads: 1,// һ���ϴ����ļ�����
    //previewsContainer:"#preview", // �ϴ�ͼƬ��Ԥ������
    dictDefaultMessage: '�϶��ļ����˻��ߵ���ϴ�',
    dictMaxFilesExceeded: "�����ֻ���ϴ�6���ļ���",
    dictResponseError: '�ļ��ϴ�ʧ��!',
    dictInvalidFileType: "�ļ�����ֻ����*.jpg,*.gif,*.png,*.jpeg��",
    dictFallbackMessage: "���������֧��",
    dictFileTooBig: "�ļ������ϴ��ļ����֧�֣����10mb.",
    dictRemoveLinks: "ɾ���ļ�",
    dictCancelUpload: "ȡ��",
    init: function () {
        this.on("addedfile", function (file) {
            // �ϴ��ļ�ʱ�������¼�
        });
        this.on("success", function (file, data) {
            // �ϴ��ɹ��������¼�
        });
        this.on("error", function (file, data) {
            // �ϴ�ʧ�ܴ������¼�
        });
        this.on("removedfile", function (file) {
            // ɾ���ļ�ʱ�����ķ���
        });
    }
});
