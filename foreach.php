<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $type) {
    if (is_scalar($type)) {
    	echo "{$type} \n";
    }
    elseif (is_null($type)) {
    	echo "{$type} \n";
    }
    elseif (is_array ($type)) {
    	foreach ($type as $inside_array) {
    		echo "$inside_array \n"; 
    	}
    }
  
}

?>