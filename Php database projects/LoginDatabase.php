<?php
 
    $conn = mysqli_connect("localhost", "root", "", "testdata");
        
    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
        
    // Taking all 5 values from the form data(input)
    $uname =  $_REQUEST['uname'];
    $passwd = $_REQUEST['passwd'];

    // Performing insert query execution
    // here our table name is college
    $sql = "INSERT INTO loginuser VALUES ('$uname', '$passwd')";
        
    if(mysqli_query($conn, $sql)){
        echo "<h3>data stored in a database successfully."
            . " Please browse your localhost php my admin"
            . " to view the updated data</h3>";

        echo nl2br("\n$uname\n$passwd");
    } else{
        echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
    }
        
    // Close connection
    mysqli_close($conn);
?>