<?php
session_start();
// other php code here

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
?>

<html>
  <head>
    <title>Hello there!</title>
  </head>
  <body>
    <img src="image/Container-255x115.png" alt="Azure Container Service Logo" style="float:right"/>
    <h1>Hello and welcome to //build 2016</h1>
   
    <form action="index_pg4.php" method="post">
     <?php
       // Sleep to make the script take enough time to fail the CI test.
       // usleep(40000);

       $service_url = 'http://rest-demo-azure.marathon.mesos:8080/JerseyHelloWorld/rest/helloworld';
       $curl = curl_init($service_url);
       curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
       $curl_response = curl_exec($curl);
       if ($curl_response === false) {
         $info = curl_getinfo($curl);
         curl_close($curl);
         die('error occured during curl exec. Additional info: ' . var_export($info));
       }

       curl_close($curl);
     ?>
     <?php echo $curl_response ?>

			<br/><br/>		
<?php 
	echo  $_SESSION['skycolor'] . ".<br>"; 
	echo  $_SESSION['cloud'] . ".<br>";
	echo  $_SESSION['coffee'] . ".<br>";
	echo  $_SESSION['shop'] . ".<br>";
	echo  $_SESSION['tech'] . ".<br>";
?>     
     <input type="submit" value="Submit"/>
   </form>
  </body>
</html>
