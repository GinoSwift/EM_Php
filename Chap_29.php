<?php
$greet = "Welcome";
$name = "Bob";
echo $greet . " " . $name;
echo "<br>";

echo "$greet $name";
echo "<br>";

$data = ["Apple", "Orange"];
echo $data[0] . " and " . $data[1];
echo "<br>";
echo $data[0], " and ", $data[1];
echo "<br>";

$num = 3;
$num += 2;
echo $num;
echo "<br>";
$num -= 1;
echo $num;
$num *= 3;
echo "<br>";
echo $num;
echo "<br>";
$num /= 4;
echo $num;
echo "<br>";

$name = "";
echo $name ? $name : "Unknown";
echo "<br>";
$name = "Alice";
echo $name ? $name : "Unknown";
echo "<br>";

$name = "";
echo $name ?: "Unknown";
echo "<br>";
$name = "Alice";
echo $name ?: "Unknown";
echo "<br>";
echo $name ?? "Unknown";
echo "<br>";
$result = "phillip";
$result ??= $name1;
echo $result;
echo "<br>";

$day = date("D");
if ($day === "Sun") {
    echo "Today is Sunday.";
} elseif ($day === "Sat") {
    echo "Today is Saturday.";
} else {
    echo "Today is a weekday.";
}

echo "<br>";
switch ($day) {
    case "Sat":
    case "Sun":
        echo "Weekend";
        break;
    case "Fri":
        echo "TGIF";
        break;
    default:
        echo "Weekday";
}
echo "<br>";

$result = match ($day) {
    "Sat", "Sun" => "Weekend",
    "Fri" => "TGIF",
    default => "Weekday"
};
echo $result;
echo "<br>";

$nums = [12, 42, -2, 8, 621];
$i = 0;
$result = 0;
while ($i < count($nums)) {
    $result += $nums[$i];
    $i++;
}
echo $result;
echo "<br>";


$nums = [12, 42, -2, 8, 621];
$i = 0;
$result = 0;
while ($i < count($nums)) {
    if ($nums[$i] < 0)
        break;

    $result +=  $nums[$i];
    $i++;
}
echo $result;

?>

<?php
$nums = [12, 42, -2, 8, 621];
$i = 0;
$result1 = 0;

while ($i < count($nums)) {
    if ($nums[$i] < 0)
        continue;

    $result1 += $nums[$i];
    $i++;
}
echo $result1;
echo "<br>";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chap_29</title>
</head>

<body>

</body>

</html>