```php
<?php
function doubleArray(&$arr) {
  foreach ($arr as &$value) {
    $value *= 2;
  }
}

$numbers = [1, 2, 3, 4, 5];
doubleArray($numbers);
print_r($numbers);
?>
```