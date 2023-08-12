<?php

namespace SlidingWindow\LongestSubstringWithoutRepeatingCharacters;

include_once "LongestSubstringWithoutRepeatingCharacters.php";

$sol = new Solution();

assert(3 === $sol->lengthOfLongestSubstring('abcabcbb'));
assert(1 === $sol->lengthOfLongestSubstring('bbbbb'));
assert(3 === $sol->lengthOfLongestSubstring('pwwkew'));
assert(1 === $sol->lengthOfLongestSubstring(' '));
assert(2 === $sol->lengthOfLongestSubstring('au'));
assert(3 === $sol->lengthOfLongestSubstring('dvdf'));
