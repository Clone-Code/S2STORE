<?php

function standardize_name($string) {
    $res = 
    $res = trim(mb_strtolower($string, "UTF-8"));
    $res = ucwords($res);
    return $res;
}

function print_name($string) {
    $res = explode(' ', $string);
    return array_pop($res);
}