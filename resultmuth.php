<?php 

        //Email Setting
        $servername = "localhost";
        $username = "muthamizhvizha";
        $password = "muthamizhvizha";
        $dbname = "mtv2019";
        
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("cannot send details .. try again");
        }
        else{echo "";}
        $stmt="select * from mtv2019 WHERE NAME !='!!2@3#4#qazxsw'";
       $res=$conn->query($stmt); 
       $i=0;
      echo '<html>
      <head>
      <title>RESULT TABLE</title>
	<style>
	 tr,th,td{
		 border:1px solid grey;
		 padding:5px;
	 }
	 table{
		 border_collapse:collapse;
		 font-size:28px;
	 }
	 </style>
	 </head>
      <body>
      <table>
      <tr><th>MTV_ID</th><th>NAME</th><th>COLLEGE</th><th>MOBILE</th><th>DEPARTMENT</th><th>GMAIL</th><th>ACCOMODATION</th></tr>';
   while($row=$res->fetch_assoc())
   { echo  '<tr><td>'.$row['MTV_ID'].'</td><td>'.$row['NAME'].'</td><td>'.$row['C_NAME'].'</td><td>'.$row['MOBILE'].'</td><td>'.$row['DEP'].'</td><td>'.$row['E_MAIL'].'</td><td>'.$row['ACCOD'].'</td></tr>';
   $i++;}
   echo '</table>
     </body>
     </html>';
     echo "TOTAL:  ";
             echo $i;
             echo'<br>';
                   $i1=0;
        $stmt1="select * from mtv2019 WHERE ACCOD ='Yes'";
       $res1=$conn->query($stmt1); 
       while($row1=$res1->fetch_assoc()){$i1++;}
       echo "ACCOMODATION:   ";
        echo $i1;
 ?>
