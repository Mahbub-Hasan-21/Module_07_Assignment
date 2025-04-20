<?php

    while (true) {
        echo "\nEnter a list of numbers separated by spaces (or type 'exit' to quit): ";
        $input = trim(fgets(STDIN));

        if (strtolower($input) === 'exit') {
            echo "Goodbye!\n";
            break;
        }

        $numbers = explode(' ', $input);

        $valid = true;
        foreach ($numbers as $num) {
            if (!is_numeric($num)) {
                $valid = false;
                break;
            }
        }

        if (!$valid) {
            echo "Please enter only numbers separated by spaces.\n";
            continue;
        }

        $numbers = array_map('floatval', $numbers);

        $max = max($numbers);
        $min = min($numbers);
        $sum = array_sum($numbers);
        $avg = $sum / count($numbers);

        echo "\n=== Results ===\n";
        echo "Maximum: $max\n";
        echo "Minimum: $min\n";
        echo "Sum: $sum\n";
        echo "Average: " . number_format($avg, 2) . "\n";
    }
    
?>
