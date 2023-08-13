<?php
namespace Stack\ValidParentheses;

include_once "ValidParentheses.php";

$sol = new Solution();

assert(true === $sol->isValid('()'));
assert(true === $sol->isValid('()[]{}'));
assert(false === $sol->isValid('(]'));
assert(false === $sol->isValid(']'));
