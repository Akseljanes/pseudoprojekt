<!doctype html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Kliendipoolsed</title>
</head>
<body>
<button onclick="tereMaailm()">Tere Maailm</button>
<a href="javascript:alertKHK()">Tere Maailm</a>
<a href="http://www.khk.ee" onclick="alert('Jääme siia!');return false;">Jääme siia</a>
<script>
    function tereMaailm(){
        alert('Tere, Maailm!');
    }
    function alertKHK(){
        alert('Tere, Maailm!');
        window.location="http://www.khk.ee";
        }
</script>
</body>
</html>