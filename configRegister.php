<?php
 session_start();
class DatabaseRegister
{
    public $server = 'localhost';
    public $username = 'root';
    public $password;
    public $database = 'bali';
    public $conn;

    public function __construct()
    {
        try {
            $this->conn = new mysqli($this->server, $this->username, $this->password, $this->database);
        } catch (Exception $e) {
            echo 'Connection Failed' . $e->getMessage();
        }
    }

    public function emailExists()
    {
        try {
            $email = $_POST['email'];
            $email = mysqli_real_escape_string($this->conn, $email);
            $sql = "SELECT COUNT(*) AS count FROM register WHERE email='$email'";
            $result = mysqli_query($this->conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                return $row["count"] > 0;
            } else {
                return false;
            }
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }

    public function insert()
    {
        if (isset($_POST['submit'])) {

            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            if ($this->emailExists()) {
                echo "<script>alert('A user with this email already exists!')</script>";
                echo "<script>window.location.href = 'register.php';</script>";
                return;
            } else {
                $query = "INSERT INTO register(name, surname, email, password, role) VALUES ('$name', '$surname','$email', '$password', 'user')";
                if ($sql = $this->conn->query($query)) {
                    echo "<script>alert('You have been registered successfully!!');</script>";
                    echo "<script>window.location.href = 'LoginForm.php';</script>";
                } else {
                    echo "<script>alert('The user already exists!');</script>";
                    echo "<script>window.location.href = 'Homepage.php';</script>";
                }
            }
        }
    }

    public function insert2()
    {
        if (isset($_POST['submit'])) {

            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $role = $_POST['role'];

            if ($this->emailExists()) {
                echo "<script>alert('A user with this email already exists!')</script>";
                echo "<script>window.location.href = 'UserAdd.php';</script>";
                return;
            } else {
                $query = "INSERT INTO register(name, surname, email, password, role) VALUES ('$name', '$surname','$email', '$password', '$role')";
                if ($sql = $this->conn->query($query)) {
                    echo "<script>alert('You have been registered successfully!!');</script>";
                    echo "<script>window.location.href = 'UserDashboard.php';</script>";
                } else {
                    echo "<script>alert('The user already exists!');</script>";
                    echo "<script>window.location.href = 'UserDashboard.php';</script>";
                }
            }
        }
    }

    public function fetch()
    {
        $data = null;
        $query = "SELECT * FROM register";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function check()
    {

        if (isset($_POST['submit'])) {


            $email = $_POST['email'];
            $password = $_POST['password'];
            $role = $_POST['role'];

            $select = "SELECT * FROM register WHERE email = '$email' && password = '$password' ";

            $result = mysqli_query($this->conn, $select);

            if (mysqli_num_rows($result) > 0) {

                $row = mysqli_fetch_array($result);

                if ($row['role'] == 'admin') {

                    $_SESSION['role'] = 'admin';
                    echo "<script>alert('You have logged in successfuly!!');</script>";
                    echo "<script>window.location.href = 'dashboard.php';</script>";
                } 
                else if ($row['role'] == 'user') {

                    $_SESSION['role'] = 'user';
                    echo "<script>alert('You have been logged in successfuly!!');</script>";
                    echo "<script>window.location.href = 'Homepage.php';</script>";

                }

            } else {
                echo "<script>alert('The email or password is invalid!');</script>";
                echo "<script>window.location.href = 'LoginForm.php';</script>";
            }

        }
        ;
    }


    public function delete($id)
    {

        $query = "DELETE FROM register where id = '$id'";
        if ($sql = $this->conn->query($query)) {
            return true;
        } else {
            return false;
        }
    }

    public function edit($id)
    {

        $data = null;

        $query = "SELECT * FROM register WHERE id = '$id'";
        if ($sql = $this->conn->query($query)) {
            while ($row = $sql->fetch_assoc()) {
                $data = $row;
            }
        }
        return $data;
    }

    public function update($data)
    {

        $query = "UPDATE register SET name='$data[name]', surname='$data[surname]', email='$data[email]', password='$data[password]', role='$data[role]' WHERE id='$data[id] '";

        if ($sql = $this->conn->query($query)) {
            return true;
        } else {
            return false;
        }
    }
}

?>