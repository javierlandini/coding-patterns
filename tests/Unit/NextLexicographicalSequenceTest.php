<?php
use CodingPatterns\TwoPointers\StagedTraversal\NextLexicographicalSequence;
test('next sequence should be abdc', function() {
    $nextLexicographicalSequence = new NextLexicographicalSequence();
    expect($nextLexicographicalSequence->findNextLexicographicalSequence('abcd'))->toBe('abdc');
});
test('next sequence should be abdacde', function() {
    $nextLexicographicalSequence = new NextLexicographicalSequence();
    expect($nextLexicographicalSequence->findNextLexicographicalSequence('abcedda'))->toBe('abdacde');
});
test('last lexicographical sequence should return the first one', function() {
    $nextLexicographicalSequence = new NextLexicographicalSequence();
    expect($nextLexicographicalSequence->findNextLexicographicalSequence('dcba'))->toBe('abcd');
});
test('a single character string should return the same string', function() {
    $nextLexicographicalSequence = new NextLexicographicalSequence();
    expect($nextLexicographicalSequence->findNextLexicographicalSequence('a'))->toBe('a');
});
test('a string with repeated characters should return the same string', function() {
    $nextLexicographicalSequence = new NextLexicographicalSequence();
    expect($nextLexicographicalSequence->findNextLexicographicalSequence('aaaa'))->toBe('aaaa');
});
test('next sequence should be ynsdeit', function() {
    $nextLexicographicalSequence = new NextLexicographicalSequence();
    expect($nextLexicographicalSequence->findNextLexicographicalSequence('ynitsed'))->toBe('ynsdeit');
});
test('pivot at 1st position', function() {
    $nextLexicographicalSequence = new NextLexicographicalSequence();
    expect($nextLexicographicalSequence->findNextLexicographicalSequence('acb'))->toBe('bac');
});