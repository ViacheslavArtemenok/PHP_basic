<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="author" content="Luka Cvrk (www.solucija.com)" />
	<link rel="stylesheet" href="css/main.css" type="text/css" />
	<title></title>
	<style>
		*{margin:0;padding:0;}
body { font: .8em Georgia, "Times New Roman", Serif; background: #fff; color: #777; }
a { color: #D40000; text-decoration: none; }
	a:hover { color: #8F0000; }
p { line-height: 1.7em; margin: 0 0 15px; }
.x { clear: both; }

h1 { float: left; font-size: 2em; font-weight: normal; font-style: italic; padding: 0 0 25px 10px; margin: 0 0 10px; }
h2 { font-weight: normal; font-size: 2.6em; padding: 0 0 10px; margin: 0 0 15px; }
h3 { font-size: 1.7em; font-weight: normal; margin: 0 0 20px; }
	h3 a { color: #222; }

.subTitle{margin: 32px auto 16px;}
	
#content { width: 960px; margin: 40px auto; }

#menu { float: right; margin: 10px 10px 0 0; }
	#menu li { display: inline; list-style: none; }
	#menu li a { float: left; margin: 0 0 0 20px; color: #888; }
		#menu li a:hover { color: #555; }

.post { clear: both; padding: 30px 10px; border-top: 1px solid #ddd; border-bottom: 1px solid #ddd; margin: 0 0 40px; }
	.post .details { float: left; width: 250px; }
	.post .details .info { font-size: .9em; color: #999; }
		.post .details .info a { color: #777; border-bottom: 1px dotted #999; padding: 3px 1px; }
	.post .body { float: right; width: 618px; padding: 0 0 0 30px; border-left: 1px solid #ddd; }
	
.col { width: 290px; margin: 0 40px 30px 0; float: left; font-size: .9em; }
	.col.last { margin-right: 0; }
		
#footer { clear: both; border-top: 1px solid #ddd; padding: 20px 0; font-size: .9em; color: #999; }
	</style>
</head>
<body>
	<?php
	$title = "Welcome";
	$subTitleMain = "Nunc commodo euismod massa quis vestibulum";
	$content = "Nunc eget nunc libero. Nunc commodo euismod massa quis vestibulum. 
	Proin mi nibh, dignissim a pellentesque at, ultricies sit amet sapien. 
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel lorem eu libero laoreet facilisis. 
	Aenean placerat, ligula quis placerat iaculis, mi magna luctus nibh, adipiscing pretium erat neque vitae augue. 
	Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. 
	Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
	Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor. 
	Duis iaculis urna vel massa ultricies suscipit. Phasellus diam sapien, 
	fermentum a eleifend non, luctus non augue. 
	Quisque scelerisque purus quis eros sollicitudin gravida. 
	Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at ipsum.";
	$moreAbout = "read more";
	$infoText = "Quisque consectetur odio ut sem semper commodo. 
	Maecenas iaculis leo a ligula euismod condimentum. 
	Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
	Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor. 
	Duis iaculis urna vel massa ultricies suscipit. 
	Phasellus diam sapien, fermentum a eleifend non, luctus non augue. 
	Quisque scelerisque purus quis eros sollicitudin gravida. 
	Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at.";
	?>
	<div id="content">
		<h1><?php 
		echo $title; //4.
		?></h1>
		
		<ul id="menu">
			<li><a href="#">home</a></li>
			<li><a href="#">archive</a></li>
			<li><a href="#">contact</a></li>
		</ul>
	
		<div class="post">
			<div class="details">
				<h2><a href="#"><?php echo $subTitleMain ?></a></h2>
				<p class="info">posted 3 hours ago in <a href="#">general</a></p>
			
			</div>
			<div class="body">
				<p><?php
					echo $content;
					?></p>
			</div>
			<div class="x"></div>
		</div>
		
		<div class="col">
			<h3><a href="#">Ut enim risus rhoncus</a></h3>
			<p><?php echo $infoText ?></p>
			<p>&not; <a href="#"><?php echo $moreAbout ?></a></p>
		</div>
		<div class="col">
			<h3><a href="#">Maecenas iaculis leo</a></h3>
			<p><?php echo $infoText ?></p>
			<p>&not; <a href="#"><?php echo $moreAbout ?></a></p>
		</div>
		<div class="col last">
			<h3><a href="#">Quisque consectetur odio</a></h3>
			<p><?php echo $infoText ?></p>
			<p>&not; <a href="#"><?php echo $moreAbout ?></a></p>
		</div>
		<h3 class="subTitle">Lesson_1</h3>
<?php
//echo "<h2>?????????????? ".date("d.m.Y")."</h2>";
/*$a= 10;
$b= 10.5;
$c= 1.1513551555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555;
$d= 2 > 1;
$title= "????????";
$price= 1000;
$str= "???????????? \"$title\" - ?????????? ???????????????? ???????????? ???????????????? ???? \$$price";
echo $str." ";
var_dump($a, $b, $c, $d, $str);*/
$a = 10;
$b = $a++;
echo "\$a = $a<br>\$b = $b<br><br>";
$c = 10;
$d = ++$c;
echo "\$c = $c<br>\$d = $d<br>";
$age = "20<script>alert('???????? ??????????????')</script>";
echo (int)$age."<br>";
var_dump(2 == "2");
echo "<br>";
var_dump(2 === "2");
$day = date("w");
$isWorkDay = $day > 0 && $day < 6;
echo "<br>$day - ?????? ???????????? ????????? ??????????: ".(boolean)$isWorkDay;
$isWeekend = !($day == 0 || $day == 6);
echo "<br>$day - ?????? ????????????????? ??????????: ".(boolean)$isWeekend;
$isNumForRound = 10.6752;
echo "<br>".round($isNumForRound, 1);
echo "<br>".rand(1, 100);
echo "<br>".max(1, 58, 100, 15, 38);
echo "<br>".sqrt(4);
echo "<br>".pow(2, 3);
echo "<br>".abs(-5);
?>

<h3 class="subTitle">Homework</h3>

<?php
//2.
$int10 = 42;
$int2 = 0b101010;
$int8 = 052;
$int16 = 0x2A;
echo "???????????????????????? ?????????????? $int10 <br>";
echo "???????????????? ?????????????? $int2 <br>";
echo "???????????????????????? ?????????????? $int8 <br>";
echo "?????????????????????????????????? ?????????????? $int16 <br>";
?>

<?php
$precise1 = 1.5;
$precise2 = 1.5e4;
$precise3 = 6E-8;
echo "$precise1 | $precise2 | $precise3";
?>

<?php
$a = 1;
echo "<br>"."$a";
echo "<br>".'$a'."<br>";
?>

<?php
$varNull;
echo var_dump($varNull)."<br>"."<br>";
?>

<?php
$firstVar = 4;
$secondVar = 5;
echo $firstVar + $secondVar."<br>";    // ????????????????
echo $firstVar * $secondVar."<br>";    // ??????????????????
echo $firstVar - $secondVar."<br>";    // ??????????????????
echo $firstVar / $secondVar."<br>";  // ??????????????
echo $firstVar % $secondVar."<br>"; // ?????????????? ???? ??????????????
echo $firstVar ** $secondVar."<br>"."<br>"; // ???????????????????? ?? ??????????????
?>

<?php
//3.
$a = 5;
$b = '05'; //php ?????????? ?????????????????????? ???????????? ?????? ???????????? ?? ?????? ?????? ???????? ????????????????
//echo ++$b."<br>"; //6
var_dump($a == $b); // true, ??.??. $b ?????????????? ?? ?????????????????? ???????? 5, ?????????? ???????? ???????????????????????? ???????????????????? $a ?? $b, ?????????????????? ????????????, var_dump ?????????????? ?????? ?????????????? ???? ?????????????????? true
var_dump((int)'012345'); // ???????????? 12345? ?????????????? integer ?????????????? ???????????? '012345' ?? ???????????? ?????????? 12345
var_dump((float)123.0 === (int)123.0); // ???????????? false? ?????? ?????????????? ?????????????????? ?????????????? 123.0 ???? ?????????? 123, ???????????????? ???? ????, ?????? ?? ???????????????????????????? ???????????? ?????? ???????? ?? ???? ????
var_dump((int)0 === (int)'hello, world'); // ???????????? true? ?????????????? int() ?????????? ???????????????? ?? ?????????? 0, ?? 0 ???????????? ?????????? 0... (int)'2hello, world' ?????????? ???????????????? 2
?>
<?php
$a_some = 1;
$b_some = 2;
//5.*
echo "<br>"."\$a = $a_some";
echo "<br>"."\$b = $b_some";
echo "<br>"."exchange";
$a_some = $b_some--;
echo "<br>"."\$a = $a_some";
echo "<br>"."\$b = $b_some";
?>

		<div id="footer">
		      <p>Copyright &copy; <em>minimalistica</em> &middot; <?php echo date("Y")?> &middot; Design: Luka Cvrk, <a href="http://www.solucija.com/" title="Free CSS Templates">Solucija</a></p>
		</div>	
	</div>
</body>
</html>