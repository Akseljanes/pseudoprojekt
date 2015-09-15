<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    if(isset($_GET['page']) && file_exists($_GET['page'].".php")){
        require $_GET['page'].".php";
    };
?>
<p>Kellad</p>
</body>
</html>