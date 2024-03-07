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
echo check_status("Osama", 38, true) . PHP_EOL; // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo "<br>";
echo check_status(38, "Osama", true) . PHP_EOL; // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo "<br>";
echo check_status(true, 38, "Osama") . PHP_EOL; // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo "<br>";
echo check_status(false, "Osama", 38) . PHP_EOL; // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"
