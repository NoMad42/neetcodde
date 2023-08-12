<?php

namespace SlidingWindow\LongestSubstringWithoutRepeatingCharacters;

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring(string $s): int
    {
        $len = strlen($s);
        if ($len < 2) {
            return $len;
        }

        $max = 0;
        $map = [];
        for ($right = $left = 0; $right < $len; $right++) {
            $map[$s[$right]] = ($map[$s[$right]] ?? 0) + 1;

            while ($map[$s[$right]] > 1) {
                $map[$s[$left]]--;
                $left++;
            }

            $max = max($max, $right - $left + 1);
        }

        return $max;
    }
}
