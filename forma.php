<HTML>
<HEAD>
<meta charset="utf-8">
<title>Сайт web-студії "Web-DECO"</title>

<script src="js/clock1.js"></script>

<script type="text/javascript">
function send()
{ var valid = true;
var elems = document.forms[0].elements;
for(var i=0; i<document.forms[0].length; i++){
if( elems[i].getAttribute('type') == 'text' ||
elems[i].getAttribute('type') == 'password' ||
elems[i].getAttribute('type') == 'email' ) {
if(elems[i].value == '') {
elems[i].style.border = '2px solid red';
valid = false;
}
}
}
if(!valid) {
alert('Заповніть всі поля !!!');
return false;
}
}
window.onload = function() {
setInterval(clockPainting, 1000); }
</script>
<style>
   .shadowtext {
       text-shadow: 1px 3px 2px white, 0 0 1em red;
       font-size: 2em;
   } 
   </style>
   <script>
       window.onload = function() {
           setInterval(clockPainting, 1000);
       }
       </script>    
</HEAD>
<BODY background="images/bg.jpg">
<table border="1" align="center" cellpadding="10">
<tr>
<td background="images/bg-3.jpg" colspan="2" height="150" align="right" hspace="5">
    <font size="5" color="Maroon"><hl class="shadowtext">Сайт web-студії "Web-DECO"</hl></font>
</td>
</tr>
<?php
$log_path = 'log.txt';
$user_ip = getenv(REMOTE_ADDR);
$user_brouser = gatenv(HTTP_USER_AGENT);
$curent_time = date("ymd H:i:s");
$log_string = "$user_ip|$user_brouser|$curent_time|\r\n";
$file = fopen($log_path,"a");
fwrite($file,$log_string,strlen($log_string));
fclose($file);
?>
<?php
echo '<hl align="center">Хто до нас на сайт заходив!</hl>';
echo '<TABLE align="center" border="1" width="800">';
echo '<tr>';
echo '<td align="center">IP Adress</td>';
echo '<td align="center">Браузер</td>';
echo '<td align="center">Дата</td>';
echo '<tr>';
$data = file("log.txt");
foreach ($data as $line){
    $trs = explode("|", $line);
    echo '<tr>';
    echo '<td>'.$trs[0].'</td>';
    echo '<td>'.$trs[1].'</td>';
    echo '<td>'.$trs[2].'</td>';
    echo '<tr>';
}
echo '</table>';
?>
<tr>
<td colspan="2"><font size="4"><b>
<a href="#">Головна</a>&nbsp;&nbsp;
<a href="#">Фотогалерея</a>&nbsp;&nbsp;
<a href="#">Телефони</a>&nbsp; &nbsp;
<a href="#">Статистика</a>&nbsp; &nbsp;
<a href="#">Зараєстровані</a>&nbsp; &nbsp;
</b></font>
</td>
</tr>
<tr>
<td width="30%" valign="top">
    <center><canvas id="canvas" height="120"></canvas></center>
    <hr>
    <font  size="5" color="navy"><h2>Новини</h2></font>
    <font size="5" >
        <ul>
            <li><a href="#">Сайт будівельної компанії</a></li>
            <li><a href="#">Сайт ТМ "Новашкола"</a></li>
            <li><a href="#">Редизайн сайту classno.com.ua</a></li>
            <li><a href="#">Розробка CMS для Metro Cash&Carry</a></li>
            <li><a href="#">Сайт-візитка дизайнера інтерфейсів</a></li>
            <p align="right"><a href="#">інші...</a></p>
            </ul>
            </font>
            <hr>
            <H1 align="center"><font color="green">Реєстрація</font></H1>
            
             <form action="forma.php" method="post" onsubmit="return send();">
            
            <TABLE align="center" bgcolor="#ccc">
            <TR>
            <TD><font color="green">Прізвище</font>: </TD>
            <TD><input type="text" size="10" maxlength="20" name="name2"> </TD>
            </TR>
            
            <TR>
            <TD><font color="green">Ім'я</font> : </TD>
            <TD><input type="text" size="10" maxlength="20" name="name1"> </TD>
            </TR>
            
            <TR>
            <TD><font color="green">E-Mail</font> : </TD>
            <TD><input type="email" size="10" maxlength="20" name="email"></TD>
            </TR>
            <TR>
            <TD><font color="green">Пароль</font> : </TD>
            <TD><input type="password" size="10" maxlength="20" name="password"></TD>
            </TR>
            </TABLE>
            
            <p align="center">
            <input type="submit" value="Зареєструватись" >
            <input type="reset" value="Очистити">
            </p>
            </form>
            <hr>

</td>
<td width="70%" background="images/bg.jpg" valign='top'><font size="5">
    <hl align="center">Список зареєстрованих !</hl>;
    <TABLE align="center" border="1" width="600">
        <tr>
            <td align="center"><b>Прізвище</b></td>
            <td align="center"><b>Ім'я</b></td>
            <td align="center"><b>E-mail</b></td>
            <td align="center"><b>Пароль</b></td>
    </tr>
    <?php
    $data = file("baza.txt");
    foreach ($data as $line){
        $trs = explode(";",$line);
        echo '<tr>';
        echo '<tr>'.$trs[0].'</td>';

        echo '<tr>'.$trs[1].'</td>';
        echo '<tr>'.$trs[2].'</td>';
        echo '<tr>'.$trs[3].'</td>';
        echo '</tr>';
    }
    ?>
    </table>';
<hl align="center">Дякуємо за реєстрацію !</hl>
<?php
$st = $_POST['name2'].";".$_POST['name1'].";".$_POST['nici'].";".$_POST['email'].";".$_POST['password']."n";
 
$fp = fopen("baza.txt","a");
$test = fwrite($fp,$st);
echo "<h2 align='center' >Ви ввели :"$_POST['name2'].";".$_POST['name1'].";".$_POST['nici'].";".$_POST['email'].";".$_POST['password']."</h2>";
?>
</td>
</tr>
<tr>
<td background="images/bg-3.jpg"olspan="2" valign="middle" align="center" height="90">
    <font size="4">Створено 2021р.<br>Сайт розробив Den</font>
</td>
</tr>
</table>
</BODY>
</HTML>

