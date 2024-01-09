<?php  
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST)['submit']){
       $conn= mysqli_connect('localhost', 'root', 'Jonas1230062004!', 'saker') or die("Connectiong Failed:" .mysqli_connect_error());
        if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['class']) && isset($_POST['problem'])) {
            $id = $_POST['id'];
            $id = $_POST['name'];
            $id = $_POST['class'];
            $id = $_POST['problem'];

            $sql= "INSERT INTO `inn_melding` (`id`, `name`, `class`, `problem`) VALUES ('$id', '$name', '$class', '$problem')";

            $query = mysql_query($conn,$sql);
            if($query) {
                echo 'Entry Successfull';
            }
            else {
                echo 'Error';
            }
        }
    }
?>