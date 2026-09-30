<?php

include "../config/database.php";

if (!isset($_GET["id"])) {
    die("No unit ID was provided.");
}

$id = $_GET["id"];

$sql = "DELETE FROM units WHERE unit_id = $id";

$result = $conn->query($sql);

if ($result === TRUE) {

    header("Location: index.php");
    exit();

} else {

    echo "<h2>Cannot Delete Unit</h2>";

    echo "<p>This unit cannot be deleted because it is being used by another record.</p>";

    echo "<p>Error: " . $conn->error . "</p>";

    echo "<br>";

    echo "<a href='index.php'>Back to Units</a>";
}

?>