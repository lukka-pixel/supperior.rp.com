<!DOCTYPE html>
<html>
<head>
<title>Newton-Rp.Ru - Мониторинг</title>
<meta charset="UTF-8">
<meta name="description" content="GTA:SA по сети">
<meta name="author" content="Islam Morata <vk.com/imorata69>"> 
<link rel="shortcut icon" href="img/icon.png" />
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style1.css">
<link rel="stylesheet" href="css/font-awesome.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<script type="text/javascript" src="js/scroll.js"></script>
<script src="js/app.js"></script>
<link rel="stylesheet" href="anim.css" type="text/css">
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
	font-weight: normal;
}

th {
	
text-transform: uppercase;
font-size: 12px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #bb1c1c;
    color: white;
}
</style>
</head>

<body>


<div id="menu">
<div id="logo"><a href="index.html" class="fa fa-heart-o fa-1" aria-hidden="true">&nbsp;<div id="lg">NRP</div></a></div>
<li><a href="news.html">Новости</a></li>
<li class="active"><a href="index.html">Главная</a></li>
<li><a href="donate.html">Донат</a></li>
<li><a href="/forum">Форум</a></li>
<a href="index.html" class="log">Вход</a>
<div id="soc">
<a href="http://vk.com/newton_roleplay" class="fa fa-vk"></a>&nbsp;&nbsp;&nbsp;
<a href="http://www.youtube.com/channel/UCOj7n4kratQ7BJQvggW8ACA" class="fa fa-youtube"></a>
</div>
</div>


<div id="newstop">

<div class='animatedParent row article'>
<div class='animated bounceInLeft'>

<div id="newsp">
<h1>Мониторинг</h1>

</div>
</div>
</div>

</div>

<div class='animatedParent row article'>
<div class='animated bounceInRight'>

<div class="clearer"><span></span></div>
		<div class="content">
		<div class="zg">Лидеры организаций</div>
		<div class="monitoring69">              
<?php                
$host = "web1.myarena.ru";
$user = "nrpsite_samp";
$password = "250399p";
$db = "nrpsite_samp";

// Производим попытку подключения к серверу MySQL:
if(!mysql_connect($host, $user, $password))
{
	echo "<center><font size=15>Подлкючение не выполнено к Mysql</font></center>";
}

if(!mysql_select_db($db))
{
	echo "<h2>Connecting to the database is not satisfied</h2>";
}
// Выводим заголовок таблицы:
echo "<table width=\"100%\">";
echo "<tr><th><font color=white>Имя</font></th><th><font color=white>Статус</font></th><th><font color=white>Организация</font></td>";
echo "<th><font color=white>последнее посещение</font></th><th><font color=white>Время в игре</font></th></tr>";

// SQL-запрос:
$q = mysql_query ("SELECT * FROM accounts WHERE pLeader >='1'");

// Выводим таблицу:
for ($c=0; $c<mysql_num_rows($q); $c++)
{
echo "<tr>";

$f = mysql_fetch_array($q);
$fract = array(
  'default' => 'Нету',
  '1' => 'LSPD',
  '2' => 'FBI',
  '3' => 'SFa',
  '4' => 'МЧС',
  '5' => 'La Cosa Nostra',
  '6' => 'Yakuza',
  '7' => 'Мэрия',
  '8' => 'Казино Лос-Сантос',
  '9' => 'SF NEWS',
  '10' => 'SFPD',
  '11' => 'Instructors',
  '12' => 'The Ballas Gang',
  '13' => 'The Vagos Gang',
  '14' => 'Russian Mafia',
  '15' => 'Grove Street Gang',
  '16' => 'LS NEWS',
  '17' => 'Varios Los Aztecas Gang',
  '18' => 'The Rifa Gang',
  '19' => 'LVa',
  '20' => 'LV NEWS',
  '21' => 'LVPD',
  '22' => 'МЧС',
 );
 $online = array(
  '0' => '<font color=#ff0000>Offline</font>',
  '1' => '<font color=#00ff00>Online</font>',
 );
echo "<td><font color=black>$f[Name]</font></td><td><font color=black>".$online[$f['pLogin']] ."</font></td><td><font color=black>".$fract[$f['pLeader']] ."</font></td>";
echo "<td><font color=black>$f[pOnline]</font></td><td><font color=black>$f[pOnlineLid]</font></td>";

echo "</tr>";
}
echo "</table>";
?>

</div></div>

        <div class="clearer"><span></span></div>
		<div class="content">
<div class="zg">Администрация</div>
			<div class="monitoring69">              
	<?php                
