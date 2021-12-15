<?php
function randomText($text)
{
    $val=substr(str_shuffle($text), 0, 10);
    return $val;
}

?>