<?php

function alert( $val ){ echo "\n<script>\nalert('".$val."');\n</script>\n"; }
$p = "";
if( !isset($_GET["p"]) ){
    $message = "\n\n\nERROR 0.\n\n\n";
    exit("$message");
}

$p = htmlspecialchars($_GET['p']);

$p = str_replace("__TRO__", "<tr>\n", $p );
$p = str_replace("__TRC__", "</tr>\n", $p );

$p = str_replace("__TDO__", "<td>", $p );
$p = str_replace("__TDC__", "</td>\n", $p );





/*
$myfile = fopen("LUSERS_VIS.txt", "r");
$v_t_f = fread( $myfile, filesize("LUSERS_VIS.txt") );
fclose($myfile);
$myfile = fopen("LUSERS_VIS.txt", "w");

fwrite( $myfile, $p );
fwrite( $myfile, "\n" );
fwrite( $myfile, $v_t_f );

fclose($myfile);
//*/



exit("$p");

/*/
var Str2Ret = 
				"__TRO__" +
				"__TDO__" + getOSName() + "__TDC__" +
				"__TDO__" + getBrowserName() + "__TDC__" +
				"__TDO__" + navigator.language + "__TDC__" +
				"__TDO__" + navigator.languages + "__TDC__" +
				"__TDO__" + navigator.userAgent + "__TDC__" +
				"__TDO__" + (isMobile() ? 'Mobile' : 'Desktop') + "__TDC__" +
				"__TDO__" + (document.referrer || 'N/A') + "__TDC__" +
				"__TDO__" + navigator.onLine + "__TDC__" +
				"__TDO__" + Intl.DateTimeFormat().resolvedOptions().timeZone + "__TDC__" +
				"__TDO__" + screen.width + ' x ' + screen.height + "__TDC__" +
				"__TDO__" + navigator.cookieEnabled + "__TDC__" +
				"__TRC__"
				;
//*/



?>
