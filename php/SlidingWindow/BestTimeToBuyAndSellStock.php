<?php

namespace SlidingWindow\BestTimeToBuyAndSellStock;

class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        $maxProfit = 0;
        $buy = current($prices);
        next($prices);

        foreach ($prices as $price) {
            if ($price < $buy) {
                $buy = $price;
            } elseif ($maxProfit < ($profit = ($price - $buy))) {
                $maxProfit = $profit;
            }
        }

        return $maxProfit;
    }
}
