<?php


$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function array_has_value($needle, $haystack)
{	
	if (array_search($needle, $haystack) === false)
	{
		return FALSE;
		} else {
			return TRUE;
		}
}
var_dump(array_has_value('Mikey', $names));



?>