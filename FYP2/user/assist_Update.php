
    
 <?
    /*
session_start();
require('../connection.php');
  
if(isset($_POST['update'])){
    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $ic = $_POST['ic'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $username = $_POST['username'];
    $document = $_POST['document'];
    $password = $_POST['password'];
    $cost = $_POST['cost'];
    $bank = $_POST['bank'];
    $acc_name = $_POST['acc_name'];
    $acc_no = $_POST['acc_no'];
    $sql = "UPDATE assistance_h SET first_name='$fname',last_name='$lname',username='$username',password='$pwd',ic_no='$ic',phone_no='$phone',email='$email',address='$address',cost='$cost',bank_name='$bank',account_holder='$acc_name',account_no='$acc_no',document='$document' where id_assist='".$_SESSION['id_assist']."'";

    $result = mysqli_query($conn, $sql);
    try {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['id_assist'] = $row['id_assist'];
        echo '<script language="javascript" type="text/javascript">
        alert("Assistance Details Updated");
        </script>';
     ///   echo("<meta http-equiv='refresh' content='1'>");
       // throw new Exception('denominator is 0');
        // If 'var' is zero then exception
        // is thrown
    }
    // Catch block will be executed if
    // any Exception has been thrown
    // by try block
    catch(Exception $e)    {
        echo "\nException: ", $e->getMessage();
        // Print the Message passed
        // by the thrown statement
    }
  
}
    
?> */
