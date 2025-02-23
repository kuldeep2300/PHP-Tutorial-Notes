<?php

$con = mysqli_connect('localhost', 'root', '', 'test') or die('Connection Failed!');

$sql = "select * from students";
$result = mysqli_query($con, $sql) or die("SQL Query Failed");
$output = "";

if(mysqli_num_rows($result) > 0) {
    $output = '<table border = "1" width = "100%" cellspacing = "0" cellpadding= "10px">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Age</th>
            <th>City</th>
        </tr>';

    while($row = mysqli_fetch_assoc($result)) {
        $output .= "<tr>
            <td>{$row["id"]}</td>
            <td>{$row["student_name"]}</td>
            <td>{$row["age"]}</td>
            <td>{$row["city"]}</td>
        </tr>";
    }

    $output .= '</table>';
    mysqli_close($con);
    echo $output;   // It will return data to ajax file
} else {
    echo "<h2>No Records Founds.</h2>";
}
?>