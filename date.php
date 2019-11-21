<?php

$value = "12 décembre 1998";

$dates = explode(' ', trim($value));
$months = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre");
$monthLetter = $dates[1];
$monthNumber = array_search($monthLetter, $months) + 1;
$date = $dates[2] . '-' . $monthNumber . '-' . $dates[0];

var_dump($date);
