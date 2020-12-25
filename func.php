<?php

$conn = mysqli_connect('localhost', 'admin', 'admin', 'inventaris');

function base_url()
{
    $url = 'http://localhost/inventaris';
    return $url;
}

function fetch_data($conn, $query)
{
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function fetch_row($conn, $query)
{
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    return $row;
}
