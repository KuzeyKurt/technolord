<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "techno";

    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn ->connect_error)
    {
        // die("Connection failed" .$conn->connect_error);
    }
// echo "Connection succesful";
  
//   $sql = "CREATE DATABASE technoTEST1";

//   if ($conn->query($sql)===TRUE)
//   {
//       echo "Database created succesfully";
//   }
//   else 
//   {
//       echo "Error" .$conn->error;
//   }


    // $sql = "CREATE TABLE `students` (
    //     `id_students` INT NOT NULL,
    //     `lname` VARCHAR(45) NOT NULL,
    //     `fname` VARCHAR(45) NOT NULL,
    //     `birthday` DATE NOT NULL,
    //     `phone` VARCHAR(45) NOT NULL,
    //     PRIMARY KEY (`id_students`))";

    $sql = "INSERT INTO `students` (`id_students`, `lname`, `fname`, `birthday`, `phone`) VALUES (0002, 'Suleymanov', 'Tair', '2003-09-13', '+79780999999')";

    if ($conn->query($sql) === TRUE)
    {
         echo "Data to table students was inserted succesfully";
    }
    else
    {
         echo "Error" .$conn->error;
    }
?>