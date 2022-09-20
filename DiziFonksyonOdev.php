<?php
$a = '<br>';
$p = '<pre>';
$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];
echo $p;
/*

function myFunc($key, $value)
{
    $arrayFilter = array_filter($key);
    $arrayRandom = array_rand($arrayFilter, $value);
    $endOfExam = array_map(function ($item) use ($arrayFilter) {
        return $arrayFilter[$item];
    }, $arrayRandom);
    return $endOfExam;
    }

echo $p;

print_r(myFunc($planets, 2));
print_r(myFunc($planets, 2));
print_r(myFunc($planets, 2));
print_r(myFunc($planets, 2,3));
print_r(myFunc($planets, 2));
print_r(myFunc($planets, 2));
print_r(myFunc($planets, 2));
*/

function getPlanets($key,$value){
    $key = array_filter($key);
    $planetRandom = array_rand($key,$value);
    return array_map(function ($item) use ($key){
        return $key[$item];
    },$planetRandom);
    }


print_r(getPlanets($planets,2));
print_r(getPlanets($planets,3));
print_r(getPlanets($planets,2));
print_r(getPlanets($planets,4));
print_r(getPlanets($planets,5));
