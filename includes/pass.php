<?php

$current = '123456789'; //1234
$hashpwd=password_hash($current, PASSWORD_DEFAULT);
echo $hashpwd;
$hash = '$2y$07$BCryptRequires22Chrcte/VlQH0piJtjXl.0t1XkA8pw9dMXTpOq';
$hash1 = '$2y$10$iQiwkIYlUNozQYWNpogdUuqF94HPrBlBF2dvnKIeeIScXmLqJ5l2a';
$hash2 = '$2y$10$KHBi42a8jpuYzmFlnQiB7eWbSVaMLyNAxi81J36xelrSHj5z2tu1e';
$hash3 = '$2y$10$msfP9YpPn8e2KT7zten5OOZATS0oheymm1wc2HU9xJm6OwCX2Mb.O';
$hash4 = '$2y$10$xrJ5jL2a7lxRfeW4xB5XsO7VSOWFJycsaFWgMchg31EIJOag1fNPG';
$hash5 = '$2y$10$YQe8ZT.bN.w0xDo0pOJ20.xvfXqgmnwYKHUxWXQVYdJOM7Hu3sl.u';
$hash6 = '$2y$10$3h0rUkPz/AvxE/LNvcSjNuMx9rhpW9FW6K5mruRsyF0hZK/mEcK7O';
$hash7 = '$2y$10$vrWx.GS0SnUu9cjFRd2SlusPEtRQWhonMxiNKTXyBOAZ4gvUlAc4a';
/*
if (password_verify($current, $hash7)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}
*/



 ?>
