```php
<?php
function doubleArray(array $arr): array {
  $doubledArray = [];
  foreach ($arr as $value) {
    $doubledArray[] = $value * 2;
  }
  return $doubledArray;
}

$numbers = [1, 2, 3, 4, 5];
$doubledNumbers = doubleArray($numbers);
print_r($numbers); // Original array remains unchanged
print_r($doubledNumbers); // New array with doubled values
?>
```