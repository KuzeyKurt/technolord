
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "techno";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn ->connect_error)
{
    die("Connection failed" .$conn->connect_error);
}
else 
{
    echo "Connection to base succesfully.\n";
}


$sql = "ALTER TABLE students
    DROP 'id_students';";


if($conn->query($sql) === TRUE)
{
    echo "Table was created succesfully"; 
    //echo "Data to table students was inserted succesfully";
}
else    
{
     echo "Error: " .$conn->error;
}

    ?>