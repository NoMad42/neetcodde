<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function threeSum($nums) {
        $res = [];
        sort($nums);

        foreach ($nums as $i => $a) {
            if ($i > 0 && $a === $nums[$i-1]) {
                continue;
            }

            $left = $i + 1;
            $right = count($nums) - 1;

            while ($left < $right) {
                $threeSum = $a + $nums[$left] + $nums[$right];
                if ($threeSum > 0) {
                    $right--;
                } elseif ($threeSum < 0) {
                    $left++;
                } else {
                    $res[] = [$a, $nums[$left], $nums[$right]];
                    $left++;
                    $right--;
                    while ($nums[$left] === $nums[$left - 1] && $left < $right) {
                        $left++;
                    }
                }
            }
        }

        return $res;
    }
}
