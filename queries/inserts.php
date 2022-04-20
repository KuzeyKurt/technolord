<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "techno";

    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn ->connect_error)
    {
        die("Connection failed \n" .$conn->connect_error);
    }
    else
    {
        echo "Connection succesful \n";
    }
  




    // $sql = "INSERT INTO `books` (`idbooks`, `name`, `author`, `pub_date`, `receipt_date`, `availability`, `renting_fname`, `renting_lname`) VALUES (0001, 'C++ for robots', 'Herbert Shieldt', '2020-12-03', '2020-12-05', 1, 'Japarov', 'Seyran'),
    // (0002, 'Robotics guide', 'Lenmar Abduraimov', '2018-07-31', '2019-03-11', 1, 'Suleymanov', 'Tair'),
    // (0003, 'I\'m Hacker', 'Johnn Smith', '1999-01-07', '2002-09-03', 0, 'Seydametov', 'Fevzi'),
    // (0004, 'Disckretial Math', 'Among Sith', '2000-09-13', '2003-09-29', 1, 'Abkerimov', 'Suleyman'),
    // (0005, 'C++ complete', 'Bjern Straustrup', '2003-01-06', '2004-01-06', 1, 'Umerov', 'Osman'),
    // (0006, 'ASSembler in controllers', 'Simon Robertson', '2005-06-07', '2015-09-08', 0, 'Abkerimov', 'Arslan'),
    // (0007, 'My fight', 'Albert Herbert ', '2009-09-09', '2011-11-11', 1, NULL, NULL);";

        // $sql = "INSERT INTO `hardware` (`id_hardware`, `name`, `price`, `hardwarecol`, `memory`, `type`, `country`, `replica`) VALUES 
        // (009, 'Arduino Mega', '950', '9', 8192, 'Controller', 'USA', 0),
        // (010, 'Raspberry Pi 5', '3500', '11', 4096, 'MicroPC', 'Italy', 0);";

        // $sql = "CREATE TABLE IF NOT EXISTS `lesson` (
        //     `idlesson` INT NOT NULL,
        //     `discipline` VARCHAR(45) NOT NULL,
        //     `teacher` VARCHAR(45) NOT NULL,
        //     `date` DATE NOT NULL,
        //     `idcabinet` INT NOT NULL,
        //     `students_id_students` INT NOT NULL,
        //     PRIMARY KEY (`idlesson`, `idcabinet`, `students_id_students`),
        //     INDEX `fk_lesson_students1_idx` (`students_id_students` ASC) VISIBLE,
        //     CONSTRAINT `fk_lesson_students1`
        //       FOREIGN KEY (`students_id_students`)
        //       REFERENCES `students` (`id_students`)
        //       ON DELETE NO ACTION
        //       ON UPDATE NO ACTION)
        //   ENGINE = InnoDB";
        

    if ($conn->query($sql) === TRUE)
    {
         echo "Table _lesson_ was created succesfully";
    }
    else
    {
         echo "Error" .$conn->error;
    }
?>