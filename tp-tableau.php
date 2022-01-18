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
$rand_keys = array_slice($numbers, 0, 16);
$rand_keys2 = array_slice($numbers, 0, 16);
$tabMerge = array_merge($rand_keys, $rand_keys2);
shuffle($tabMerge);
$finalTab = array_chunk($tabMerge, 2);
var_dump($finalTab);
?>
