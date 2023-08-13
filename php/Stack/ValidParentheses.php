<?php

namespace Stack\ValidParentheses;

class Solution
{
    /**
     * @param String $s
     * @return Boolean
     */
    function isValid(string $s): bool
    {
        $stack = new \SplStack();
        $open = ['(', '[', '{'];
        $close = [')', ']', '}'];
        for ($i = 0; $i < strlen($s); $i++) {
            $c = $s[$i];
            if (in_array($c, $open)) {
                $stack->push($c);
                continue;
            }

            $ci = array_search($c, $close);

            if ($ci === false) {
                continue;
            }

            if ($stack->isEmpty()) {
                return false;
            }

            $lc = $stack->pop();
            $oi = array_search($lc, $open);

            if ($ci !== $oi) {
                return false;
            }
        }

        return $stack->isEmpty();
    }
}
