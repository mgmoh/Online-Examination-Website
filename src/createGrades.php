<?php
$ch = curl_init();
$question = $_POST['question'];
$question = urlencode($question);
$comments = $_POST['comments'];
$grade = $_POST['grade'];
curl_setopt($ch, CURLOPT_URL,"https://web.njit.edu/~jz498/new/updategrade.php");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "question=$question&comments=$comments&grade=$grade");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTREDIR, 3);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

$server_output = curl_exec($ch);

curl_close ($ch);
echo $server_output;