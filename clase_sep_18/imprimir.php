<?php
session_start();

foreach ($_POST as $key => $value) {
    echo $key . ": " . $_POST[$key] . '<br>';
}



$headers= getAllheaders();

var_dump($headers); 

echo '<br>'."Server: ".'<br>';



var_dump($_SERVER);

echo '<br>'."Files: ".'<br>';



var_dump($_FILES);
echo '<br>'."Request: ".'<br>';



var_dump($_REQUEST);

echo '<br>'."Session: ".'<br>';



var_dump($_SESSION);

echo '<br>'."Cookie: ".'<br>';



var_dump($_COOKIE);

echo '<br>'."Globals: ".'<br>';



var_dump($GLOBALS);



?>