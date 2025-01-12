# PHP Pass-by-Reference in foreach Loops: Subtle Errors

This repository demonstrates a common, yet subtle, error in PHP related to pass-by-reference in `foreach` loops.  Modifying array elements within a `foreach` loop using pass-by-reference can have unintended consequences that persist beyond the loop's scope.

The `bug.php` file showcases the problem, while `bugSolution.php` provides a corrected approach.

## Understanding the Issue

PHP's `foreach` loop, when used with pass-by-reference (`&`), can modify the original array elements directly. This is generally desirable, but it requires careful consideration. In the example, the values of the `$numbers` array are doubled within the loop, and these changes remain after the loop completes.

This behavior differs from some other languages where changes made to a value inside a loop might not affect the original array unless explicitly assigned back.