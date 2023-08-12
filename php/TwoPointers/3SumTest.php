<?php

include_once "3Sum.php";

$sol = new Solution();

assert([] === $sol->threeSum([0,1,1]));
assert([[0,0,0]] === $sol->threeSum([0,0,0]));
assert([[-1,-1,2],[-1,0,1]] === $sol->threeSum([-1,0,1,2,-1,-4]));
