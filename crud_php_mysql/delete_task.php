<?php
    include ("db.php");
    include ("includes/header.php");

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "DELETE FROM task WHERE id = '$id'";
        $result = mysqli_query($connection, $query);
        if (!$result) {
            die("Couldn't delete task'");
        }
        $_SESSION['message'] = "Task deleted successfully";
        $_SESSION['message_type'] = 'danger';
        header("Location: index.php");
    }
?>
