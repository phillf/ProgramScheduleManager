<?php

$fruits = array("23:00", "01:00");
sort($fruits, SORT_NUMERIC);
foreach ($fruits as $key => $val) {
    echo "fruits[" . $key . "] = " . $val . "\n";
}

?>