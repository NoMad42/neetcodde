<?php

namespace TwoPointers\ContainerWithMostWater;

class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height) {
        $maxArea = 0;
        $left = 0;
        $right = count($height) - 1;

        while ($left < $right) {
            $area = ($right - $left) * min($height[$left], $height[$right]);
            $maxArea = max($area, $maxArea);

            if ($height[$left] < $height[$right]) {
                $left++;
            } else {
                $right--;
            }
        }
        return $maxArea;
    }
}
