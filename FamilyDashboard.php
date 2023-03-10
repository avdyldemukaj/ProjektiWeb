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
    <h1>Family Packages</h1>
    
     <a href="FamilyAdd.php">  <button type="submit" name="submit" id="userAdd">Add Book</button><br> <br> </a> 
    
    <table>
      <thead>
        <tr>
           <th>ID</th>
          <th>Name</th>
          <th>Surname</th>
          <th>Email</th>
          <th>Phone Number</th>
          <th>Address</th>
          <th>Book</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      <?php
 
        include 'configPackagesFamily.php';
        $book = new DatabasePackagesFamily();
        $rows = $book->fetch();
      
        if(!empty($rows)){
        foreach($rows as $row){ 
       ?>
        <tr>
                
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['surname']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['phoneNumber']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['book']; ?></td>
                <td>
                  <a href="FamilyDelete.php?id=<?php echo $row['id']; ?>" class="btn btn1">Delete</a>
                  <a href="FamilyEdit.php?id=<?php echo $row['id']; ?>" class="btn btn2">Edit</a>
                  
                </td>
              </tr>
              <?php
                }
                
              }
              
              else{
                echo "There is no data!";
              }
            ?>
      </tbody>
    </table>
  </div>
</body>
</html>
