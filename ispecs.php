<?php
if( $_GET["ip0"] && $_GET["ip01"] && $_GET["ip2"] && $_GET["ip4"] ){
	    $output=shell_exec('python3 /var/www/html/ispecs/client.py '. $_GET["ip0"] . '.' . $_GET["ip01"] . '.' . $_GET["ip2"] . '.' . $_GET["ip4"] . ':8000' );
        echo "<pre>$output</pre>";
        echo "Script runs"
	}
	else{
		echo "Script runs"
	    exit();
	}
?>
