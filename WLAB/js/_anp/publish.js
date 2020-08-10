function publishanp(){
    try{
        var clrpub = 0;
        var clrcvd19 = 100;
        setInterval(
            function() {
                clrpub = clrpub + 255;

                if( clrpub>255 ){
                    clrpub = 0;
                }

                clrcvd19 = clrcvd19 + 255;
                if( clrcvd19>255 ){
                    clrcvd19 = 0;
                }

                document.getElementById("fntpublica").color = RGBToHex( clrpub, clrpub, clrpub );
                document.getElementById("fntcvd19").color = RGBToHex( clrcvd19, 0, 0 );
            },
        500 );
    }catch( ex ){
        alert( ex );
    }
}

//
//
function covid19fnc(){
    try{
        var urlscript2 = window.location.protocol + "//" + window.location.host + "";
        var urlscript = urlscript2;//document.URL.substr(0,document.URL.lastIndexOf('/')) + "";
        if( urlscript.endsWith("/") ){
            urlscript = urlscript.substring( 0, urlscript.length-1 );
        }else{
            urlscript = urlscript + "/";
        }
        urlscript = urlscript + "?covid19=0";
        window.open( urlscript, '_blank' );
    }catch( ex ){
        alert( "ERROR:\n" + ex );
    }

}

//
//
//

//
//
//
function publicaciones(){
    try{
        //alert();
        var urlscript2 = window.location.protocol + "//" + window.location.host + "";
        var urlscript = urlscript2;//document.URL.substr(0,document.URL.lastIndexOf('/')) + "";
        if( urlscript.endsWith("/") ){
            urlscript = urlscript.substring( 0, urlscript.length-1 );
        }else{
            urlscript = urlscript + "/";
        }
        urlscript = urlscript + "?_anp=0";
        window.open( urlscript, '_blank' );
    }catch( ex ){
        alert( "ERROR:\n" + ex );
    }

}



////////////////////////////////////////////////////////////////////////////////
function RGBToHex(r,g,b){
    var r = r.toString(16);
    var g = g.toString(16);
    var b = b.toString(16);
    if (r.length === 1){ r = "0" + r; }
    if (g.length === 1){ g = "0" + g; }
    if (b.length === 1){ b = "0" + b; }
    return "#" + r + g + b;
};
////////////////////////////////////////////////////////////////////////////////
