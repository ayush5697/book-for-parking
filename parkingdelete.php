<?php
include 'connection.php';

$sql = "DELETE FROM parking WHERE id=".$_GET['id'];
if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}

?>
<br><br>
<a href="parking.php">Back To List</a>