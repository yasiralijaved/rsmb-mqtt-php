<?php

require("phpMQTT.php");

  
$mqtt = new phpMQTT("localhost", 1883, "MQTT Publisher Client");

if ($mqtt->connect()) {
	$mqtt->publish("yasir/ali/test/topic","Hello World! at ".date("r"),0);
	$mqtt->close();
}

?>
