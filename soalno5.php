<?php

$bil = 553847;

for ($i = 0; $i < strlen($bil); $i++) {
    $bilnya = substr($bil, $i, 1);
    if ($bilnya % 2 == 0) {
        echo "$bilnya-";
    } else {
        echo $bilnya;
    }
}
