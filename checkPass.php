<?php
/*
 * Codes:
 *  0 - Internal error
 *  1 - Password is OK
 *  2 - Password is wrong
 */

require( 'secure.php' ); // This file should have the password in it as $passcode
if( !isset( $_POST['password'] ) ) {
    echo 0;
}

$password = $_POST['password'];
if( strcmp( $password, $passcode ) == 0 ) {
    $_SESSION['logged'] = 1;
    echo var_dump($_SESSION);
}
else {
    echo 2;
}

return;
?>
