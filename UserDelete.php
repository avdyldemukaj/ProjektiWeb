<?php 
    include 'configRegister.php';
    $registeri = new DatabaseRegister();
    $id = $_REQUEST['id'];
    $delete = $registeri->delete($id);
 
    if ($delete) {
        echo "<script>alert('The user has been deleted successfully!');</script>";
        echo "<script>window.location.href = 'UserDashboard.php';</script>";
    }
 ?>