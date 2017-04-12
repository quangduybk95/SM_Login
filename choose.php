<?php 
    session_start();
    if(!isset($_SESSION['login'])) 
        header('Location: login.php');
?>
<!DOCTYPE html>
<html xmlns:margin="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="UploadNew/public/components/MyStyle.css">
    <link rel="stylesheet" type="text/css" href="UploadNew/public/components/bootstrap/dist/css/bootstrap.min.css">
    <script src="UploadNew/js/tinymce/tinymce.min.js"></script>
    <script type="text/javascript" src="UploadNew/public/components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="UploadNew/public/components/bootstrap/dist/js/bootstrap.min.js"></script>
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
    include 'bar.php';
?>
<div class="container text-align">
<a class="btn btn-primary" href="UploadDoc/index.php">Upload doc</a></button><br><br><br>
<a class="btn btn-primary" href="UploadNew/index.php">Upload new</a></button><br>
</div>
</body>
</html>