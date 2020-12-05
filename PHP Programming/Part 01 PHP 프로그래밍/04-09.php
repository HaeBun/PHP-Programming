<?php
    echo "--------------------<br>";
    echo "제곱미터 평<br>";
    echo "--------------------<br>";
    
    for($square_meter= 10; $square_meter<=200; $square_meter=$square_meter+10)
    {
        $pyeong = $square_meter * 0.3025;
        echo "$square_meter $pyeong<br>";
    }
    echo "--------------------<br>";
?>
