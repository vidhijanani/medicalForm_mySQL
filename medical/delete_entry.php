<?php
require_once('config.php');

if (isset($_POST['delete_entry'])) {
    $entry_id = $_POST['entry_id'];

    // Delete entry from the database
    $delete_sql = "DELETE FROM medical WHERE id = $entry_id";
    $delete_run = mysqli_query($conn, $delete_sql);

    if ($delete_run) {
        echo 'Entry deleted successfully';
    } else {
        echo 'Error occurred while deleting: ' . mysqli_error($conn);
    }
}

header("Location: patients_display.php"); // Redirect back to the records page after deletion
exit();
?>
