<html>
    <body>
        <form  method="POST">
            MTV_ID:
            <input type="text" name="id">
            <input type="submit" name="submit" value="Go">
        </form>
    </body>
</html>
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
        if(isset($_POST['submit']))
        {
             header("location:imagemuth.php?id=".$_POST['id']); 
        }
        ?>