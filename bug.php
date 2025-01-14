function calculateSum(numbers) {
  if (!Array.isArray(numbers)) {
    throw new Error('Invalid input: numbers must be an array.');
  }

  let sum = 0;
  for (let i = 0; i < numbers.length; i++) {
    if (typeof numbers[i] !== 'number') {
      throw new Error('Invalid input: Array elements must be numbers.');
    }
    sum += numbers[i];
  }

  return sum;
}

console.log(calculateSum([1, 2, 3])); // Output: 6
console.log(calculateSum([1, 2, 'a'])); // Throws an error