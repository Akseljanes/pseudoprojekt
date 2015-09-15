<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    $page = isset($_GET["page"]) && file_exists($_GET["page"].".php") ? $_GET["page"] : "home";
        require $page.".php";
?>
<p>Kellad</p>
</body>
</html>