<?php 
    include 'configPackagesDuo.php';
    $money = new DatabasePackagesDuo();
    $id = $_REQUEST['id'];
    $delete = $money->delete($id);
 
    if ($delete) {
        echo "<script>alert('Donation has been deleted successfully!');</script>";
        echo "<script>window.location.href = 'DuoDashboard.php';</script>";
    }
 ?>