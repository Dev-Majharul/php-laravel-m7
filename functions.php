<?php

class NumberAnalyzer {
    public static function validateInput($input) {
        $parts = explode(" ", trim($input));
        $numbers = [];

        foreach ($parts as $part) {
            if (!is_numeric($part)) {
                return false;
            }
            $numbers[] = floatval($part);
        }

        return $numbers;
    }

    public static function getMax($numbers) {
        return max($numbers);
    }

    public static function getMin($numbers) {
        return min($numbers);
    }

    public static function getSum($numbers) {
        return array_sum($numbers);
    }

    public static function getAverage($numbers) {
        return round(self::getSum($numbers) / count($numbers), 2);
    }

    public static function showResults($numbers) {
        echo "\n=== Results ===\n";
        echo "Maximum: " . self::getMax($numbers) . "\n";
        echo "Minimum: " . self::getMin($numbers) . "\n";
        echo "Sum: " . self::getSum($numbers) . "\n";
        echo "Average: " . self::getAverage($numbers) . "\n";
        echo "================\n\n";
    }
}
