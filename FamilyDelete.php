<?php 
    include 'configPackagesFamily.php';
    $book = new DatabasePackagesFamily();
    $id = $_REQUEST['id'];
    $delete = $book->delete($id);
 
    if ($delete) {
        echo "<script>alert('Book has been deleted successfully!');</script>";
        echo "<script>window.location.href = 'FamilyDashboard.php';</script>";
    }
 ?>