<?php
namespace CodingPatterns\TwoPointers\InwardsTraversal;

/**
 * You are given an array of numbers, each representing the height of a vertical line on a graph.
 * A water container can be formed with any pair of these lines, along with the x-axis of the graph.
 * Find the largest water container that can be formed.
 * 
 * Assumptions:
 * - The array only contains positive numbers
 * 
 * Time complexity: O(n) as we perform approximately n iterations using the two pointers technique.
 * Space complexity: O(1) as we only allocate a constant number of variables.
 */
class LargestContainer {
    public function findLargestContainer(array $heights): int{
        $largest_container = 0;
        $left_pointer = 0;
        $right_pointer = count($heights) - 1;
        while ($left_pointer < $right_pointer) {
            $current_container = min($heights[$left_pointer], $heights[$right_pointer]) * ($right_pointer - $left_pointer);
            if ($current_container > $largest_container) {
                $largest_container = $current_container;
            }
            switch(true) {
                case ($heights[$left_pointer] < $heights[$right_pointer]):
                    $left_pointer++;
                    break;
                case ($heights[$left_pointer] > $heights[$right_pointer]):
                    $right_pointer--;
                    break;
                case ($heights[$left_pointer] === $heights[$right_pointer]):
                    # If both sides are equal, moving just one pointer will generate a smaller container
                    # because the witdh will be smaller and the max height we can use
                    # will still be the same we already found (if we have a taller side on the pointer we move)
                    $left_pointer++;
                    $right_pointer--;
                    break;
            }
        }
        return $largest_container;
    }
}