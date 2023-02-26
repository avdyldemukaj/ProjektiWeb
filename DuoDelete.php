<?php 
    include 'configPackagesDuo.php';
    $book = new DatabasePackagesDuo();
    $id = $_REQUEST['id'];
    $delete = $book->delete($id);
 
    if ($delete) {
        echo "<script>alert('Book has been deleted successfully!');</script>";
        echo "<script>window.location.href = 'DuoDashboard.php';</script>";
    }
 ?>