<?php
$ch = curl_init();
$question = $_POST['question'];
$question = urlencode($question);
$answer = $_POST['answer'];
$answer = urlencode($answer);
curl_setopt($ch, CURLOPT_URL,"https://web.njit.edu/~mm825/grading2.php");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "question=$question&answer=$answer");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTREDIR, 3);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

$server_output = curl_exec($ch);

curl_close ($ch);
echo $server_output;