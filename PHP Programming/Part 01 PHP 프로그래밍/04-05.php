<?php
    $result = 1;

    for($factorial = 1; $factorial<=10; $factorial++){
        $result = $result * $factorial;
        echo "{$factorial}! = $result<br>";
    }
?>