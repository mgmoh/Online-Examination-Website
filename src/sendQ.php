<?php
$ch = curl_init();
$question = $_POST['question'];
$question = urlencode($question);
$functionName = $_POST['functionName'];
$constraint = $_POST['constraint'];
$difficulty = $_POST['difficulty'];
$topic = $_POST['topic'];
$testCase1 = $_POST['testCase1'];
$testCase1 = urlencode($testCase1);
$testCase2 = $_POST['testCase2'];
$testCase2 = urlencode($testCase2);
$testCase3 = $_POST['testCase3'];
$testCase3 = urlencode($testCase3);
$testCase4 = $_POST['testCase4'];
$testCase4 = urlencode($testCase4);
$testCase5 = $_POST['testCase5'];
$testCase5 = urlencode($testCase5);
$testCase6 = $_POST['testCase6'];
$testCase6 = urlencode($testCase6);
$result1 = $_POST['result1'];
$result1 = urlencode($result1);
$result2 = $_POST['result2'];
$result2 = urlencode($result2);
$result3 = $_POST['result3'];
$result3 = urlencode($result3);
$result4 = $_POST['result4'];
$result4 = urlencode($result4);
$result5 = $_POST['result5'];
$result5 = urlencode($result5);
$result6 = $_POST['result6'];
$result6 = urlencode($result6);
curl_setopt($ch, CURLOPT_URL,"https://web.njit.edu/~jz498/new/insert.php");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "question=$question&functionName=$functionName&constraint=$constraint&difficulty=$difficulty&topic=$topic&testCase1=$testCase1&result1=$result1&testCase2=$testCase2&result2=$result2&testCase3=$testCase3&result3=$result3&testCase4=$testCase4&result4=$result4&testCase5=$testCase5&result5=$result5&testCase6=$testCase6&result6=$result6");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTREDIR, 3);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

$server_output = curl_exec($ch);

curl_close ($ch);
echo $server_output;