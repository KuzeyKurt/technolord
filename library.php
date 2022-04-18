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
        <h1>БИБЛИОТЕКА</h1>
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
                    $sql = "SELECT * from books";
                    if ($result = $conn->query($sql))
                    {
                        $rowCount = $result->num_rows; // количество полученных строк
                        echo "<p>Получено объектов: $rowCount</p>";
                        foreach($result as $row){
                            echo "<tr>";
                                echo "<td>" . $row["id"] . "</td> <tr></tr>\n";
                                echo "<td>" . $row["name"] . "</td> - ";
                                echo "<td>" . $row["author"] . "</td> <br/>\r\n";
                                if ($row["availability" == "1"])
                                {
                                    echo "Available";
                                }
                            echo "</tr>";
                        }
                        echo "</table>";
                        $result->free();
                        
                    }
                ?>
                <?php
                            echo "<table>
                                <tr><td>1.1</td><td>1.2</td></tr>
                                <tr><td>2.1</td><td>2.2</td></tr>
                            </table>";
                        ?>
            </div>
        </div>
    </div> 

    <?php require_once "blocks/footer.php" ?>
</body>
</html>