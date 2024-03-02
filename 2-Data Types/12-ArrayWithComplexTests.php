<?php

/*
============================================
= Data Types
= ----------
= Array
= -------------------
= Array With Key
= Array Without Keys
= Array With One Key
= Array Value Override
= ------------------
= print_r()
============================================
 */

echo '<pre>';
print_r([
    0 => "Sameh",
    "A" => "Ahmed",
    "B" => "Basem",
    "Mahmoud",
    true => "Sayed",
    "1" => "Osama",
    "Gamal",
    9 => "Amera",
    "Eman",
    "Mohamed",
    false => "Asmaa",
    8 => "Haytham",
    "Samer",
    "Names" => [
        "Osama",
        "Ahmed",
        "Sayed" => [
            "1",
            "2",
            "3",
        ],
    ],
]);
echo '</pre>';
