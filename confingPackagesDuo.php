<?php
class DatabasePackagesDuo{
    private $server = 'localhost';
    private $username = 'root';
    private $password;
    private $database = 'bali';
    private $conn;

    public function __construct(){
        try{
            $this->conn = new mysqli($this->server, $this->username, $this->password, $this->database);
        }catch(Exception $e){
            echo 'Connection Failed' .$e->getMessage();
        }       
    }


public function insert(){
    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email']; 
        $number = $_POST['number'];
        $adress = $_POST['adress'];
        $book = $_POST['book'];
       

        $query = "INSERT INTO packages_duo(name, surname, email, phoneNumber, address, book) VALUES ('$name', '$surname','$email', '$number', '$adress', '$book')";
        if ($sql = $this->conn->query($query)) {

            echo "<script>alert('Thank you for your booking.');</script>";
            echo "<script>window.location.href = 'Homepage.php';</script>";
        }

    else{
        echo "<script>alert('You have not been registered yet');</script>";
        echo "<script>window.location.href = 'register.php';</script>";
         }
    }
  }

public function check(){
    
    if(isset($_POST['submit'])){

        
        $email = $_POST['email']; 
        
     
        $select = "SELECT * FROM register WHERE email = '$email' ";
     
        $result = mysqli_query($this->conn, $select);
     
        if(mysqli_num_rows($result) > 0){
     
           $row = mysqli_fetch_array($result);
     
           if($row['email'] == $email){
            
            echo "<script>alert('Thank you for your booking.');</script>";
            echo "<script>window.location.href = 'Homepage.php';</script>";
            $this->insert();
           }
          
        }
        else{
            echo "<script>alert('The email is invalid. Go register first please!');</script>";
            echo "<script>window.location.href = 'register.php';</script>";
        }
     
     };
 }

 public function check2(){
    
    if(isset($_POST['submit'])){

        
        $email = $_POST['email']; 
        
     
        $select = "SELECT * FROM register WHERE email = '$email' ";
     
        $result = mysqli_query($this->conn, $select);
     
        if(mysqli_num_rows($result) > 0){
     
           $row = mysqli_fetch_array($result);
     
           if($row['email'] == $email){
            
            echo "<script>alert('Thank you for your booking.');</script>";
            echo "<script>window.location.href = 'DuoDashboard.php';</script>";
            $this->insert();
           }
          
        }
        else{
            echo "<script>alert('The email is invalid. Go register first please!');</script>";
            echo "<script>window.location.href = 'UserDashboard.php';</script>";
        }
     
     };
 }

 public function fetch(){
    $data = null;
    $query = "SELECT * FROM packages_duo";
    if ($sql = $this->conn->query($query)) {
        while ($row = mysqli_fetch_assoc($sql)) {
            $data[] = $row;
        }
    }
    return $data;
}



public function delete($id){

    $query = "DELETE FROM packages_duo where id = '$id'";
    if ($sql = $this->conn->query($query)) {
        return true;
    }else{
        return false;
    }
}

public function edit($id){

    $data = null;

    $query = "SELECT * FROM packages_duo WHERE id = '$id'";
    if ($sql = $this->conn->query($query)) {
        while($row = $sql->fetch_assoc()){
            $data = $row;
        }
    }
    return $data;
}

public function update($data){
    
    $query = "UPDATE packages_duo SET name='$data[name]', surname='$data[surname]', email='$data[email]', phoneNumber='$data[number]', address='$data[address]', book='$data[book]'  WHERE id='$data[id] '";

    if ($sql = $this->conn->query($query)) {
        return true;
    }else{
        return false;
    }
}
}
?>