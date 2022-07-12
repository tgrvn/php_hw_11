<?php
session_start();
include_once "../api/regex.php";

if (preg_match(TICKET_REGEX, $_POST["min"]) && preg_match(TICKET_REGEX, $_POST["max"])) {
    $min = (int)$_POST["min"] ?? "";
    $max = (int)$_POST['max'] ?? "";

    if ((int)$min <= (int)$max) {
        $result = 0;

        for ($i = (int)$min; $i < (int)$max; $i++) {
            if (calcTicket($i)) {
                $result++;
            }
        }

        $_SESSION["lucky-tickets"] = $result;
    } else {
        $_SESSION["ticket-error"] = "*min must be < max";
        session_write_close();
        header("Location: ../index.php");
    }
} else {
    $_SESSION["ticket-error"] = "*validation error";
    session_write_close();
    header("Location: ../index.php");
}

function calcTicket($str)
{
    $arr = str_split($str);
    $begin = 0;
    $end = 0;

    foreach ($arr as $key => $value) {
        if ($key < 3) {
            $begin += $value;
        }

        if ($key > 2) {
            $end += $value;
        }
    }

    if ($begin >= 10 && $end >= 10) {
        $begin = str_split($begin);
        $begin = $begin[0] + $begin[1];

        $end = str_split($end);
        $end = $end[0] + $end[1];
    } else if ($begin >= 10) {
        $begin = str_split($begin);
        $begin = $begin[0] + $begin[1];
    } else if ($end >= 10) {
        $end = str_split($end);
        $end = $end[0] + $end[1];
    }

    if ($begin === $end) {
        return true;
    } else {
        return false;
    }
}

header("Location: ../index.php");
