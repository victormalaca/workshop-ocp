<?php
echo "<h1>Openshift Workshop v6.0</h1> ";
echo "<h2 style='color: blue;'>Sexto Build!</h2>";
$host= gethostname();
$ip = gethostbyname($host);                    
echo $ip;
?>
