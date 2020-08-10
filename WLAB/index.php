<?php
/// https://www.idrsolutions.com/online-word-to-html-converter
/// https://opendata.ecdc.europa.eu/covid19/casedistribution/json/
//
//
//
//
// include( dirname(__FILE__, 1)."/radio/index.php" );exit();
//
//
//
//
// include( dirname(__FILE__, 1)."/pruebas/antrys.php" );exit();
//
// include( dirname(__FILE__, 1)."/_anp/viruslet.php" );exit();
//
//
//
if( isset($_GET["prbs"]) ){
    include( dirname(__FILE__, 1)."/Includes.php" );
    include( dirname(__FILE__, 1)."/pruebas/pruebas.php" );
    exit();
}
//

//
//
if( isset($_GET["narnol"]) ){
    $pval = htmlspecialchars( $_GET['narnol'] );
    if(strcmp($pval, "12345")==0 ){
        include( "cntndprvt.html" );exit();
    }
    header("Location: https://adriancosta.000webhostapp.com/erno.php"); 
}
//

//




function delallfilesT($dir){
    $cdir = scandir( $dir );
    foreach ($cdir as $key => $value){
        if( !in_array($value,array(".","..")) ){
            unlink( $dir.DIRECTORY_SEPARATOR.$value );
        }
    }
}

$filefolder = "files/oth_files/";



if( isset($_GET["_main_pblc_page"]) ){
    $pval = htmlspecialchars( $_GET['_main_pblc_page'] );
    if( !empty($pval) ){
        $handlec2 = fopen( $filefolder."_MAIN_PUBLIC.txt", "w" );
        fwrite($handlec2, $pval );
        fclose( $handlec2 );
        exit( "_main_pblc_page = ".$pval."" );
    }
    exit( "no estar vacio!!!" );
}





if( isset($_GET["qweasdzxc"]) ){
    $p = "authfiles/".htmlspecialchars( $_GET['qweasdzxc'] ).".txt";
    if( !file_exists ( $p ) ){
        header("Location: erno.a");
        exit( $p );
    }
    delallfilesT( "authfiles" );
    // unlink( $p );
    $filename = "js/vars.js";
    $handle = fopen( $filename, "r" );
    $contents = fread($handle, filesize($filename));
    fclose($handle);
    exit("$contents");
}
//
//
//
//
define( 'WP_USE_THEMES', true );define( 'frommain', true );
function getrootmain2( $level ){
    $dname = dirname(__FILE__, $level);
    return ($dname."");
}
$rootm = getrootmain2(1);
include( $rootm."/Includes.php" );
//
//
//
//
//
//
//
//
$arrchar = "01A23456789ABCDEFGHIJKLMNOPQRSTUVW0XYZabcdefghijklmnopqrstuvwxyz";
$arrcharT = "01A23456789ABCDEFGHIJKLMNOPQRSTUVW0XYZabcdefghijklmnopqrstuvwxyz";
//
//
//

// include( "QEWLAB.html" );exit();



//include( "WLAB.php" );exit();

//
//

$content = "";



