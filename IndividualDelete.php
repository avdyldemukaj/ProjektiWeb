<?php 
    include 'configPackagesIndividual.php';
    $money = new DatabasePackagesIndividual();
    $id = $_REQUEST['id'];
    $delete = $money->delete($id);
 
    if ($delete) {
        echo "<script>alert('Donation has been deleted successfully!');</script>";
        echo "<script>window.location.href = 'IndividualDashboard.php';</script>";
    }
 ?>