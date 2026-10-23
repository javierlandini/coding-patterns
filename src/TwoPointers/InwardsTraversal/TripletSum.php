<?php
namespace CodingPatterns\TwoPointers\InwardsTraversal;

/**
 * 
 * You are given an array of values and a target value. Return all triplets from the array that sum up to the target value.
 * 
 * Assumptions:
 * - The input array `values` is not sorted.
 * - The values can be negative, zero or positive.
 * - If no such triplet is found, return an empty array.
 * 
 * Time complexity: Sorting the input array takes O(n log n) and then iterating through the array takes O(n^2). So the time complexity of findTriplets is O(n log n) + O(n^2) = O(n^2) because we perform approximately n iterations using the two-pointer technique in the worst case.
 * Space complexity: Sorting algorithm might take O(n) space complexity, or O(log n) depending on the implementation of the sorting algorithm. 
 * In addition, the space taken by the output array is O(n^2) in the worst case.
 */
class TripletSum {
    public function findTriplets(int $target_value, array $values): array {
        sort($values);
        if (empty($values)) {
            return [];
        }
        $results = [];
        for ($main_pointer = 0; $main_pointer < count($values); $main_pointer++) {
            # As the array is sorted, if the value at main_pointer is greater than the target value,
            # we can break the loop because the remaining values will also be greater than the target value.
            if ($values[$main_pointer] > $target_value) {
                break;
            }
            # We use this check to skip duplicate values at the main_pointer
            if ($main_pointer > 0 && $values[$main_pointer] === $values[$main_pointer - 1]) {
                continue;
            }
            $pointer_left = $main_pointer + 1;
            $pointer_right = count($values) - 1;
            $target_sum = $target_value - $values[$main_pointer];
            while ($pointer_left < $pointer_right) {
                $sum = $values[$pointer_left] + $values[$pointer_right];
                switch (true) {
                    case ($target_sum === $sum):
                        array_push($results, [$values[$main_pointer], $values[$pointer_left], $values[$pointer_right]]);
                        $pointer_left++;
                        # We use this check to skip duplicate values at the pointer_left
                        while ($pointer_left < $pointer_right && $values[$pointer_left] === $values[$pointer_left - 1]) {
                            $pointer_left++;
                        }
                        break;
                    case ($sum < $target_sum):
                        $pointer_left++;
                        break;
                    case ($sum > $target_sum):
                        $pointer_right--;
                        break;
                }
            }
        }
        return $results;
    }
}