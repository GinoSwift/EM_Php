<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chap_30</title>
</head>

<body>
    <?php

    function add($a, $b)
    {
        echo $a + $b;
    }
    add(1, 2);
    echo "<br>";
    ?>

    <?php
    function add2($a, $b)
    {
        return $a + $b;
    }
    $result = add2(1, 2);
    echo $result;
    echo add(1, 2);

    echo "<br>";

    function add3($a, $b = 0)
    {
        echo $a + $b;
    }
    add3(1, 2);
    echo "<br>";
    add3(9);

    echo "<br>";

    function add4($a, ...$b)
    {
        print_r($b);
    }

    add4(1, 2, 3, 4);

    // function add5(array $nums): float
    // {
    //     echo array_sum($nums);
    // }
    // add5([1, 2]);

    function price(int|float $n)
    {
        return "Price is \$$n";
    }
    echo price(3.1);
    echo price(2);
    echo "<br>";

    $name = "Alice";
    function hello($n)
    {
        $n = "Bob";
        echo "Hello $n";
    }
    hello($name);
    echo $name;
    echo "<br>";

    function hi(&$n)
    {
        $n = "Bob";
        echo "Hello $n";
    }
    hi($name);
    echo $name;
    echo "<br>";

    function one()
    {
        function two()
        {
            echo "Two";
        }
    }
    one();
    two();
    echo "<br>";

    $name1 = "Alice";
    function hello1()
    {
        global $name1;
        $name1 = "Bob";
        echo "Hello $name1";
    }
    hello1();
    echo "<br>";


    $nums = [1, 2, 3, 4];
    function two1($n)
    {
        return $n * 2;
    }
    $result = array_map("two1", $nums);
    print_r($result);
    echo "<br>";

    $result = array_map(function ($n) {
        return $n * 2;
    }, $nums);
    print_r($result);
    echo "<br>";

    $hola = function () use ($name1) {
        echo "Hello $name1";
    };
    $hola();
    echo "<br>";

    $three = fn ($n) => $n * 2;
    echo $three(3);
    echo "<br>";

    $x = 3;
    $blah = fn ($y) => $x + $y;
    echo $blah(5);
    echo "<br>";

    function profile($name, $email, $age)
    {
        echo "$name ($age) @ $email";
    };
    profile("Alice", "alice@gmail.com", 22);
    echo "<br>";
    profile(age: 23, name: "Bob", email: "bob@gmail.com");









    ?>

</body>

</html>