<?php  include'dbcon.php'; 

if(isset($_POST['add_students'])){
    $name = $_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password = $_POST['password'];
    
    if($name == "" || empty($name)){
        header('location:index.php?message=Name is required !');

    }
    else{
        $query = " insert into `students` (`nome`,`email`,`mobile`,`password`) values ('$name','$email','$mobile','$password')";

        $result= mysqli_query($connection,$query);

        if(!$result){
                die("Query Failed".mysqli_error());
        }else{
            header('location:index.php?insert_msg=Student Added Successfully ');
        }
    }
    
}




?>