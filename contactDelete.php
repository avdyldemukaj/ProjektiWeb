<?php 
    include 'configContact.php';
    $contact = new DatabasePromote();
    $id = $_REQUEST['id'];
    $delete = $contact->delete($id);
 
    if ($delete) {
        echo "<script>alert('The message has been deleted successfully!');</script>";
        echo "<script>window.location.href = 'contactDashboard.php';</script>";
    }
 ?>