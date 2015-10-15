<!doctype html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Kliendipoolsed</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>
<body>
<button onclick="tereMaailm()">Tere Maailm</button>
<a href="javascript:alertKHK()">Tere Maailm</a>
<a href="http://www.khk.ee" onclick="alert('Jääme siia!');return false;">Jääme siia</a><br>
<img id="KassiPilt" onclick="asendamine()" width="250" height="250" src="http://www.cats.org.uk/uploads/images/pages/photo_latest14.jpg">
<button value="red">Red</button>
<button value="blue">Blue</button>
<button value="green">Green</button>
<button id="klick">Luba parem klõps</button>
<button id="delete">Kaota pilt / Too tagasi</button>
<script>
    function asendamine(){
        $("#KassiPilt").attr("src","http://www.myperfectpetfood.com/assets/img/nav-menu/nav1.jpg");
    }
    function tereMaailm(){
        alert('Tere, Maailm!');
    }
    function alertKHK(){
        alert('Tere, Maailm!');
        window.location="http://www.khk.ee";
    }
    $("button").click(function(){
        $("body").css("background-color",$(this).val());
    })
    var klick=false;
    $("#klick").bind("click",function() {
        return klick = true;
    });
    $(document).ready(function(){
        $(document).on("contextmenu",function(){
            return klick;
        });
    })
    $("#delete").click(function(){
        $("img").toggle();
    });
</script>
</body>
</html>