<?php
function getTriangleArea($height, $base)
{
    return $base * $height / 2;
}
function getSquareArea ($height, $base)
{
    return $base * $height;
}
function getDaikeiArea ($apperBase, $height, $base)
{
    return ($apperBase + $base) * $height / 2;
}

echo getSquareArea(5, 5) . "\n";
echo getTriangleArea(7, 8) . "\n";
echo getDaikeiArea(4, 5, 4);