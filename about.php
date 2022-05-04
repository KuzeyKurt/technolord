<DOCTYPE html>

<html>
<head>
   <?php 
    $title = "Про Technolord";
    require_once "blocks/head.php" ?>
</head>
<body>
    
    <?php require_once "blocks/header.php" ?>
    <div id="wrapper">
        <div id="leftCol">
            <div id="about_us">
                <h2>О НАС</h2>
                <p>TECHNOLORD - секция робототехники, где вы можете осуществить свои самые смелые идеи, изучить сферу робототехники с нуля и стать специалистом в этой области.</p>
                <h4>_________________________________________________________________________</h4>
                <h2>Наши учителя - квалифицированные сотрудники!</h2>
                <h4>_________________________________________________________________________</h4>
                <?php 
                    $conn = new mysqli("localhost", "root", "", "techno");
                    
                   
                    $sql = "SELECT * from teacher";
                    if ($result = $conn->query($sql))
                    {
//                        $rowCount = $result->num_rows; // количество полученных строк
//                        echo "<p>Получено объектов: $rowCount</p>";
                        echo "<table class='table'><tr><th> № </th><th> Имя </th><th> Фамилия </th><th> Дата рождения </th><th> Телефон </th><th> Предмет </th><th>";
                        foreach($result as $row){
                            echo "<tr>";
                                echo "<td>" . $row["idteacher"] . "</td>";
                                echo "<td>" . $row["fname"] . "</td> ";
                                echo "<td>" . $row["lname"] . "</td>";
                                echo "<td>" . $row["birthday"] . "</td>";
                                echo "<td>" . $row["phone"] . "</td>";
                                echo "<td>" . $row["subject"] . "</td>";
                               // echo "<td>" // добавить кнопку удаления и апдейта
                            echo "</tr>";
                        }
                        echo "</table>";
                        $result->free();
                        
                    }
                ?>
                    <ul class="brands">

</ul>

        <div id="rightCol">        
        </div>
    </div>

            </div>
        </div>
    </div> 

    <?php require_once "blocks/footer.php" ?>
</body>
</html>