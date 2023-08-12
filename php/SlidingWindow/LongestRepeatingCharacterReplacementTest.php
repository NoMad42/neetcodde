<?php

namespace SlidingWindow\LongestRepeatingCharacterReplacement;

include_once "LongestRepeatingCharacterReplacement.php";

$sol = new Solution();

assert(4, $sol->characterReplacement('ABAB', 2));
assert(4, $sol->characterReplacement('AABABBA', 1));
assert(5, $sol->characterReplacement('ABABBA', 2));
