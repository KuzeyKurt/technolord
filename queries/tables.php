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


    // $sql = "CREATE TABLE IF NOT EXISTS `books` ( // таблица книг
    //     `idbooks` INT NOT NULL,
    //     `name` VARCHAR(45) NOT NULL,
    //     `author` VARCHAR(45) NULL,
    //     `pub_date` DATE NULL,
    //     `receipt_date` DATE NULL,
    //     `availability` TINYINT NOT NULL,
    //     `renting_fname` VARCHAR(45) NULL,
    //     `renting_lname` VARCHAR(45) NULL,
    //     PRIMARY KEY (`idbooks`))
    //   ENGINE = InnoDB;";

        //  $sql = "CREATE TABLE IF NOT EXISTS `teacher` ( // таблица учителей
        //     `idteacher` INT NOT NULL,
        //     `lname` VARCHAR(45) NOT NULL,
        //     `birthday` DATE NOT NULL,
        //     `phone` VARCHAR(45) NOT NULL,
        //     `subject` VARCHAR(45) NOT NULL,
        //     PRIMARY KEY (`idteacher`))
        //   ENGINE = InnoDB";


            // $sql = "CREATE TABLE IF NOT EXISTS `hardware` ( // таблица устройств
            //     `id_hardware` INT NOT NULL,
            //     `name` VARCHAR(45) NOT NULL,
            //     `price` VARCHAR(45) NULL,
            //     `hardwarecol` VARCHAR(45) NULL,
            //     `memory` INT NULL,
            //     `type` VARCHAR(45) NULL,
            //     `country` VARCHAR(45) NULL,
            //     `replica` TINYINT NULL,
            //     PRIMARY KEY (`id_hardware`))
            //   ENGINE = InnoDB";

            // $sql = "CREATE TABLE IF NOT EXISTS `rate_students` ( // таблица рейтинга студентов
            //     `idrate_students` INT NOT NULL,
            //     `fname` VARCHAR(45) NOT NULL,
            //     `lastname` VARCHAR(45) NOT NULL,
            //     `rate` INT NULL,
            //     `students_id_students` INT NOT NULL,
            //     PRIMARY KEY (`idrate_students`, `students_id_students`),
            //     INDEX `fk_rate_students_students1_idx` (`students_id_students` ASC) VISIBLE,
            //     CONSTRAINT `fk_rate_students_students1`
            //       FOREIGN KEY (`students_id_students`)
            //       REFERENCES `mydb`.`students` (`id_students`)
            //       ON DELETE NO ACTION
            //       ON UPDATE NO ACTION)
            //   ENGINE = InnoDB";

            // $sql = "CREATE TABLE IF NOT EXISTS `books_has_students` ( // таблица-посредник между книгами и студентами (для связи много ко многим) 
            //     `books_idbooks` INT NOT NULL,
            //     `students_id_students` INT NOT NULL,
            //     PRIMARY KEY (`books_idbooks`, `students_id_students`),
            //     INDEX `fk_books_has_students_students1_idx` (`students_id_students` ASC) VISIBLE,
            //     INDEX `fk_books_has_students_books1_idx` (`books_idbooks` ASC) VISIBLE,
            //     CONSTRAINT `fk_books_has_students_books1`
            //       FOREIGN KEY (`books_idbooks`)
            //       REFERENCES `books` (`idbooks`)
            //       ON DELETE NO ACTION
            //       ON UPDATE NO ACTION,
            //     CONSTRAINT `fk_books_has_students_students1`
            //       FOREIGN KEY (`students_id_students`)
            //       REFERENCES `students` (`id_students`)
            //       ON DELETE NO ACTION
            //       ON UPDATE NO ACTION)
            //   ENGINE = InnoDB";

            // $sql = "CREATE TABLE IF NOT EXISTS `cabinet` ( // таблица кабинетов
            //     `idcabinet` INT NOT NULL,
            //     `square` VARCHAR(45) NOT NULL,
            //     `responsible_fname` VARCHAR(45) NOT NULL,
            //     `responsible_lname` VARCHAR(45) NOT NULL,
            //     PRIMARY KEY (`idcabinet`))
            //   ENGINE = InnoDB";

            // $sql = "CREATE TABLE IF NOT EXISTS `mydb`.`teacher_has_hardware` ( // таблица посредник учитель-устройство
            //     `teacher_idteacher` INT NOT NULL,
            //     `hardware_id_hardware` INT NOT NULL,
            //     PRIMARY KEY (`teacher_idteacher`, `hardware_id_hardware`),
            //     INDEX `fk_teacher_has_hardware_hardware1_idx` (`hardware_id_hardware` ASC) VISIBLE,
            //     INDEX `fk_teacher_has_hardware_teacher1_idx` (`teacher_idteacher` ASC) VISIBLE,
            //     CONSTRAINT `fk_teacher_has_hardware_teacher1`
            //       FOREIGN KEY (`teacher_idteacher`)
            //       REFERENCES `mydb`.`teacher` (`idteacher`)
            //       ON DELETE NO ACTION
            //       ON UPDATE NO ACTION,
            //     CONSTRAINT `fk_teacher_has_hardware_hardware1`
            //       FOREIGN KEY (`hardware_id_hardware`)
            //       REFERENCES `mydb`.`hardware` (`id_hardware`)
            //       ON DELETE NO ACTION
            //       ON UPDATE NO ACTION)
            //   ENGINE = InnoDB";

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