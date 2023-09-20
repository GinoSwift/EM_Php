<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chap_28</title>
</head>

<body>
    <?php
    $name = "Alice";
    $role = "Web Developer";
    $company = "Acme Inc";
    echo "$name is a $role at $company.";
    echo "<br>";

    $fruit = "Apple";
    $price = 1.99;
    echo "Buy some $fruit for \$$price each.";
    echo "<br>";
    echo "THis tree is 10' 8\" loong.";
    echo "<br>";
    echo "C:\\xampp\\htdocs";
    echo strlen("Hello World");
    echo "<br>";
    $str = "A quick brown fox.";
    echo substr($str, 0, 7);
    $str = "Come here, quick, quick.";
    echo str_replace("quick", "hurry", $str);
    echo "<br>";
    $fruits = ['Apple', 'Orange'];
    $fruits[4] = 'Mango';
    print_r($fruits);
    echo "<br>";

    $fruits = ['Lime', 'Lychee'];
    $fruits[] = 'Avocado';
    print_r($fruits);
    echo "<br>";
    $user = ["alice", 22];
    list($name, $age) = $user;
    echo $name;
    echo "<br>";
    $user = ["name" => "Alice", "age" => 22];
    ["name" => $name, "age" => $age] = $user;
    echo $name;
    echo "<br>";
    $nums1 = [1, 2];
    $nums2 = [...$nums1, 3];
    print_r($nums2);
    echo "<br>";

    $nums = [1, 2, 3, 4];
    echo count($nums);
    echo "<br>";

    $users = ["alice", "bob"];
    echo is_array($users);
    echo "<br>";
    echo in_array('bob', $users);
    echo "<br>";
    echo array_search("bob", $users);
    echo "<br>";
    array_push($users, "tom");
    print_r($users);
    echo "<br>";
    array_pop($users);
    print_r($users);
    echo "<br>";
    $result = array_splice($users, 1, 1);
    print_r($users);
    echo "<br>";
    print_r($result);
    echo "<br>";
    $user = ["name" => "Alice", "age" => 22];
    $keys = array_keys($user);
    $vals = array_values($user);
    print_r($keys);
    print_r($vals);
    echo "<br>";
    $users = ["tom" => 23, "bob" => 22, "alice" => 24];
    sort($users);
    print_r($users);
    echo "<br>";
    rsort($users);
    print_r($users);
    echo "<br>";
    echo "<br>";
    ksort($users);
    print_r($users);
    echo "<br>";
    krsort($users);
    print_r($users);
    echo "<br>";
    echo "<br>";
    $input = "A quick brown fox.";
    $arr = explode(" ", $input);
    print_r($arr);
    echo "<br>";
    $str = implode(" ", $arr);
    echo $str;


    ?>
</body>

</html>