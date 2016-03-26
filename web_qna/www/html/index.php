<html>
  <head>
    <title>Hello there!</title>
  </head>
  <script language="JavaScript">
   function fnSubmit () {
     document.forms.form1.submit();;
     document.forms.form2.submit();;
   }
  </script>
  <body>
    <img src="image/Container-255x115.png" alt="Azure Container Service Logo" style="float:right"/>
    <h1>Hello and welcome to //build 2016</h1>
    <p>Host: <?php echo gethostname() ?></p>
   
    <form action="index_pg2.php" method="post" >
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
     <h1>Question !</h1>
     <?php echo $curl_response ?>
    </form>
    // Answer submission format
    // CORRECT-Q_3-A_A
    // INCORRECT-Q_4-A_D
    <form action="" method ="post">
     <input type="hidden" name="queue" value="QUEUE-NAME"/>
     <input type= hidden" name="message" value="MESSAGE" />
    </form>

    <input type="submit" value="Submit" onclick="fnSubmit()">
     
 
  </body>
</html>
