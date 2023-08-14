<?php

namespace ArrayAndHashing\TopKFrequentElements;

include_once "TopKFrequentElements.php";

$sol = new Solution();

$topKFrequent = $sol->topKFrequent([1, 1, 1, 2, 2, 3], 2);
sort($topKFrequent);
assert([1,2] === $topKFrequent);

$topKFrequent = $sol->topKFrequent([1], 1);
sort($topKFrequent);
assert([1] === $topKFrequent);
