<?php

$startTime = microtime(true);
$xxx = 'xxx';

function eko() {
	echo $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx . $xxx;
}

// echo 5000 times
for ($i = 0; $i <= 5000; $i++) {
	eko();
}

echo 'Elapsed time is: ', (microtime(true) - $startTime) ,' seconds';

/****** RESULTS ******

	average execution time using the concatenation operator with string literals
	1.854234894116717 seconds

	average execution time passing 'echo' multiple arguments (comma-separated string literals)
	3.248066465059933 seconds

	---

	average execution time using the concatenation operator with cached string value
	0.76908397674561 seconds

	average execution time passing 'echo' multiple arguments (comma-separated cached string values)
	0.67611312866211 seconds

****** END RESULTS ******/