if( isset($_GET["ips"]) ){
    $clspst = htmlspecialchars( $_GET['ips'] );
    if(strcmp($clspst, "clear")==0 ){
        $handlec2 = fopen($filefolder."_IP_S.txt", "w");
        fwrite($handlec2, "0, " );
        fclose( $handlec2 );
    }
    $handlec = fopen($filefolder."_IP_S.txt", "r");
    $cont_ips = fread( $handlec, filesize( $filefolder."_IP_S.txt" ) );
    fclose( $handlec );
    
    $chars = explode(", ", $cont_ips);
    
    $cont_ips = str_replace( ", ", "<br>", $cont_ips );
    
    
    


    $hourMin = date('H:i');
    $datjs =  date("d");
    exit( 
            "<html>".
            "<body onload='onlfnc()'>".
            "<br>".
            "<p>$hourMin( $datjs )</p>".
            "<br>".
            "<br>".
            "<p style='font-size:50px;'>".
            "<br>Cant: ".count($chars)."<br><br>".
            "".$cont_ips.
            "</p>".
            
            
            
            
            
            //
            "<br>"."<br>"."<br>"."<br>"."<br>"."<br>"."<br>"."<br>"."<br>"."<br>".
            "<button onclick='clearfnc()' style='width:200px; height:100px;'> CLEAR </button>".
            "<br>"."<br>"."<br>"."<br>"."<br>"."<br>"."<br>"."<br>"."<br>"."<br>".
            "<script>".
            
            
            "var urlscript2 = window.location.protocol + '//' + window.location.host + '';".
                "var urlscript = urlscript2;".
            "function clearfnc(){".
                "if( confirm('Limpiar contador?') ){".
                    "location.replace( urlscript+\"/?ips=clear\" );".
                "}".
            "}".
            
            "function onlfnc(){".
                "try{".
                //"alert( 'onlfnc' );".
            
            
        "finterv = 0;".
        "var elements = document.querySelectorAll( '*' );".
        "for( var i=0; i<elements.length; i++ ){".
            "var str = elements[i].src + '';".
            "if( str.includes('powered-by-') ){".
                "elements[i].hidden = 'true';".
            "}".
        "}".

                "var urlscript2 = window.location.protocol + '//' + window.location.host + '';".
                "var urlscript = urlscript2;".
                "if( urlscript.endsWith(\"/\") ){".
                        "urlscript = urlscript.substring( 0, urlscript.length-1 );".
                "}else{".
                        "urlscript = urlscript + \"\";".
                "}".
                
            "var vstr = (window.location+\"\");".
                "if( vstr.includes(\"clear\") ){".
                    "location.replace( urlscript+\"/?ips\" );".
                "}".
            
            "}catch( ex ){alert(ex);}".
                "}".
                
            "</script>".
            //
            "</body>".
            "</html>"
            
            );
}










