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
            <h1>ЗАНЯТИЯ</h1>
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
                    $show_avi = "";
                    if ($row["avaibality"] == 1)
                    {
                        $show_avi = "available now";
                    }
                    else 
                    {
                        $show_avi = "Is not available now";
                    }
                    $sql = "SELECT * from lesson";
                    if ($result = $conn->query($sql))
                    {
//                        $rowCount = $result->num_rows; // количество полученных строк
//                        echo "<p>Получено объектов: $rowCount</p>";
                        echo "<table class='table'><tr><th> № </th><th> Урок </th><th> Преподаватель </th><th> Дата занятия </th><th> Кабинет </th></tr>";
                        foreach($result as $row){
                            echo "<tr>";
                                echo "<td>" . $row["idlesson"] . "</td>";
                                echo "<td>" . $row["discipline"] . "</td> ";
                                echo "<td>" . $row["teacher"] . "</td>";
                                echo "<td>" . $row["date"] . "</td>";
                                echo "<td>" . $row["idcabinet"] . "</td>";
                               
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