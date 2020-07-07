<?php
include 'connection.php';

$sql = "DELETE FROM notice WHERE id=".$_GET['id'];
if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}

?>
<br><br>
<a href="noticelist.php">Back To List</a>