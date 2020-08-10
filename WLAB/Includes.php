<?php
//*
set_exception_handler(
    function($exception) {
    exit( "error:<br>".$exception );
    // exit( $exception );
        // header("Location: https://adriancosta.000webhostapp.com/erno.php"); 
        exit( "error" );
    }
);
//*/


//
function arrsmstr( $varr ){
    $ivret = 0;
    for( $i=0; $i<strlen($varr); $i++ ){
        $ivret = $ivret + abs( 255&intval( $varr[$i] ) );
    }
    return $ivret;
}

function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}



function getrootmain( $level ){
    $dname = dirname(__FILE__, $level);
    return ($dname."");
}
$rootm = getrootmain(2);
//alert( $rootm );
//include( $rootm."/INCLUDES/includes.php" );



function println( $v2p ){
    echo $v2p."<br>";
}
//alert90( "" );


function printnl( $v2p ){
    echo $v2p."";
}
//alert90( "" );


function delallfiles($dir){
    $cdir = scandir( $dir );
    foreach ($cdir as $key => $value){
        if( !in_array($value,array(".","..")) ){
            unlink( $dir.DIRECTORY_SEPARATOR.$value );
        }
    }
}


?>
<html></html>
