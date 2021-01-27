<?php
$ch = curl_init();
$difficulty = $_POST['difficulty'];
$topic = $_POST['topic'];
$keywords = $_POST['keywords'];
curl_setopt($ch, CURLOPT_URL,"https://web.njit.edu/~jz498/new/search.php");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "difficulty=$difficulty&topic=$topic&keywords=$keywords");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTREDIR, 3);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

$server_output = curl_exec($ch);

curl_close ($ch);
echo $server_output;
