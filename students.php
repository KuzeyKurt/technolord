<DOCTYPE html>

<html>
<head>
   <?php 
    $title = "Technolord";
    require_once "blocks/head.php"; ?>
</head>
<body>
    
    <?php require_once "blocks/header.php" ?>
    <div id="wrapper">
        <div id="leftCol">
        <h1>СПИОСОК СТУДЕНТОВ</h1>
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
                   
                    $sql = "SELECT * from students";
                    if ($result = $conn->query($sql))
                    {
//                        $rowCount = $result->num_rows; // количество полученных строк
//                        echo "<p>Получено объектов: $rowCount</p>";
                        echo "<table class='table'><tr><th> № </th><th> Имя </th><th> Фамилия</th><th> Дата рождения </th><th> Телефон </th>";
                        foreach($result as $row){
                            echo "<tr>";
                                echo "<td>" . $row["id_stud"] . "</td>";
                                echo "<td>" . $row["lname"] . "</td> ";
                                echo "<td>" . $row["fname"] . "</td>";
                                echo "<td>" . $row["birthday"] . "</td>";
                                echo "<td>" . $row["phone"] . "</td>";
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