<?php
require_once('animal.php');
require_once('ape.php');
require_once('frog.php');

$animal = new Animal('shaun');
echo "Name : " . $animal->name . "<br>";
echo "Legs : " . $animal->legs . "<br>";
echo "Cold Bolded : " . $animal->cold_bloded . "<br><br>";

$frog = new Frog('buduk');
echo "Name : " . $animal->name . "<br>";
echo "Legs : " . $animal->legs . "<br>";
echo "Cold Bolded : " . $animal->cold_bloded . "<br>";
echo $frog->yel() . "<br><br>";

$ape = new Ape('kera sakti');
echo "Name : " . $animal->name . "<br>";
echo "Legs : " . $animal->legs . "<br>";
echo "Cold Bolded : " . $animal->cold_bloded . "<br>";
echo $ape->jump() . "<br><br>";
