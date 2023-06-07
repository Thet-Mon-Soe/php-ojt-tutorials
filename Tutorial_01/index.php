<?php
echo "<style>";
include "css/reset.css";
include "css/style.css";
echo "</style>";
function drawChessBorad($rows, $cols)
{
    $r = $rows;
    $c = $cols;
    echo "<div class='chessboard-box'>";
    echo "<h1 class='chessboard-ttl'>Chessboard</h1>";
    if ($r == 0 && $c == 0) {
        echo "<p class='vali-error'>Rows and Cols parameters must be greater than 0.</p>";
    }elseif($c == 0){
        if (gettype($r) == "string" && $c == 0) {
            echo "<p class='vali-error'>Rows parameter must be number.Cols parameter must be greater than 0.</p>";
        }else{
            echo "<p class='vali-error'>Cols parameter must be greater than 0.</p>";
        }
    }elseif($r == 0){
        if ($r == 0 && gettype($c) == "string" ) {
            echo "<p class='vali-error'>Rows parameter must be greater than 0.Cols parameter must be number.</p>";
        }else{
            echo "<p class='vali-error'>Rows parameter must be greater than 0.</p>";
        }
    }elseif(gettype($r) == "string" && gettype($c) == "string"){
        echo "<p class='vali-error'>Rows and Cols parameters must be number.</p>";
    }elseif(gettype($r) == "string"){
        echo "<p class='vali-error'>Rows parameter must be number.</p>";
    }elseif(gettype($c) == "string"){
        echo "<p class='vali-error'>Cols parameter must be number.</p>";
    }else{
        echo "<table>";
        for ($i=1; $i <= $r ; $i++) { 
            echo "<tr>";
            for ($j=1; $j <= $c ; $j++) { 
                if(($i+$j)%2 == 0){
                    echo "<td class='white'></td>";
                }else{
                    echo "<td class='black'></td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
        echo "<p>".$r." rows and ".$c." columns chess board.</p>";
    }
    echo "</div>";
}
drawChessBorad(8,8);

// drawChessBorad(8, 8); // output => 8 rows and 8 columns chess borad.
// drawChessBorad(5, 2); // output => 5 rows and 2 columns chess borad.
// drawChessBorad(0, 1); // output => $rows parameter must be greater than 0. //validation
// drawChessBorad(1, 0); // output => $cols parameter must be greater than 0. //validation
// drawChessBorad(0, 0); // output => $rows and $cols parameters must be greater than 0. //validation
// drawChessBorad('myrow', 'mycols'); // output => $rows and $cols parameters must be number. //validation
// drawChessBorad('myrow', 5); // output => $rows parameter must be number. //validation
// drawChessBorad(5, 'mycols'); // output => $cols parameter must be number. //validation
// drawChessBorad(0, 'mycols'); // output => $rows parameter must be greater than 0.$cols parameter must be number. //validation
// drawChessBorad('myrow', 0); // output => $rows parameter must be number.$cols parameter must be greater than 0. //validation