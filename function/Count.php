<?php

function countElement($arr, $value)
{
    $count = 0;
    foreach ($arr as $items) {
        if ($value == $items) {
            $count++;
        }
    }
    return $count;
}

function binarySearch($arr, $value)
{
    $left = 0;
    $right = count($arr) - 1;
    while ($left <= $right) {
        $middle = round(($left + $right) / 2);
        if ($arr[$middle] == $value) {
            return $middle;
        } elseif ($arr[$middle] > $value) {
            $right = $middle - 1;
        } else {
            $left = $middle + 1;
        }
    }
    return -1;
}

function binarySearchRecursive($left, $right, $arr, $value)
{
    if ($left > $right) {
        return -1;
    }
    $middle = round(($left + $right) / 2);
    if ($arr[$middle] == $value) {
        return $middle;
    } elseif ($arr[$middle] > $value) {
        return binarySearchRecursive($left, $middle - 1, $arr, $value);
    } else {
        return binarySearchRecursive($middle + 1, $right, $arr, $value);
    }
}

function delete($num, $arr)
{
    $index = binarySearchRecursive(0, count($arr) - 1, $arr, $num);
    if ($index != -1) {
        array_splice($arr, $index, 1);
    } else {
        echo "Not found $num in array";
    }
}