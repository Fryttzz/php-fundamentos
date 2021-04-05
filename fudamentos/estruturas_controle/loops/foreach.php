<?php
$names = ["waasleey", "leozin044", "rychillie", "jpbrabo"];

foreach($names as $name) {
    echo $name . " ";
}

foreach ($names as $key => $name) {
    echo (++$key) . "." . $name . " ";
}