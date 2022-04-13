<!DOCTYPE html>
<html>
    <body>
        <?php
            include_once("../config.php");
            $sql_query = "SELECT id, sensor, value1, reading_time FROM tb_sensor ORDER BY id DESC";
            echo '<table cellspacing="5" cellpadding="5">
            <tr> 
                <td>ID</td> 
                <td>Sensor</td> 
                <td>Value 1</td> 
                <td>Timestamp</td> 
            </tr>';
            if ($result = $conn->query($sql)){
                while ($row = $result->fetch_assoc()){
                    $row_id = $row["id"];
                    $row_sensor = $row["sensor"];
                    $row_value1 = $row["value1"];
                    $row_reading_time = $row["reading_time"];
                    echo '
                    <tr>
                        <td>' . $row_id . '</td> 
                        <td>' . $row_sensor . '</td> 
                        <td>' . $row_value1 . '</td> 
                        <td>' . $row_reading_time . '</td> 
                    </tr> 
                    ';
                }
                $result->free();
            }
            $conn->close();
        ?>
    </body>
</html>
