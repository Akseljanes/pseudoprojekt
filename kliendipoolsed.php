<!doctype html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Kliendipoolsed</title>
</head>
<body>
<button onclick="tereMaailm()">Tere Maailm</button>
<a href="javascript:alertKHK()">Tere Maailm</a>
<a href="http://www.khk.ee" onclick="alert('Jääme siia!');return false;">Jääme siia</a><br>
<img id="KassiPilt" onclick="asendamine()" width="250" height="250" src="http://www.cats.org.uk/uploads/images/pages/photo_latest14.jpg">

<script>
    document.addEventListener("click",function(){
        document.getElementById("KassiPilt").src="http://www.myperfectpetfood.com/assets/img/nav-menu/nav1.jpg";
    });
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