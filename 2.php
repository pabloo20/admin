<?php
/*
$attributes[0] = "1_0";
$attributes[1] = "1_1";
$attributes[2] = "1_2";
$attributes[3] = "1_3";
$attributes[4] = "1_4";

$array = array($attributes);
$comma_separated = implode("_", $array);

echo $comma_separated; // lastname,email,phone

			for ($i = 0, $n = sizeof($attributes); $i < $n; $i++) {
			 
			// $values = split("_", $attributes[$i]);
			 $values = explode("_", $attributes[$i]);
				
				if($values[0] !== ""){
                      echo $values[0] . "";
					  echo $values[1] . "<br>";
					  
				}
			}	
			*/
			?><form action="post.php" method="post">
    <input type="checkbox" name="attributes[0]" value="1_2" checked>
    <input type="checkbox" name="attributes[1]" value="1_3">
    <input type="checkbox" name="attributes[2]" value="1_6" checked>
	    <input type="checkbox" name="attributes[3]" value="1_3">
		    <input type="checkbox" name="attributes[4]" value="1_3">
    <input type="submit" value="Submit!">
</form>