<?php 
    session_start();
    if(!isset($_SESSION['login'])) 
        header('Location: ../login.php');
?>
<!DOCTYPE html>
<html xmlns:margin="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="public/components/MyStyle.css">
    <link rel="stylesheet" type="text/css" href="public/components/bootstrap/dist/css/bootstrap.min.css">
    <script src="js/tinymce/tinymce.min.js"></script>
    <script type="text/javascript" src="public/components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="public/components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script>
        tinymce.init({
            selector: "textarea", theme: "modern", width: 800, height: 300,
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
                "table contextmenu directionality emoticons paste textcolor responsivefilemanager code"
            ],
            toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
            toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
            image_advtab: true,
            relative_urls: false,
            remove_script_host : false,
            external_filemanager_path: "js/file/filemanager/",
            filemanager_title: "Responsive Filemanager",
            external_plugins: {"filemanager": "../file/filemanager/plugin.min.js"}
        });
    </script>
</head>
<body>
<?php 
    include '../bar.php';
?>
<div class="center" >
    <input id="image_link" name="link" type="text" value="">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Upload avatar image
    </button>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <iframe width="100%" height="450px" frameborder="0"
                            src="js/file/filemanager/dialog.php?type=1&amp;field_id=image_link&amp;relative_url=2"></iframe>
                </div>
            </div>
        </div>
    </div>
    <h4>Title</h4>
    <input type="text" name="title" class="title">
    <h4>Body</h4>
    <textarea name="body">Your content here</textarea>
    <button type="button" onclick="JSONTest()">Upload</button>


    <div id="resultDivContainer"></div>
    <script type="text/javascript">
        JSONTest = function () {
            var data = {
                image: $('#image_link').val(),
                title: $('.title').val(),
                body: tinymce.activeEditor.getContent()
            };

            var resultDiv = $("#resultDivContainer");
            //console.log(JSON.stringify(data));
            $.ajax({
                url: "http://103.18.7.212:32784/news",
                type: "POST",
                data: JSON.stringify(data),
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                headers: {
                    'authcode': '<?php echo $_SESSION['login'];?>'
                },
                success: function (result) {
                    window.location.reload(true);
                },
                error: function(result) {
                    alert("Kiem tra lai thong tin nhap");

                }
            });
        };

    </script>
</div>
</body>
</html>