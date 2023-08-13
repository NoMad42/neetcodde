<?php

namespace SlidingWindow\MinimumWindowSubstring;

include_once "MinimumWindowSubstring.php";

$sol = new Solution();

assert('BANC' === $sol->minWindow("ADOBECODEBANC", "ABC"));
assert('a' === $sol->minWindow("a", "a"));
assert('' === $sol->minWindow("a", "aa"));
assert('b' === $sol->minWindow("abc", "b"));
