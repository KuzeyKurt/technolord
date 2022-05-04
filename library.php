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
                    $sql = "SELECT * from books";
                    if ($result = $conn->query($sql))
                    {
//                        $rowCount = $result->num_rows; // количество полученных строк
//                        echo "<p>Получено объектов: $rowCount</p>";
                        echo "<table class='table'><tr><th> № </th><th> Название </th><th> Автор </th></tr>";
                        foreach($result as $row){
                            echo "<tr>";
                                echo "<td>" . $row["idbooks"] . "</td>";
                                echo "<td>" . $row["name"] . "</td> ";
                                echo "<td>" . $row["author"] . "</td>";
                                
                                

                                if ($row["availability"] == 1)
                                {
                                    echo " ";
                                }
                            echo "</tr>";
                        }
                        echo "</table>";
                        $result->free();
                        
                    }
                ?>
<!-- DELETE MODAL -->
<div class="modal fade" id="deleteModal<?=$value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Удалить запись № < ?=$value['id'] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
        <form action="?id=<?=$value['id'] ?>" method="post">
        	<button type="submit" name="delete_submit" class="btn btn-danger">Удалить</button>
    	</form>
      </div>
    </div>
  </div>
</div>
                    <?php 

if (isset($_POST['delete_submit'])) {
	$sql = "DELETE FROM users WHERE id=?";
	$query = $pdo->prepare($sql);
	$query->execute([$get_id]);
	header('Location: '. $_SERVER['HTTP_REFERER']);
}
                    
                    ?>
            </div>
        </div>
    </div> 

    <?php require_once "blocks/footer.php" ?>
</body>
</html>