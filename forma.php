<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сайт web-студії "Web-DECO"</title>
    <!--css стили-->
    <style>
        .shadowtext{
            text-shadow: 1px 3px 2px white, 0 0 1em red;
            color: #210042;
            font-size: 2em;
        }
    </style>
    <!--JS-->
    <script src="js/clock1.js"></script>
    <script>
        window.onload=function(){
            setInterval(clockPainting,1000);}
    </script>
    <script type="text/javascript">
        function send()
        {
            var valid = true;
            var elems = document.forms[0].elements;
            for(var i=0;i<document.forms[0].length;i++)
            {
                if(elems [i].getAttribute('type')=='text'||
                elems [i].getAttribute('type')=='password'||
                elems [i].getAttribute('type')=='email'){
                    if(elems[i].value == ''){
                        elems[i].style.border='2px solid red';
                        valid=false;
                    }
                }
            }
            if(!valid)
            {
                alert('Заповніть всі поля !!!');
                return false;
            }
        }
    </script>
</head>
<body background="images/bg.jpg">
    <BODY background="images/bg.jpg">
        <table border="1" align="center" cellpadding="10">
            <tr>
                <td background="images/bg3.jpg" colspan="2" height="150" align="right" hspace="5">
                    <font size="5" color="Maroon"><h1>Сайт web-студії "Web-DECO"</h1></font>
                <tr></tr>
                </td colspan="2">
            </tr>
        </table>
        <!-- Каркас сайта -->
        <table border="1" align="center" cellpadding="10" >
        <tr>
        <td colspan="2" height="150" align="right"> <font size="5"><h1>Сайт web-студії "Web-DECO"</h1></font></td>
        </tr>
        <tr>
        <td>
            <font size="4"><b>
            <a href="#">Головна</a>&nbsp;&nbsp;
            <a href="#">Фотогалерея</a>&nbsp;&nbsp;
            <a href="#">Телефони</a>&nbsp;&nbsp;
            <a href="#">Статистика</a>&nbsp;&nbsp;
            <a href="#">Зареєстровані</a>&nbsp;&nbsp;
        </b></font>
        </td>
        </tr>
        <tr>
        <td width="30%" valign="top">
            <center><canvas id="canvas" height="120" width="120"></canvas></center>
            <hr>
            <font size="5" color="navy"><h2>Новини</h2></font>
                <font size="5">
            <ul>
                <li><a href="#">Сайт будівельної школи</a></li>
                <li><a href="#">Сайт ТМ "Новашкола"</a></li>
                <li><a href="#">Редизайн сайту classno.com.ua</a></li>
                <li><a href="#">Розробка CMS для Metro Cash&Carry</a></li>
                <li><a href="#">Сайт-візитка дизайнера інтерфейсів</a></li>
                <p align="right"><a href="#">інші...</a></p>
            </ul>
        </font>

<hr>
<h1 align="center"><font color="green">Реєстрація</font></h1>
<form action="forma.php" method="post" onsubmit="return send();">
<table align="center" bgcolor="#ccc">
<TR>
    <td><font color="green">Прізвище</font>: </td>
    <td><input type="text" size="10" maxlength="20" name="name2"></td>
</TR>
<TR>
    <td><font color="green">Ім'я</font>: </td>
    <td><input type="text" size="10" maxlength="20" name="name1"></td>
</TR>
<TR>
    <td><font color="green">E-Mail</font>: </td>
    <td><input type="email" size="10" maxlength="20" name="email"></td>
</TR>
<TR>
    <td><font color="green">Пароль</font>: </td>
    <td><input type="password" size="10" maxlength="20" name="password"></td>
</TR>
</table>
<p align="center">
<input type="submit" value="Зареєструватись">
<input type="reset" value="Очистити">
</p>
</form>
<hr>

</td>
        <td width="70%"> 
            <p>Зробити сайт з нами легко</p>
            <h1 align="center">Дякуємо за реєстрацію !</h1>
            <?php
            $st=$_POST['name2'].";".$_POST['name1'].";".$_POST['email'].";".$_POST['password']."\n";

            $fp = fopen("baza.txt","a");
            $test = fwrite($fp,$st);
            echo "<h2 align='center'>Ви ввели:".$_POST['name2'].",".$_POST['name1'].",".$_POST['email'].",".$_POST['password']."</h2>";
            ?>
<p>Звертайтесь до веб-студії Web-DECO, і ми з радістю застосуємо свої здібності і досвід для вирішення Ваших задач! Ми можемо створити сайт, який стане для Вас вдалою інвестицією.</p> 
        </td>
        </tr>
        <tr>
        <td background="images/bg3.jpg" colspan="2" valign="middle" height="90">
            <font size="4">Сайт розробив Самков Александр</font>
        </td>
        </tr>
        </table>
        <!-- -->
        <BODY>
</body>
</html>