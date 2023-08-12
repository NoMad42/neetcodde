<?php

namespace TwoPointers\ContainerWithMostWater;

include_once "ContainerWithMostWater.php";

$sol = new Solution();

assert(49 === $sol->maxArea([1,8,6,2,5,4,8,3,7]));
assert(1 === $sol->maxArea([1,1]));
