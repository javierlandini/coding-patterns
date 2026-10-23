<?php
use CodingPatterns\TwoPointers\InwardsTraversal\IsPalindromeValid;

test('should return true if the string is a palindrome', function() {
    $isPalindromeValid = new IsPalindromeValid();
    expect($isPalindromeValid->isPalindromeValid('madam'))->toBeTrue();
});
test('should return true if the string is a palindrome with diff cases', function() {
    $isPalindromeValid = new IsPalindromeValid();
    expect($isPalindromeValid->isPalindromeValid('Menem'))->toBeTrue();
});
test('should return true if the string is a palindrome with spaces and diff cases', function() {
    $isPalindromeValid = new IsPalindromeValid();
    expect($isPalindromeValid->isPalindromeValid('A man, a plan, a canal: Panama'))->toBeTrue();
});
test('should return true if the string is a palindrome with only punctuation and numbers', function() {
    $isPalindromeValid = new IsPalindromeValid();
    expect($isPalindromeValid->isPalindromeValid('12.02.2021'))->toBeTrue();
});
test('should return false if the string is not a palindrome with only punctuation and numbers', function() {
    $isPalindromeValid = new IsPalindromeValid();
    expect($isPalindromeValid->isPalindromeValid('21.02.2021'))->toBeFalse();
});
test('should return false if the string is not a palindrome', function() {
    $isPalindromeValid = new IsPalindromeValid();
    expect($isPalindromeValid->isPalindromeValid('hello'))->toBeFalse();
});
test('should return false if the string is not a palindrome with punctuation', function() {
    $isPalindromeValid = new IsPalindromeValid();
    expect($isPalindromeValid->isPalindromeValid('hello, world!'))->toBeFalse();
});
test('should return true if the string is an empty string', function() {
    $isPalindromeValid = new IsPalindromeValid();
    expect($isPalindromeValid->isPalindromeValid(''))->toBeTrue();
});
test('should return true if the string is a single character string', function() {
    $isPalindromeValid = new IsPalindromeValid();
    expect($isPalindromeValid->isPalindromeValid('a'))->toBeTrue();
});
test('should return false if the string is a two-character string and not a palindrome', function() {
    $isPalindromeValid = new IsPalindromeValid();
    expect($isPalindromeValid->isPalindromeValid('ab'))->toBeFalse();
});
test('should return true if the string is a two-character string and a palindrome', function() {
    $isPalindromeValid = new IsPalindromeValid();
    expect($isPalindromeValid->isPalindromeValid('aa'))->toBeTrue();
});
test('should return true if the string contains only non alphanumeric characters', function() {
    $isPalindromeValid = new IsPalindromeValid();
    expect($isPalindromeValid->isPalindromeValid('!, (?)'))->toBeTrue();
});