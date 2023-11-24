<?php

// Date Time format (November 15, 2023 - 5:27 pm)
$dt   = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
$date = $dt->format('F j, Y');
$tm   = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
$time = $tm->format('g:i a');

?>