<?php

namespace SlidingWindow\LongestRepeatingCharacterReplacement;

class Solution {

    /**
     * @param String $s
     * @param Integer $k
     * @return Integer
     */
    function characterReplacement($s, $k) {
        $mapFrequency = [];
        $left = 0;
        $result = 0;
        $maxf = 0;
        foreach (range(0, strlen($s) - 1) as $right) {
            $mapFrequency[$s[$right]] = 1 + ($mapFrequency[$s[$right]] ?? 0);
            $maxf = max($maxf, $mapFrequency[$s[$right]]);

            if (($right - $left + 1) - $maxf > $k) {
                $mapFrequency[$s[$left]] -= 1;
                $left++;
            }

            $result = max($result, $right - $left + 1);
        }

        return $result;
    }
}
