<DOCTYPE html>

<html>
<head>
   <?php 
    $title = "Вход";
    require_once "blocks/head.php" ?>
</head>
<body>
    
    <?php require_once "blocks/header.php" ?>
    <div id="wrapper">
        <div id="leftCol">
            <h1>ВХОД</h1>
            <div></div>
            <input type="text" placeholder="Имя" id="name" name="name"><br />
            <input type="text" placeholder="E-mail" id="email" name="email"><br /> 
            <input type="text" placeholder="Тема сообщения" id="subjcect" name="subject"><br /> 
            <textarea name="message" id="message"></textarea><br />
            <input type="button"  name="done" id="done" value="Отправить"> <br />
        </div> 

    <?php require_once "blocks/footer.php" ?>
</body>
</html>