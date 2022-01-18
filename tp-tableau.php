<!-- Etape 1 -->
<?php
foreach (range(0, 41) as $number) {
    echo $number;
}
echo "\n";
?>

<br>

<!-- Etape 2 -->
<?php
$numbers = range(0, 41);
shuffle($numbers);
foreach ($numbers as $number) {
    echo "$number ";
}
?>

<br>

<!-- Etape 3 -->

<?php
$numbers = range(0, 41);
$rand_keys = array_rand($numbers, 16);
echo $numbers[$rand_keys[0]] . "\n";
echo $numbers[$rand_keys[1]] . "\n";
echo $numbers[$rand_keys[2]] . "\n";
echo $numbers[$rand_keys[3]] . "\n";
echo $numbers[$rand_keys[4]] . "\n";
echo $numbers[$rand_keys[5]] . "\n";
echo $numbers[$rand_keys[6]] . "\n";
echo $numbers[$rand_keys[7]] . "\n";
echo $numbers[$rand_keys[8]] . "\n";
echo $numbers[$rand_keys[9]] . "\n";
echo $numbers[$rand_keys[10]] . "\n";
echo $numbers[$rand_keys[11]] . "\n";
echo $numbers[$rand_keys[12]] . "\n";
echo $numbers[$rand_keys[13]] . "\n";
echo $numbers[$rand_keys[14]] . "\n";
echo $numbers[$rand_keys[15]] . "\n";
?>

<br>

<!-- Etape 4 -->
<!-- Je n'y arrive decidement pas , je pensais avoir compris mais pas du tout -->
<?php
$array1 = array($rand_keys);
$array2 = array($rand_keys);
$result = array_merge($array1, $array2);
$rand_keys2 = array_rand($result, 16);
echo $result[$rand_keys2[0]] . "\n";
echo $result[$rand_keys2[1]] . "\n";
echo $result[$rand_keys2[2]] . "\n";
echo $result[$rand_keys2[3]] . "\n";
echo $result[$rand_keys2[4]] . "\n";
echo $result[$rand_keys2[5]] . "\n";
echo $result[$rand_keys2[6]] . "\n";
echo $result[$rand_keys2[7]] . "\n";
echo $result[$rand_keys2[8]] . "\n";
echo $result[$rand_keys2[9]] . "\n";
echo $result[$rand_keys2[10]] . "\n";
echo $result[$rand_keys2[11]] . "\n";
echo $result[$rand_keys2[12]] . "\n";
echo $result[$rand_keys2[13]] . "\n";
echo $result[$rand_keys2[14]] . "\n";
echo $result[$rand_keys2[15]] . "\n";

?>