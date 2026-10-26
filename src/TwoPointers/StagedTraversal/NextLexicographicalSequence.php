<?php
namespace CodingPatterns\TwoPointers\StagedTraversal;

/**
 * You are given a string of lowercase English letters and you need to rearrange the characters
 * to form a new string representing the next inmediate sequence in lexicographical (alphabetical)
 * order. If the string is already last in alphabetical order, return the rearrangement that is
 * first in order.
 * 
 * Assumptions:
 * - The input string contains at least one character.
 * 
 * Time complexity: The time complexity is O(n) because we do a maximum of 2 iterations across the string, one to find
 * the pivot and another one to find the rightmost character that is greater than the pivot in the string suffix.
 * We also perform a reversal which takes O(n) time.
 * Space complexity: It is O(n) because the $input string is passed by value and
 * when we modify it, PHP copies it and it requires an n-sized allocation.
 * As we swap the string using a $tmp var and reverse it in place
 * only one n-sized allocation is done (might have been more if we used strrev and substr calls on $input).
 */
class NextLexicographicalSequence {
    public function findNextLexicographicalSequence(string $input): string {
        $right_pointer = strlen($input) - 1;
        $pivot = -1;
        # Search for the pivot
        while ($right_pointer > 0 ) {
            if ($input[$right_pointer] > $input[$right_pointer - 1]) {
                # If pivot found, find the position to swap it with and swap
                $pivot = $right_pointer - 1;
                $swap_position = $this->findSwap($input, $pivot);
                $tmp = $input[$pivot];
                $input[$pivot] = $input[$swap_position];
                $input[$swap_position] = $tmp;
                break;
            }
            $right_pointer--;
        }

        # Reverse the input string in place from pivot position + 1 (suffix)
        # Even if pivot was not found, we will reverse from the start
        # because $pivot is initialized in -1
        $left_pointer = $pivot + 1;
        $right_pointer = strlen($input) - 1;
        while ($left_pointer < $right_pointer) {
            [$input[$left_pointer], $input[$right_pointer]] = [$input[$right_pointer], $input[$left_pointer]];
            $left_pointer++;
            $right_pointer--;
        }
        return $input;
    }
    private function findSwap(string $input, int $pivot): int {
        for ($i = strlen($input) - 1; $i > $pivot; $i--) {
            if ($input[$i] > $input[$pivot]) {
                return $i;
            }
        }
        # In theory we should always find the swap and never reach here
        # but just in case we default to returning the pivot.
        return $pivot;
    }
}