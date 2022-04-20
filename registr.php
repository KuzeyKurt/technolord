<DOCTYPE html>

<html>
<head>
   <?php 
    $title = "Technolord - регистрация";
    require_once "blocks/head.php" ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
</head>
<body>
    
    <?php require_once "blocks/header.php" ?>
    
    <div id="wrapper">
    <h1>РЕГИСТРАЦИЯ</h1>
        <div id="leftCol">
        <form method="POST" action="">
            <input name="fname" type="text" placeholder="Имя"/>
            <input name="lname" type="text" placeholder="Фамилия"/>
            <input name="phone" type="text" placeholder="Телефон"/>
            <input name="birthday" type="date" placeholder="Дата рождения"/>
            <input type="submit"  name="done" id="done" value="Отправить"> <br /> 
        </form>
        </div> 

        <?php 
    
    $conn = new mysqli("localhost", "root", "", "techno");
                    if ($conn->connect_error)
                    {
                        die("Error: " .$conn->connect_error);
                    }
                    else
                    {
                        echo "";
                    }
                    $fname = $_REQUEST['fname'];
                    $lname = $_REQUEST['lname'];
                    $phone = $_REQUEST['phone'];
                    $birthday = $_REQUEST['birthday'];

                    

    $insert_sql = "INSERT INTO students (`id_stud`, `lname`, `fname`, `birthday`, `phone`)
     VALUES (0, '{$fname}', '{$lname}', '{$birthday}', '{$phone}');";

    

     if (mysqli_query($conn, $insert_sql)) { //this is line 30
        echo "New record created successfully";
    } else {
        echo "Error: " . $insert_sql . "<br>" . mysqli_error($conn);
    }
    echo 'Hello :)';

     ?>

</body>
<?php require_once "blocks/footer.php" ?>
</html>