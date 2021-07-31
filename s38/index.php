<?php
$char = 'aAabd1_sscc';
if (preg_match('/aAa/', $char, $result)) {
    echo '成功';
    print_r($result);
} else {
    echo '失敗';
}
