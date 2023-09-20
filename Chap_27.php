<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chap_27PHP</title>
    <link rel="stylesheet" href="css/css/bootstrap.min.css">
</head>

<body>
    <h1>Home Page</h1>
    <p>
        Total: <?php echo 1 + 2 ?>
    </p>
    <p>
        Total:
        <?php
        $num1 = 3;
        $num2 = 5;
        echo $num1 + $num2;
        ?>
    </p>

    <?php
    $num1 = 2;
    $num2 = 8;
    ?>
    <p>
        Total: <?php echo $num1 + $num2 ?> <br>
        Total: <?= $num1 + $num2 ?>
    </p>

    <?php $hour = date('h') ?>
    <p>
        <?php
        if ($hour < 6 || $hour > 18) {
            echo "<b> Night Time </b>";
        } else {
            echo "<i> Day Time </i>";
        }

        ?>
    </p>

    <?php $hour = date('h') ?>
    <p>
        <?php if ($hour < 6 || $hour > 18) { ?>
            <b> Night Time </b>
        <?php } else { ?>
            <i> Day Time </i>
        <?php } ?>
    </p>

    <?php $hour = date('h') ?>
    <p>
        <?php if ($hour < 6 || $hour > 18) : ?>
            <b> Night Time </b>
        <?php else : ?>
            <i> Day Time </i>
        <?php endif ?>
    </p>

    <?php
    $num1 = 1;
    $num2 = 6;
    echo $num1 + $num2;
    ?>

    <?php
    $var;
    var_dump($var);

    $var = 123;
    var_dump($var);

    $var = "abc";
    var_dump($var);

    $name = "Bob";
    function hello()
    {
        global $name;
        echo $name;
    }
    hello();

    function hi()
    {
        if (true) {
            $name = "Alice";
        }
        echo $name;
    }
    hi();
    echo "<br>";
    echo isset($car);
    $car = "Toyota";
    echo isset($car);
    echo "<br>";

    define("Min", 1);
    define("Max", 10);
    echo Max;
    echo "<br>";
    echo Min;





    ?>





    <script src="js/js/bootstrap.min.js"></script>
</body>

</html>