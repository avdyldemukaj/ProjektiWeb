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
    
    
    <table>
      <thead>
        <tr>
           <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Message</th>
          <th>Image</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      <?php
 
        include 'configContact.php';
        $contact = new DatabaseDonateContact();
        $rows = $contact->fetch();
        
        if(!empty($rows)){
        foreach($rows as $row){ 
       ?>
        <tr>
                
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['message']; ?></td>
                <td><img src="../promote/<?php echo $row['image']; ?>" width="300px" height="200px"></td>
                <td>
                  <a href="contactDelete.php?id=<?php echo $row['id']; ?>" class="btn btn1">Delete</a>
                  <a href="contactEdit.php?id=<?php echo $row['id']; ?>" class="btn btn2">Edit</a>
                  
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
