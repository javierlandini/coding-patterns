<?php
namespace CodingPatterns\TwoPointers\InwardsTraversal;

/**
 * You are given a string.
 * Return true if the string is a palindrome, false otherwise.
 * 
 * Assumptions:
 * - The string can contain uppercase and lowercase letters, numbers, and symbols.
 * - Spaces and symbols should be ignored.
 * - The comparison should be case-insensitive.
 * 
 * Time complexity: The time complexity of isPalindromeValid is O(n) because we iterate through the string once.
 * Space complexity: O(1) because we only allocate a constant number of variables.
 */
class IsPalindromeValid {
    public function isPalindromeValid(string $value): bool {
        $pointer_left = 0;
        $pointer_right = strlen($value) - 1;
        $is_palindrome = true;
        while ($pointer_left < $pointer_right) {
            while ($pointer_left < $pointer_right && !$this->is_alphanumeric($value[$pointer_left])) {
                $pointer_left++;
            }
            while ($pointer_left < $pointer_right && !$this->is_alphanumeric($value[$pointer_right])) {
                $pointer_right--;
            }
            if (strtolower($value[$pointer_left]) !== strtolower($value[$pointer_right])) {
                $is_palindrome = false;
                break;
            }
            $pointer_left++;
            $pointer_right--;
        }
        return $is_palindrome;
    }
    private function is_alphanumeric(string $char): bool {
        return ctype_alnum($char);
    }
}