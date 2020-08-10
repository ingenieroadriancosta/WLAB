<?php
function alert( $val ){ echo "\n<script>\nalert('".$val."');\n</script>\n"; }
$p = "";
if( !isset($_GET["p"]) ){
    $message = "\n\n\nERROR 0.\n\n\n";
    exit("$message");
}

$p = htmlspecialchars( $_GET['p'] );



$p_txt = $p;

$p = str_replace("_CHANGE_", "?", $p );

$ndt = 0;
for( $i_v = 0; $i_v<strlen($p); $i_v++ ){
    if( $p[$i_v]=='?' ){
        $ndt++;
    }
}
if( $ndt!=5 ){
    $message = "Not Ok!!! <br>( ndt!=ntimes )<br>\n";
    exit("$message");
}

$p_txt = "<tr>\n<td>" . str_replace("_CHANGE_", "</td>\n<td>", $p_txt ) . "</td>\n</tr>\n";


$myfile = fopen("LUSERS_CONN.txt", "r");
$v_t_f = fread( $myfile, filesize("LUSERS_CONN.txt") );
fclose($myfile);







$myfile = fopen("LUSERS_CONN.txt", "w");


fwrite( $myfile, $p_txt );
fwrite( $myfile, "\n" );


fwrite( $myfile, $v_t_f );
fclose($myfile);
//echo $v_t_f;
//echo $p_txt;



    
$message = "";

function getrootmain( $level ){
    $dname = dirname(__FILE__, $level);
    return ($dname."");
}
$rootm = getrootmain(3);
//include( $rootm."/INCLUDES/includes.php" );






$message = "";
$servername = "localhost";
$username = "id12604824_olimpuswlab";
$password = "AS2IdyNirL";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    $message = $message . "Not Ok!!! <br>\n";
    exit("$message");
}

$sql = "USE id12604824_olimpuswlab";
if ($conn->query($sql) === TRUE) {
} else {
    $message = $message . "Error: 1<br>\n";
    exit("$message");
}


/*
$sql = "DROP TABLE WLAB_USERS";
if ($conn->query($sql) === TRUE) {
} else {
    $message = $message . "Error: 1_2<br>\n";
    exit("$message");
}
//*/




$sql = "CREATE TABLE IF NOT EXISTS WLAB_USERS( 
    indice int NOT NULL AUTO_INCREMENT, 
    username TEXT(256), 
    pname TEXT(256), 
    amd TEXT(256), 
    HMS TEXT(256),
    SystemDrive_T TEXT(256), 
    PUBLIC_T TEXT(256),
    itemp TEXT(256), 
    PRIMARY KEY (indice) );";
if ($conn->query($sql) === TRUE) {
} else {
    $message = $message . "Error: 2<br>\n";
    exit("$message");
}




    
$sql = "INSERT INTO WLAB_USERS( username, pname, amd, HMS, SystemDrive_T, PUBLIC_T, itemp ) "
."VALUES ( '";//."VALUES ( '$p', '', '', '', '', '', ";


for( $ind=0; $ind<strlen($p); $ind++ ){
    if( $p[$ind]=='?' ){
        $sql = $sql . "', '";
    }else{
        $sql = $sql . $p[$ind];
    }
}


$sql = $sql . "', '')";
$message = "";
$message = $message . $sql . "\n" . $p;
//exit("$message");


if ($conn->query($sql) === TRUE) {
} else {
    $message = "Error: 3\n";
    exit("$message");
}
mysqli_close($conn);




$message = "\n\n\n\nAll is good!!! <br>\n\n\n\n";
// $message = $message . "<br>\n" . " ADRIAN COSTA <br>\n Ingeniero Electrónico";
exit("$message");


?>