if( isset($_GET["getallinfo"]) ){
    echo "";
    $clspst = htmlspecialchars( $_GET['getallinfo'] );
    
    if( !empty($clspst) ){
        if( strcmp( $clspst, "25091981")==0 ){
            
            
            
            $handlec2 = fopen( $filefolder."_NCNT.txt", "w");
            fwrite($handlec2,  "1\0" );
            fclose( $handlec2 );
            
            $handlec2 = fopen($filefolder."_NCNT_COVID.txt", "w");
            fwrite($handlec2,  "1\0" );
            fclose( $handlec2 );
            
            $handlec2 = fopen($filefolder."_NCNT_MAIN.txt", "w");
            fwrite($handlec2,  "1\0" );
            fclose( $handlec2 );
            
            
            
            
        }
    }
    
    
    $handlec = fopen($filefolder."_NCNT_COVID.txt", "r");
    $contents = fread( $handlec, filesize( $filefolder."_NCNT_COVID.txt" ) );
    fclose( $handlec );
    
    
$handlec = fopen($filefolder."_NCNT_MAIN.txt", "r");
$contents2 = fread( $handlec, filesize( $filefolder."_NCNT_MAIN.txt" ) );
fclose( $handlec );


$handlec = fopen($filefolder."_NCNT.txt", "r");
$contents3 = fread( $handlec, filesize( $filefolder."_NCNT.txt" ) );
fclose( $handlec );

$datjs =  date("d");




$handlec = fopen($filefolder."_NCNT_MAIN_LAST.txt", "r");
$contents2_last = fread( $handlec, filesize( $filefolder."_NCNT_MAIN_LAST.txt" ) );
fclose( $handlec );
$val_last = (intval($contents2) - intval($contents2_last));
$LAct = "<center>".
            "<table width=\"100%\" border=\"1\" style=\"float:center;font-size: 60px;\">".
            "<tbody>".
            
            
            "<tr>".
            "<td><p style='text-align:center;'>TYPE($datjs)</p>"."</td>"."<td><p style='text-align:center;'>INFO</p>"."</td>".
            "</tr>".
            
            "<tr>".
            "<td>_NCNT_MAIN"."</td>"."<td>$contents2($val_last)"."</td>".
            "</tr>".
            
            
            "<tr>".
            "<td>_NCNT( TADV )"."</td>"."<td>$contents3"."</td>".
            "</tr>".
            
            
            "<tr>".
            "<td>_NCNT_COVID"."</td>"."<td>$contents"."</td>".
            "</tr>".
            
            "</tbody>".
            "</table>".
            "</center>".
            
            "<p style=\"font-size: 22px; \">".
            "</p>".
        
        
        
        //
        //
        //
        "";
//
//
//
//

$handlec = fopen($filefolder."____getallinfo.txt", "r");
$Last_Info = fread( $handlec, filesize( $filefolder."____getallinfo.txt" ) );
fclose( $handlec );
//
//
//
//
if( !empty($clspst) ){
    if( strcmp( $clspst, "clear")==0 ){
        
        
    $handlec2 = fopen( $filefolder."_NCNT_MAIN_LAST.txt", "w");
    fwrite($handlec2,  $contents2."\0" );
    fclose( $handlec2 );
    
        $handlec2 = fopen($filefolder."____getallinfo.txt", "w");
        fwrite($handlec2,  $LAct );
        fclose( $handlec2 );
    }
}
//
//
//
//
//
//



    exit( 
            "<html>".
            "<head>".
            "</head>".
            "<body onload='onlfnc()'>".
            $LAct."<br><br>".$Last_Info.
            //
            //
            //
            "<button onclick='clearfnc()'> CLEAR </button>".
            "<br>"."<br>"."<br>"."<br>"."<br>"."<br>"."<br>"."<br>"."<br>"."<br>".
            "<script>".
            "var urlscript2 = window.location.protocol + '//' + window.location.host + '';".
                "var urlscript = urlscript2;".
            "function clearfnc(){".
                "if( confirm('Limpiar contador?') ){".
                    "location.replace( urlscript+\"/?getallinfo=clear\" );".
                "}".
            "}".
            
            
            
            
            
            "function onlfnc(){".
                "try{".
                // "alert( 'onlfnc' );".
            
            
        "finterv = 0;".
        "var elements = document.querySelectorAll( '*' );".
        "for( var i=0; i<elements.length; i++ ){".
            "var str = elements[i].src + '';".
            "if( str.includes('powered-by-') ){".
                "elements[i].hidden = 'true';".
            "}".
        "}".

                
                "if( urlscript.endsWith(\"/\") ){".
                        "urlscript = urlscript.substring( 0, urlscript.length-1 );".
                "}else{".
                        "urlscript = urlscript + \"\";".
                "}".
                
            "var vstr = (window.location+\"\");".
                "if( vstr.includes(\"clear\") ){".
                    "location.replace( urlscript+\"/?getallinfo\" );".
                "}".
            
            "}catch( ex ){alert(ex);}".
                "}".
                
            "</script>".
            //
            "</body>".
            "</html>"
            );
//
//
//
//
}


if( isset($_GET["antrys"]) ){
    include( "pruebas/antrys.php" );
    exit();
}








///
$authUser = $_SERVER['REMOTE_ADDR'];
$handlec = fopen($filefolder."_IP_S.txt", "r");
$cont_ips = fread( $handlec, filesize( $filefolder."_IP_S.txt" ) );
fclose( $handlec );
//*
$ntimesto = 0;
while( empty( $cont_ips ) && $ntimesto<10 ){
    usleep( 10000 );
    $handlec = fopen($filefolder."_IP_S.txt", "r");
    $cont_ips = fread( $handlec, filesize( $filefolder."_IP_S.txt" ) );
    fclose( $handlec );
    $ntimesto++;
}
//*/
///
if( !empty( $cont_ips ) ){
    $setip = true;
    $chars = explode(", ", $cont_ips);
    for( $i=0; $i<count($chars); $i++ ){
        if( strcmp($chars[$i], $authUser)==0 ){
            $setip = false;
        }
    }
    if( $setip ){
        $cont_ips = $cont_ips.", ".$authUser;
        $handlec2 = fopen($filefolder."_IP_S.txt", "w");
        fwrite($handlec2, $cont_ips );
        fclose( $handlec2 );
    }
}
///






