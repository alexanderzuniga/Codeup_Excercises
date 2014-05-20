<?php 
$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physics_array = explode(',', $physicists_string);


$famous_fake_physicists = array_pop($physics_array);
	if ($physics_array) {
		$famous_fake_physicists = implode(',', $physics_array) . " and " . $famous_fake_physicists;
	}
echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}.\n";

?>



