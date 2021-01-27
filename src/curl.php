<?php
$ch = curl_init();
$username = $_POST['username'];
$password = $_POST['password'];
curl_setopt($ch, CURLOPT_URL,"https://web.njit.edu/~mm825/login.php");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "username=$username&password=$password");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTREDIR, 3);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

$server_output = curl_exec($ch);

curl_close ($ch);
echo $server_output;
