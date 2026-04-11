<?php

$name = isset ($_POST['name']) ? $_POST['name'] :"";
$room = isset ($_POST['room']) ? $_POST['room']:"";
$issue = isset ($_POST['issue']) ? $_POST['issue'] :"";
$description = isset ($_POST['description']) ? $_POST['description']:"";

// if any field has data, display the given data
if ($name != "" || $room != "" || $issue != "" || $description != "") {

    echo "<h2>Submitted Data</h2>";
    echo "<strong>Name:</strong> " . $name . "<br><br>";
    echo "<strong>Room/Building: </strong>" . $room . "<br><br>";
    echo "<strong>Issue: </strong>" . $issue . "<br><br>";
    echo "<strong>Description: </strong> " . nl2br($description) . "<br><br>";

} else {

    echo "<h2><strong> No data submitted </strong></h2>";

}

?>
<html>
    <body>
        <style>
            body {text-align: center;}
            body {font-size: 20px;}
        </style>
<link rel="stylesheet" href="form.css">
  <br>
  <a href="index.php"><button type>Submit Another Report</button></a>

</body>
</html>