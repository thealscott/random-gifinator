<?php
$date = new DateTime('now', new DateTimeZone('Europe/London'));
print_r(json_encode($date));