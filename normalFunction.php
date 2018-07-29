<?php

function getValues() {
	$arr = [];
   // get the initial memory usage
   echo round(memory_get_usage() / 1024 / 1024, 2) . ' MB' . PHP_EOL;

   for ($i = 1; $i < 800000; $i++) {
      array_push($arr, $i);
      // let us do profiling, so we measure the memory usage
      if (($i % 200000) == 0) {
         // get memory usage in megabytes
         echo round(memory_get_usage() / 1024 / 1024, 2) . ' MB'. PHP_EOL;
      }
   }
		return $arr;
}

foreach (getValues() as $value) {} // iterate over array returned from genValues()
