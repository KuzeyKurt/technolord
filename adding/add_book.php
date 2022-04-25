<DOCTYPE html>

<html>
<head>
   <?php 
    $title = "Technolord - добавление книги";
    require_once "blocks/head.php" ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
</head>
<body>
    
    <?php require_once "blocks/header.php" ?>
    
    <div id="wrapper">
    <h1>ДОБАВЛЕНИЕ КНИГИ</h1>
        <div id="leftCol">
        <form method="POST" action="">
        <input name="name" type="text" placeholder="Название"/>
            <input name="author" type="text" placeholder="Автор"/>
            <input name="pub_date" type="date" placeholder="Дата публикации"/>
            <input name="receipt" type="date" placeholder="Дата получения"/>
            <input name="avialability" type="bool" placeholder="Доступно"/>
            <input name="renting_fname" type="text" placeholder="Имя арендующего"/>
            <input name="renting_lname" type="text" placeholder="Фамилия арендующего"/>
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
                    $name = $_REQUEST['name'];
                    $author = $_REQUEST['author'];
                    $pub_date = $_REQUEST['pub_date'];
                    $receipt = $_REQUEST['receipt_date'];
                    $avialability = $_REQUEST['availability'];
                    $renting_fname = $_REQUEST['renting_fname'];
                    $renting_lname = $_REQUEST['renting_lname'];

   
                    

   if ($name != '' )
   {
    $insert_sql = "INSERT INTO books (`idbooks`, `name`, `author`, `pub_date`, `receipt_date`, `availability`, `renting_fname`, `renting_lname`)
    VALUES (0, '{$name}', '{$author}', '{$pub_date}', '{$receipt_date}', '{$availability}', '{$renting_fname}', '{$renting_lname}');";
   }

    

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