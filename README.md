# Coding Patterns in PHP

A repository dedicated to studying, implementing, and practicing common algorithmic coding patterns and problem-solving techniques in PHP, tested with [Pest](https://pestphp.com/).

## Requirements

- PHP 8.5
- Composer

## Getting Started

1. **Clone the repository:**
   ```bash
   git clone <repo-url>
   cd coding-patterns
   ```

2. **Install dependencies:**
   ```bash
   composer install
   ```

3. **Run tests:**
   ```bash
   ./vendor/bin/pest
   ```

## Implemented Patterns

### Two Pointers
- **Inward Traversal**
  - [PairSum](file:///Users/javierlandini/coding-patterns/src/TwoPointers/InwardsTraversal/PairSum.php): Finding target sum pairs in a sorted array.
  - [TripletSum](file:///Users/javierlandini/coding-patterns/src/TwoPointers/InwardsTraversal/TripletSum.php): Finding unique triplets that sum up to zero or a target.
  - [IsPalindromeValid](file:///Users/javierlandini/coding-patterns/src/TwoPointers/InwardsTraversal/IsPalindromeValid.php): Verifying if a string is a palindrome ignoring non-alphanumeric characters.
  - [LargestContainer](file:///Users/javierlandini/coding-patterns/src/TwoPointers/InwardsTraversal/LargestContainer.php): Finding two lines that together with the x-axis form a container holding the most water.
- **Staged Traversal**
- **Unidirectional Traversal** (Fast & Slow pointers / Sliding Window foundations)

## Testing

Tests are written using Pest PHP and mirror the structure under `tests/Unit`.

To run tests filtered by a specific pattern or problem:
```bash
./vendor/bin/pest --filter=LargestContainerTest
```
