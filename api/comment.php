<?php
include_once "../api/regex.php";

session_start();
session_unset();

$phone = $_POST["phone"] ?? "";
$comment = $_POST["comment"] ?? "";
$textResult = preg_match(TEXT_REGEX, $comment);

if (preg_match(PHONE_REGEX, $phone) && $textResult) {
    $_SESSION["phone"] = $phone;
    $_SESSION["comment"] = preg_replace(CENSURED_REGEX, "***", $comment);
} else {
    $_SESSION["error"] = "validation error";
}

session_write_close();
header("Location: ../index.php");
