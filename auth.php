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
                var fname = $("#fname").val ();
                var lname = $("#lname").val ();
                var phone = $("#phone").val ();
                var email = $("#email").val ();
                var subject = $("#subject").val ();
                var message = $("#message").val ();
                var fail = "";
                if (fname.length < 3) 
                {
                    fail = "Имя не должно быть меньше 3 символов";
                }
                else if (lname.length < 2)
                {
                    fail = "Фамилия не может быть меньше 2 символов"
                }
                else if (phone.length < 5)
                {
                    fail = "Некорректный номер телефона."
                }
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
            <input type="text" placeholder="Имя" id="fname" name="name"><br />
            <input type="text" placeholder="Фамилия" id="lname" name="lname"><br />
            <input type="text" placeholder="Телефон" id="phone" name="phone"><br />
            <input type="text" placeholder="E-mail" id="email" name="email"><br /> 
            <input type="text" placeholder="Тема сообщения" id="subject" name="subject"><br /> 
            <div id="messageShow"></div>
            <textarea name="message" id="message" placeholder="Введите сюда ваше сообщение" ></textarea><br />
            <input type="button"  name="done" id="done" value="Отправить"> <br />
        </div> 

    <?php require_once "blocks/footer.php" ?>
</body>
</html>