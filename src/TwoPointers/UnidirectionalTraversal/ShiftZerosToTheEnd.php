<?php
namespace CodingPatterns\TwoPointers\UnidirectionalTraversal;

/**
 * You are given an array of integers and you need to modify the array in place to move all zero elements
 * to the end while maintaining the relative order of non-zero elements.
 * 
 * Time complexity: The time complexity is O(n) because we only iterate the array once.
 * Space complexity: The space complexity is O(1) because we make the swap in place.
 */
class ShiftZerosToTheEnd {
    public function shiftZerosToTheEnd(array &$values) {
        $left_pointer = 0;
        for($right_pointer = 0; $right_pointer < count($values); $right_pointer++) {
            if ($values[$right_pointer] !== 0) {
                if ($left_pointer !== $right_pointer) {
                    $tmp = $values[$left_pointer];
                    $values[$left_pointer] = $values[$right_pointer];
                    $values[$right_pointer] = $tmp;
                }
                $left_pointer++;
            }
        }
    }
}