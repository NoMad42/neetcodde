<?php

namespace SlidingWindow\MinimumWindowSubstring;

class Solution
{
    private function initValues(string $t, string $s): array
    {
        $keys = str_split($t);

        $targetCharacterFrequency = array_count_values($keys);
        $targetCharacterCount = count($targetCharacterFrequency);

        $currentCharacterFrequency = array_fill_keys($keys, 0);
        $currentCharacterCount = 0;

        $result = "";

        $left = 0;
        $right = 0;
        $sAsArray = str_split($s);

        return [
            $targetCharacterFrequency,
            $targetCharacterCount,
            $currentCharacterFrequency,
            $currentCharacterCount,
            $result,
            $left,
            $right,
            $sAsArray
        ];
    }

    /**
     * @param String $s
     * @param String $t
     * @return String
     */
    function minWindow(string $s, string $t): string
    {
        list(
            $targetCharacterFrequency,
            $targetCharacterCount,
            $currentCharacterFrequency,
            $currentCharacterCount,
            $result,
            $left,
            $right,
            $sAsArray
        ) = $this->initValues($t, $s);

        while ($right < strlen($s)) {
            $rightCharacter = $sAsArray[$right];

            if (array_key_exists($rightCharacter, $currentCharacterFrequency)) {
                $currentCharacterFrequency[$rightCharacter]++;
            }

            if (
                array_key_exists($rightCharacter, $targetCharacterFrequency) &&
                $targetCharacterFrequency[$rightCharacter] === $currentCharacterFrequency[$rightCharacter]
            ) {
                $currentCharacterCount++;
            }

            while ($currentCharacterCount === $targetCharacterCount) {
                if ($result === '') {
                    $result = substr($s, $left, $right + 1);
                }
                if (($right - $left + 1) < strlen($result)) {
                    $result = substr($s, $left, $right - $left + 1);
                }

                $leftCharacter = $sAsArray[$left];

                if (array_key_exists($leftCharacter, $currentCharacterFrequency)) {
                    $currentCharacterFrequency[$leftCharacter]--;
                }

                if (
                    array_key_exists($leftCharacter, $targetCharacterFrequency) &&
                    $currentCharacterFrequency[$leftCharacter] < $targetCharacterFrequency[$leftCharacter]
                ) {
                    $currentCharacterCount--;
                }

                $left++;
            }
            $right++;
        }

        return $result;
    }
}
