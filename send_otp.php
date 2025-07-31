<?php
session_start();

function send_otp_via_api($api_url, $postData, $headers = []) {
    $ch = curl_init($api_url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));
    curl_setopt($ch, CURLOPT_HTTPHEADER, array_merge(['Content-Type: application/json'], $headers));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    if(curl_errno($ch)) {
        return false;
    }
    curl_close($ch);
    return $response;
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $mobile = trim($_POST['mobile']);
    $password = $_POST['password'];

    if(!preg_match('/^01[0-9]{9}$/', $mobile)){
        die("Invalid mobile number format");
    }

    $otp = rand(100000, 999999);

    // Save temp user data + OTP in session for demo (better to save in DB/file)
    $_SESSION['temp_user'] = [
        'name' => $name,
        'mobile' => $mobile,
        'password_hash' => password_hash($password, PASSWORD_DEFAULT),
        'otp' => $otp,
        'verified' => false,
    ];

    // Replace with your actual API endpoint
    $api_url = "https://api.osudpotro.com/api/v1/users/send_otp";

    $postData = [
        "os" => "web",
        "mobile" => $mobile,
        "language" => "en",
        "deviceToken" => "web"
    ];

    $response = send_otp_via_api($api_url, $postData);

    if($response !== false){
        echo "OTP sent to $mobile. <a href='verify_otp.php'>Verify OTP</a>";
    } else {
        echo "Failed to send OTP. Try again.";
    }
}
?>