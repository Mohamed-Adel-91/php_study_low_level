<?php
// Write Function Content Here
function greeting($name, $title = "")
{
    if ($title == "Male") {
        return "Hello Mr." . $name; //Returning the value from function
    } elseif ($title == "Female") {
        return "Hello Miss/Mrs. " . $name;
    } else {
        return "Hello " . $name; //Printing the value outside of the function
    }
}

// Needed Output
echo greeting("Osama", "Male") . "<br>"; // Hello Mr Osama
echo greeting("Eman", "Female") . "<br>"; // Hello Miss Eman
echo greeting("Sameh") . "<br>"; // Hello Sameh

echo "<hr>";

// Write Function Content Here
function get_arguments(...$all)
{
    // print_r($all);
    $result = "";
    foreach ($all as $arg):
        $result .= $arg . " ";
    endforeach;
    echo $result . "<br>";
}

// Needed Output
echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
echo get_arguments("I", "Love", "PHP"); // I Love PHP

echo "<hr>";

// Write Function Content Here
function sum_all(...$all)
{
    $result = 0;
    foreach (func_get_args() as $arg):
        if ($arg == 5) {
            continue;
        }
        if ($arg == 10) {
            $arg = 20;
        }
        $result += $arg;
    endforeach;
    return $result;
}

// Needed Output
echo sum_all(10, 12, 5, 6, 6, 10); // 64
echo "<br>";
echo sum_all(5, 10, 5, 10); // 40

echo "<hr>";

// Write Function Content Here
function multiply(...$nums)
{
    $result = 1;
    foreach (func_get_args() as $arg):
        if (is_string($arg)) {
            continue;
        }
        if (is_double($arg)) {
            $arg = intval($arg);
        }
        $result *= $arg;
    endforeach;
    return $result;
}

// Needed Output
echo multiply(10, 20); // 200
echo "<br>";
echo multiply("A", 10, 30); // 300
echo "<br>";
echo multiply(100.5, 10, "B"); // 1000
echo "<br>";

echo "<hr>";
function check_status($arg1, $arg2, $arg3)
{
    $name = '';
    $age = 0;
    $availability = false;

    // Determine the data types of arguments
    foreach ([$arg1, $arg2, $arg3] as $arg) {
        if (is_string($arg)) {
            $name = $arg;
        } elseif (is_int($arg)) {
            $age = $arg;
        } elseif (is_bool($arg)) {
            $availability = $arg;
        }
    }

    // Ensure that all necessary values are set
    if ($name === '' || $age === 0) {
        return "Invalid parameters. Please provide a valid name (string) and age (integer).";
    }

    $status = "Hello $name, Your Age Is $age, You Are";

    if ($availability) {
        $status .= " Available For Hire";
    } else {
        $status .= " Not Available For Hire";
    }

    return $status;
}

// Needed Output
echo check_status("Mohamed", 33, true) . PHP_EOL; // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo "<br>";
echo check_status(33, "Mohamed", true) . PHP_EOL; // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo "<br>";
echo check_status(true, 33, "Mohamed") . PHP_EOL; // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo "<br>";
echo check_status(false, "Mohamed", 33) . PHP_EOL; // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"

echo "<hr>";
// Write Function Content Here
function calculate($a, $b, $op = "a")
{
    $result = null;
    if ($op == "add" || $op == "a"):
        $result = $a + $b;
    elseif ($op == "subtract" || $op == "s"):
        $result = $a - $b;
    elseif ($op == "multiply" || $op == "m"):
        $result = $a * $b;
    else:
        echo "Error! Invalid Operator.";
    endif;
    return $result;

}

// Needed Output
echo calculate(10, 20); // 30
echo "<br>";
echo calculate(10, 20, "a"); // 30
echo "<br>";
echo calculate(10, 20, "s"); // -10
echo "<br>";
echo calculate(10, 20, "subtract"); // -10
echo "<br>";
echo calculate(10, 20, "multiply"); // 200
echo "<br>";
echo calculate(10, 20, "m"); // 200

echo "<hr>";
function calc(int $num_one, int $num_two): float
{
    return $num_one + $num_two;
}

echo calc(20, 10); // 30
echo "<br>";
echo gettype(calc(20, 10)); // Double

echo "<hr>";

$message = "Hello";

// Write Your Code Here

function Hello($name)
{
    global $message;
    return $message . " " . $name;
};

echo $message("Mohamed"); // Hello Mohamed

echo "<hr>";
// Write Function Content Here
$greet = fn($name) => "Hi " . $name;

// Needed Output
echo $greet("Mohamed"); // Greetings
