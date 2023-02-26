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
    <h1>Family</h1>
    <?php
              include 'configPackagesFamily.php';
              $book = new DatabasePackagesFamily();
              $id = $_REQUEST['id'];
              $row = $book->edit($id);
 
              if (isset($_POST['update'])) {
                if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['email'])  && isset($_POST['phoneNumber']) && isset($_POST['address']) && isset($_POST['money'])) {
                     
                    $data['id'] = $id;
                    $data['name'] = $_POST['name'];
                    $data['surname'] = $_POST['surname'];
                    $data['email'] = $_POST['email'];
                    $data['number'] = $_POST['phoneNumber'];
                    $data['address'] = $_POST['address'];
                    $data['mobookney'] = $_POST['book'];
 
                    $update = $money->update($data);
 
                    if($update){
                      echo "<script>alert('The book has been updated!');</script>";
                      echo "<script>window.location.href = 'FamilyDashboard.php';</script>";
                    }else{
                      echo "<script>alert('The book FAILED to update try again!');</script>";
                      echo "<script>window.location.href = 'FamilyDashboard.php';</script>";
                    }
 
                  }else{
                    echo "<script>alert('Is empty!');</script>";
                    header("Location: FamilyEdit.php'?id=$id");
                  }
                }
          ?>
       <form action="" method="post">
      <label for="name">Name</label>
      <input type="text" id="name" value="<?php echo $row['name']; ?>" name="name" required>

      <label for="surname">Surname</label>
      <input type="text" id="surname" value="<?php echo $row['surname']; ?>" name="surname" required>

      <label for="email">Email</label>
      <input type="email" id="email" value="<?php echo $row['email']; ?>" name="email" required>

      <label for="number">Phone Number</label>
      <input type="number" id="number" value="<?php echo $row['phoneNumber']; ?>" name="phoneNumber" required><br><br>

      <label for="address">Address</label>
      <input type="text" id="address" value="<?php echo $row['address']; ?>" name="address" required>

      <label for="book">Date</label>
      <input type="date" id="book" value="<?php echo $row['money']; ?>" name="book" required><br><br>
    

      <button type="submit" name="update">Edit Contact</button>
    </form>
    
  </div>
</body>
</html>