if( isset($_GET["covid19_try"]) ){
    //
    include( dirname(__FILE__, 1)."/pruebas/pruebas.php" );
    //
    $clspst = htmlspecialchars( $_GET['covid19_try'] );
    if( strlen($clspst)>1 ){
        covid_data_name_prnt( $clspst );
        exit();
    }
    //
}




if( isset($_GET["covid19"]) ){
    //
    include( dirname(__FILE__, 1)."/pruebas/pruebas.php" );
    //
    //
    $clspst = htmlspecialchars( $_GET['covid19'] );
    if( strlen($clspst)>1 ){
        $val2r = covid_data_name( $clspst );
        exit( "".$val2r."" );
    }
    //
    //
    //
    //
    //
    //
    //
    $handlec = fopen($filefolder."_NCNT_COVID.txt", "r");
    $contents = fread( $handlec, filesize( $filefolder."_NCNT_COVID.txt" ) );
    fclose( $handlec );

    $incnt = intval( $contents );
    $incnt = $incnt + 1;

    $handlec2 = fopen($filefolder."_NCNT_COVID.txt", "w");
    fwrite($handlec2,  $incnt."\0" );
    fclose( $handlec2 );
    
    
    
    // exit( "Valor".$incnt );

        $data = "";
        // $data = file_get_contents('https://news.files.bbci.co.uk/include/vjeastasia/540-world_coronavirus/mundo/app/amp#amp=1');
        $data = covid_datas();
        
        
        exit(
                "<html>".
                "<head>".
                
                
                "<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"images/CLAB_ICON.png\" />".
                "<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"images/covid19.png\" />".
                
                
                "<title>".
                    "WLAB COVID-19".
                "</title>".
                
                
                "<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"images/covid19.png\" />".
                
                
                
                 
                "<style>".
"table {".
"  font-family: arial, sans-serif;".
"  border-collapse: collapse;".
"  width: 100%;".
"}".
"td, th {".
"  border: 1px solid #dddddd;".
"  text-align: left;".
"  padding: 8px;".
"}".
"tr:nth-child(even) {".
"  background-color: #dddddd;".
"}".
"</style>".
                
                
                "</head>".
                
                
                "<body onload='onldfnc()' style=\"user-select: none;\">".
                
                
                
                
                

                "<center>".
                "<img src=\"images/covid19.png\"".
                "style='height: 128px; width: 128px;'".
                "alt=\"asads\"".
                "alt=\"asads\" >".
                "</center>".







                "<br>"."<a href=\"http://adriancosta.000webhostapp.com\" id=\"idbctomn\"> VOLVER A WLAB </a> "."<br>"."<br>".
                
                
                
                
                
                
                
                
                
                
                
                

                "Fuente: "."https://www.bbc.com/news"."<br>".

                "$data".


                "<script>".
                  "function onldfnc(){".
                ///"alert();".
                        "finterv = 0;".
        "var elements = document.querySelectorAll( '*' );".
        "for( var i=0; i<elements.length; i++ ){".
            "var str = elements[i].src + '';".
            "if( str.includes('powered-by-') ){".
                "elements[i].hidden = 'true';".
            "}".
        "}".
                  "}".
                
                
                "document.getElementById(\"idbctomn\").href = window.location.protocol + \"//\" + window.location.host;".
        "finterv = 0;".
        "var elements = document.querySelectorAll( '*' );".
        "for( var i=0; i<elements.length; i++ ){".
            "var str = elements[i].src + '';".
            "if( str.includes('powered-by-') ){".
                "elements[i].hidden = 'true';".
            "}".
        "}".
                
                
                
                
                
                
                
                "var urlscript2 = window.location.protocol + '//' + window.location.host + '';".
                "var urlscript = urlscript2;".
                "if( urlscript.endsWith(\"/\") ){".
                        "urlscript = urlscript.substring( 0, urlscript.length-1 );".
                "}else{".
                        "urlscript = urlscript + \"\";".
                "}".
                
                
                
                
                
                "var ajax = new XMLHttpRequest();".
        "ajax.open( 'GET', urlscript + '/js/ACovid.js', false );".
        "ajax.onreadystatechange = function () {".
            "var script = ajax.response || ajax.responseText;".
            "if (ajax.readyState === 4) {".
                "switch( ajax.status) {".
                    "case 200:".
                        "eval.apply( window, [script] );".
                        "break;".
                    "default:".
                        "alert( \"From loadscript:\\n\" + \"ERROR: script not loaded:\\n\", url );".
                "}".
            "}".
        "};".
        "ajax.send(null);".
        
                
                "var last_cntry = \"\";".
                "function canon( namectry ){".
                    "acov( namectry );".
                "}".



        "</script>".
                "</body>".
                "</html>"

                );

    
}
//
//
//

