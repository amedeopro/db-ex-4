<?php
    $servername = 'localhost';
    $username = 'root';
    $password = 'tiotenpois';
    $dbname = 'hotel_booleana';
    $conn = new Mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error)
    {
        die('Si è verificato un errore '. $conn->connect_error);
    }
    $sql = 'SELECT * FROM `stanze`';
    $result = $conn->query($sql);
    $rooms = [];
    if ($result->num_rows > 0)
    {
        while ($row = $result->fetch_assoc())
        {
            $rooms[] = $row;
        }
    }
?>
