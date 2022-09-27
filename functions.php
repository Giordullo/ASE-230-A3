<?php

function GetAge($date) // Calculate their Age
{
 $now = new DateTime();
 $val = $now->diff($date);
 return $val->y;
}

function GetTime($date) // Calculate the Years, Months, and Days from their Birth
{
    $now = new DateTime();
    $val = $date->diff($now);
    return $val->y . " years, " . $val->m." months, & ".$val->d." days ago";
}

?>