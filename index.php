<?php

// echo("hello world !");

// variable
$toto;
$tata = "test";
// echo($tata);

// tableaux
$tab = [];
$tab[] = "a";
$tab[] = "b";
var_dump($tab);
$tab[1] = "c";
echo("<br>");
var_dump($tab);
echo("<br>");
echo($tab);
echo("<br>");
echo($tab[0]);
echo("<br>");
$tab[] = $tab;
var_dump($tab);

echo("<br>");
$t = [
    "a" => 1,
    "b" => 2,
    "key" => "value"
];
var_dump($t);
var_dump($t["key"]);

// conditions
if (1 == 1) {
    echo("1 == 1");
} elseif (2 == 2) {
    echo("2 == 2");
} else {
    echo("ou pas");
}
echo("<br>");

// boucles
$cases = [
    "a",
    "b",
    "c",
    "d",
    "e",
];
foreach($cases as $case) {
    echo($case);
}
echo("<br>");
$kvs = [
    "key1" => "value1",
    "key2" => "value2",
    "key3" => "value3",
    "key4" => "value4",
    "key5" => "value5",
];
foreach($kvs as $key => $value) {
    echo("key : " . $key . " value : " . $value);
}

echo("<br>");
echo("cases");
echo("<br>");
foreach($cases as $key => $value) {
    echo("key : " . $key . " value : " . $value);
}

