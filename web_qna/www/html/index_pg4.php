<?php
session_start();
// other php code here
$count = 0;

if (empty($_SESSION['skycolor'] ))
	$_SESSION['skycolor'] = $_POST['skycolor'];
if (empty($_SESSION['cloud'] ))
	$_SESSION['cloud'] = $_POST['cloud'];
if (empty($_SESSION['coffee'] ))
	$_SESSION['coffee'] = $_POST['coffee'];
if (empty($_SESSION['shop'] ))
	$_SESSION['shop'] = $_POST['shop'];
if (empty($_SESSION['tech'] ))
	$_SESSION['tech'] = $_POST['tech'];

$_SESSION['question1'] = $_POST['question1'];
$_SESSION['question2'] = $_POST['question2'];
$_SESSION['question3'] = $_POST['question3'];
$_SESSION['question4'] = $_POST['question4'];
$_SESSION['question5'] = $_POST['question5'];

if (!empty($skycolor)) {
    if ($skycolor === $question1)
		$count++;
}

if (!empty($shop)) {
    if ($shop === $question2)
		$count++;
}

if (!empty($cloud)) {
    if ($cloud === $question3)
		$count++;
}

if (!empty($tech)) {
    if ($tech === $question4)
		$count++;
}

if (!empty($coffee)) {
    if ($coffee === $question5)
		$count++;
}
?>

<html>
  <head>
    <title>Hello there!</title>
  </head>
  <body>
    <img src="image/Container-255x115.png" alt="Azure Container Service Logo" style="float:right"/>
    <h1>Hello and welcome to //build 2016</h1>
   
    <form action="input_pg4.php" method="post">
    	<h2>
			<br/><br/>		
<?php 
	echo $_SESSION['skycolor'] . ".<br>"; 
	echo $_SESSION['cloud'] . ".<br>";
	echo $_SESSION['coffee'] . ".<br>";
	echo $_SESSION['shop'] . ".<br>";
	echo $_SESSION['tech'] . ".<br>";
?>     
	 You got <?=$count?> questions right!
	</h2>

   </form>
  </body>
</html>