$host = "web1.myarena.ru";
$user = "nrpsite_samp";
$password = "250399p";
$db = "nrpsite_samp";

	// Производим попытку подключения к серверу MySQL:
	$link = mysql_connect($host, $user, $password);

	// Выбираем базу данных:
	if(!mysql_select_db($db))
	{
		echo "<h2>Connecting to the database is not satisfied</h2>";
		exit;
	}
	// Выводим заголовок таблицы:
	echo "<table width=\"100%\">";
	echo "<tr><th><font color=white>Имя</font></th><th><font color=white>Должность</font></th><th><font color=white>последнее посещение</font></th><th><font";
	echo "<th><font color=white>Время в игре</font></th>";
	echo "<th><font color=white>Рейтинг</font></th></tr>";

	// SQL-запрос:
	$q = mysql_query ("SELECT * FROM accounts WHERE pAdmin >='1'");

	// Выводим таблицу:
	for ($c=0; $c<mysql_num_rows($q); $c++)
	{
	echo "<tr>";

	$f = mysql_fetch_array($q);
	 $online = array(
	  '1' => '<font color=#FF9900>Модератор (1 LVL)</font>',
	  '2' => '<font color=#FF9900>Модератор (2 LVL)</font>',
	  '3' => '<font color=#00AA00>Администратор (3 LVL)</font>',
	  '4' => '<font color=#00AA00>Администратор (4 LVL)</font>',
	  '5' => '<font color=#00AA00>Администратор (5 LVL)</font>',
	  '6' => '<font color=#00AA00>Администратор (6 LVL)</font>',
	  '7' => '<font color=#00AA00>Администратор (7 LVL)</font>',
	  '8' => '<font color=#00AA00>Администратор (8 LVL)</font>',
	  '9' => '<font color=#00AA00>Администратор (9 LVL)</font>',
	  '10' => '<font color=#ff0000>Основатель (10 LVL)</font>',
	 );
	 echo "<td><font color=black>$f[Name]</font></td><td><font color=black>".$online[$f['pAdmin']] ."</font></td><td><font color=black>$f[pOnline]</font></td>";
	 echo "<td><font color=black>$f[pOnlineLid]</font></td>";
	 echo "<td><font color=black>$f[pMpa]</font></td>";

	echo "</tr>";
	}
	echo "</table>";
	mysql_close($link)
?>

</div></div>
        <div class="clearer"><span></span></div>
		<div class="content">
		<div class="zg">Игровые помощники</div>
		<div class="monitoring69">
<?php                
$host = "web1.myarena.ru";
$user = "nrpsite_samp";
$password = "250399p";
$db = "nrpsite_samp";

// Производим попытку подключения к серверу MySQL:
if(!mysql_connect($host, $user, $password))
{
	echo "<center><font size=15>Connecting to the database is not satisfied</font></center>";
}

if(!mysql_select_db($db))
{
	echo "<h2>Подлкючение не выполнено к БД</h2>";
}
// Выводим заголовок таблицы:
echo "<table width=\"100%\">";
echo "<tr><th><font color=white>Имя</font></th><th><font color=white>Статус</font></th>";
echo "<th><font color=white>последнее посещение</font></th><th><font color=white>Время в игре</font></th>";
echo "<th><font color=white>Рейтинг</font></th></tr>";

// SQL-запрос:
$q = mysql_query ("SELECT * FROM accounts WHERE pHelper >='1'");

// Выводим таблицу:
for ($c=0; $c<mysql_num_rows($q); $c++)
{
echo "<tr>";

 $f = mysql_fetch_array($q);
 $online = array(
  '0' => '<font color=#ff0000>Offline</font>',
  '1' => '<font color=#00ff00>Online</font>',
 );
echo "<td><font color=black>$f[Name]</font></td><td><font color=black>".$online[$f['pLogin']] ."</font></td>";
echo "<td><font color=black>$f[pOnline]</font></td><td><font color=black>$f[pOnlineLid]</font></td>";
echo "<td><font color=black>$f[pMpa]</font></td>";

echo "</tr>";
}
echo "</table>";
?>


</div></div></div>
</div>


<footer>

 <div id="gorod"></div>
	<a href="#" id='Go_Top'><i class="fa fa-angle-up" aria-hidden="true"></i></a>

	<div id="footwrap">

<div id="footmenu">

<li><a href="/forum">Форум</a></li>
<li><a href="donate.html">Донат</a></li>
<li><a href="http://vk.com/newton_roleplay">Группа вконтакте</a></li>
<li><a href="/forum">Канал на YouTube</a></li>

</div> 
<div id="footmenu2">

<li><a href="forum/viewforum.php?f=37">faq</a></li>
<li><a href="monitoring.php">Мониторинг</a></li>
<li><a href="news.html">Новости</a></li>
<li><a href="http://servers-samp.ru/server-3925">Голосуй за наш сервер</a></li>

</div> <img src="img/icon.png" class="iccc" width="95" height="95">
</div>

<div id="copy">

<a href="index.html" class="hom"><img src="img/home1.png" width="13" height="13"></a> 
 <i class="fa fa-code fa-lg" aria-hidden="true"></i> &nbsp;developed by <a href="https://vk.com/imorata69">morata</a>  &nbsp;&nbsp;&nbsp;&nbsp;

</div>

</footer>
	<script language="JavaScript" type="text/javascript"
src="js/go.js">
</script>

<script language="JavaScript" type="text/javascript">
$(function() {
 $.fn.scrollToTop = function() {
  $(this).hide().removeAttr("href");
  if ($(window).scrollTop() >= "250") $(this).fadeIn("slow")
  var scrollDiv = $(this);
  $(window).scroll(function() {
   if ($(window).scrollTop() <= "250") $(scrollDiv).fadeOut("slow")
   else $(scrollDiv).fadeIn("slow")
  });
  $(this).click(function() {
   $("html, body").animate({scrollTop: 0}, "slow")
  })
 }
});
 
$(function() {
 $("#Go_Top").scrollToTop();
});
</script>

<script src="js/jquery.min.js"></script>
<script src='js/css3-animate-it.js'></script>
<script src="js/index.js"></script>
</body>
  
</html>

