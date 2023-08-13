<?php

namespace BinarySearch\SearchInRotatedSortedArray;

include_once 'SearchInRotatedSortedArray.php';

$sol = new Solution();

assert(4 === $sol->search([4,5,6,7,0,1,2], 0));
assert(-1 === $sol->search([4,5,6,7,0,1,2], 3));
assert(-1 === $sol->search([1], 0));
assert(1 === $sol->search([3,1], 1));
assert(0 === $sol->search([5,1,3], 5));
