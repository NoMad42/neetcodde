<?php

namespace SlidingWindow\BestTimeToBuyAndSellStock;

include_once "BestTimeToBuyAndSellStock.php";

$sol = new Solution();

assert(5 === $sol->maxProfit([7,1,5,3,6,4]));
assert(0 === $sol->maxProfit([7,6,4,3,1]));
