<?php
if( $_GET["ip"] ){
	    $output=shell_exec('python3 /var/www/html/ispecs/client.py '. $_GET["ip"] );
        echo "<pre>$output</pre>";
        echo "Script runs"
	}
	else{
		echo "Script runs"
	    exit();
	}
?>
