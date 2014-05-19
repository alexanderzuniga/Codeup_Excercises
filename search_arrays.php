<?php


$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Den', 'Mel', 'Amy', 'Michael'];

function find($needle, $haystack) // seeing if $needle is in the $haystack, can be any variable.
{	
	if (array_search($needle, $haystack) === false) //if they are NOT, it is bool(false)
	{
		return FALSE;      // then we return the "bool(false)"
		} else {
			return TRUE;  // otherwise we have s true valur, that the needle IS in the haystack
		}
}
//var_dump(find('Mikey', $names));     //mikey IS in $names

function array_common_count($array1, $array2)
{
	$count = 0;
	foreach ($array1 as $value) {      //establishing that we are looking at all values in $array1
		if (find($value, $array2)) {   //are any of the $values of array on IN $array2
			$count++;					// incriment the count by one for ever $value in common. 
		}
	}	return $count;
}


var_dump(array_common_count($names, $compare)); //will render (int) for however many are in common. 



?>