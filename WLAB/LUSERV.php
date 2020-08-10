<?php
function alert( $val ){ echo "\n<script>\nalert('".$val."');\n</script>\n"; }
/*

				
				"__TDO__" + getOSName() + "__TDC__" +
				"__TDO__" + getBrowserName() + "__TDC__" +
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
$message = "<!DOCTYPE html>\n<html>\n<head>\n".
"<style>\n".
"table, th, td { border: 1px solid black; }\n".
"</style>\n".
"</head>\n<body>\n".
"\n\n<table style=\"width:100%\">\n".
  "<tr>\n".
    "\t<th>Fecha</th>\n".
    "\t<th>Hora</th>\n".
    "\t<th>OS NAME</th>\n".
    "\t<th>Browser Name</th>\n".
    //"\t<th>language</th>\n".
    //"\t<th>languages</th>\n".
    "\t<th>userAgent</th>\n".
    
    
    "\t<th>isMobile</th>\n".
    //"\t<th>doc referrer</th>\n".
    "\t<th>onLine</th>\n".
    "\t<th>timeZone</th>\n".
    "\t<th>Screen</th>\n".
    "\t<th>cookieEnabled</th>\n".
    "\t</tr>\n";
$myfile = fopen("LUSERS_VIS.txt", "r");
$varlv = fread( $myfile, filesize("LUSERS_VIS.txt") );
fclose($myfile);

$message = $message.$varlv;

$message = $message."\n</table>\n\n";
            

$message = $message."</body>\n</html>";

exit( "$message" );

?>
