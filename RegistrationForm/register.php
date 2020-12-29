<script type="text/javascript">
if (document.layers) {
    //Capture the MouseDown event.
    document.captureEvents(Event.MOUSEDOWN);
 
    //Disable the OnMouseDown event handler.
    document.onmousedown = function () {
        return false;
    };
}
else {
    //Disable the OnMouseUp event handler.
    document.onmouseup = function (e) {
        if (e != null && e.type == "mouseup") {
            //Check the Mouse Button which is clicked.
            if (e.which == 2 || e.which == 3) {
                //If the Button is middle or right then disable.
                return false;
            }
        }
    };
}
 
//Disable the Context Menu event.
document.oncontextmenu = function () {
    return false;
};
</script>

<?php $errr=""; ?>

<?php

    use PHPMailer\PHPMailer\PHPMailer;
        require_once "PHPMailer/src/PHPMailer.php";
        require_once "PHPMailer/src/SMTP.php";
        require_once "PHPMailer/src/Exception.php";

        $mail = new PHPMailer();

        //SMTP Settings
      // $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "muthamizhvizhagct@gmail.com";
        $mail->Password = 'tmfa@gct';
        $mail->Port = 465; //587
        $mail->SMTPSecure = "ssl"; //tls

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
        
       if(isset($_POST['submit'])){
    
        $name = $_POST["Name"];
        $id=$_POST["Id"];
        $email = $_POST["Email"];
        $phone = $_POST["Phone"];
        $college = $_POST["College"];
        $department = $_POST["Department"];
      
        $gender = $_POST["Gender"];
        $year = $_POST["Year"];
        $accomodation = $_POST["Accomodation"];
        $stmt2 = "SELECT * FROM mtv2019 where E_MAIL='$email'";
        $result2 = $conn->query($stmt2);
    if($result2->num_rows < 1 ) {
    $stmt="select MTV_ID from mtv2019 where NAME='!!2@3#4#qazxsw';";
    $res=$conn->query($stmt);
   while($row=$res->fetch_assoc())
   { $i=$row['MTV_ID']; }
	++$i;
	if($i<10)
	{$mtv_id=vsprintf("MTV19000%u",array($i)); $mtv=vsprintf("*****000%u",array($i));}
    else if($i<100)
	{$mtv_id=vsprintf("MTV1900%u",array($i)); $mtv=vsprintf("*****00%u",array($i));}
    elseif ($i<1000)
    {$mtv_id=vsprintf("MTV019%u",array($i)); $mtv=vsprintf("*****0%u",array($i));}
    elseif ($i<10000)
    {$mtv_id=vsprintf("MTV19%u",array($i)); $mtv=vsprintf("*****%u",array($i));}
	   $mail->isHTML(true);
        $mail->setFrom("muthamizhvizhagct@gmail.com", "TEAM MUTHAMIZHVIZHA-19");
        $mail->addAddress($email);
        $mail->Subject = "Registration Successfull";
        $mail->Body =
"<html>
<body>
<h2>WELCOME TO MUTHAMIZHVIZHA-19</h2>
<h1 style='color:black;'>Hi<span style='color:#F39C12'> ". $name." ,</span><br><br></h1>

<h2 style='color:black;'>Greetings from <span style='color:red>Manavarmandram </span>GCT, Coimbatore-13.</h2>

<span style='color:black;font-size:100%;'>You have received this mail because you have successfully registered for <span>MUTHAMIZHVIZHA 2k19</span></span><br><br>
<span style='color:red;font-size:150%;'>
<center><b> MUTHAMIZHVIZHA ID: ".$mtv."</b></center>
</span>
<br> Have hard copy of this Email and MUTHAMIZHVIZHA ID is mandatory for all participiants.<br>

<p>In-case of any queries, feel free to contact us.</p>
<p style='color:black;font-size:20px;'>Panneer - <a href='tel:+919655505440'>+91 96555 05440  </a></p>
<p style='color:black;font-size:20px;'>Pravesh - <a href='tel:+917397081948'>+91 73970 81948  </a></p>

<h4 style='color:grey'>
Regards,</h4>
<h1 style='color:red' font-size:100%;> Team MUTHAMIZHVIZHA-19</h1>


</body>
</html>";




        if(($_FILES['file']['size'] < 250000)){
    	$name1 = $_FILES['file']['name'];
        $target_dir = "upload/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);
        // Select file type
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Valid file extensions
        $extensions_arr = array("jpg","jpeg","png","gif");
        // Check extension
        if(in_array($imageFileType,$extensions_arr)){
            // Convert to base64 
            $image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']) );
            $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;
         $sql = "INSERT INTO mtv2019 VALUES('$name','$id','$mtv_id','$email','$phone','$college','$department','$gender','$year','$accomodation','$image')";
           mysqli_query($conn,"update mtv2019 set MTV_ID=$i where NAME='!!2@3#4#qazxsw';");
         if ($conn->query($sql) === TRUE) {
           move_uploaded_file($_FILES['file']['tmp_name'],'upload/'.$name1);
        if ($mail->send()) {
          //  $status = "success";
        //    $response = "Email is sent!";
        echo "<script>
alert('Your are Successfully Registerd! Please check your mail Inbox(or)Spam Folder');
window.location.href='../index.html';
</script>";
    
        } else {
           // $status = "failed";
        //    $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
        //$err="Enter correct Mail Id ";
                echo "<script>
alert('Enter correct Mail Id ');
window.location.href='index.php';
</script>";
        }
       }
        }
        }
        else
        {
           echo "<script>
alert('Your photo size must be within 250KB');
window.location.href='index.php';
</script>";
        }
    }

   else{ 
        echo "<script>
alert('Email id has already been registered. Try With a New One.');
window.location.href='index.php';
</script>";
       }
    }
?>
