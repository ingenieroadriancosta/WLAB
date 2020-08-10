<?php ?>
<html><head><meta charset="utf-8">
<title>VIEW PIC</title>
</head>
<body onload="onlf()">
    <img id="imgid"></img>
    <script>
        function onlf(){
            setInterval( viewpic, 20 );
        }
        var incnt = 0;
        function viewpic(){
            document.getElementById('imgid').src = 
                "http://adriancosta.000webhostapp.com/pruebas/loadimg.php";
            incnt++;
        }
    </script>
</body>
</html>
