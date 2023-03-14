<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="userDashboard.css">
</head>
<body>
  <nav class="navbar">
    <a class="navbar-brand" href="dashboard.php">Dashboard</a>
  </nav>
  <div class="container">
    <h1>Users</h1>
    <?php
              include 'configContact.php';
              $contact = new DatabasePromote();
              $id = $_REQUEST['id'];
              $row = $contact->edit($id);
 
              if (isset($_POST['update'])) {
                if (isset($_POST['name']) && isset($_POST['email'])  && isset($_POST['message'])) {
                     
                    $data['id'] = $id;
                    $data['name'] = $_POST['name'];
                    $data['email'] = $_POST['email'];
                    $data['message'] = $_POST['message'];
 
                    $update = $contact->update($data);
 
                    if($update){
                      echo "<script>alert('User has been updated!');</script>";
                      echo "<script>window.location.href = 'contactDashboard.php';</script>";
                    }else{
                      echo "<script>alert('Update FAILED try again!');</script>";
                      echo "<script>window.location.href = 'contactDashboard.php';</script>";
                    }
 
                  }else{
                    echo "<script>alert('Is empty!');</script>";
                    header("Location: contactEdit.php'?id=$id");
                  }
                }
          ?>
       <form action="" method="post">
      <label for="name">Name</label>
      <input type="text" id="name" value="<?php echo $row['name']; ?>" name="name" required>
      <label for="email">Email</label>
      <input type="email" id="email" value="<?php echo $row['email']; ?>" name="email" required>
      <label for="name">Message</label>
      <input type="text" id="name" value="<?php echo $row['message']; ?>" name="message" required>
    

      <button type="submit" name="update">Edit Contact</button>
    </form>
    
  </div>
</body>
</html>
