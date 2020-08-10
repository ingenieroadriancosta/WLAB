<?php




$file_uploads = On;






exit();
///                                          $authUser = $_SERVER['REMOTE_ADDR'];
///

//*
///             https://www.sanwebe.com/2013/05/chat-using-websocket-php-socket
///             https://code-boxx.com/php-live-chat-websocket/
//Create TCP/IP sream socket and return the socket resource
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

// Bind the source address
socket_bind($socket, 'localhost');

// Listen to incoming connection
socket_listen($socket);

// Accept new connections
socket_accept($socket);
exit();
/*/




///
/*
$indicesServer = array('PHP_SELF',
'argv',
'argc',
'GATEWAY_INTERFACE',
'SERVER_ADDR',
'SERVER_NAME',
'SERVER_SOFTWARE',
'SERVER_PROTOCOL',
'REQUEST_METHOD',
'REQUEST_TIME',
'REQUEST_TIME_FLOAT',
'QUERY_STRING',
'DOCUMENT_ROOT',
'HTTP_ACCEPT',
'HTTP_ACCEPT_CHARSET',
'HTTP_ACCEPT_ENCODING',
'HTTP_ACCEPT_LANGUAGE',
'HTTP_CONNECTION',
'HTTP_HOST',
'HTTP_REFERER',
'HTTP_USER_AGENT',
'HTTPS',
'REMOTE_ADDR',
'REMOTE_HOST',
'REMOTE_PORT',
'REMOTE_USER',
'REDIRECT_REMOTE_USER',
'SCRIPT_FILENAME',
'SERVER_ADMIN',
'SERVER_PORT',
'SERVER_SIGNATURE',
'PATH_TRANSLATED',
'SCRIPT_NAME',
'REQUEST_URI',
'PHP_AUTH_DIGEST',
'PHP_AUTH_USER',
'PHP_AUTH_PW',
'AUTH_TYPE',
'PATH_INFO',
'ORIG_PATH_INFO') ;

echo '<table cellpadding="10">' ;
foreach ($indicesServer as $arg) {
    if (isset($_SERVER[$arg])) {
        echo '<tr><td>'.$arg.'</td><td>' . $_SERVER[$arg] . '</td></tr>' ;
    }
    else {
        echo '<tr><td>'.$arg.'</td><td>-</td></tr>' ;
    }
}
echo '</table>' ; 
exit();
//*/

///
$message = "";
$authUser = $_SERVER['REMOTE_ADDR'];
$message = $message . $authUser."<br>";
exit( $message );
///
///
$host= gethostname();
$ip = gethostbyname($host);
///
$authUser = $_SERVER['SERVER_NAME'];
$message = $message . $authUser."<br>";
$message = $message . $ip;



echo "<br>";
echo "<br>";
// create a new cURL resource
      $ch = curl_init ();
      // set URL and other appropriate options
      curl_setopt ($ch, CURLOPT_URL, "http://ipecho.net/plain");
      curl_setopt ($ch, CURLOPT_HEADER, 0);
      curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
      // grab URL and pass it to the browser
      $ip = curl_exec ($ch);
      echo "The public ip for this server is: $ip";
      // close cURL resource, and free up system resources
      curl_close ($ch);
echo "<br>";
echo "<br>";



exit( $message );
///
?>  
