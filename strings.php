<?php

$startTime = microtime(true);

for ($i = 0; $i <= 200000; $i++) {
	echo "sldkfjlaskdjflaskdjflaskdjflaksjdflkasjdflkasjdflkajsdlfkjlsdkfj";
}

echo 'Elapsed time is: ', (microtime(true) - $startTime) ,' seconds';


/****** RESULTS ******

	average execution time echoing a string with single quotes:
	3.36004678408305 seconds

	average execution time echoing a string with double quotes:
	3.34537732601165 seconds

****** END RESULTS ******/
