No.20
<?php
$input1 = readline("整数値1:");
$input2 = readline("整数値2:");

$result1 = (int) ($input1 / $input2);
echo $result1 . PHP_EOL;
$result2 = (int) ($result1 * $input2);
echo $result2 . PHP_EOL;
?>

No.21

<?php
$input = readline("整数値1");
if($input>=5 && $input<20){
  echo "OK";
}else{
  "NG";
}

?>