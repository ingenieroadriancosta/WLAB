<html>
    <head>
        <title> W L A B </title>
        <style>
            iframe{
                position    : absolute;
                left        : 0px;
                top         : 60px;
                width       : 100%;
                height      : 100%;
                border      : 3px solid green;
            }
        </style>
    </head>
    <body onload="onload_fun(event)">
        <!--
        <button onclick="hidef()"> H I D E !!!<br> HIDE <br>.</button>
        
        <iframe src="WLAB_LAB.php" id="ifrm_plots" style="border:none;"></iframe>
        
        
        <br>
        -->
        <iframe src="WLAB_LAB.php" id="ifrm_plots2" style="border:none;width: auto;height: auto;"></iframe>
        
        
        <script>
            //document.getElementById("ifrm_plots").style.display = "none";
            var b12 = 0|0;
            function hidef(){
                try{
                    if( b12===0 ){
                        b12 = 1;
                        document.getElementById("ifrm_plots").style.top = "60px";
                        document.getElementById("ifrm_plots2").style.top = "-9000px";
                    }else{
                        b12 = 0;
                        document.getElementById("ifrm_plots").style.top = "-9000px";
                        document.getElementById("ifrm_plots2").style.top = "60px";
                    }
                }catch( e ){
                    alert( e );
                }
                //document.getElementById("ifrm_plots2").style.display = "none";
            }
            
            
            
            function onload_fun(event){
                try{
                    //document.getElementById("ifrm_plots").style.top = "-9000px";
                }catch( e ){
                    alert( e );
                }
            }
            
        </script>
        
    </body>
</html>
