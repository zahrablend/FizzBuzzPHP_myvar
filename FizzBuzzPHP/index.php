<?php

echo "This program is a custom variation of a \"FizzBuzz\" coding problem. Find out it's history on: https://en.wikipedia.org/wiki/Fizz_buzz \n\nHow it works:\n\nChoose a range of numbers, where number 1 is the starting number and number 2 is the last number inclusive.\nThe program prints all numbers in your array, replacing numbers that match a certain condition with an explanatory note.\nFind out which numbers can be divided without a remainder to:\n - 3, 5 or 10;\n - both 3 and 5;\n - both 5 and 10;\n - to all 3, 5 and 10:\n\n";

echo "\nEnter starting number of your range and press [Enter]";

$first = readline(": ");
intval($first);

echo "\nEnter last number of your range and press [Enter]";

$last = readline(": ");
intval($last);

$keywords = [];
$crash = [];
$fizz_buzz = [];
$boom = [];
$buzz = [];
$fizz = [];
function rangeNumbers($num1, $num2)
{
    global $keywords, $crash, $fizz_buzz, $boom, $buzz, $fizz;

    for ($i = $num1; $i <=$num2; $i++)
    {
        if ($i % 3 === 0 && $i % 5 === 0 && $i % 10 === 0)
        {
            echo "Number {$i} can be divided by 3, 5 and 10 = \"Crash!!\"\n";
            array_push($keywords, "Crash");
            array_push($crash, $i);
            continue;
        }
        elseif ($i % 3 === 0 && $i % 5 === 0)
        {
            echo "Number {$i} can be divided both by 3 and 5 = \"FizzBuzz\"\n";
            array_push($keywords, "FizzBuzz");
            array_push($fizz_buzz, $i);
            continue;
        }
        elseif ($i % 10 === 0 && $i % 5 === 0)
        {
            echo "Number {$i} can be divided by 5 and 10 = \"Boom!\"\n";
            array_push($keywords, "Boom");
            array_push($boom, $i);
            continue;
        }
        elseif ($i % 5 === 0)
        {
            echo "Number {$i} can be divided by 5 = \"Buzz\"\n";
            array_push($keywords, "Buzz");
            array_push($buzz, $i);
            continue;
        }
        elseif ($i % 3 === 0)
        {
            echo "Number {$i} can be divided by 3 = \"Fizz\"\n";
            array_push($keywords, "Fizz");
            array_push($fizz, $i);
            continue;
        }
        echo $i . "\n";
    }
    echo "\nGiven an array of {$num1}-{$num2}:\n";
    echo "Keyword \"Fizz\" repeats " . count(array_keys($keywords, "Fizz")) . " times.\n";
    echo "Keyword \"Buzz\" repeats " . count(array_keys($keywords, "Buzz")) . " times.\n";
    echo "Keyword \"FizzBuzz\" repeats " . count(array_keys($keywords, "FizzBuzz")) . " times.\n";
    echo "Keyword \"Boom\" repeats " . count(array_keys($keywords, "Boom")) . " times.\n";
    echo "Keyword \"Crash\" repeats " . count(array_keys($keywords, "Crash")) . " times.\n\n";


    echo "\nNumbers that can be divided by all 10, 3 and 5 without a remainder are:\n";
    echo implode(", ", $crash);
    echo "\nNumbers that can be divided by both 10 and 5 without a remainder are:\n";
    echo implode(", ", $boom);
    echo "\nNumbers that can be divided by both 5 and 3 without a remainder are:\n";
    echo implode(", ", $fizz_buzz);
    echo "\nNumbers that can be divided by 5 without a remainder are:\n";
    echo implode(", ", $buzz);
    echo "\nNumbers that can be divided by 3 without a remainder are:\n";
    echo implode(", ", $fizz);
    echo "\n";
}

// function call:
rangeNumbers($first, $last);

