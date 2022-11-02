<?php
require_once('../connection.php');

if(isset($_POST['submit'])){
    if((!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['address']) && !empty($_POST['uname']) && !empty($_POST['password']) && !empty($_POST['cpassword']) && !empty($_POST['ic']) && !empty($_POST['phone']) && !empty($_POST['email']))
    && (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['address']) &&  isset($_POST['uname']) && isset($_POST['password']) && isset($_POST['cpassword']) && isset($_POST['ic']) && isset($_POST['phone']) && isset($_POST['email']))){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $address = $_POST['address'];
        $uname = $_POST['uname'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $ic = $_POST['ic'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];

        $contributeSQL = "Select * from contribute where uname = '$uname'";
        $result = mysqli_query($conn,$contributeSQL);
        if($result){
            $num = mysqli_num_rows($result);
            if($num>0){
                echo '<script language="javascript" type="text/javascript">
                alert("User alredy exist. Please try again!");
                </script>';
                header("Refresh:1; url=login.html");
            }else{
                if($password===$cpassword){
                    $insertContribute = "Insert into contribute (f_name,l_name,address,uname,password,id_no,phone_no,email)values('$first_name', '$last_name', '$address', '$uname', '$password', '$ic', '$phone', '$email')";
                    $resultContribute = mysqli_query($conn,$insertContribute);
                    if($resultContribute){
                        echo'<script language="javascript" type="text/javascript">
                        alert ("Registration successful! Welcome to Healthcare Assistance");
                        </script>';
                        header("Refresh:1; url=dashboard.html");
                    }else{
                        echo '<script language="javascript" type="text/javascript">
                        alert("Password did not match. Please try again!");
                        </script>';
                        header("Refresh:1; url=login.html");
                    }
                }
            }
        }
    }
}
?>