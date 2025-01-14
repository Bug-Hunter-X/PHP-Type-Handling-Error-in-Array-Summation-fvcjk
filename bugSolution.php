function calculateSum(numbers) {
  if (!is_array(numbers)) {
    throw new Exception('Invalid input: numbers must be an array.');
  }

  $sum = 0;
  foreach ($numbers as $number) {
    if (!is_numeric($number)) {
      throw new Exception('Invalid input: Array elements must be numbers.');
    }
    $sum += $number;
  }

  return $sum;
}

//Example Usage
$numbers1 = [1, 2, 3];
echo calculateSum($numbers1); // Output: 6

// Example of error handling
try {
  $numbers2 = [1, 2, 'a'];
echo calculateSum($numbers2); 
} catch (Exception $e) {
  echo "Error: " . $e->getMessage(); // Output: Error: Invalid input: Array elements must be numbers.
}
