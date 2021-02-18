<?php
session_start();
/*
 * Codes:
 *  0 - Internal error
 *  1 - Password is OK
 *  2 - Password is wrong
 */

if( !isset( $_POST['password'] ) ) {
    echo 0;
}

$correctPass = 'test';
if( $_POST['password'] === $correctPass ) {
    $_SESSION['logged'] = 1;
    echo 1;
}
else {
    echo 2;
}

return;
?>
