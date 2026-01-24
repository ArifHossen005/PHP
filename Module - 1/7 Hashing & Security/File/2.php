<?php
$common_passwords = ['123456', 'password', '123456789', '12345678', '12345'];


foreach ($common_passwords as $password) {
    echo md5($password) . "\n";
}