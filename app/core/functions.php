<?php

function show($staff) {
    echo "<pre>";
    print_r($staff);
    echo "</pre>";
}

function escape($str)
{
    return htmlspecialchars($str);
}

function redirect($path)
{
    header("Location: ". ROOT. "/".$path);
    die;
}