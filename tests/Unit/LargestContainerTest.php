<?php
use CodingPatterns\TwoPointers\InwardsTraversal\LargestContainer;

test('largest container should be 24', function(){
    $largestContainer = new LargestContainer();
    expect($largestContainer->findLargestContainer([2, 7, 8, 3, 7, 6]))->toBe(24);
});
test('an empty array should return 0', function() {
    $largestContainer = new LargestContainer();
    expect($largestContainer->findLargestContainer([]))->toBe(0);
});
test('a single element array should return 0', function() {
    $largestContainer = new LargestContainer();
    expect($largestContainer->findLargestContainer([1]))->toBe(0);
});
test('an array with no containers should return 0', function() {
    $largestContainer = new LargestContainer();
    expect($largestContainer->findLargestContainer([0, 1, 0]))->toBe(0);
});
test('an array where all heights are the same', function() {
    $largestContainer = new LargestContainer();
    expect($largestContainer->findLargestContainer([3, 3, 3, 3]))->toBe(9);
});
test('an array with strictly increasing heights', function() {
    $largestContainer = new LargestContainer();
    expect($largestContainer->findLargestContainer([1, 2, 3]))->toBe(2);
});
test('an array with strictly decreasing heights', function() {
    $largestContainer = new LargestContainer();
    expect($largestContainer->findLargestContainer([3, 2, 1]))->toBe(2);
});