<?php

// create an array with 900,000 elements
function create_array($num) {
	return array_fill(0, $num, null);
}
$a = create_array(900000);
$count = count($a);

// create an empty array
$populate = array();

$startTime = microtime(true);

// push value of iterator into empty array 900,000 times
for ($i = 0; $i <= $count; $i++) {
	array_push($populate, $i);
}

echo 'Elapsed time is: ', (microtime(true) - $startTime) ,' seconds';


/****** RESULTS ******

	average execution time when invoking count() for every iteration:
	0.088561654090881 seconds

	average execution time with count() value cached:
	0.070444266001384

****** END RESULTS ******/
