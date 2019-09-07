<?php
$pass="SUper&&4";
$hurufbesar = preg_match('@[A-Z]@', $pass);
$hurufkecil = preg_match('@[a-z]@', $pass);
$angka = preg_match('@[0-9]@', $pass);
$karakter = preg_match('@[*_/^=.,&]@', $pass);

if(!$hurufbesar || !$hurufkecil || !$angka || !$karakter){
    echo "false";
}else{
    echo "true";
}