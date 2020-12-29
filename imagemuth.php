<?php 
       $i=$_GET['id'];
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
         $sql = "select * from mtv2019 where MTV_ID='$i'";
         $result = mysqli_query($conn,$sql);
         $row = mysqli_fetch_array($result);
         $image_src2 = $row['IMG'];
         $id=$row['MTV_ID'];
    ?>
        <html>
            <body>
                <center><br><br><br>
                <div>
                    <img src="img/clogo.png" style="width:140px;height:130px;" align="right">
                    <img src="img/gct logo.png" style="width:100px;height:100px;" align="left" vspace="20">
                    <h3>அரசினர் தொழில்நுட்பக் கல்லூரி</h3>
                    <h3>கோயம்புத்தூர்</h3><br><br>
                </div>    
                    <img src='<?php echo $image_src2; ?>' style='height:130px;width:155px;'> 
                    <h2 align ="center"><?php echo $id ;?></h2>
                </center>
            </body>
        </html>
           