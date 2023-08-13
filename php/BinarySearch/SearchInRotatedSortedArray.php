<?php

namespace BinarySearch\SearchInRotatedSortedArray;

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search(array $nums, int $target) {
        $left= 0;
        $right = count($nums) - 1;
        while ($left <= $right) {
            $mid = (int) (($right + $left) / 2);

            if ($nums[$mid] === $target) {
                return $mid;
            }

            if ($nums[$left] <= $nums[$mid]) {
                if ($target < $nums[$left] || $target > $nums[$mid]) {
                    $left = $mid + 1;
                } else {
                    $right = $mid - 1;
                }
            } else {
                if ($target > $nums[$right] || $target < $nums[$mid]) {
                    $right = $mid - 1;
                } else {
                    $left = $mid + 1;
                }
            }
        }

        return -1;
    }
}
