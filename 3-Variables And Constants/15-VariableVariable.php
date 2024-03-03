<?php

/*
Variable Variable
Takes The Value Of A Variable And Treats That As The Name Of A Variable
 */

$a = "Mohamed";
$$a = "Adel";
$$$a = "PHP";

echo $a;
echo "<br>";
echo $$a;
echo "<br>";
echo $Mohamed;
echo "<br>";
echo $$$a;
echo "<br>";
echo $Adel;
echo "<br>";

echo "Hello {$$a}"; // $$a
echo "<br>";
echo "Hello {$$$a}"; // $$$a
