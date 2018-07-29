# PHP performance

To measure execution time, simply run `php filename.php` on the command line. This is determined by using the following code:

```php
$startTime = microtime(true);

// execute code here

echo 'Elapsed time is: ', (microtime(true) - $startTime) ,' seconds';
```

## Tentative results

1. Caching values---rather than repeatedly invoking functions to derive those values---is a good idea. This is not surprising.
2. The common suggestion to prefer passing 'echo' multiple arguments rather than relying on concatenation appears to be bad advice; concatenation in this example was WAY more performant.
3. Preferring single quotes to double quotes (in an attempt to bypass interpolation) seems to be of no benefit whatsoever; the tests were nearly identical.
