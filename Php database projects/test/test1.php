<?php
    $uname = $_POST['uname'];
    $gmail = $_POST['email'];
     $mobile =$_POST['mobile'];
    $passwd =$_POST['passwd'];
    $service =$_POST['service'];
    $shopName =$_POST['shop-name'];
    $address =$_POST['Add'];
    $website =$_POST['weblink'];
    $dest = $_POST['dst'];

    // The hash of the password that
    // can be stored in the database
    $hash = password_hash($passwd ,PASSWORD_DEFAULT);

    // server operation
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

    // Create connection
    $conn = mysqli_connect("localhost", "root", "", "test");
    
    // Check connection
    if ($conn === false) {
    die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO test_c9 
    VALUES ('$uname', '$gmail', '$mobile', '$hash', '$service', '$shopName','$address', '$website', '$dest')";

    if(mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database successfully."
        . " Please browse your localhost php my admin"
        . " to view the updated data</h3>";

    //echo ("\n$uname \n $passwd \n $mobile \n $gmail \n $shopname \n $address \n $website \n $dest");
    } else{
    echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
    }

//     Close connection
    mysqli_close($conn);
?>