<?php
echo "<h1>Openshift Workshop v1.0</h1> ";
echo "<h2 style='color: blue;'>Quinto Build!</h2>";
$host= gethostname();
$ip = gethostbyname($host);                    
echo $ip;
?>
