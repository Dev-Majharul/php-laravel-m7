<?php
require_once 'functions.php';

while (true) {
    echo "Enter numbers separated by spaces (or type 'exit' to quit): ";
    $input = trim(fgets(STDIN));

    if (strtolower($input) === 'exit') {
        echo "Exiting... Goodbye!\n";
        break;
    }

    $numbers = NumberAnalyzer::validateInput($input);

    if (!$numbers) {
        echo "❌ Invalid input. Please enter only numeric values.\n\n";
        continue;
    }

    NumberAnalyzer::showResults($numbers);
}
