<?php

	$attributes = $_POST['attributes'];
	
	for ($i = 0, $n = sizeof($attributes); $i < $n; $i++) {
		if (isset($attributes[$i])) {
				$values = explode("_", $attributes[$i]);

				if($values[0] !== ""){				
					echo $values[0] . "";
					echo $values[1] . "<br>";
				}
			}	  
	}
	?>