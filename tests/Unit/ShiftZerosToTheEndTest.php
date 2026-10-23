<?php
use CodingPatterns\TwoPointers\UnidirectionalTraversal\ShiftZerosToTheEnd;

test('zeros are moved to the end', function() {
    $shiftZeros = new ShiftZerosToTheEnd();
    $input = [0, 1, 0, 3, 2];
    $shiftZeros->shiftZerosToTheEnd($input);
    expect($input)->toBe([1, 3, 2, 0, 0]);
});
test('an empty array should not be modified', function() {
    $shiftZeros = new ShiftZerosToTheEnd();
    $input = [];
    $shiftZeros->shiftZerosToTheEnd($input);
    expect($input)->toBe([]);
});
test('an array with one 0 should not be modified', function() {
    $shiftZeros = new ShiftZerosToTheEnd();
    $input = [0];
    $shiftZeros->shiftZerosToTheEnd($input);
    expect($input)->toBe([0]);
});
test('an array with one 1 should not be modified', function(){
    $shiftZeros = new ShiftZerosToTheEnd();
    $input = [1];
    $shiftZeros->shiftZerosToTheEnd($input);
    expect($input)->toBe([1]);
});
test('an array with all zeros should not be modified', function(){
    $shiftZeros = new ShiftZerosToTheEnd();
    $input = [0,0,0];
    $shiftZeros->shiftZerosToTheEnd($input);
    expect($input)->toBe([0,0,0]);
});
test('an array with all non zeros should not be modified', function(){
    $shiftZeros = new ShiftZerosToTheEnd();
    $input = [1, 3, 2];
    $shiftZeros->shiftZerosToTheEnd($input);
    expect($input)->toBe([1, 3, 2]);
});
test('an array with all zeros already at the end should not be modified', function(){
    $shiftZeros = new ShiftZerosToTheEnd();
    $input = [1, 1, 1, 0, 0];
    $shiftZeros->shiftZerosToTheEnd($input);
    expect($input)->toBe([1, 1, 1, 0, 0]);
});
test('an array with all zeros at the beginning should have all zeros moved to the end', function(){
    $shiftZeros = new ShiftZerosToTheEnd();
    $input = [0, 0, 1, 1, 1];
    $shiftZeros->shiftZerosToTheEnd($input);
    expect($input)->toBe([1, 1, 1, 0, 0]);
});