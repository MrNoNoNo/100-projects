<?php
/**
 * Created by PhpStorm.
 * User: Octavian
 * Date: 21-Jun-17
 * Time: 2:12 AM
 * Fibonacci Sequence
 * Enter a number and have the program generate the Fibonacci sequence to that number or to the Nth number.
 */

function fibonacci($n, $first = 0, $second = 1){
    $fib = [$first, $second];
    for($i = 1; $i < $n; $i++){
        $fib[] = $fib[$i] + $fib[$i-1];
    }
    return $fib;
}
?>
<form name="form" action="" method="post">
<input type="text" name="number" id="number">
    <input type="button" id="submit" value="sumbit">
</form>

<?php
if(isset($_POST['number'])){
print_r(fibonacci($_POST['number']));
}
?>