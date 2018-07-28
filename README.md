# PHP performance

To measure execution time, simply run `php filename.php` on the command line. This is determined by using the following code:

```php
$startTime = microtime(true);

// execute code here

echo 'Elapsed time is: ', (microtime(true) - $startTime) ,' seconds';
```
