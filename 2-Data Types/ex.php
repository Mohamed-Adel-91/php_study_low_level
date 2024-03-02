<?php

echo (int) 15.2 + (int) 14.7 + (10.5 + 10.5); // 50.
echo '<br>';
echo gettype((int) (15.2 + 14.7 + (10.5 + 10.5))); // Integer
echo '<br>';

//100
// Method One
echo gettype((int) 100); // integer
echo '<br>';
// Method Two
echo gettype(100); // integer
echo '<br>';
// Method Three => Optional
var_dump(100);
echo '<br>';

echo "Elzero\" \\\\ \"\"\" We Love \"$\$PHP\"";
// Needed Output
// Hello "Elzero" \\ """ We Love "$$PHP"
echo '<br>';

echo nl2br("We \n Love \n Elzero \n Web \n School");
// Needed Output
/*
We
Love
Elzero
Web
School
 */
echo '<br>';

// Needed Output
echo <<<'now'
'Hello "'Elzero'"
We Love $Programming$
Languages Specially "PHP"'
now;
echo '<br>';

$something = "Programming";
echo <<<code
        Hello \PHP\
        We Love $something
        code;
// [1] Fix The Error
// [2] Remove 2 Characters To Get The Output
// Needed Output
//Hello \PHP\ We Love Programming
echo '<br>';

echo (bool) "Hello PHP";
echo '<br>';
echo gettype((int) "Hello PHP");
// Needed Output
// 1
// integer
echo '<br>';

echo '<pre>';
print_r([
    "FrontEnd" => [
        0 => "HTML",
        1 => "css",
        "js" => [
            "vueJs" => [
                2 => "v2",
                3 => "v3",
            ],
            0 => "ReactJS",
            1 => 'svelte',
        ],
    ],

    "Backend" => [
        "PHP",
        "MySQL",
        "Security",
    ],

    0 => "git",
    1 => "github",

    "testing" => [
        "unit testing",
        "End to End e2e",
        "Integration",
    ],
]);
echo '<pre>';
