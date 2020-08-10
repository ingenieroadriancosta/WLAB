<?php
function alert( $val ){ echo "\n<script>\nalert('".$val."');\n</script>\n"; }
$message = "<!DOCTYPE html>\n<html>\n<head>\n".
"<style>\n".
"table, th, td { border: 1px solid black; }\n".


"td {text-align: center;}".


"table {font-family: arial, sans-serif;border-collapse: collapse;width: 100%;border: 1px solid black; }".
"td, th {border: 1px solid #dddddd;text-align: center;padding: 8px;border: 1px solid black; }".
"tr:nth-child(even) {background-color: #dddddd;border: 1px solid black; }".



"</style>\n".
"</head>\n<body onload='loadf()'>\n".
"\n\n<table style=\"width:100%\">\n".
  "<tr>\n".
    "\t<th>username</th>\n".
    "\t<th>pname</th>\n".
    "\t<th>M/D/Y</th>\n".
    "\t<th>HMS</th>\n".
    "\t<th>SystemDrive_T</th>\n".
    "\t<th>PUBLIC_T</th>\n".
    "\t</tr>\n";
$myfile = fopen("LUSERS_CONN.txt", "r");
$varlv = fread( $myfile, filesize("LUSERS_CONN.txt") );
fclose($myfile);
//echo $varlv."<br>";
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
$message = $message.$varlv;
////////////////////////////////////////////////////////////////////////////////
/*
$varlv = str_replace("_CHANGE_", "\1", $varlv );
$varlv = str_replace("_ENTER_", "\0", $varlv );
// alert( $varlv );
$message = $message . "<tr>\n\t<td>";
for( $i_v = 0; $i_v<strlen($varlv); $i_v++ ){
    //break;
    if( $varlv[$i_v]!="\1" && $varlv[$i_v]!="\0" ){
        $message = $message . $varlv[$i_v];
    }else{
        if( $varlv[$i_v]=="\1" ){
            $message = $message . "</td>\n\t<td>";
        }else{
            if( $varlv[$i_v]=="\0" ){
                if( $i_v<strlen($varlv)-1 ){
                    $message = $message . "</td>\n</tr>\n<tr>\n\t<td>";
                }else{
                    $message = $message . "</td>\n</tr>\n";
                }
            }
        }
    }
}
//*/
//$message = $message . "</td></tr>";
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////


$message = $message."\n</table>\n\n";
////////////////////////////////////////////////////////////////////////////////            

$message = $message."\n<script>\n\n";


$message = $message."\nfunction loadf(){\n";


$message = $message."finterv = 0;\n";
$message = $message."var elements = document.querySelectorAll( '*' );\n";
$message = $message."for( var i=0; i<elements.length; i++ ){\n";
$message = $message."var str = elements[i].src + '';\n";
$message = $message."if( str.includes('powered-by-') ){\n";
$message = $message."elements[i].hidden = 'true';\n";
$message = $message."}\n";
$message = $message."}\n";
$message = $message."}\n";     
$message = $message."\n</script>\n\n";
    

				
				
				
				
$message = $message."</body>\n</html>";

exit( "$message" );





















$servername = "remotemysql.com";
$username = "NACpOiLmus";
$password = "XZTvq3eOzP";





// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    $message = $message . "Not Ok!!! <br>\n";
    exit("$message");
}
$sql = "USE NACpOiLmus";
if ($conn->query($sql) === TRUE) {
} else {
    $message = $message . "Error: 1<br>\n";
    exit("$message");
}

$message = "";

$sql =  "SELECT* FROM WLAB_USERS";
$result = mysqli_query($conn, $sql);

$json = mysqli_fetch_all ($result, MYSQLI_ASSOC);
echo json_encode($json );

// while($row = mysql_fetch_assoc($result)){ $json[] = $row; }

mysqli_close($conn);








?>
