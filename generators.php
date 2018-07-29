<?php

function getValues() {
   // get the initial memory usage
   echo round(memory_get_usage() / 1024 / 1024, 2) . ' MB' . PHP_EOL;

   for ($i = 1; $i < 800000; $i++) {
      yield $i;
      // let us do profiling, so we measure the memory usage
      if (($i % 200000) == 0) {
         // get memory usage in megabytes
         echo round(memory_get_usage() / 1024 / 1024, 2) . ' MB'. PHP_EOL;
      }
   }

}
$myValues = getValues(); // building the array here once we call the function

foreach ($myValues as $value) {}
