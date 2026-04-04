<?php

$data = json_decode(file_get_contents("php://input"), true);

if (!isset($data['token'])) {
    echo "No token received";
    exit;
}

$idToken = $data['token'];
$apiKey = "AIzaSyCkUrWpPxqzwVnaBhCIhKsgtMW9CPFdSJo";

$verifyURL = "https://identitytoolkit.googleapis.com/v1/accounts:lookup?key=" . $apiKey;

$options = [
    "http" => [
        "header"  => "Content-Type: application/json",
        "method"  => "POST",
        "content" => json_encode(["idToken" => $idToken])
    ]
];

$context  = stream_context_create($options);
$response = file_get_contents($verifyURL, false, $context);
$result   = json_decode($response, true);

if (isset($result['users'][0])) {

    $user = $result['users'][0];

    echo "<h3>Login Successful</h3>";
    echo "<img src='" . $user['photoUrl'] . "' width='120'><br><br>";
    echo "Name: " . $user['displayName'] . "<br>";
    echo "Email: " . $user['email'];

} else {
    echo "Invalid Token";
}
?>
