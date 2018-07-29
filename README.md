# PHP performance

To measure execution time, simply run `php filename.php` on the command line. This is determined by using the following code:

```php
$startTime = microtime(true);

// execute code here

echo 'Elapsed time is: ', (microtime(true) - $startTime) ,' seconds';
```

## Tentative results

1. Caching values---rather than repeatedly invoking functions to derive those values---is a good idea. This is not surprising.
2. The common suggestion to prefer passing 'echo' multiple arguments rather than relying on concatenation appears to be bad advice; concatenation in this example was WAY more performant if we are echoing a series of identical string literals. However, if this value is cached in a variable, concatenation was actually slightly slower than the alternative (but not to any significant degree).
3. Preferring single quotes to double quotes (in an attempt to bypass interpolation) seems to be of no benefit whatsoever; the tests were nearly identical.

## Future ideas

* generators, if building huge arrays. See [here](https://medium.com/tech-tajawal/use-memory-gently-with-yield-in-php-7e62e2480b8d).
* unset() "unset variables which contain large amounts of data and aren't required later in the code". See [here](https://www.airpair.com/php/fatal-error-allowed-memory-size).
* avoid creating unnecessary data structures?
* Alternative data structures? See [here](https://medium.com/@rtheunissen/efficient-data-structures-for-php-7-9dda7af674cd).
* foreach versus a for loop. Apparently, foreach is very inefficient when altering the data of the array. See [here](http://www.phpbench.com/).
* `$array[] = $i` versus `array_push($array, $i)`. See [here](https://stackoverflow.com/questions/559844/whats-better-to-use-in-php-array-value-or-array-pusharray-value).
* possibility of using `array_flip()` and `array_key_exists()`. See [here](https://stackoverflow.com/questions/8954367/are-there-alternative-data-structures-than-array-in-php-where-i-can-benefit-fro).
