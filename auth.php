<DOCTYPE html>

<html>
<head>
   <?php 
    $title = "Вход";
    require_once "blocks/head.php" ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready (function () {
            $('#messageShow').hide ();
            $("#done").click (function() {
                var name = $("#name").val ();
                var email = $("#email").val ();
                var subject = $("#subject").val ();
                var message = $("#message").val ();
                var fail = "";
                if (name.length < 3) fail = "Имя не должно быть меньше 3 символов";
                else if (email.split('@').length - 1 == 0 || email.split('.').length == 0) fail = "Некорректный e-mail" ;
                else if (subject.length < 5)
                {
                    fail = "Тема сообщения не менее 5 символов."
                }
                else if (message.length < 5)
                {
                    fail = "Содержимое сообщение не менее 5 символов."
                }

                if (fail !="")
                {
                    $('#messageShow').html (fail + "<div class='clear><br></br>");
                    $('#messageShow').show ();
                    return false;
                }
                $.ajax({
                    url: "/ajax/feedback.php",
                    type: 'POST',
                    cache: false,
                    data: {'name':name, 'email': email, 'subject':subject, 'message':message},
                    dataType: 'html',
                    succes: function (data)
                    {
                        $('#messageShow').html (fail + "<div class='clear><br></br>");
                        $('#messageShow').show ();
                    }

                });
            });
        });
    </script>

</head>
<body>
    
    <?php require_once "blocks/header.php" ?>
    <div id="wrapper">
        <div id="leftCol">
            <h1>ВХОД</h1>
            <div></div>
            <input type="text" placeholder="Имя" id="name" name="name"><br />
            <input type="text" placeholder="E-mail" id="email" name="email"><br /> 
            <input type="text" placeholder="Тема сообщения" id="subject" name="subject"><br /> 
            <div id="messageShow"></div>
            <textarea name="message" id="message" placeholder="Введите сюда ваше сообщение" ></textarea><br />
            <input type="button"  name="done" id="done" value="Отправить"> <br />
        </div> 

    <?php require_once "blocks/footer.php" ?>
</body>
</html>