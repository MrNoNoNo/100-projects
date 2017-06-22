<?php
/**
 * Created by PhpStorm.
 * User: Octavian
 * Date: 21-Jun-17
 * Time: 3:12 AM
 */

function oneToOneHundred(){
    for ($i = 1; $i <= 100; $i++)
    {
        if($i % 3 == 0 && $i % 5 ==0){
            echo "FizzBuzz<br />";
        }
        else if($i % 3 == 0){
            echo "Fizz<br />";
        }
        else if($i % 5 == 0){
            echo "Buzz<br />";
        }
        else {
            echo $i."<br />";
        }
    }
}

echo '<pre>';
print_r(oneToOneHundred());
?>