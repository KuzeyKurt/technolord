<DOCTYPE html>

<html>
<head>
   <?php 
    $title = "Technolord";
    require_once "blocks/head.php" ?>
</head>
<body>
    
    <?php require_once "blocks/header.php" ?>
    <div id="wrapper">
        <div id="leftCol">
        <h1>УСТРОЙСТВА</h1>
        <?php 
                    $conn = new mysqli("localhost", "root", "", "techno");
                    if ($conn->connect_error)
                    {
                        die("Error: " .$conn->connect_error);
                    }
                    else
                    {
                        echo "Base is working :)";
                    }
                   
                    $sql = "SELECT * from hardware";
                    if ($result = $conn->query($sql))
                    {
//                        $rowCount = $result->num_rows; // количество полученных строк
//                        echo "<p>Получено объектов: $rowCount</p>";
                        echo "<table class='table'><tr><th> № </th><th> Имя </th><th> Память (Кб) </th><th> Цена </th><th> Тип </th><th> Страна</th><th>";
                        foreach($result as $row){
                            echo "<tr>";
                                echo "<td>" . $row["id_hardware"] . "</td>";
                                echo "<td>" . $row["name"] . "</td> ";
                                echo "<td>" . $row["memory"] . "</td>";
                                echo "<td>" . $row["price"] . "</td>";
                                echo "<td>" . $row["type"] . "</td>";
                                echo "<td>" . $row["country"] . "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                        $result->free();
                        
                    }
                ?>
              
            </div>
        </div>
    </div> 

    <?php require_once "blocks/footer.php" ?>
</body>
</html>