//
//
//
//
$main_path = getrootmain2(1);
//



$handlec = fopen( $filefolder."_NCNT_MAIN.txt", "r");
$contents = fread( $handlec, filesize( $filefolder."_NCNT_MAIN.txt" ) );
fclose( $handlec );


$ntimesto2 = 0;
while( empty( $contents ) && $ntimesto2<10 ){
    usleep( 10000 );
    $handlec = fopen( $filefolder."_NCNT_MAIN.txt", "r");
    $contents = fread( $handlec, filesize( $filefolder."_NCNT_MAIN.txt" ) );
    fclose( $handlec );
    $ntimesto2++;
}
$incnt = intval( $contents );
if( $incnt>0 ){
    
    
    $incnt = $incnt + 1;
    
    $handlec2 = fopen( $filefolder."_NCNT_MAIN.txt", "w");
    fwrite($handlec2,  $incnt."\0" );
    fclose( $handlec2 );
}



if( isset($_GET["_anp"]) ){
    set_include_path ( $main_path );
    $clspst = htmlspecialchars( $_GET['_anp'] );
    
    
    $fnm = "_anp/".$clspst.".php";
    
    
    if( file_exists($fnm) ){
        //alert($fnm);
        include( $fnm );
        exit();
    }
    
    
    
    /*
    if( strcmp($clspst, "012345")==0 ){
        //include( "mpage/PublicaLOSVIRUS.html" );exit();
        exit();
    }
    //*/
    
    
    
    if( strcmp($clspst, "0")!=0 ){
        $actual_link = "http://$_SERVER[HTTP_HOST]/?_anp=0";
        header("Location: $actual_link");
        exit();
    }
    
    
    
    
    //include( "mpage/PublicaLOSVIRUS.html" );exit();
    
    
    include( "mpage/PublicaLOSVIRUS.html" );exit();
    //include( "_anp/post_virus.php" );
    exit();
}
// include( "_anp/post_virus.php" );exit();
//
//
//
//
//
//
//
//
//
//





if( isset($_GET["TADV"]) ){
    include( "WLAB_LAB.php" );
    exit();
}



if( isset($_GET["btmpg"]) ){
    include( "mpage/mpageabout.html" );
    exit();
}


if( isset($_GET["dwlds"]) ){
    include( "mpage/mpagedown.html" );
    exit();
}


if( isset($_GET["pts"]) ){
    include( "mpage/Publica.html" );
    exit();
}





if( isset($_GET["antrys"]) ){
    include( "pruebas/antrys.php" );
    exit();
}




if( isset($_GET["vhdl"]) ){
    include( "mpage/vhdl.html" );
    exit();
}



if( isset($_GET["init"]) ){
    include( "mpage/mpage.html" );
    exit();
}









$handlec = fopen($filefolder."_MAIN_PUBLIC.txt", "r");
$res_mainpg = fread( $handlec, filesize( $filefolder."_MAIN_PUBLIC.txt" ) );
fclose( $handlec );

$ntimesto3 = 0;
while( empty( $contents ) && $ntimesto3<10 ){
    usleep( 10000 );
    $handlec = fopen($filefolder."_MAIN_PUBLIC.txt", "r");
    $res_mainpg = fread( $handlec, filesize( $filefolder."_MAIN_PUBLIC.txt" ) );
    fclose( $handlec );
    $ntimesto3++;
}


include( "mpage/".$res_mainpg );exit();
include( "mpage/mpage.html" );

?>
<html></html>
