<?php

global $Queue;
$msg=<<<EOT
可用命令：
checkin
credit
issue
osu
roll
time
version
voice
EOT;

$Queue[]= sendBack($msg);

?>
