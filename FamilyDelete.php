<?php 
    include 'configPackagesFamily.php';
    $money = new DatabasePackagesFamily();
    $id = $_REQUEST['id'];
    $delete = $money->delete($id);
 
    if ($delete) {
        echo "<script>alert('Donation has been deleted successfully!');</script>";
        echo "<script>window.location.href = 'FamilyDashboard.php';</script>";
    }
 ?>