<?php
use CodingPatterns\TwoPointers\InwardsTraversal\PairSum;
test('should return the indices of the two numbers that add up to the target value', function () {
    $pairSum = new PairSum();
    expect($pairSum->pair_sum_sorted(7, [-5, -2, 3, 4, 6]))->toBe([2, 3]);
});
test('if no pair with the given sum is found should return an empty array', function () {
    $pairSum = new PairSum();
    expect($pairSum->pair_sum_sorted(10, [2, 7, 11, 15]))->toBe([]);
});
test('an empty values arrays should return an empty array', function () {
    $pairSum = new PairSum();
    expect($pairSum->pair_sum_sorted(10, []))->toBe([]);
});
test('a two-elements array that add up to the target value should return the two indices', function() {
    $pairSum = new PairSum();
    expect($pairSum->pair_sum_sorted(10, [2, 8]))->toBe([0, 1]);
});
test('a two-elements array that doesn\'t add up to the target value should return an empty array', function() {
    $pairSum = new PairSum();
    expect($pairSum->pair_sum_sorted(10, [2, 3]))->toBe([]);
});
test('an array with duplicated values should return indices of the two numbers that add up to the target value', function() {
    $pairSum = new PairSum();
    expect($pairSum->pair_sum_sorted(5, [2, 2, 3]))->toBeIn([[0, 2], [1, 2]]);
});
test('an array with negative numbers should return indices of the two numbers that add up to the target value', function() {
    $pairSum = new PairSum();
    expect($pairSum->pair_sum_sorted(2, [-1, 2, 3]))->toBe([0, 2]);
});
test('an array with negative numbers and a negative target should return indices of the two numbers that add up to the target value', function() {
    $pairSum = new PairSum();
    expect($pairSum->pair_sum_sorted(-5, [-3, -2, -1]))->toBe([0, 1]);
});