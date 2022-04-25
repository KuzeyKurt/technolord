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
    <h1>ДОБАВЛЕНИЕ УСТРОЙСТВА</h1>
        <div id="leftCol">
        <form method="POST" action="">
            <input name="name" type="text" placeholder="Название"/>
            <input name="price" type="text" placeholder="Цена"/>
            <input name="hardwarecol" type="text" placeholder="Количество"/>
            <input name="memory" type="text" placeholder="Память"/>
            <input name="type" type="text" placeholder="Тип устройства"/>
            <input name="country" type="text" placeholder="Страна производства"/>
            <input name="replica" type="bool" placeholder="Реплика (ставьте 0 или 1)"/><br /> 
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
                    $price = $_REQUEST['price'];
                    $hardwarecol = $_REQUEST['hardwarecol'];
                    $memory = $_REQUEST['memory'];
                    $type = $_REQUEST['type'];
                    $country = $_REQUEST['country'];
                    $replica = $_REQUEST['replica'];

                    
                    if ($name != "")
                    {
                        $insert_sql = "INSERT INTO hardware (`id_hardware`, `name`, `price`, `hardwarecol`, `memory`, `type`, `country`, `replica`)
                        VALUES (0, '{$name}', '{$price}', '{$hardwarecol}', '{$memory}', '{$type}', '{$country}', '{$replica}');";
                   
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