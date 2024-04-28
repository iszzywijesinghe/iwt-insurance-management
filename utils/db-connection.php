<?php

function getConnectionInstance()
{
    try {
        $host = "localhost";
        $username = "root";
        $password = "";
        return (mysqi_connect($host, $username, $password));
    } catch (Exception $e) {
        echo ($e);
    }
}
?>