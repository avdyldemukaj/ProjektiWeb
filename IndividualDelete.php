<?php 
    include 'configPackagesIndividual.php';
    $book = new DatabasePackagesIndividual();
    $id = $_REQUEST['id'];
    $delete = $book->delete($id);
 
    if ($delete) {
        echo "<script>alert('Book has been deleted successfully!');</script>";
        echo "<script>window.location.href = 'IndividualDashboard.php';</script>";
    }
 ?>