<?php
use CodingPatterns\TwoPointers\InwardsTraversal\TripletSum;

test('should return the triplet that add up to the target value', function() {
    $tripletSum =new TripletSum();
    expect($tripletSum->findTriplets(0, [-1, 2, -2, 1, -1, 2]))->toBe([[-1, -1, 2]]);
});
test('should return the triplets that add up to the target value', function () {
    $tripletSum = new TripletSum();
    expect($tripletSum->findTriplets(0, [0, -1, 2, -3, 1]))->toBe([[-3, 1, 2], [-1, 0, 1]]);
});
test('if no triplet with the given sum is found should return an empty array', function () {
    $tripletSum = new TripletSum();
    expect($tripletSum->findTriplets(10, [2, 7, 11, 15]))->toBe([]);
});
test('an empty values array should return an empty array', function () {
    $tripletSum = new TripletSum();
    expect($tripletSum->findTriplets(10, []))->toBe([]);
});
test('a single element values array should return an empty array', function () {
    $tripletSum = new TripletSum();
    expect($tripletSum->findTriplets(10, [1]))->toBe([]);
});
test('a two element values array should return an empty array', function () {
    $tripletSum = new TripletSum();
    expect($tripletSum->findTriplets(10, [1, 2]))->toBe([]);
});
test('an array with all the same values should return triplets of that value', function () {
    $tripletSum = new TripletSum();
    expect($tripletSum->findTriplets(6, [2, 2, 2, 2]))->toBe([[2, 2, 2]]);
});
test('an array with duplicate triplets should return them only once', function() {
    $tripletSum = new TripletSum();
    expect($tripletSum->findTriplets(0, [0, 0, 1, -1, 1, -1]))->toBe([[-1, 0, 1]]);
});