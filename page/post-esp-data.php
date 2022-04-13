<?php
    $servername = "localhost";
    $dbname = "iot_project";
    $username = "root";
    $password = "";
    $api_key_value = "tPmAT5Ab3j7F9";
    $api_key= $sensor = $value1 = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $api_key = test_input($_POST["api_key"]);
        if($api_key == $api_key_value) {
            $sensor = test_input($_POST["sensor"]);
            $value1 = test_input($_POST["value1"]);
            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql_query = "INSERT INTO tb_sensor (sensor, value1) VALUES ('" . $sensor . "', '" . $value1 . "')";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            }
            else{
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();
        }
        else {
            echo "Wrong API Key provided.";
        }
    }
    else {
        echo "No data posted with HTTP POST.";
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>