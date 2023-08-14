<?php

namespace ArrayAndHashing\TopKFrequentElements;

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer[]
     */
    function topKFrequent(array $nums, int $k): array
    {
        $map = array_count_values($nums);
        $counts = array_fill_keys(range(1, count($map)), []);

        foreach($map as $num => $count) {
            $counts[$count][] = $num;
        }

        $res = [];
        for ($i = count($counts); $i > 0; $i--) {
            $res = [...$res, ...$counts[$i]];
            if (count($res) >= $k) {
                return $res;
            }
        }

        return $res;
    }
}
