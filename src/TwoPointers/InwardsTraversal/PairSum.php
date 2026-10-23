<?php

namespace CodingPatterns\TwoPointers\InwardsTraversal;

/**
 * 
 * You are given an array of integers `values_array` and a `target_value`. 
 * Write a function that returns the indices of the two numbers such that 
 * they add up to the `target_value`.
 * 
 * Assumptions:
 * - The input array `values_array` is sorted in ascending order.
 * - There will be at most one solution.
 * - If no such pair is found, return an empty array.
 * 
 * Time complexity: The time complexity of pair_sum_sorted is O(n) because we perform approximately n iterations using the two-pointer technique in the worst case.
 * Space complexity: We only allocated a constant number of variables, so the space complexity is O(1).
 */

class PairSum {
    public function pair_sum_sorted(int $target_value, array $values_array): array {
        $pointer_left = 0;
        $pointer_right = count($values_array) - 1;
        while ($pointer_left < $pointer_right) {
            $sum = $values_array[$pointer_left] + $values_array[$pointer_right];
            switch (true) {
                case ($sum === $target_value):
                    return [$pointer_left, $pointer_right];
                case ($sum < $target_value):
                    $pointer_left++;
                    break;
                case ($sum > $target_value):
                    $pointer_right--;
                    break;
            }
        }

        return [];
    }
}
    