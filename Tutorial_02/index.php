<?php
echo "<style>";
include "css/reset.css";
include "css/style.css";
echo "</style>";
function makeDiamondShape($row)
{
    $n = $row;
    echo "<div class='diamond-box'>";
    echo "<h1 class='diamond-ttl'>Diamond Pattern</h1>";
    if(gettype($n) == "string"){
        echo "<p class='valid-error'>Row parameter must be number.</p>";
    }elseif ($n%2 == 0) {
        echo "<p class='valid-error'>Row parameter must be odd number.</p>";
    }else{
        for($i = 1;$i <= ($n/2)+1;$i++){
            for($j = 1;$j <= (2*$n)-1;$j++){
                if($j >= $n-($i-1) && $j <= $n+($i-1)){
                    echo "*";
                }else{
                    echo "&nbsp&nbsp";
                }
            }
            echo "<br>";
        }
        for($i = ($n/2);$i >= 1;$i--){
            for($j = 1;$j <= (2*$n)-1;$j++){
                if($j >= $n-($i-1) && $j <= $n+($i-1)){
                    echo "*";
                }else{
                    echo "&nbsp&nbsp";
                }
            }
            echo "<br>";
        }
    }
    echo "</div>";
}
makeDiamondShape(5);

// Result

// makeDiamondShape(1);
// output
//  *

// makeDiamondShape(3);
// output
//  *
// ***
//  *

// makeDiamondShape(5);
// output
//   *
//  ***
// *****
//  ***
//   *

// makeDiamondShape(6);
// output
// $row parameter must be odd number. //validation

// makeDiamondShape(2);
// output
// $row parameter must be odd number. //validation

// makeDiamondShape('three');
// output
// $row parameter must be number. //validation
