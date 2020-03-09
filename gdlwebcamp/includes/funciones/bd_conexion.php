<?php $conn = new mysqli('localhost', "root", "admin", "gdlwebcamp");

    if ($conn -> connect_error) {
        echo $error -> conn -> connect_error;
    }?>