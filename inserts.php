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
        echo "Connection succesful";
    }
  




    // $sql = "INSERT INTO `books` (`idbooks`, `name`, `author`, `pub_date`, `receipt_date`, `availability`, `renting_fname`, `renting_lname`) VALUES (0001, 'C++ for robots', 'Herbert Shieldt', '2020-12-03', '2020-12-05', 1, 'Japarov', 'Seyran'),
    // (0002, 'Robotics guide', 'Lenmar Abduraimov', '2018-07-31', '2019-03-11', 1, 'Suleymanov', 'Tair'),
    // (0003, 'I\'m Hacker', 'Johnn Smith', '1999-01-07', '2002-09-03', 0, 'Seydametov', 'Fevzi'),
    // (0004, 'Disckretial Math', 'Among Sith', '2000-09-13', '2003-09-29', 1, 'Abkerimov', 'Suleyman'),
    // (0005, 'C++ complete', 'Bjern Straustrup', '2003-01-06', '2004-01-06', 1, 'Umerov', 'Osman'),
    // (0006, 'ASSembler in controllers', 'Simon Robertson', '2005-06-07', '2015-09-08', 0, 'Abkerimov', 'Arslan'),
    // (0007, 'My fight', 'Albert Herbert ', '2009-09-09', '2011-11-11', 1, NULL, NULL);";



    if ($conn->query($sql) === TRUE)
    {
         echo "Many data to table _books_ was inserted succesfully";
    }
    else
    {
         echo "Error" .$conn->error;
    }
?>